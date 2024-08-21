<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.home.index');
    }

    public function detail(Request $request)
    {
        return view('pages.home.detail');
    }
}
