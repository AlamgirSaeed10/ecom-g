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
                            <p>Unlimited availability to educational resources for continuous growth and development</p>
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
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/img/about.jpg')}}"
                             alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
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
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Empowering Entrepreneurs</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Elevating Amazon Businesses</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Driving Better Sales
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Launching Startups in eCommerce</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Marketplaces Mastery</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Amazon Business Acceleration
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
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @php
                $course = \Illuminate\Support\Facades\DB::table('courses_offered')->get();
                @endphp
                @foreach($course as $key =>$value)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{++$key}}s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('assets/img/course-1.jpg')}}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                   style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                   style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="bi bi-star-fill text-primary"></small>
                                <small class="bi bi-star-fill text-primary"></small>
                                <small class="bi bi-star-fill text-primary"></small>
                                <small class="bi bi-star-fill text-primary"></small>
                                <small class="bi bi-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">{{$value->CourseName}}</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
                @endforeach
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
{{--                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">--}}
{{--                            <div class="bg-light d-flex justify-content-center pt-2 px-1">--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i--}}
{{--                                        class="bi bi-instagram"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="text-center p-4">--}}
{{--                            <h5 class="mb-0">Instructor Name</h5>--}}
{{--                            <small>Designation</small>--}}
{{--                        </div>--}}
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
