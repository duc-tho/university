<?php

namespace App\Http\Controllers\Client\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $layout_name = 'default';
        return view('client.layout.'.$layout_name.'.page.about');
    }

    public function detail(Request $request)
    {
        $layout_name = 'default';
        return view('client.layout.'.$layout_name.'.page.about-detail');
    }
}
