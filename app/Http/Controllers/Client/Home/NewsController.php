<?php

namespace App\Http\Controllers\Client\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $layout_name = 'default';

        $data = [
            'A', 'B', 'C', 'D'
        ];

        return view('client.layout.'.$layout_name.'.page.home', [
            'mock' => $data
        ]);
    }

    public function detail(Request $request)
    {
        $layout_name = 'default';

        $data = [
            'A', 'B', 'C', 'D'
        ];

        return view('client.layout.'.$layout_name.'.page.news-detail', [
            'mock' => $data
        ]);
    }

    public function category(Request $request)
    {
        $layout_name = 'default';

        $data = [
            'A', 'B', 'C', 'D'
        ];

        return view('client.layout.'.$layout_name.'.page.news-category', [
            'mock' => $data
        ]);
    }
}
