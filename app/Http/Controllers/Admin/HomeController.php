<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect(Request $request)
    {
        return redirect()->route('admin.index', ['trang-chu']);
    }

    public function index(Request $request, $khoa)
    {
        dd($khoa);

        return view('server.pages.home.index', [
            'khoa' => $khoa
        ]);
    }
}
