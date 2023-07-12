@extends('includes.master')
@section('title',$title)
@section('content')
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('assets/img/gallery/carousal-1.webp')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                     style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Best Online
                                    Courses</h5>
                                <h1 class="display-3 text-white animated slideInDown">Global E-commerce Business</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Expand your e-commerce presence globally and drive
                                    your business toward unprecedented growth</p>
                                <a href="{{route('pages.about')}}"
                                   class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Get a Quote!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('assets/img/gallery/carousal-1.webp')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                     style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Best Online
                                    Courses</h5>
                                <h1 class="display-3 text-white animated slideInDown">Global E-commerce Business</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Expand your e-commerce presence globally and drive
                                    your business toward unprecedented growth</p>
                                <a href="{{route('pages.about')}}}"
                                   class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Get a Quote!</a>
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
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="bi bi-mortarboard text-primary mb-4 bi-icon"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Expert mentors empowering knowledge growth through personalized guidance</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="bi bi-globe text-primary mb-4 bi-icon"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Convenient virtual learning for flexible education anytime, anywhere</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="bi bi-book text-primary mb-4 bi-icon"></i>
                            <h5 class="mb-3">Learn & Earn</h5>
                            <p> Acquire knowledge while unlocking opportunities for financial prosperity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s"
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
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                             src="{{asset('assets/img/gallery/about2.png')}}"
                             alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Our Mission</h6>
                    <h1 class="mb-4">Welcome to Ecomgladiators</h1>
                    <p class="mb-4">EcomGladiators empowers entrepreneurs, builds Amazon business to the next level, and
                        drives
                        better sales also help clients to navigate all challenges that USA and UK marketplaces throw at
                        them. EcomGladiators is
                        serving the nation with professional Amazon training through which people become independent to
                        earn their livelihood. We deliver
                        client-based hands-on training to our candidates so that they launch their startups in the world
                        of eCommerce to become
                        successful entrepreneurs.</p>
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
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Marketplaces Mastery</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Amazon Business
                                Acceleration
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
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Explore Top Subjects</h1>
            </div>
            <?php
            $services =
                ["AMAZON SELLER CENTRAL MANAGEMENT", "PL PRODUCT RESEARCH", "EXTENSIVE KEYWORD RESEARCH",
                    "PRODUCT LISTING OPTIMIZATION", "ORDER PROCESSING AND TRACKING",
                    "WHOLESALE ACCOUNT APPROVAL", "WHOLESALE PRODUCT HUNTING", "INVENTORY MANAGEMENT"];
            ?>


            <div class="row g-4 justify-content-center">

                @foreach($services as $key => $value)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{asset('assets/img/gallery/topic')}}{{++$key}}{{'.png'}}"
                                     alt="">
                            </div>
                            <div class="text-center p-4 pb-2">
                                <h5 class="mb-4">{{$value}}</h5>
                            </div>
                        </div>

                    </div>
                @endforeach
                <div class="col-lg-12 text-center">
                    <a href="{{route('pages.courses')}}" class="btn btn-outline-primary"><i
                            class="bi bi-box-arrow-in-up-right"></i> View More</a>
                </div>
            </div>
        </div>
    </div>





    <div class="container py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Services we provide</h1>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-head">
                            <i class="bi bi-box-seam card-head-icon text-center" aria-expanded="false"></i>
                            <h5>Wholesale Business</h5>
                        </div>
                        <div class="card-body text-start custom-hover">
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Research Brands/Distributors</p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Winning Product Selection</p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Source and negotiate with suppliers </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Shipment and Restocking</p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Sales and order
                                management</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
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
                            <i class="bi bi-code-slash card-head-icon text-center"
                               aria-expanded="false"></i>
                            <h5>Ecommerce Website Development</h5>
                        </div>
                        <div class="card-body text-start custom-hover">

                            <p><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Website Design </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Custom E-commerce Development </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Platform Selection </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Website Migration </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Payment Gateway
                                Integration </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> E-commerce SEO </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Analytics
                                and Reporting </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Mobile App
                                Development </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Ongoing Support and
                                Maintenance </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Consulting
                                and Strategy </p>

                        </div>
                    </div>
                </div>


            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 p-3 text-center">
                <a href="{{route('pages.services')}}" class="btn btn-outline-success">
                    <i class="bi bi-arrow-right-short"></i> View More
                </a>
            </div>
        </div>
    </div>





    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
                <h1 class="mb-5">Expert Instructors</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/img/gallery/N_ayesha.jpeg')}}" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/img/gallery/N_amarhd.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/img/gallery/N_Humza.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/img/gallery/N_shumaila.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
