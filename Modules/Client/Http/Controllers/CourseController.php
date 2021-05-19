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
use App\Models\StudentRepresentative;
use App\Models\TeacherRepresentative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CourseController extends Controller
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

        // Lấy data từ các bảng cần thiết
        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty_id])->orWhere(['greneral' => true])->get();
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
        $teacher = TeacherRepresentative::where(['status' => 1])->get();

        // lấy sinh viên tiêu biểu
        $student = StudentRepresentative::where(['status' => 1])->get();

        // lấy các liên kết qua trang khác ở footer
        $footer_link = FooterLinkCategory::where(['status' => 1])->get();

        if (!$footer_link->isEmpty()) foreach ($footer_link as $key => $item) {
            $item['child'] = $item->footerLinks;
        }

        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty_id])->first();

        $menu_list = Menu::where(['status' => 1,'faculty_id' => $faculty_id])->orderBy('display_order', 'asc')->get();
        $all_faculty = Faculty::where(['status' => 1, ['id', '!=', $faculty_id]])->get();

        if (!$all_faculty->isEmpty()) foreach ($all_faculty as $key => $item) {
            $item['url'] = route('trang-chu', [$item['slug']]);
        }




        $menu_list = Menu::where(['status' => 1, 'faculty_id' => $faculty_id])->orderBy('display_order', 'asc')->get();
        $menu_parent = Menu::where(['status' => 1, 'faculty_id' => $faculty_id, 'parent_id' => 0])->orderBy('display_order', 'asc')->get();
        return view('client.layout.' . $layout_name . '.page.course', [
            'menu_parents' => $menu_parent,
            'all_faculty' => $all_faculty,
            'phone' => $contact['phone'],
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website'],
            'contact_title' => $contact['contact_title'],

            'intro_video_khoakinhte' => getSettingValue($settings, 'intro_video_khoakinhte'),
            'image_background' => getSettingValue($settings, 'image_background'),
            'image_background_home' => getSettingValue($settings, 'image_background_home'),
            'image_background_student' => getSettingValue($settings, 'image_background_student'),
            'menu_item' => getSettingValue($settings, 'menu_item'),
            'link_faculty' => getSettingValue($settings, 'link_faculty'),
            'about_contact' => getSettingValue($settings, 'about_contact'),
            
            'logo' => getSettingValue($settings, 'logo'),
            'slogan_top' => getSettingValue($settings, 'slogan_top'),
            'slogan_main' => getSettingValue($settings, 'slogan_main'),
            'slogan_bottom' => getSettingValue($settings, 'slogan_bottom'),
            'intro_image' => getSettingValue($settings, 'intro_image'),
            'slogan_route' => getSettingValue($settings, 'slogan_route'), //
            'address' => getSettingValue($settings, 'address'),
            'time' => getSettingValue($settings, 'time'),
            'hotline' => getSettingValue($settings, 'hotline'),
            'spline' => getSettingValue($settings, 'spline'),
            'menu_list' => $menu_list,
            //Start Khoa Du Lịch
            'logo_travel' => getSettingValue($settings, 'logo_travel'),
            'slogan_main_travel' => getSettingValue($settings, 'slogan_main_travel'),
            'slogan_intro_travel' => getSettingValue($settings, 'slogan_intro_travel'),
            'slogan_intro_travel2' => getSettingValue($settings, 'slogan_intro_travel2'),
            'slogan_intro_travel3' => getSettingValue($settings, 'slogan_intro_travel3'),
            'slogan_intro_travel4' => getSettingValue($settings, 'slogan_intro_travel4'),
            'slogan_intro_travel5' => getSettingValue($settings, 'slogan_intro_travel5'),
            'name' => getSettingValue($specialized, 'name'),
            'intro' => getSettingValue($specialized, 'intro'),
            //End Khoa Du Lịch

            //start khoa kinh tế
            'time_work' => getSettingValue($settings, 'time-work'),

            //end khoa kinh tế
            'admission_title' => getSettingValue($settings, 'email'),
            'admission_description' => getSettingValue($settings, 'email'),
            'admission_route' => getSettingValue($settings, 'email'),

            'intro_image' => getSettingValue($settings, 'intro_image'),
            'intro_video' => getSettingValue($settings, 'intro_video'),
            'intro_route' => getSettingValue($settings, 'intro_route') == null ? route('gioi-thieu', [$faculty['slug']]) : getSettingValue($settings, 'intro_route'),
            'google_map_link' => getSettingValue($settings, 'google_map_link'),


            'intro_short' => $faculty['intro_summary'],
            'intro_statistic' => $statistic,
            'menu' => $menu,
            'slide' => $slide,
            'faculty' => $faculty,
            'all_faculty' => $all_faculty,
            'specialized' => $specialized,

            // 'student_comment_content' => ,
            // 'student_comment_name' => ,
            // 'student_comment_type' => ,

            'teacher' => $teacher,
            'student' => $student,
            'image' => $image_category,
            'news' => $news,
            'collab_logo' => $collab_logo,
            'footer_link' => $footer_link,
            'copyright' => getSettingValue($settings, 'copyright'),
            'socials_icon' => $socials_icon,
        ]);
    }

    public function detail(Request $request, $khoa)
    {
        return;
        // return view('client.layout.layout_kkt.pagehome');;
    }
}