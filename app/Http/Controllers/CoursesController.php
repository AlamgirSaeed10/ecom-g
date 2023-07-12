<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function whole_sale()
    {

        $title = "whole_sale";
        return view('courses.whole-sale', compact('title'));
    }

    function private_label()
    {
        $title = "private_label";
        return view('courses.private-label', compact('title'));
    }

    public function digital_marketing()
    {
        $title = "digital_marketing";
        return view('courses.digital-marketing', compact('title'));
    }

    function freelancing()
    {
        $title = "freelancing";
        return view('courses.freelancing', compact('title'));
    }

    public function online_arbitrage()
    {
        $title = "online_arbitrage";
        return view('courses.online-arbitrage', compact('title'));
    }

}
