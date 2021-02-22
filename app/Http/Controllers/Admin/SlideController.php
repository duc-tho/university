<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('server.pages.slide.index');
    }

    public function getSlide(){
        return view('server.pages.slide.addslide');
    }

    public function postSlide(){

    }
}
