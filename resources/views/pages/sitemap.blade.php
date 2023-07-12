@extends('includes.master')
@section('title', $title)
@section('content')
    <style>
        #sitemap {
            list-style-type: none;
            margin-left: 30px;
            padding-left: 20px;
            position: relative;
        }
        #sitemap li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 10px;
        }
        #sitemap li::before {
            content: "";
            position: absolute;
            top: 0;
            left: -20px;
            width: 0;
            height: 100%;
            border-left: 1px solid #999;
        }
        #sitemap li::after {
            content: "";
            position: absolute;
            top: 7px;
            left: -10px;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            border-right: 8px solid #999;
        }
        #sitemap ul {
            margin-left: 20px;
            padding-left: 0;
        }
        #sitemap ul li::before,
        #sitemap ul li::after {
            display: none;
        }
        #sitemap li >a{
            color:black;
        }
        #sitemap li >a:hover{
            color:#722ae6 ;
            font-weight:bold;
        }

    </style>
    <section class="py-5 mt-100">
        <div class="container">
            <h1>Sitemap</h1>
            <ul id="sitemap">
                <li>Home
                    <ul>
                        <li class="text-dark"><a href="{{ route('pages.about') }}">About Us</a></li>
                        <li class="text-dark"> <a href="{{ route('pages.courses') }}">Courses </a>
                        </li>
                        <li class="text-dark"> <a href="{{ route('pages.services') }}">Our Services </a>
                        </li>
                        <li class="text-dark"> <a href="{{ route('pages.contact-us') }}">Contact Us</a></li>
                    </ul>
                </li>
                <li class="text-dark"> <a href="{{ route('pages.enrollment') }}">Enrollment</a></li>
                <li class="text-dark"> <a href="{{ url('pages.verify-certificate') }}" >Verify Certificate</a></li>
            </ul>
        </div>
        </div>
    </section>

@endsection
