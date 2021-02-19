<?php

namespace App\Http\Controllers\Client\Home;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect(Request $request, $khoa)
    {
        return;
    }

    public function index(Request $request, $khoa)
    {
        dd(Faculty::all());
        $layout_name = 'layout_home';

        return view('client.layout.' . $layout_name . '.page.home', [
            // 'layout_name' => ,
            // 'phone' => ,
            // 'email' => ,
            // 'logo' => ,
            // 'hotline' => ,
            // 'menu' => ,
            // 'slogan_top' => ,
            // 'slogan_main' => ,
            // 'sub_bottom' => ,
            // 'slogan_route' => ,
            // 'slide' => ,
            // 'admission_title' => ,
            // 'admission_description' => ,
            // 'admission_route' => ,
            // 'intro_short' => ,
            // 'intro_image' => ,
            // 'intro_video' => ,
            // 'intro_route' => ,
            // 'intro_statistic' => ,
            // 'faculty_name' => ,
            // 'faculty_image' => ,
            // 'faculty_intro_short' => ,
            // 'faculty_route' => ,
            // 'specialized_title' => ,
            // 'specialized_intro' => ,
            // 'specialized_image' => ,
            // 'specialized_route' => ,
            // 'student_comment_content' => ,
            // 'student_comment_name' => ,
            // 'student_comment_type' => ,
            // 'image' => ,
            // 'teacher_name' => ,
            // 'teacher_intro' => ,
            // 'teacher_degree' => ,
            // 'teacher_image' => ,
            // 'news' => ,
            // 'google_map_link' => ,
            // 'collab_logo' => ,
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
