<?php

namespace App\Http\Controllers\Client\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $layout_name = 'layout_home';

        $data = [
            'A', 'B', 'C', 'D'
        ];

        return view('client.layout.'.$layout_name.'.page.home', [
            'mock' => $data
        ]);
    }

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

    public function getJob(Request $request)
    {
        return view('client.layout.layout_kdl.page.job');
    }

    public function getContact(Request $request)
    {
        return view('client.layout.layout_kdl.page.contact');
    }

    public function getAdmissions(Request $request)
    {
        return view('client.layout.layout_tuyensinh.page.home');
    }
}
