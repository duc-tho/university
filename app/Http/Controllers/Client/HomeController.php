<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CollabLogo;
use App\Models\Contact;
use App\Models\Faculty;
use App\Models\FooterLinkCategory;
use App\Models\ImageCategory;
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

class HomeController extends Controller
{
    public function redirect(Request $request)
    {
        return redirect()->route('trang-chu', ['trang-chu']);
    }

    public function index(Request $request, $khoa)
    {
        // Lấy thông tin khoa và kiểm tra xem khoa có tồn tại hay không
        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];
        //thời gian làm việc 
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
            $image = $item->images;
            if (!$image->isEmpty()) $item['image_item'] = $item->images()->paginate(8);
        }

        // Lấy menu
        $menu = Category::where([
            'status' => '1',
            'show_on_menu' => '1'
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

        return view('client.layout.' . $layout_name . '.page.home', [
            'phone' => $contact['phone'],
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website_link'],
            'contact_title' => $contact['contact_title'],
            'address' => $contact['address_info'],

            'logo' => getSettingValue($settings, 'logo'),
            'slogan_top' => getSettingValue($settings, 'slogan_top'),
            'slogan_main' => getSettingValue($settings, 'slogan_main'),
            'slogan_bottom' => getSettingValue($settings, 'slogan_bottom'),
            'slogan_route' => getSettingValue($settings, 'slogan_route'), //
            'time' => getSettingValue($settings, 'time'),
            'spline' => getSettingValue($settings, 'spline'),

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

    public function postAdmissionsRegister(Request $request)
    {
        $data['info'] = $request->all();
        $email = $request->email;
        Mail::send('client.layout.layout_tuyensinh.email', $data, function ($message) use ($email) {
            $message->from('ngoclap585@gmail.com', 'Lương Ngọc Lập');
            $message->to($email, $email);
            $message->cc('ngoclap585@gmail.com', 'Lương Ngọc Lập');
            $message->subject('Xác nhận đăng kí thông tin tuyển sinh SAIGON_ACT');
        });
        return redirect('client.layout.layout_tuyensinh.page.home');
    }

    public function getAdmissions()
    {
        return view('client.layout.layout_tuyensinh.page.home');
    }

    public function getComplete()
    {
        return view('client.layout.layout_tuyensinh.complete');
    }
    // <------------------> End Controller TuyênSinh <--------------------------->
}
