@extends('includes.master')
@section('title',$title)
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h4 class="mb-5">Unlock Your Potential: Top-Quality Courses that Fuel Brilliance!</h4>
            </div>
            <?php
            $services = [
                "Amazon Wholesale FBA",
                "Amazon Private Label",
                "Digital Marketing",
                "Freelancing (Fiverr & Upwork)",
                "Amazon Online Arbitrage",
            ];
            $url = ["whole-sale", "private-label", 'digital-marketing', "freelancing", "online-arbitrage"];
            $json = file_get_contents(storage_path('description.json'));
            $json_data = json_decode($json, true);
            ?>

            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme" id="web-view">
                        @foreach($services as $key => $value)
                            <div class="item">
                                <div class="p-3 col-lg-12 col-md-6 d-none d-md-block wow fadeInUp" data-wow-delay="0.3s"
                                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                    <div class="course-item bg-light">
                                        <div class="position-relative overflow-hidden">
                                            <img class="img-fluid"
                                                 src="{{asset('assets/img/gallery/featured')}}{{++$key}}{{'.webp'}}"
                                                 alt="{{$value}}" title="{{$value}}">
                                        </div>
                                        <div class="text-center p-4 pb-2">
                                            <h5 class="mb-4">{{$value}}</h5>
                                            <p class="description">
                                                {!! $json_data['data'][--$key]['desc'] !!}
                                            </p>
                                        </div>
                                        <div class="text-center">
                                            <a href="{{route('courses.'.$url[$key])}}"
                                               class="btn btn-outline-primary mb-3">Course
                                                Outline</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row d-md-none owl-carousel" id="mobile-view">
                @foreach($services as $key => $value)
                    <div class="item">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid"
                                     src="{{asset('assets/img/gallery/featured')}}{{++$key}}{{'.webp'}}"
                                     alt="{{$value}}" title="{{$value}}">
                            </div>
                            <div class="text-center p-4 pb-2">
                                <h6 class="mb-4">{{$value}}</h6>
                                <p class="description">
                                    {!! $json_data['data'][--$key]['desc'] !!}
                                </p>
                            </div>
                            <div class="text-center">
                                <a href="{{route('courses.'.$url[$key])}}" class="btn btn-outline-primary mb-3">Course
                                    Outline</a>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Expert Instructors</h6>
                <h1 class="mb-5">Learn from the Best and Be the Best!</h1>
            </div>

            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme d-none d-md-block" id="teacher-web">
                        <div class="item">
                            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item bg-light">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="{{asset('assets/img/gallery/ammar.webp')}}"
                                             alt="expert instructor Ammar picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item bg-light">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="{{asset('assets/img/gallery/shumaila.webp')}}"
                                             alt="expert instructor Shumaila picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="team-item bg-light">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="{{asset('assets/img/gallery/humza.webp')}}"
                                             alt="expert instructor Humza picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item bg-light">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="{{asset('assets/img/gallery/ayesha.webp')}}"
                                             alt="expert instructor Ayesha picture ">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                                <div class="team-item bg-light">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="{{asset('assets/img/gallery/abrar.webp')}}"
                                             alt="expert instructor Abrar picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-md-none owl-carousel" id="teacher-mobile">
                <div class="item">
                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('assets/img/gallery/ammar.webp')}}"
                                     alt="expert instructor Ammar picture">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('assets/img/gallery/shumaila.webp')}}"
                                     alt="expert instructor Shumaila picture">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('assets/img/gallery/humza.webp')}}"
                                     alt="expert instructor Humza picture">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('assets/img/gallery/ayesha.webp')}}"
                                     alt="expert instructor Ayesha picture ">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('assets/img/gallery/abrar.webp')}}"
                                     alt="expert instructor Abrar picture">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title bg-white text-center text-primary px-3">Pricing</h6>
                <h1 class="mb-5">Competitive prices, flexible options, with no hidden surprises!</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme d-none d-md-block" id="web-view">
                        <div class="row">
                            <div class="col-lg-4 mb-5">
                                <div class="card p-3">
                                    <p class="card-price">Basic</p>
                                    <div class="topic-content-box">
                                        <div class="card-header mb-5 topic-title">
                                            <h1 class="mb-0">Starter</h1>
                                            <i>Choose any 1 course</i>
                                        </div>
                                        <div class="text-start">
                                            <ul class="course-item-list">
                                                <li> Amazon Wholesale FBA</li>
                                                <li> Amazon Private Label</li>
                                                <li> Amazon Online Arbitrage</li>
                                                <li> Digital Marketing</li>
                                                <li> Freelancing</li>
                                            </ul>

                                        </div>
                                        <div class="topic-price mt-5">
                                            <h6>PKR 30,000/-</h6>
                                        </div>
                                        <div class="topic-footer p-3">
                                            <a href="{{ route('pages.enrollment') }}" class="btn btn-outline-dark">Enroll
                                                Now!</a>
                                        </div>
                                        <a href="#" class="overseas_price text-primary">Price for Overseas</a>
                                        <a href="#" class="local_price text-primary d-none">Price for Pakistanis</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-5">

                                <div class="card p-3">
                                    <p class="card-price">25% Off</p>
                                    <div class="topic-content-box">
                                        <div class="card-header mb-5 topic-title">
                                            <h1 class="mb-0">Combination</h1>
                                            <i>Choose any 2 courses</i>
                                        </div>
                                        <div class="topic-content">
                                            <ul class="course-item-list">
                                                <li> Amazon Wholesale FBA</li>
                                                <li> Amazon Private Label</li>
                                                <li> Amazon Online Arbitrage</li>
                                                <li> Digital Marketing</li>
                                                <li> Freelancing</li>
                                            </ul>
                                        </div>
                                        <div class="topic-price mt-5">
                                            <h6>PKR 45,000/- (
                                                <del>PKR 60,000/-</del>
                                                )
                                            </h6>
                                        </div>
                                        <div class="topic-footer p-3">
                                            <a href="{{ route('pages.enrollment') }}" class="btn btn-outline-dark">Enroll
                                                Now!</a>
                                        </div>
                                        <a href="#" class="overseas_price text-primary">Price for Overseas</a>
                                        <a href="#" class="local_price text-primary d-none">Price for Pakistanis</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-5">

                                <div class="card p-3">
                                    <p class="card-price">20% Off</p>
                                    <div class="topic-content-box">
                                        <div class="card-header mb-5 topic-title">
                                            <h1 class="mb-0">Complete</h1>
                                            <i>All courses with 1-year support</i>
                                        </div>
                                        <div class="topic-content">
                                            <ul class="course-item-list">
                                                <li> Amazon Wholesale FBA</li>
                                                <li> Amazon Private Label</li>
                                                <li> Amazon Online Arbitrage</li>
                                                <li> Digital Marketing</li>
                                                <li> Freelancing</li>
                                                <li> One-to-one live support</li>
                                            </ul>
                                        </div>
                                        <div class="topic-price mt-4">
                                            <h6>PKR 1,20,000/- (
                                                <del>PKR 1,50,000</del>
                                                )
                                            </h6>
                                        </div>
                                        <div class="topic-footer p-3">
                                            <a href="{{ route('pages.enrollment') }}" class="btn btn-outline-dark">Enroll
                                                Now!</a>
                                        </div>
                                        <a href="#" class="overseas_price text-primary">Price for Overseas</a>
                                        <a href="#" class="local_price text-primary d-none">Price for Pakistanis</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel owl-theme d-md-none" id="plan-mobile">
                <div class="item">
                    <div class="card p-3">
                        <p class="card-price">Basic</p>
                        <div class="topic-content-box">
                            <div class="card-header mb-3 topic-title">
                                <h1 class="mb-0">Starter</h1>
                                <i>Choose any 1 course</i>
                            </div>
                            <div class="text-start">
                                <ul class="course-item-list">
                                    <li>Amazon Wholesale FBA</li>
                                    <li>Amazon Private Label</li>
                                    <li>Amazon Online Arbitrage</li>
                                    <li>Digital Marketing</li>
                                    <li>Freelancing</li>
                                </ul>
                            </div>
                            <div class="topic-price mt-3">
                                <h6>PKR 30,000/-</h6>
                            </div>
                            <div class="topic-footer p-3">
                                <a href="{{ route('pages.enrollment') }}" class="btn btn-outline-dark">Enroll Now!</a>
                            </div>
                            <a href="#" class="overseas_price text-primary">Price for Overseas</a>
                            <a href="#" class="local_price text-primary d-none">Price for Pakistanis</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-3">
                        <p class="card-price">25% Off</p>
                        <div class="topic-content-box">
                            <div class="card-header mb-3 topic-title">
                                <h1 class="mb-0">Combination</h1>
                                <i>Choose any 2 courses</i>
                            </div>
                            <div class="topic-content">
                                <ul class="course-item-list">
                                    <li>Amazon Wholesale FBA</li>
                                    <li>Amazon Private Label</li>
                                    <li>Amazon Online Arbitrage</li>
                                    <li>Digital Marketing</li>
                                    <li>Freelancing</li>
                                </ul>
                            </div>
                            <div class="topic-price mt-3">
                                <h6>PKR 45,000/- (
                                    <del>PKR 60,000/-</del>
                                    )
                                </h6>
                            </div>
                            <div class="topic-footer p-3">
                                <a href="{{ route('pages.enrollment') }}" class="btn btn-outline-dark">Enroll Now!</a>
                            </div>
                            <a href="#" class="overseas_price text-primary">Price for Overseas</a>
                            <a href="#" class="local_price text-primary d-none">Price for Pakistanis</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card p-3">
                        <p class="card-price">20% Off</p>
                        <div class="topic-content-box">
                            <div class="card-header mb-3 topic-title">
                                <h1 class="mb-0">Complete</h1>
                                <i>All courses with 1-year support</i>
                            </div>
                            <div class="topic-content">
                                <ul class="course-item-list">
                                    <li>Amazon Wholesale FBA</li>
                                    <li>Amazon Private Label</li>
                                    <li>Amazon Online Arbitrage</li>
                                    <li>Digital Marketing</li>
                                    <li>Freelancing</li>
                                    <li>One-to-one live support</li>
                                </ul>
                            </div>
                            <div class="topic-price mt-3">
                                <h6>PKR 1,20,000/- (
                                    <del>PKR 1,50,000</del>
                                    )
                                </h6>
                            </div>
                            <div class="topic-footer p-3">
                                <a href="{{ route('pages.enrollment') }}" class="btn btn-outline-dark">Enroll Now!</a>
                            </div>
                            <a href="#" class="overseas_price text-primary">Price for Overseas</a>
                            <a href="#" class="local_price text-primary d-none">Price for Pakistanis</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-12">
                <p class="text-primary mb-0 text-center">
                    <strong>Note:</strong> EcomGladiators provide a certificate only after
                    the candidate passes the assessment.
                </p>
            </div>
        </div>
    </div>







    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script type="text/javascript">
        $('.readmore').on('click', function (e) {
            e.preventDefault();
            var desc = $(this).text();
            if (desc === 'Hide') {
                $(this).text('Read More');
                var close_desc = $(this).closest('.properties__caption').find('.description').addClass(
                    'line_clamp');
            } else {
                $(this).text('Hide');
                var close_desc = $(this).closest('.properties__caption').find('.description').removeClass(
                    'line_clamp');
            }
        });
        $('.overseas_price').on('click', function (e) {
            e.preventDefault();
            $(this).addClass('d-none');
            $(this).next('.local_price').removeClass('d-none');
            var topic_title = $(this).parent().find('.topic-title h1').html();
            if (topic_title === 'Starter') {
                $(this).parent().find('.topic-price h6').text('$150');
            } else if (topic_title === 'Combination') {
                $(this).parent().find('.topic-price h6').html('$200 (<del>$250</del>)');
            } else {
                $(this).parent().find('.topic-price h6').html('$500 (<del>$750</del>)');
            }

        });
        $('.local_price').on('click', function (e) {
            e.preventDefault();
            $(this).addClass('d-none');
            $(this).prev('.overseas_price').removeClass('d-none');
            var topic_title = $(this).parent().find('.topic-title h1').html();
            if (topic_title === 'Starter') {
                $(this).parent().find('.topic-price h6').text('PKR 30,000/-');
            } else if (topic_title === 'Combination') {
                $(this).parent().find('.topic-price h6').html('PKR 45,000/- (<del>PKR 60,000</del>)');
            } else {
                $(this).parent().find('.topic-price h6').html('PKR 1,20,000/- (<del>PKR 1,50,000/-</del>)');
            }

        });


        $(document).ready(function () {
            $("#web-view").owlCarousel({
                items: 3, // Display 3 items on desktop
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                nav: false,
                dots: true
            });
        });

        $(document).ready(function () {
            $("#teacher-mobile").owlCarousel({
                items: 1, // Display 3 items on desktop
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                nav: false,
                dots: true
            });
        });
        $(document).ready(function () {
            $("#teacher-web").owlCarousel({
                items: 4, // Display 3 items on desktop
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                nav: false,
                dots: true
            });
        });

        $(document).ready(function () {
            $("#mobile-view").owlCarousel({
                items: 1, // Display 3 items on desktop
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                nav: false,
                dots: true
            });
        });
        $(document).ready(function () {
            $("#plan-mobile").owlCarousel({
                items: 1, // Display 3 items on desktop
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                nav: false,
                dots: true
            });
        });
    </script>
@endsection
