<?php

namespace App\Http\Controllers\v1\web;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('v1.web.index');
    }

    public function contact()
    {
        return view('v1.web.pages.contact');
    }

    public function coachingTypes()
    {
        return view('v1.web.pages.coaching-types');
    }
   
}
