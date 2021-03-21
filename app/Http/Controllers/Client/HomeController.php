<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CollabLogo;
use App\Models\Contact;
use App\Models\Faculty;
use App\Models\FooterLinkCategory;
use App\Models\ImageCategory;
use App\Models\Settings;
use App\Models\Slide;
use App\Models\Socials;
use App\Models\Specialized;
use App\Models\Statistics;
use App\Models\Menu;
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
        $all_specialized = Specialized::where(['status' => 1, 'faculty_id' => $faculty->id])->get();

        $all_category = Category::where(['status' => 1, 'faculty_id' => $faculty->id])->get();


        // Lấy footer liệt kê các khoa
        $footer_faculty = Faculty::where(['status' => 1, ['id', '!=', '1']])->paginate(4);

        // Lấy data từ các bảng cần thiết
        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty_id])->get();
        $slide = Slide::where(['status' => 1, 'faculty_id' => $faculty_id])->get();
        $statistic = Statistics::where(['faculty_id' => $faculty_id])->get();
        $collab_logo = CollabLogo::all();

        // Lấy tin tức

        // $notifice = Category::where(['slug', $slug])->first();
        // $news = News::where(['category_id' => $notifice->id, 'status'=>1])->paginate(11);
        // $news_faculty=News::where(['status'=>1,'category_id'=>10])->orderBy("id","desc")->paginate(6);
        // if (!$news_faculty->isEmpty()) foreach ($news_faculty as $key => $item) {
        //     $item['category'] = $item->category;
        // }
        // $notice=News::where(['status'=>1,'category_id'=>6])->orderBy("id","desc")->paginate(8);
        // $news = News::where(['status'=>1])->paginate(6);
        // if (!$news->isEmpty()) foreach ($news as $key => $item) {
        //     $item['category'] = $item->category;
        // lấy tin tức và danh mục tin tức
        $category = Category::where(['status' => 1, 'show_at_home' => '1', 'faculty_id' => $faculty_id])->orderBy('display_order', 'asc')->get();

        if (!$category->isEmpty()) foreach ($category as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(10);

            if (!$news->isEmpty()) $item['news'] = $news;
        }


        // Lấy danh sách mục con trong Sinh Viên của KDL
        $all_category = Category::where(['status' => 1, 'faculty_id' => $faculty->id])->get();
        // dd($all_category);


        // lấy tin tức và danh mục  của khoa Du Lịch
        $category_travel = Category::where(['status' => 1, 'show_at_home' => '1',  'faculty_id' => $faculty->id])->orderBy('display_order', 'asc')->get();
        if (!$category_travel->isEmpty()) foreach ($category_travel as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(10);

            if (!$news->isEmpty()) $item['news'] = $news;
        }



        // // Lấy hình ảnh và danh mục hình
        // $image_category = ImageCategory::where(['status' => 1])->get();
        // if (!$image_category->isEmpty()) foreach ($image_category as $key => $item) {
        //     $image = $item->images;
        //     if (!$image->isEmpty()) $item['image_item'] = $item->images()->paginate(8);
        // }

        // Lấy ảnh và danh mục hình

        $image_category = ImageCategory::where(['faculty_id' => $faculty_id, 'status' => 1, 'parent_id' => 0])->orderBy('display_order', 'asc')->get();

        if (!$image_category->isEmpty()) foreach ($image_category as $key => $item) {
            $item['image_group'] = ImageCategory::where(['status' => 1, 'parent_id' => $item['id']])->orderBy('display_order', 'asc')->get();

            if (!$item['image_group']->isEmpty()) foreach ($item['image_group'] as $key => $image_group) {
                $image['images'] = $image_group->images()->where(['status' => 1])->orderBy('display_order', 'asc')->get();
                $image_group['image_preview'] = $image_group['images'][0]['image'] ?? 'dist\img\image_placehoder.jpg';
            }
        }

        // dd($image_category); // Bỏ comment để xem cấu trúc dữ liệu hình ảnh

        // Lấy menu
        $menu = Category::where([
            'status' => '1',
        ])->get();

        if (!$menu->isEmpty()) getCategories($menu);
        else $menu = null;

        $menu_list = Menu::where(['status' => 1, 'faculty_id' => $faculty_id])->get();



        // lấy giáo viên tiêu biểu
        $teacher = TeacherRepresentative::where(['status' => 1, 'faculty_id' => $faculty_id])->get();

        // lấy sinh viên tiêu biểu
        $student = StudentRepresentative::where(['status' => 1, 'faculty_id' => $faculty_id])->get();

        // lấy các liên kết qua trang khác ở footer
        $footer_link = FooterLinkCategory::where(['status' => 1])->get();

        if (!$footer_link->isEmpty()) foreach ($footer_link as $key => $item) {
            $item['child'] = $item->footerLinks;
        }

        // lấy danh sách tin tức kèm danh mục của khoa kinh tế
        $category_news = Category::where(['status' => 1, 'show_at_news' => '1', 'faculty_id' => $faculty_id])->orderBy('display_order', 'asc')->get();
        if (!$category->isEmpty()) foreach ($category as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(6);

            if (!$news->isEmpty()) $item['news'] = $news;
        }

        // lấy danh sách thông báo kèm danh mục của khoa kinh tế
        $category_notification = Category::where(['status' => 1, 'show_at_notification' => '1', 'faculty_id' => $faculty_id])->orderBy('display_order', 'asc')->get();
        if (!$category->isEmpty()) foreach ($category as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(6);

            if (!$news->isEmpty()) $item['news'] = $news;
        }


        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty_id])->first();
        $menu_parent = Menu::where(['status' => 1, 'faculty_id' => $faculty_id, 'parent_id' => 0])->orderBy('display_order', 'asc')->get();

        return view('client.layout.' . $layout_name . '.page.home', [
            // bảng contact
            'hotline' => $contact['email'],
            'email' => $contact['email'],
            'address' => $contact['address_info'],
            'website_link' => $contact['website'],
            'contact_title' => $contact['contact_title'],
            'google_map_link' => $contact['map_embed'],
            'phone' => $contact['phone'],

            // Bảng settings
            // Chung
            'logo' => getSettingValue($settings, 'logo'),
            // Riêng
            'slogan_top' => getSettingValue($settings, 'slogan_top'),
            'slogan_main' => getSettingValue($settings, 'slogan_main'),
            'slogan_bottom' => getSettingValue($settings, 'slogan_bottom'),
            'slogan_route' => getSettingValue($settings, 'slogan_route'),
            'intro_image' => getSettingValue($settings, 'intro_image'),
            'intro_video' => getSettingValue($settings, 'intro_video'),
            'time' => getSettingValue($settings, 'time'),
            'spline' => getSettingValue($settings, 'spline'),
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
            'title_faculty' => getSettingValue($settings, 'title_faculty'),
            'title_welcom_faculty' => getSettingValue($settings, 'title_welcom_faculty'),
            'title_admissions' => getSettingValue($settings, 'title_admissions'),
            'content_admissions' => getSettingValue($settings, 'content_admissions'),
            'slogan_main_travel' => getSettingValue($settings, 'slogan_main_travel'),
            'slogan_main_travel_2' => getSettingValue($settings, 'slogan_main_travel_2'),
            'slogan_intro_travel' => getSettingValue($settings, 'slogan_intro_travel'),
            'slogan_intro_travel_2' => getSettingValue($settings, 'slogan_intro_travel_2'),
            'license' => getSettingValue($settings, 'license'),
            'license_content' => getSettingValue($settings, 'license_content'),
            'slogan_nn' => getSettingValue($settings, 'slogan_nn'),
            'sub_slogan_nn' => getSettingValue($settings, 'sub_slogan_nn'),
            'time_work' => getSettingValue($settings, 'time_work'),
            'copyright' => getSettingValue($settings, 'copyright'),

            // Biến
            'menu_parents' => $menu_parent,
            'news' => $category,
            'news_travel' => $category_travel,
            'category_news' => $category_news,
            'category_notification' => $category_notification,
            'menu_list' => $menu_list,
            'intro_short' => $faculty['intro_summary'],
            'intro_statistic' => $statistic,
            'menu' => $menu,
            'slide' => $slide,
            'faculty' => $faculty,
            'all_faculty' => $all_faculty,
            'footer_faculty' => $footer_faculty,
            'all_category' => $all_category,
            'teacher' => $teacher,
            'student' => $student,
            'image' => $image_category,
            'collab_logo' => $collab_logo,
            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'all_specialized' => $all_specialized,
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
