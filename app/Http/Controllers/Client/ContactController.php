<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $layout_name = 'default';
        return view('client.layout.' . $layout_name . '.page.contact');
    }
}
