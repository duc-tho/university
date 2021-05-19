<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function redirect()
    {
        return redirect()->route('admin.index', ['trang-chu']);
    }

    public function index($khoa)
    {
        return view('admin::pages.home.index', [
            'khoa' => $khoa
        ]);
    }
}
