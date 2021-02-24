<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CollabLogo;
use App\Models\Faculty;
use App\Models\Image;
use App\Models\ImageCategory;
use App\Models\News;
use App\Models\Settings;
use App\Models\Slide;
use App\Models\Specialized;
use App\Models\Statistics;
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

        // Lấy hình ảnh và danh mục hình
        $image_category = ImageCategory::all();
        $image = Image::all();

        // Lấy menu
        $menu = Category::where([
            'status' => '1',
            'show_on_menu' => '1'
        ])->get();

        if (!$menu->isEmpty()) showCategories($menu);
        else $menu = null;

        return view('client.layout.' . $layout_name . '.page.home', [
            'phone' => getSettingValue($settings, 'phone'),
            'email' => getSettingValue($settings, 'email'),
            'logo' => getSettingValue($settings, 'logo'),
            'hotline' => getSettingValue($settings, 'hotline'),
            'slogan_top' => getSettingValue($settings, 'slogan_top'),
            'slogan_main' => getSettingValue($settings, 'slogan_main'),
            'slogan_bottom' => getSettingValue($settings, 'slogan_bottom'),
            'slogan_route' => getSettingValue($settings, 'slogan_route'), //
            'address' => getSettingValue($settings, 'address'),
            'time' => getSettingValue($settings, 'time'),
            'hotline' => getSettingValue($settings, 'hotline'),
            'spline' => getSettingValue($settings, 'spline'),

            'admission_title' => getSettingValue($settings, 'email'),
            'admission_description' => getSettingValue($settings, 'email'),
            'admission_route' => getSettingValue($settings, 'email'),

            'intro_image' => getSettingValue($settings, 'intro_image'),
            'intro_video' => getSettingValue($settings, 'intro_video'),
            'intro_route' => getSettingValue($settings, 'intro_route'),
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

            'teacher' => '',

            // 'teacher_name' => ,
            // 'teacher_intro' => ,
            // 'teacher_degree' => ,
            // 'teacher_image' => ,

            'image' => $image,
            'news' => $news,
            'collab_logo' => $collab_logo,
        ]);
    }

    // <------------------>  Start Controller KhoaDuLich <--------------------------->
    public function getKDL(Request $request)
    {
        return view('client.layout.layout_kdl.page.home');
    }

    public function getIntrodution(Request $request)
    {
        return view('client.layout.layout_kdl.page.introdution');
    }

    public function getNews(Request $request)
    {
        return view('client.layout.layout_kdl.page.news');
    }

    public function getDetailNews(Request $request)
    {
        return view('client.layout.layout_kdl.page.detailnews');
    }

    public function getQtks(Request $request)
    {
        return view('client.layout.layout_kdl.page.hotel');
    }

    public function getQtnh(Request $request)
    {
        return view('client.layout.layout_kdl.page.restaurant');
    }

    public function getQtdl(Request $request)
    {
        return view('client.layout.layout_kdl.page.travel');
    }

    public function getIntership(Request $request)
    {
        return view('client.layout.layout_kdl.page.intership');
    }

    public function getMess(Request $request)
    {
        return view('client.layout.layout_kdl.page.mess');
    }

    public function getContact(Request $request)
    {
        return view('client.layout.layout_kdl.page.contact');
    }




    // <------------------> End Controller KhoaDuLich <--------------------------->


    // <------------------>  Start Controller TuyênSinh <--------------------------->
    public function getAdmissions(Request $request)
    {
        return view('client.layout.layout_tuyensinh.page.home');
    }
    public function getNotification(Request $request)
    {
        return view('client.layout.layout_tuyensinh.page.notification');
    }
    public function getNotificationDetail(Request $request)
    {
        return view('client.layout.layout_tuyensinh.page.notificationdetail');
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
    public function getComplete()
    {
        return view('client.layout.layout_tuyensinh.complete');
    }
    // <------------------> End Controller TuyênSinh <--------------------------->

    // <------------------>  Start Controller KhoaNgoaiNgu <--------------------------->
    public function getDetailPage(Request $request)
    {
        return view('client.layout.layout_ngoaingu.page.detailpage');
    }
    public function getLanguages(Request $request)
    {
        return view('client.layout.layout_ngoaingu.page.home');
    }
    public function getLanguagesIntrodution(Request $request)
    {
        return view('client.layout.layout_ngoaingu.page.introdution');
    }
    public function getEducate(Request $request)
    {
        return view('client.layout.layout_ngoaingu.page.educate_english');
    }
    public function getNewLanguages(Request $request)
    {
        return view('client.layout.layout_ngoaingu.page.news_event');
    }
    public function getDetailNewsLanguages(Request $request)
    {
        return view('client.layout.layout_ngoaingu.page.detailnews');
    }
    public function getContactLanguages(Request $request)
    {
        return view('client.layout.layout_ngoaingu.page.contact');
    }
    public function getIntershipLanguages(Request $request)
    {
        return view('client.layout.layout_ngoaingu.page.intership');
    }
    // <------------------> End Controller KhoaNgoaiNgu <--------------------------->

    // <------------------>  Start Controller KhoaKinhTe <--------------------------->

    // <------------------> End Controller KhoaNgoaiNgu <--------------------------->
}
