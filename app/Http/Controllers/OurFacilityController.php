<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurFacilityController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.ourfacility.index');
    }
}
