<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurCustomerController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.ourcustomer.index');
    }
}
