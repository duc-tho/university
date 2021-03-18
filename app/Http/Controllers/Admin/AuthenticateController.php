<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            $user_faculty = Faculty::find(Auth::user()['faculty_id']);

            return redirect()->route('admin.index', [$user_faculty['slug']]);
        };

        return view('server.login');
    }

    public function authenticate(Request $request)
    {
        $arr = ['email' => $request->email, 'password' => $request->password];

        if ($request->remember = 'Remember Me') {
            $remember = true;
        } else {
            $remember = false;
        }

        if (Auth::attempt($arr, $remember)) {
            $request->session()->flash('status', 'đăng nhập Admin thành công !'); // tạo thông báo khi đăng nhập thành công

            $user_faculty = Faculty::find(Auth::user()['faculty_id']);

            return redirect()->route('admin.index', [$user_faculty['slug']]);
        } else {
            return redirect()->route('login')->withInput()->with('error', 'Email hoặc mật khẩu không đúng');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
