<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EcomController extends Controller
{
    public function index()
    {
        $title = "We Empower Entrepreneurs";
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = "About Us";
        return view('pages.about', compact('title'));
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
        $title = "Contact Us";
        return view('pages.contact-us', compact('title'));
    }

    public function contact_us_form(Request $request){
        return $request;
    }

    public function privacy()
    {
        $title = "Privacy Policy";
        return view('pages.privacy-policy', compact('title'));
    }

    public function sitemap()
    {
        $title = "Sitemap";
        return view('pages.sitemap', compact('title'));
    }
    public function newsletter(Request $request){
        DB::table('newsletter')->insert(['NewsletterEmail'=>$request->NewsletterEmail]);
        return redirect()->back()->with('success','You have subscribed successfully. Our team will contact you shortly');
    }
}

