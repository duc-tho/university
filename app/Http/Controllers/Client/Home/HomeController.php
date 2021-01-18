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
}
