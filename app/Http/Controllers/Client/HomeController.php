<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CollabLogo;
use App\Models\Faculty;
use App\Models\FooterLinkCategory;
use App\Models\Image;
use App\Models\ImageCategory;
use App\Models\News;
use App\Models\Settings;
use App\Models\Slide;
use App\Models\Socials;
use App\Models\Specialized;
use App\Models\Statistics;
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
        // Lấy setting
        function getSettingValue($settings, $key)
        {
            foreach ($settings as $item) if ($item['name'] === $key) return $item['value'];
        }

        // Lấy menu
        function showCategories($categories, $parent_id = 0)
        {
            foreach ($categories as $key => $item) {
                if ($item['parent_id'] == $parent_id) {
                    if ($parent_id !== 0) {
                        foreach ($categories as $parent) {
                            if ($parent['id'] == $item['parent_id']) {
                                $temp = [];
                                if ($parent['child']) {
                                    $temp = $parent['child'];
                                    array_push($temp, $item);
                                    $parent['child'] = $temp;
                                } else {
                                    $temp = [];
                                    array_push($temp, $item);
                                    $parent['child'] = $temp;
                                }
                            }
                        }
                        unset($categories[$key]);
                    }
                    showCategories($categories, $item['id']);
                }
            }
        }

        //-------------------------------------------------------------------------------------------------------------

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
            'show_on_menu' => '1'
        ])->get();

        if (!$menu->isEmpty()) showCategories($menu);
        else $menu = null;

        // lấy giáo viên tiêu biểu
        $teacher = TeacherRepresentative::where(['status' => 1])->get();

        // lấy các liên kết qua trang khác ở footer
        $footer_link = FooterLinkCategory::where(['status' => 1])->get();

        if (!$footer_link->isEmpty()) foreach ($footer_link as $key => $item) {
            $item['child'] = $item->footerLinks;
        }

        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        return view('client.layout.' . $layout_name . '.page.home', [
            'phone' => getSettingValue($settings, 'phone'),
            'email' => getSettingValue($settings, 'email'),
            'logo' => getSettingValue($settings, 'logo'),
            'hotline' => getSettingValue($settings, 'hotline'),
            'slogan_top' => getSettingValue($settings, 'slogan_top'),
            'slogan_main' => getSettingValue($settings, 'slogan_main'),
            'slogan_bottom' => getSettingValue($settings, 'slogan_bottom'),
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
        // $data = $request->all();
        // dd($data);
        $data['info'] = $request->all();
        $email = $request->email;
        Mail::send('client.layout.layout_tuyensinh.email', $data, function ($message) use ($email) {
            $message->from('thopk007113@gmail.com', 'Ngô Đức Thọ');
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
