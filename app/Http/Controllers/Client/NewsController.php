<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AboutCategory;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faculty;
use App\Models\FooterLinkCategory;
use App\Models\Image;
use App\Models\ImageCategory;
use App\Models\Menu;
use App\Models\News;
use App\Models\Settings;
use App\Models\Socials;
use App\Models\Specialized;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request, $khoa)
    {
        // Lấy thông tin khoa và kiểm tra xem khoa có tồn tại hay không
        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];

        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty['id']])->get();

        // Lấy menu
        $menu = Category::where([
            'status' => '1',

        ])->get();

        if (!$menu->isEmpty()) getCategories($menu);
        else $menu = null;

        // lấy các liên kết qua trang khác ở footer
        $footer_link = FooterLinkCategory::where(['status' => 1])->get();

        if (!$footer_link->isEmpty()) foreach ($footer_link as $key => $item) {
            $item['child'] = $item->footerLinks;
        }

        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        // Lấy các bài giới thiệu
        $about_category = AboutCategory::all();

        if (!$about_category->isEmpty()) foreach ($about_category as $key => $item) {
            $item['link'] = route('gioi-thieu-chi-tiet', [$faculty['slug'], $item['slug']]);
        }

        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty['id']])->first();

        // Lấy danh mục hình

        $image_category = ImageCategory::where(['faculty_id' => $faculty_id, 'status' => 1, 'parent_id' => 0])->orderBy('display_order', 'asc')->paginate(2);

        if (!$image_category->isEmpty()) foreach ($image_category as $key => $item) {
            $item['image_group'] = ImageCategory::where(['status' => 1, 'parent_id' => $item['id']])->orderBy('display_order', 'asc')->paginate(1);

            if (!$item['image_group']->isEmpty()) foreach ($item['image_group'] as $key => $image_group) {
                $image['images'] = $image_group->images()->where(['status' => 1])->orderBy('display_order', 'asc')->get();
                $image_group['image_preview'] = $image_group['images'][0]['image'] ?? 'dist\img\image_placehoder.jpg';
            }
        }
        // Lấy danh sách ngành kèm url
        $all_specialized = Specialized::where(['status' => 1, 'faculty_id' => $faculty->id])->get();

        $all_category = Category::where(['status' => 1, 'faculty_id' => $faculty->id])->get();

        // dd($image_category); // Bỏ comment để xem cấu trúc dữ liệu hình ảnh

        // lấy danh mục tin tức
        $category = Category::where(['status' => 1, 'faculty_id' => $faculty_id])->orderBy('display_order', 'asc')->get();

        if (!$category->isEmpty()) foreach ($category as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(6);

            if (!$news->isEmpty()) $item['news'] = $news;
        }

        $category_news = Category::where(['status' => 1, 'show_at_news' => '1', 'faculty_id' => $faculty_id])->orderBy('display_order', 'asc')->get();

        if (!$category_news->isEmpty()) foreach ($category_news as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(6);

            if (!$news->isEmpty()) $item['news'] = $news;
        }

        $category_notification = Category::where(['status' => 1, 'show_at_notification' => '1', 'faculty_id' => $faculty_id])->orderBy('display_order', 'asc')->get();

        if (!$category_news->isEmpty()) foreach ($category_news as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(6);

            if (!$news->isEmpty()) $item['news'] = $news;
        }

        // chỉ lấy tin tức trong danh mục tin tức
        // $category_news = Category::where(['status' => 1, 'slug' => 'tin-tuc',  'faculty_id' => $faculty->id])->first();

        // $only_news = $category_news->news()->orderBy('id', 'desc',)->paginate(4);


        $footer_faculty = Faculty::where(['status' => 1, ['id', '!=', '1']])->get();

        $menu_list = Menu::where(['status' => 1,'faculty_id' => $faculty_id])->get();
        $all_faculty = Faculty::where(['status' => 1, ['id', '!=', $faculty_id]])->get();

        if (!$all_faculty->isEmpty()) foreach ($all_faculty as $key => $item) {
            $item['url'] = route('trang-chu', [$item['slug']]);
        }

        $menu_list = Menu::where(['status' => 1, 'faculty_id' => $faculty_id])->get();



        return view('client.layout.' . $layout_name . '.page.news', [
            'all_faculty' => $all_faculty,
            'phone' => $contact['phone'],
            'faculty' => $faculty,
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website'],
            'contact_title' => $contact['contact_title'],
            'address' => $contact['address_info'],
            'intro_image' => getSettingValue($settings, 'intro_image'),
            'logo' => getSettingValue($settings, 'logo'),
            'intro_video' => getSettingValue($settings, 'intro_video'),
            'copyright' => getSettingValue($settings, 'copyright'),
            'website' => getSettingValue($settings, 'website'),
            'intro_short' => $faculty['intro_summary'],
            'menu' => $menu,
            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'about' => $about_category,
            'category' => $category,
            'menu_list' => $menu_list,
            'news' => $category_news,
            'news_notification' => $category_notification,

            // 'only_news' => $only_news,

            'image_category' => $image_category,

            //Start
            'license' => getSettingValue($settings, 'license'),
            'license_content' => getSettingValue($settings, 'license_content'),
            'logo_travel' => getSettingValue($settings, 'logo_travel'),
            'slogan_main_travel' => getSettingValue($settings, 'slogan_main_travel'),
            'slogan_intro_travel' => getSettingValue($settings, 'slogan_intro_travel'),
            'slogan_intro_travel2' => getSettingValue($settings, 'slogan_intro_travel2'),
            'slogan_intro_travel3' => getSettingValue($settings, 'slogan_intro_travel3'),
            'slogan_intro_travel4' => getSettingValue($settings, 'slogan_intro_travel4'),
            'slogan_intro_travel5' => getSettingValue($settings, 'slogan_intro_travel5'),

            'title_faculty_description' => getSettingValue($settings, 'title_faculty_description'),
            'title_scholarship' => getSettingValue($settings, 'title_scholarship'),
            'title_scholarship_content' => getSettingValue($settings, 'title_scholarship_content'),
            'title_develop' => getSettingValue($settings, 'title_develop'),
            'title_develop_content' => getSettingValue($settings, 'title_develop_content'),
            'title_resources' => getSettingValue($settings, 'title_resources'),
            'title_resources_content' => getSettingValue($settings, 'title_resources_content'),
            'title_evaluate_student' => getSettingValue($settings, 'title_evaluate_student'),
            'title_name_uni_footer' => getSettingValue($settings, 'title_name_uni_footer'),
            'title_license_footer' => getSettingValue($settings, 'title_license_footer'),
            'title_license_content_footer' => getSettingValue($settings, 'title_license_content_footer'),
            'title_support_line' => getSettingValue($settings, 'title_support_line'),
            'number_support_line' => getSettingValue($settings, 'number_support_line'),
            'title_infor_teacher' => getSettingValue($settings, 'title_infor_teacher'),
            'title_teacher_faculty' => getSettingValue($settings, 'title_teacher_faculty'),
            'content_teacher_faculty' => getSettingValue($settings, 'content_teacher_faculty'),
            'title_hot_line' => getSettingValue($settings, 'title_hot_line'),
            'number_hot_line' => getSettingValue($settings, 'number_hot_line'),

            'footer_phone_travel' => getSettingValue($settings, 'footer_phone_travel'),
            'footer_email_travel' => getSettingValue($settings, 'footer_email_travel'),
            'footer_website_travel' => getSettingValue($settings, 'footer_website_travel'),
            'footer_address_travel' => getSettingValue($settings, 'footer_address_travel'),

            'all_specialized' => $all_specialized,
            'all_category' => $all_category,
            'footer_faculty' => $footer_faculty,



            // 'name' => getSettingValue($specialized, 'name'),
            // 'intro' => getSettingValue($specialized, 'intro'),
            //End
        ]);
    }

    public function detail(Request $request, $khoa, $danh_muc, $bai_viet)
    {
        // Lấy thông tin khoa và kiểm tra xem khoa có tồn tại hay không
        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];

        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty['id']])->get();

        // Lấy menu
        $menu = Category::where([
            'status' => '1',

        ])->get();

        if (!$menu->isEmpty()) getCategories($menu);
        else $menu = null;

        // lấy các liên kết qua trang khác ở footer
        $footer_link = FooterLinkCategory::where(['status' => 1])->get();

        if (!$footer_link->isEmpty()) foreach ($footer_link as $key => $item) {
            $item['child'] = $item->footerLinks;
        }

        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        // Lấy các bài giới thiệu
        $about_category = AboutCategory::all();

        if (!$about_category->isEmpty()) foreach ($about_category as $key => $item) {
            $item['link'] = route('gioi-thieu-chi-tiet', [$faculty['slug'], $item['slug']]);
        }

        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty['id']])->first();

        // lấy tin tức
        $category = Category::where(['status' => 1, 'slug' => $danh_muc, 'faculty_id' => $faculty['id']])->first();
        abort_if(!$category, 404);


        $news = News::where(['status' => 1, 'slug' => $bai_viet,])->first();
        abort_if(!$news, 404);
        $news['view_count'] = $news['view_count'] + 1;
        $news->save();

        // dd($news);


        $relate_news = $category->news()->where(['status' => 1, ['id', '!=', $news['id']]])->take(5)->get();

        $relate_notification = $category->news()->where(['status' => 1, ['id', '!=', $news['id']]])->take(5)->get();

        $all_specialized = Specialized::where(['status' => 1, 'faculty_id' => $faculty->id])->get();

        $footer_faculty = Faculty::where(['status' => 1, ['id', '!=', '1']])->get();

        $all_category = Category::where(['status' => 1, 'faculty_id' => $faculty->id])->get();


        $menu_list = Menu::where(['status' => 1,'faculty_id' => $faculty_id])->get();

        $all_faculty = Faculty::where(['status' => 1, ['id', '!=', $faculty_id]])->get();

        if (!$all_faculty->isEmpty()) foreach ($all_faculty as $key => $item) {
            $item['url'] = route('trang-chu', [$item['slug']]);
        }


        $menu_list = Menu::where(['status' => 1, 'faculty_id' => $faculty_id])->get();
        $menu_parent = Menu::where(['status' => 1, 'faculty_id' => $faculty_id, 'parent_id' => 0])->orderBy('display_order', 'asc')->get();


        return view('client.layout.' . $layout_name . '.page.news-detail', [
            'menu_parents' => $menu_parent,
            'all_faculty' => $all_faculty,
            'menu_list' => $menu_list,
            'phone' => $contact['phone'],
            'faculty' => $faculty,
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website'],
            'contact_title' => $contact['contact_title'],
            'address' => $contact['address_info'],
            'logo' => getSettingValue($settings, 'logo'),
            'intro_video' => getSettingValue($settings, 'intro_video'),
            'copyright' => getSettingValue($settings, 'copyright'),
            'intro_short' => $faculty['intro_summary'],
            'license' => getSettingValue($settings, 'license'),
            'license_content' => getSettingValue($settings, 'license_content'),
            'menu' => $menu,
            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'about' => $about_category,
            'category' => $category,
            'news' => $news,
            'relate_news' => $relate_news,
            'relate_notification' => $relate_notification,
            'all_category' => $all_category,
            'intro_image' => getSettingValue($settings, 'intro_image'),
            'website' => getSettingValue($settings, 'website'),
            //Start Khoa
            'logo_travel' => getSettingValue($settings, 'logo_travel'),
            'title_faculty_description' => getSettingValue($settings, 'title_faculty_description'),
            'title_scholarship' => getSettingValue($settings, 'title_scholarship'),
            'title_scholarship_content' => getSettingValue($settings, 'title_scholarship_content'),
            'title_develop' => getSettingValue($settings, 'title_develop'),
            'title_develop_content' => getSettingValue($settings, 'title_develop_content'),
            'title_resources' => getSettingValue($settings, 'title_resources'),
            'title_resources_content' => getSettingValue($settings, 'title_resources_content'),
            'title_evaluate_student' => getSettingValue($settings, 'title_evaluate_student'),
            'title_name_uni_footer' => getSettingValue($settings, 'title_name_uni_footer'),
            'title_license_footer' => getSettingValue($settings, 'title_license_footer'),
            'title_license_content_footer' => getSettingValue($settings, 'title_license_content_footer'),
            'title_support_line' => getSettingValue($settings, 'title_support_line'),
            'number_support_line' => getSettingValue($settings, 'number_support_line'),
            'title_infor_teacher' => getSettingValue($settings, 'title_infor_teacher'),
            'title_teacher_faculty' => getSettingValue($settings, 'title_teacher_faculty'),
            'content_teacher_faculty' => getSettingValue($settings, 'content_teacher_faculty'),
            'title_hot_line' => getSettingValue($settings, 'title_hot_line'),
            'number_hot_line' => getSettingValue($settings, 'number_hot_line'),


            'footer_faculty' => $footer_faculty,
            'all_specialized' => $all_specialized,
            'all_category' => $all_category,

            //End Khoa
        ]);
    }

    public function list(Request $request, $khoa, $danh_muc)
    {

        // Lấy thông tin khoa và kiểm tra xem khoa có tồn tại hay không
        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];

        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty['id']])->get();

        // Lấy menu
        $menu = Category::where([
            'status' => '1',

        ])->get();

        if (!$menu->isEmpty()) getCategories($menu);
        else $menu = null;

        // lấy các liên kết qua trang khác ở footer
        $footer_link = FooterLinkCategory::where(['status' => 1])->get();

        if (!$footer_link->isEmpty()) foreach ($footer_link as $key => $item) {
            $item['child'] = $item->footerLinks;
        }

        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        // Lấy các bài giới thiệu
        $about_category = AboutCategory::all();

        if (!$about_category->isEmpty()) foreach ($about_category as $key => $item) {
            $item['link'] = route('gioi-thieu-chi-tiet', [$faculty['slug'], $item['slug']]);
        }

        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty['id']])->first();

        // lấy tin tức
        $category = Category::where(['status' => 1, 'slug' => $danh_muc, 'faculty_id' => $faculty_id])->first();
        abort_if(!$category, 404);
        $category['news'] = $category->news()->where(['status' => 1])->orderBy('id', 'desc')->paginate(10);

        // lấy danh mục tin tức
        $all_category = Category::where(['status' => 1, 'faculty_id' => $faculty_id])->get();
        
        $menu_list = Menu::where(['status' => 1, 'faculty_id' => $faculty_id])->get();

        $menu_parent = Menu::where(['status' => 1, 'faculty_id' => $faculty_id, 'parent_id' => 0])->orderBy('display_order', 'asc')->get();

        $category_list = Category::where(['status' => 1, 'show_at_news' => '1', 'faculty_id' => $faculty_id])->orderBy('display_order', 'asc')->get();

        if (!$category_list->isEmpty()) foreach ($category_list as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(6);

            if (!$news->isEmpty()) $item['news'] = $news;
        }

        $all_faculty = Faculty::where(['status' => 1, ['id', '!=', $faculty_id]])->get();

        if (!$all_faculty->isEmpty()) foreach ($all_faculty as $key => $item) {
            $item['url'] = route('trang-chu', [$item['slug']]);
        }





        return view('client.layout.' . $layout_name . '.page.news-list', [
            'menu_parents' => $menu_parent,
            'all_faculty' => $all_faculty,
            'menu_list' => $menu_list,
            'phone' => $contact['phone'],
            'faculty' => $faculty,
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website'],
            'contact_title' => $contact['contact_title'],
            'address' => $contact['address_info'],
            'logo' => getSettingValue($settings, 'logo'),
            'intro_video' => getSettingValue($settings, 'intro_video'),
            'copyright' => getSettingValue($settings, 'copyright'),
            'intro_short' => $faculty['intro_summary'],
            'menu' => $menu,
            'intro_image' => getSettingValue($settings, 'intro_image'),
            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'about' => $about_category,
            'category' => $category,
            'news' => $category_list,
            'all_category' => $all_category,

            'logo_travel' => getSettingValue($settings, 'logo_travel'),
            'title_faculty_description' => getSettingValue($settings, 'title_faculty_description'),
            'title_scholarship' => getSettingValue($settings, 'title_scholarship'),
            'title_scholarship_content' => getSettingValue($settings, 'title_scholarship_content'),
            'title_develop' => getSettingValue($settings, 'title_develop'),
            'title_develop_content' => getSettingValue($settings, 'title_develop_content'),
            'title_resources' => getSettingValue($settings, 'title_resources'),
            'title_resources_content' => getSettingValue($settings, 'title_resources_content'),
            'title_evaluate_student' => getSettingValue($settings, 'title_evaluate_student'),
            'title_name_uni_footer' => getSettingValue($settings, 'title_name_uni_footer'),
            'title_license_footer' => getSettingValue($settings, 'title_license_footer'),
            'title_license_content_footer' => getSettingValue($settings, 'title_license_content_footer'),
            'title_support_line' => getSettingValue($settings, 'title_support_line'),
            'number_support_line' => getSettingValue($settings, 'number_support_line'),
            'title_infor_teacher' => getSettingValue($settings, 'title_infor_teacher'),
            'title_teacher_faculty' => getSettingValue($settings, 'title_teacher_faculty'),
            'content_teacher_faculty' => getSettingValue($settings, 'content_teacher_faculty'),
            'title_hot_line' => getSettingValue($settings, 'title_hot_line'),
            'number_hot_line' => getSettingValue($settings, 'number_hot_line'),
        ]);
    }
}
