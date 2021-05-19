<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request, $khoa)
    {
        return 'index video';
    }

    public function detail(Request $request, $khoa, $name)
    {
        return 'index video detail';
    }
}
