@extends('includes.master')
@section('title',$title)
@section('content')
    <?php
    $services =
        ["SELLER CENTRAL MANAGEMENT", "PRIVATE LABEL PRODUCT RESEARCH", "EXTENSIVE KEYWORD RESEARCH",
            "PRODUCT LISTING OPTIMIZATION", "ORDER PROCESSING AND TRACKING",
            "WHOLESALE ACCOUNT APPROVAL", "WHOLESALE PRODUCT HUNTING", "STOCK / INVENTORY MANAGEMENT"];

    $modal = ["exampleModalCenter", "PLProductResearch", "ExtensiveKeywordResearch", "ProductListingOptimization",
        "OrderProcessingAndTracking", "WholesaleAccountApproval", "WholesaleProductHunting", "InventoryManagement",
    ];
    ?>
    <div class="container-fluid p-0 mb-5">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('assets/img/gallery/course_slider.webp')}}"
                     alt="carousal course image">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                     style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Best Online
                                    Courses</h5>
                                <h1 class="display-3 text-white animated slideInDown">Online and On-site learning</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Learn the top income generating courses with
                                    Ecomgladiators.</p>
                                <a href="{{route('pages.courses')}}"
                                   class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="{{route('pages.enrollment')}}" aria-expanded="false"
                                   class="btn btn-light py-md-3 px-md-5 animated slideInRight">Enroll Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('assets/img/gallery/service_slider.webp')}}"
                     alt="carousal service image ">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                     style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">We empower
                                    Entrepreneurs</h5>
                                <h1 class="display-3 text-white animated slideInDown">Global E-commerce Business</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Expand your e-commerce presence globally and drive
                                    your business toward unprecedented growth.</p>
                                <a href="{{route('pages.services')}}"
                                   class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" aria-expanded="false"
                                   data-bs-toggle="modal" data-bs-target="#get-quote"
                                   class="btn btn-light py-md-3 px-md-5 animated slideInRight">Get a Quote!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 d-none d-sm-block wow fadeInUp" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="bi bi-mortarboard text-primary mb-4 bi-icon"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Expert mentors empowering knowledge growth through personalized guidance</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 d-none d-sm-block wow fadeInUp" data-wow-delay="0.3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="bi bi-globe text-primary mb-4 bi-icon"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Convenient virtual learning for flexible education anytime, anywhere</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 d-none d-sm-block wow fadeInUp" data-wow-delay="0.5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="bi bi-book text-primary mb-4 bi-icon"></i>
                            <h5 class="mb-3">Learn & Earn</h5>
                            <p>Acquire knowledge while unlocking opportunities for financial prosperity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 d-none d-sm-block wow fadeInUp" data-wow-delay="0.7s"
                     style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="bi bi-clock text-primary mb-4 bi-icon"></i>
                            <h5 class="mb-3">Lifetime Access</h5>
                            <p>Unlimited educational resources for continuous growth and development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-sm-none">
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <!-- Skilled Instructors Slide -->
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="bi bi-mortarboard text-primary mb-4 bi-icon"></i>
                                <h5 class="mb-3">Skilled Instructors</h5>
                                <p>Expert mentors empowering knowledge growth through personalized guidance</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Online Classes Slide -->
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="bi bi-globe text-primary mb-4 bi-icon"></i>
                                <h5 class="mb-3">Online Classes</h5>
                                <p>Convenient virtual learning for flexible education anytime, anywhere</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Learn & Earn Slide -->
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="bi bi-book text-primary mb-4 bi-icon"></i>
                                <h5 class="mb-3">Learn & Earn</h5>
                                <p>Acquire knowledge while unlocking opportunities for financial prosperity</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- Lifetime Access Slide -->
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="bi bi-clock text-primary mb-4 bi-icon"></i>
                                <h5 class="mb-3">Lifetime Access</h5>
                                <p>Unlimited educational resources for continuous growth and development</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>












    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                             src="{{asset('assets/img/gallery/group.webp')}}"
                             alt="Ecomgladiators mission image" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Our Mission</h6>
                    <h1 class="mb-4">Welcome to Ecomgladiators</h1>
                    <p class="mb-4" style="text-align: justify;">Boost your Amazon business to new levels of excellence.
                        Discover the power of professional Amazon services and client-based virtual assistant training.
                        Ecomgladiators empowers entrepreneurs, and drives improved sales by offering
                        expert guidance to navigate diverse international marketplaces. With a commitment to
                        providing professional Amazon training, Ecomgladiators equips individuals with the
                        skills to achieve financial independence. Our client-focused, hands-on training approach
                        empowers candidates to launch successful eCommerce startups along with additional skills
                        of digital marketing and much more to thrive as accomplished entrepreneurs.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Empowering Entrepreneurs
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Elevating Amazon
                                Businesses</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Driving Better Sales
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Launching Startups in
                                eCommerce</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Digital Existence</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Multiple Income Sources
                            </p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{route('pages.about')}}">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h4 class="mb-5">Unlock Your Potential: Top-Quality Courses that Fuel Brilliance!</h4>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Course item 1 (Hidden on mobile) -->
                <div class="col-lg-4 col-md-6 d-none d-md-block wow fadeInUp" data-wow-delay="0.3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/img/gallery/featured1.webp')}}"
                                 alt="Wholesale course image" title=" Wholesale">
                        </div>
                        <div class="text-center p-4 pb-2">
                            <h5 class="mb-4">Amazon Wholesale FBA</h5>
                            <p class="description">
                                Whether you're an experienced seller or new to e-commerce, we've got you covered.
                                The Amazon Wholesale FBA Course is a comprehensive course that teaches you how to
                                start a profitable Amazon business. You will learn how to find profitable products
                                to sell on Amazon, source products from wholesalers, master Amazon seller central,
                                learn pricing, inventory management, and fulfill orders using Amazon FBA. The course
                                is also packed with practical exercises and case studies, so you can put your
                                learning into practice right away.
                            </p>
                        </div>
                        <div class="text-center">
                            <a href="{{route('courses.whole-sale')}}" class="btn btn-outline-primary mb-3">Course
                                Outline</a>
                        </div>
                    </div>
                </div>
                <!-- Course item 2 (Hidden on mobile) -->
                <div class="col-lg-4 col-md-6 d-none d-md-block wow fadeInUp" data-wow-delay="0.3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/img/gallery/featured2.webp')}}"
                                 alt=" Private Label Outline" title=" Private Label Outline">
                        </div>
                        <div class="text-center p-4 pb-2">
                            <h5 class="mb-4">Amazon Private Label</h5>
                            <p class="description">
                                This program is your gateway to success in the lucrative world of e-commerce.
                                From product research to marketing strategies, our expert instructors will
                                guide you through every step of launching your private label brand on Amazon.
                                With their valuable insights and tips, you'll learn how to identify
                                profitable opportunities and engage with customers effectively. By the end of
                                this course, you'll have the knowledge and confidence to build a thriving
                                business and achieve your entrepreneurial goals on the Amazon platform.
                            </p>
                        </div>
                        <div class="text-center">
                            <a href="{{route('courses.private-label')}}" class="btn btn-outline-primary mb-3">Course
                                Outline</a>
                        </div>
                    </div>
                </div>
                <!-- Course item 3 (Hidden on mobile) -->
                <div class="col-lg-4 col-md-6 d-none d-md-block wow fadeInUp" data-wow-delay="0.3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/img/gallery/featured3.webp')}}"
                                 alt=" Digital Marketing" title=" Digital Marketing">
                        </div>
                        <div class="text-center p-4 pb-2">
                            <h5 class="mb-4">Digital Marketing</h5>
                            <p class="description">
                                In today's digital age, businesses of all sizes need to have a strong online presence.
                                With a comprehensive curriculum covering various digital channels, you'll learn how to
                                create impactful campaigns, drive targeted traffic, and engage with your audience
                                effectively.
                                Our expert instructors will guide you through the latest trends and best practices,
                                equipping
                                you with the skills to navigate the dynamic world of digital marketing with confidence.
                                Get ready to elevate your online presence and drive tangible results that fuel business
                                success.
                            </p>
                        </div>
                        <div class="text-center">
                            <a href="{{route('courses.digital-marketing')}}" class="btn btn-outline-primary mb-3">Course
                                Outline</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Slider -->
            <div class="row d-md-none">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <!-- Course item 1 Slide (Mobile) -->
                        <div class="item">
                            <div class="course-item bg-light">
                                <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{asset('assets/img/gallery/featured1.webp')}}"
                                             alt="Wholesale course image" title=" Wholesale">
                                    </div>
                                    <div class="text-center p-4 pb-2">
                                        <h5 class="mb-4">Amazon Wholesale FBA</h5>
                                        <p class="description">
                                            Whether you're an experienced seller or new to e-commerce, we've got you
                                            covered.
                                            The Amazon Wholesale FBA Course is a comprehensive course that teaches you
                                            how to
                                            start a profitable Amazon business. You will learn how to find profitable
                                            products
                                            to sell on Amazon, source products from wholesalers, master Amazon seller
                                            central,
                                            learn pricing, inventory management, and fulfill orders using Amazon FBA.
                                            The course
                                            is also packed with practical exercises and case studies, so you can put
                                            your
                                            learning into practice right away.
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{route('courses.whole-sale')}}" class="btn btn-outline-primary mb-3">Course
                                            Outline</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course item 2 Slide (Mobile) -->
                        <div class="item">
                            <div class="course-item bg-light">
                                <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{asset('assets/img/gallery/featured2.webp')}}"
                                             alt=" Private Label Outline" title=" Private Label Outline">
                                    </div>
                                    <div class="text-center p-4 pb-2">
                                        <h5 class="mb-4">Amazon Private Label</h5>
                                        <p class="description">
                                            This program is your gateway to success in the lucrative world of
                                            e-commerce.
                                            From product research to marketing strategies, our expert instructors will
                                            guide you through every step of launching your private label brand on
                                            Amazon.
                                            With their valuable insights and tips, you'll learn how to identify
                                            profitable opportunities and engage with customers effectively. By the end
                                            of
                                            this course, you'll have the knowledge and confidence to build a thriving
                                            business and achieve your entrepreneurial goals on the Amazon platform.
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{route('courses.private-label')}}"
                                           class="btn btn-outline-primary mb-3">Course
                                            Outline</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Course item 3 Slide (Mobile) -->
                        <div class="item">
                            <div class="course-item bg-light">
                                <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{asset('assets/img/gallery/featured3.webp')}}"
                                             alt=" Digital Marketing" title=" Digital Marketing">
                                    </div>
                                    <div class="text-center p-4 pb-2">
                                        <h5 class="mb-4">Digital Marketing</h5>
                                        <p class="description">
                                            In today's digital age, businesses of all sizes need to have a strong online
                                            presence.
                                            With a comprehensive curriculum covering various digital channels, you'll
                                            learn how to
                                            create impactful campaigns, drive targeted traffic, and engage with your
                                            audience
                                            effectively.
                                            Our expert instructors will guide you through the latest trends and best
                                            practices,
                                            equipping
                                            you with the skills to navigate the dynamic world of digital marketing with
                                            confidence.
                                            Get ready to elevate your online presence and drive tangible results that
                                            fuel business
                                            success.
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{route('courses.digital-marketing')}}"
                                           class="btn btn-outline-primary mb-3">Course
                                            Outline</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 p-3 text-center">
                <a href="{{route('pages.enrollment')}}" class="btn btn-success text-uppercase rounded-3 ">
                    </i> Enroll Now!
                </a>
                <a href="{{route('pages.courses')}}" class="btn btn-outline-success">
                    <i class="bi bi-arrow-right-short"></i> View More
                </a>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h4 class="mb-5">Flexible and Scalable - Our Services Adapt to Your Growing Needs and Evolving
                    Challenges!</h4>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 d-none d-sm-block">
                    <div class="card">
                        <div class="card-head">
                            <i class="bi bi-box-seam card-head-icon text-center" aria-expanded="false"></i>
                            <h5>Wholesale FBA Business</h5>
                        </div>
                        <div class="card-body text-start custom-hover">
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Research Brands/Distributors
                            </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Winning Product Selection</p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Source and negotiate with
                                suppliers </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Shipment and Restocking</p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Sales and
                                order
                                management</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 d-none d-sm-block">
                    <div class="card">
                        <div class="card-head">
                            <i class="bi bi-trophy card-head-icon text-center"
                               aria-expanded="false"></i>
                            <h5>Brand Approval & Winning Product</h5>
                        </div>
                        <div class="card-body text-start custom-hover">

                            <p><i class="bi bi-gem" aria-expanded="false"></i> Communication and Documentation </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Domain-Specific Account Approval </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Product on suggested criteria </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Restocking and Labeling </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-head">
                            <i class="bi bi-building card-head-icon text-center"
                               aria-expanded="false"></i>
                            <h5>LLC/LTD (Company) Registration</h5>
                        </div>
                        <div class="card-body text-start custom-hover">

                            <p><i class="bi bi-gem" aria-expanded="false"></i> Unique Business Address </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> LLC state filing </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> EIN Registration </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Payoneer Account </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Article of
                                Organization/Certificate of Formation </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Reseller Certificate
                            </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Validation
                                Certificate </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Cert. of Good
                                Standing </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> US phone number </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Amazon Account </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-12 col-lg-12 p-3 text-center">
            <a href="" aria-expanded="false" class="btn btn-success text-uppercase rounded-3 "
               data-bs-toggle="modal" data-bs-target="#get-quote">
                <i class="bi bi-quote"></i> Get A Quote
            </a>
            <a href="{{route('pages.services')}}" class="btn btn-outline-success">
                <i class="bi bi-arrow-right-short"></i> View More
            </a>

        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Explore Top Subjects</h6>
                <h4 class="mb-5">Curiosity Starts Here: Navigate Through Top Subjects That Spark Interest!</h4>
            </div>
            <div class="col-12 d-md-none">
                <div id="carouselCourses" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($services as $key => $value)
                            <div class="carousel-item @if($key === 0) active @endif">
                                <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid"
                                             src="{{asset('assets/img/gallery/topic')}}{{++$key}}{{'.webp'}}"
                                             alt="{{$value}}" title="{{$value}}">
                                    </div>
                                    <div class="text-center p-4 pb-2">
                                        <div class="topic-content">
                                            <a href="" aria-expanded="false" data-bs-toggle="modal"
                                               data-bs-target="#{{$modal[--$key]}}"><h6 class="mb-4">
                                                    {{$value}}
                                                </h6></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="justify-content-center d-none d-md-block">
                <div class="row">
                    @foreach($services as $key => $value)

                        <div class="col-lg-3 col-md-6 wow fadeInUp mb-5" data-wow-delay="0.3s">
                            <a href="" aria-expanded="false" data-bs-toggle="modal"
                               data-bs-target="#{{$modal[$key]}}">
                                <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid"
                                             src="{{asset('assets/img/gallery/topic')}}{{++$key}}{{'.webp'}}"
                                             alt="{{$value}}" title="{{$value}}">
                                    </div>
                                    <div class="text-center p-4 pb-2">
                                        <div class="topic-content">
                                            <h6 class="mb-4">
                                                {{$value}}
                                            </h6>

                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="get-quote" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Get a Quote</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-contact contact_form" id="enrollment_form" action="{{route('get-quote')}}"
                          method="POST">
                        @csrf
                        <div class="form-group">

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Name</label>
                            <input type="text" class="form-control" id="cname" name="cname"
                                   placeholder="Enter your fullname">

                        </div>
                        <div class="mb-3">
                            <label for="recipient-Email">Email</label>
                            <input type="email" class="form-control" id="cemail" name="cemail"
                                   placeholder="Enter your email">

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Contact (Whatsapp/Telegram)</label>
                            <input type="text" class="form-control" id="ccontact" name="ccontact"
                                   placeholder="Enter Contact (Whatsapp/Telegram)">

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Estimated Budget</label>
                            <input type="number" class="form-control" id="cbudget" name="cbudget"
                                   placeholder="Enter your Estimated budget">

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Select Service</label>
                            <select name='cselectservice' class='form-control'>
                                <option selected>Please select the Service</option>
                                <option value="Wholesale Business">Wholesale Business</option>
                                <option value="Private Label Business">Private Label Business</option>
                                <option value="Amazon Account Reinstatemen">Amazon Account Reinstatement</option>
                                <option value="Brand Approval & Winning Product">Brand Approval & Winning Product
                                </option>
                                <option value="LLC/LTD (Company) Registration">LLC/LTD (Company) Registration</option>
                                <option value="Ecommerce Website Development">Ecommerce Website Development</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Amazon Account </label>
                            <select name="camazonaccount" class="form-control">
                                <option selected>Please select Account Type</option>
                                <option value="New">New</option>
                                <option value="Old">Old</option>
                                <option value="Need Account">Need Account</option>

                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Service Required</label>
                            <select name='crequired' class='form-control'>
                                <option selected>Please select the Service Required</option>
                                <option value="Semi Managed">Semi Managed</option>
                                <option value="Fully Managed">Fully Managed</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Amazon Seller Central Management</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>We teach how satisfactorily and quickly answer customer queries and also handle activities like
                        return and refund management.
                        Also, help manage logistics and tracking to ensure customers are able to receive their products
                        within the designated delivery date.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="PLProductResearch" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">PL Product Research</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>We loop up the trendy as well as seasonal products and discuss all the statistics with graphs and
                        figures so that the buyer can take a good decision.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="ExtensiveKeywordResearch" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Extensive Keyword Research</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>We teach Virtual Assistants to give services by focusing on identifying the most relevant
                        product-centric keywords that will drive more traffic to the selected product listing and result
                        in improved conversions.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="ProductListingOptimization" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Product Listing Optimization</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>We teach how to identify the keywords within the product listing to help your listing rank
                        organically on Amazon SERPs.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="OrderProcessingAndTracking" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Order Processing and Tracking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>A seller’s worst nightmare is forgetting to process an order and not tracking the order; we teach
                        our virtual
                        assistants how to be organized on top of all the orders.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="WholesaleAccountApproval" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Wholesale Account Approval</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>On the client's behalf, Our Virtual Assistants are taught well that they contact
                        distributors,
                        and brands through email and call to get resale approval.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="WholesaleProductHunting" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Wholesale Product Hunting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>The most important and time taking task is to find the best product that should comply the
                        predefined criteria, but not impossible. So, using a set of tools, tips, and tricks, our virtual
                        assistant can list down a great number of products on criteria.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="InventoryManagement" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Inventory Management</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Our managers and Virtual Assistants work together to enable clients to optimally manage
                        their stock, keeping them
                        updated about purchased products, restocking, and much more. </p>
                </div>

            </div>
        </div>
    </div>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                nav: false,
                dots: true
            });
        });
    </script>
@endsection
