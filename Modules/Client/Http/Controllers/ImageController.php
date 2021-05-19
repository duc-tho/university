<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(Request $request, $khoa)
    {
        return 'index image';
    }

    public function detail(Request $request, $khoa, $name)
    {
        return 'index image detail';
    }
}
