<?php

namespace App\Http\Controllers\Client\Home;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // dd(Faculty::all());
        $layout_name = 'layout_home';

        $data = [
            'A', 'B', 'C', 'D'
        ];

        return view('client.layout.'.$layout_name.'.page.home', [
            'mock' => $data
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
