<?php

namespace App\Http\Controllers\Client\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function getTeacher(Request $request)
    {
        return view('client.layout.default.page.teacher');
    }
}
