<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        return view('client.layout.default.page.teacher');
    }

    public function detail(Request $request)
    {
        return;
    }
}
