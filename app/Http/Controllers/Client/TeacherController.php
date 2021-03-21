<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CollabLogo;
use App\Models\Contact;
use App\Models\Faculty;
use App\Models\FooterLinkCategory;
use App\Models\ImageCategory;
use App\Models\Menu;
use App\Models\News;
use App\Models\Settings;
use App\Models\Slide;
use App\Models\Socials;
use App\Models\Specialized;
use App\Models\Statistics;
use App\Models\TeacherRepresentative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TeacherController extends Controller
{
    public function index(Request $request, $khoa)
    {
        // Lấy thông tin khoa và kiểm tra xem khoa có tồn tại hay không
        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];

        // Lấy danh sách khoa kèm url
        $all_faculty = Faculty::where(['status' => 1, ['id', '!=', $faculty_id]])->get();

        if (!$all_faculty->isEmpty()) foreach ($all_faculty as $key => $item) {
            $item['url'] = route('trang-chu', [$item['slug']]);
        }

        // Lấy danh sách ngành kèm url
        $specialized = Specialized::where(['status' => 1, 'faculty_id' => $faculty_id])->get();

        if (!$specialized->isEmpty()) foreach ($specialized as $key => $item) {
            $item['url'] = route('dao-tao-chi-tiet', [$faculty['slug'], $item['slug']]);
        }

        $all_specialized = Specialized::where(['status' => 1, 'faculty_id' => $faculty->id])->get();

        // Lấy data từ các bảng cần thiết
        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty_id])->get();
        $slide = Slide::where(['status' => 1, 'faculty_id' => $faculty_id])->get();
        $statistic = Statistics::where(['faculty_id' => $faculty_id])->get();
        $collab_logo = CollabLogo::all();

        // Lấy tin tức
        $news = News::where(['status' => 1])->paginate(10);

        if (!$news->isEmpty()) foreach ($news as $key => $item) {
            $item['category'] = $item->category;
        }

        // Lấy hình ảnh và danh mục hình
        $image_category = ImageCategory::where(['status' => 1])->get();
        if (!$image_category->isEmpty()) foreach ($image_category as $key => $item) {
            $item['image_item'] = $item->images;
        }

        // Lấy menu
        $menu = Category::where([
            'status' => '1',

        ])->get();

        if (!$menu->isEmpty()) getCategories($menu);
        else $menu = null;

        // lấy giáo viên tiêu biểu
        $teacher = TeacherRepresentative::where(['status' => 1, 'faculty_id' => $faculty_id])->get();
        // dd($faculty_id);

        // lấy các liên kết qua trang khác ở footer
        $footer_link = FooterLinkCategory::where(['status' => 1])->get();

        if (!$footer_link->isEmpty()) foreach ($footer_link as $key => $item) {
            $item['child'] = $item->footerLinks;
        }

        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty_id])->first();
        
        // Lấy footer liệt kê các khoa
        $footer_faculty = Faculty::where(['status' => 1, ['id', '!=', '1']])->paginate(4);

        $menu_list = Menu::where(['status' => 1, 'faculty_id' => $faculty_id])->get();
        
        $all_category = Category::where(['status' => 1, 'faculty_id' => $faculty->id])->get();

        $all_faculty = Faculty::where(['status' => 1, ['id', '!=', $faculty_id]])->get();

        if (!$all_faculty->isEmpty()) foreach ($all_faculty as $key => $item) {
            $item['url'] = route('trang-chu', [$item['slug']]);
        }


        return view('client.layout.' . $layout_name . '.page.teacher', [
            'all_faculty' => $all_faculty,
            'menu_list' => $menu_list,
            'all_category' => $all_category,
            'footer_faculty' => $footer_faculty,
            'license' => getSettingValue($settings, 'license'),
            'license_content' => getSettingValue($settings, 'license_content'),
            'website' => getSettingValue($settings, 'website'),
            'all_specialized' => $all_specialized,
            'slogan_nn' => getSettingValue($settings, 'slogan_nn'),
            'sub_slogan_nn' => getSettingValue($settings, 'sub_slogan_nn'),
            'time_work' => getSettingValue($settings, 'time_work'),
            'address' => getSettingValue($settings, 'address'),
            'phone' => $contact['phone'],
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website_link'],
            'contact_title' => $contact['contact_title'],
            'logo' => getSettingValue($settings, 'logo'),
            'slogan_top' => getSettingValue($settings, 'slogan_top'),
            'slogan_main' => getSettingValue($settings, 'slogan_main'),
            'slogan_bottom' => getSettingValue($settings, 'slogan_bottom'),
            'intro_image' => getSettingValue($settings, 'intro_image'),
            'intro_video' => getSettingValue($settings, 'intro_video'),
            'intro_route' => getSettingValue($settings, 'intro_route') == null ? route('gioi-thieu', [$faculty['slug']]) : getSettingValue($settings, 'intro_route'),
            'intro_short' => $faculty['intro_summary'],
            'intro_statistic' => $statistic,
            'menu' => $menu,
            'slide' => $slide,
            'faculty' => $faculty,
            'all_faculty' => $all_faculty,
            'specialized' => $specialized,

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
            //Start Khoa
            'title_faculty' => getSettingValue($settings, 'title_faculty'),
            'title_welcom_faculty' => getSettingValue($settings, 'title_welcom_faculty'),
            'title_admissions' => getSettingValue($settings, 'title_admissions'),
            'content_admissions' => getSettingValue($settings, 'content_admissions'),

            'teacher' => $teacher,
            'image' => $image_category,
            'news' => $news,
            'collab_logo' => $collab_logo,
            'footer_link' => $footer_link,
            'copyright' => getSettingValue($settings, 'copyright'),
            'socials_icon' => $socials_icon,
        ]);
    }

    public function detail(Request $request)
    {
        return;
    }
}
