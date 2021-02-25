<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeAdminController extends Controller
{
    public function getHome(Request $request)
    {
        return view('server.pages.home.index');
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->intended('admin031100');
    }

    
}
