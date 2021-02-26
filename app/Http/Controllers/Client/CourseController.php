<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request, $khoa)
    {
        return view('client.layout.layout_kkt.home');
        return;
    }

    public function detail(Request $request, $khoa)
    {
        return;
        // return view('client.layout.layout_kkt.pagehome');;
    }
}
