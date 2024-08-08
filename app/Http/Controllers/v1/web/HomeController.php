<?php

namespace App\Http\Controllers\v1\web;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // return view('v1.web.index');
        return "500";
    }

    public function contact()
    {
        // return view('v1.web.pages.contact');
        return "500";
    }

    public function coachingTypes()
    {
        // return view('v1.web.pages.coaching-types');
        return "500";
    }
}
