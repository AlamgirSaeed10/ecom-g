<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcomController extends Controller
{
    public function index()
    {
        $title = "We Empower Entrepreneurs";
        return view('pages.index', compact('title'));
    }

    public function about()
    {

    }

    public function courses()
    {
        $title = "Courses";
        return view('pages.courses', compact('title'));
    }

    public function services()
    {
        $title = "Services";
        return view('pages.services', compact('title'));
    }

    public function contact_us()
    {

    }

    public function contact_us_form()
    {

    }
}

