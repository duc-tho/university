<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AboutCategory;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faculty;
use App\Models\FooterLinkCategory;
use App\Models\Settings;
use App\Models\Socials;
use App\Models\Menu;
use App\Models\Specialized;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request, $khoa)
    {
        // Lấy thông tin khoa và kiểm tra xem khoa có tồn tại hay không
        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];

        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty['id']])->get();
        $specialized = Specialized::where(['status' => 1, 'faculty_id' => $faculty_id])->get();
        $all_specialized = Specialized::where(['status' => 1, 'faculty_id' => $faculty->id])->get();
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

        $footer_faculty = Faculty::where(['status' => 1, ['id', '!=', '1']])->get();


        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        // Lấy các bài giới thiệu
        $about_category = AboutCategory::where(['status' => 1, 'faculty_id' => $faculty->id])->get();
        if (!$about_category->isEmpty()) foreach ($about_category as $key => $item) {
            $item['link'] = route('gioi-thieu-chi-tiet', [$faculty['slug'], $item['slug']]);
        }

        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty['id']])->first();
        $all_category = Category::where(['status' => 1, 'faculty_id' => $faculty->id])->get();

        $menu_list = Menu::where(['status' => 1,'faculty_id' => $faculty_id])->orderBy('display_order', 'asc')->get();
        $all_faculty = Faculty::where(['status' => 1, ['id', '!=', $faculty_id]])->get();

        if (!$all_faculty->isEmpty()) foreach ($all_faculty as $key => $item) {
            $item['url'] = route('trang-chu', [$item['slug']]);
        }




        $menu_list = Menu::where(['status' => 1, 'faculty_id' => $faculty_id])->orderBy('display_order', 'asc')->get();
        $menu_parent = Menu::where(['status' => 1, 'faculty_id' => $faculty_id, 'parent_id' => 0])->orderBy('display_order', 'asc')->get();
        return view('client.layout.' . $layout_name . '.page.about', [
            'phone' => $contact['phone'],
            'menu_parents' => $menu_parent,
            'phone' => $contact['phone'],
            'all_faculty' => $all_faculty,
            'faculty' => $faculty,
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website'],
            'contact_title' => $contact['contact_title'],
            'address' => $contact['address_info'],
            'intro_image' => getSettingValue($settings, 'intro_image'),

            'intro_video_khoakinhte' => getSettingValue($settings, 'intro_video_khoakinhte'),
            'image_background' => getSettingValue($settings, 'image_background'),
            'image_background_home' => getSettingValue($settings, 'image_background_home'),
            'image_background_student' => getSettingValue($settings, 'image_background_student'),
            'menu_item' => getSettingValue($settings, 'menu_item'),
            'link_faculty' => getSettingValue($settings, 'link_faculty'),
            'about_contact' => getSettingValue($settings, 'about_contact'),
            
            'intro_short' => $faculty['intro_summary'],
            'menu' => $menu,
            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'about' => $about_category,
            'all_specialized' => $all_specialized,
            'specialized' => $specialized,
            'menu_list' => $menu_list,

            'logo' => getSettingValue($settings, 'logo'),
            'license' => getSettingValue($settings, 'license'),
            'license_content' => getSettingValue($settings, 'license_content'),
            'logo' => getSettingValue($settings, 'logo'),
            'intro_video' => getSettingValue($settings, 'intro_video'),
            'copyright' => getSettingValue($settings, 'copyright'),
            'website' => getSettingValue($settings, 'website'),

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
            //End Khoa Du Lịch
            'footer_faculty' => $footer_faculty,
            'all_category' => $all_category,
        ]);
    }

    public function detail(Request $request, $khoa, $name)
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

        // Lấy các bài giới thiệu
        $about_detail = AboutCategory::where(['slug' => $name])->first();
        abort_if(!$about_detail, 404);

        $about_detail['view_count'] = $about_detail['view_count'] + 1;
        $about_detail->save();

        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty['id']])->first();
        $menu_parent = Menu::where(['status' => 1, 'faculty_id' => $faculty_id, 'parent_id' => 0])->orderBy('display_order', 'asc')->get();
        return view('client.layout.' . $layout_name . '.page.about-detail', [
            'menu_parents' => $menu_parent,
            'phone' => $contact['phone'],
            'faculty' => $faculty,
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website'],
            'contact_title' => $contact['contact_title'],
            'address' => $contact['address_info'],
            'logo' => getSettingValue($settings, 'logo'),
            'copyright' => getSettingValue($settings, 'copyright'),
            'menu' => $menu,
            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'about_detail' => $about_detail,
            'about' => $about_category,
        ]);
    }
}
