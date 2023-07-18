@extends('includes.master')
@section('title',$title)
@section('content')

    <head>
        <link rel="stylesheet" href="{{asset('assets/css/tm-swiper-bundle.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/tm-style.css')}}"/>

    </head>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h4 class="mb-5">Unlock Your Potential: Top-Quality Courses that Fuel Brilliance!</h4>
            </div>
            <?php
            $services =
                [
                    " Wholesale",
                    " Private Label Outline",
                    " Digital Marketing",
                    " Freelancing (Fiverr & Upwork)",
                    " Online Arbitrage",

                ];
            $url = ["whole-sale", "private-label", 'digital-marketing', "freelancing", "online-arbitrage"];
            $json = file_get_contents(storage_path('description.json'));
            $json_data = json_decode($json, true);
            ?>

            <div class="row g-4 justify-content-center">
                @foreach($services as $key => $value)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{asset('assets/img/gallery/featured')}}{{++$key}}{{'.png'}}"
                                     alt="{{$value}}" title="{{$value}}">
                            </div>
                            <div class="text-center p-4 pb-2">
                                <h5 class="mb-4">{{$value}}</h5>
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
    <div class="container-xxl py-5">

        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title bg-white text-center text-primary px-3">Pricing</h6>
                <h1 class="mb-5">Choose your Career Goals</h1>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card p-3">
                        <div class="topic-content-box">
                            <div class="card-header mb-5 topic-title">
                                <h1 class="mb-0">Starter</h1>
                                <i>Choose any 1 course.</i>
                            </div>
                            <div class="text-start">
                                <ul class="course-item-list">
                                    <li> Amazon FBA Wholesale (Duration 1.5 months)</li>
                                    <li> Amazon Private Label (Duration 1.5 months)</li>
                                    <li> Amazon Online Arbitrage (Duration 1.5 months)</li>
                                    <li> Digital Marketing (Duration 1.5 months)</li>
                                    <li> Freelancing (Duration 1.5 months)</li>
                                </ul>

                            </div>
                            <div class="topic-price mt-5">
                                <h4>PKR 25,000/-</h4>
                            </div>
                            <div class="topic-footer p-3">
                                <a href="{{ route('pages.enrollment') }}" class="btn btn-outline-dark">Enroll Now</a>
                            </div>
                            <a href="#" class="overseas_price text-primary">Price for Overseas</a>
                            <a href="#" class="local_price text-primary d-none">Price for Pakistanis</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card p-3">
                        <div class="topic-content-box">
                            <div class="card-header mb-5 topic-title">
                                <h1 class="mb-0">Combination</h1>
                                <i>Choose any 2 courses</i>
                            </div>
                            <div class="topic-content">
                                <ul class="course-item-list">
                                    <li> Amazon FBA Wholesale (Duration 1.5 months)</li>
                                    <li> Amazon Private Label (Duration 1.5 months)</li>
                                    <li> Amazon Online Arbitrage(Duration 1.5 months)</li>
                                    <li> Digital Marketing (Duration 1.5 months)</li>
                                    <li> Freelancing (Duration 1.5 months)</li>
                                </ul>
                            </div>
                            <div class="topic-price mt-5">
                                <h4>PKR 40,000/- (
                                    <del>PKR 50,000/-</del>
                                    )
                                </h4>
                            </div>
                            <div class="topic-footer p-3">
                                <a href="{{ route('pages.enrollment') }}" class="btn btn-outline-dark">Enroll Now</a>
                            </div>
                            <a href="#" class="overseas_price text-primary">Price for Overseas</a>
                            <a href="#" class="local_price text-primary d-none">Price for Pakistanis</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card p-3">

                        <div class="topic-content-box">
                            <div class="card-header mb-5 topic-title">
                                <h1 class="mb-0">Complete</h1>
                                <i>All courses included with 1-year support</i>
                            </div>
                            <div class="topic-content">
                                <ul class="course-item-list">
                                    <li> Amazon FBA Wholesale (Duration 1.5 months)</li>
                                    <li> Amazon Private Label (Duration 1.5 months)</li>
                                    <li> Amazon Online Arbitrage (Duration 1.5 months)</li>
                                    <li> Digital Marketing (Duration 1.5 months)</li>
                                    <li> Freelancing (Duration 1.5 months)</li>
                                    <li> One-to-one live support</li>
                                </ul>
                            </div>
                            <div class="topic-price mt-4">
                                <h4>PKR 80,000/- (
                                    <del>PKR 1,25,000/-</del>
                                    )
                                </h4>
                            </div>
                            <div class="topic-footer p-3">
                                <a href="{{ route('pages.enrollment') }}" class="btn btn-outline-dark">Enroll Now</a>
                            </div>
                            <a href="#" class="overseas_price text-primary">Price for Overseas</a>
                            <a href="#" class="local_price text-primary d-none">Price for Pakistanis</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <p class="text-primary mb-0">
                    <strong>Note:</strong> EcomGladiators provide a certificate only after
                    the candidate passes the assessment.</p>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 wow fadeInUp text-center visually-hidden" data-wow-delay="0.1s"
         style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container">
            <div class="testimonial mySwiper">
                <div class="testi-content swiper-wrapper">
                    <div class="slide swiper-slide">
                        <img src="{{asset('assets/img/icon/user-icon.png')}}" alt="" class="image"/>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                            saepe provident dolorem a quaerat quo error facere nihil deleniti
                            eligendi ipsum adipisci, fugit, architecto amet asperiores
                            doloremque deserunt eum nemo.
                        </p>

                        <i class="bx bxs-quote-alt-left tm-quote-icon"><a
                                href="https://www.google.com" class="text-white" target="_blank"> Listen Video</a> </i>


                        <div class="details">
                            <span class="name">Marnie Lotter</span>
                            <span class="job">Web Developer</span>
                        </div>
                    </div>
                    <div class="slide swiper-slide">
                        <img src="{{asset('assets/img/icon/user-icon.png')}}" alt="" class="image"/>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                            saepe provident dolorem a quaerat quo error facere nihil deleniti
                            eligendi ipsum adipisci, fugit, architecto amet asperiores
                            doloremque deserunt eum nemo.
                        </p>

                        <i class="bx bxs-quote-alt-left tm-quote-icon"><a
                                href="https://www.google.com" class="text-white" target="_blank"> Listen Video</a> </i>

                        <div class="details">
                            <span class="name">Marnie Lotter</span>
                            <span class="job">Web Developer</span>
                        </div>
                    </div>
                    <div class="slide swiper-slide">
                        <img src="{{asset('assets/img/icon/user-icon.png')}}" alt="" class="image"/>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                            saepe provident dolorem a quaerat quo error facere nihil deleniti
                            eligendi ipsum adipisci, fugit, architecto amet asperiores
                            doloremque deserunt eum nemo.
                        </p>

                        <i class="bx bxs-quote-alt-left tm-quote-icon"><a
                                href="https://www.google.com" class="text-white" target="_blank"> Listen Video</a> </i>

                        <div class="details">
                            <span class="name">Marnie Lotter</span>
                            <span class="job">Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next nav-btn"></div>
                <div class="swiper-button-prev nav-btn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>











    <script src="{{asset('assets/js/tm-swiper-bundle.min.js')}}"></script>
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
                $(this).parent().find('.topic-price h4').text('$150');
            } else if (topic_title === 'Combination') {
                $(this).parent().find('.topic-price h4').html('$200 (<del>$250</del>)');
            } else {
                $(this).parent().find('.topic-price h4').html('$500 (<del>$750</del>)');
            }

        });
        $('.local_price').on('click', function (e) {
            e.preventDefault();
            $(this).addClass('d-none');
            $(this).prev('.overseas_price').removeClass('d-none');
            var topic_title = $(this).parent().find('.topic-title h1').html();
            if (topic_title === 'Starter') {
                $(this).parent().find('.topic-price h4').text('PKR 25,000/-');
            } else if (topic_title === 'Combination') {
                $(this).parent().find('.topic-price h4').html('PKR 40,000/- (<del>PKR 50,000</del>)');
            } else {
                $(this).parent().find('.topic-price h4').html('PKR 80,000/- (<del>PKR 1,25,000/-</del>)');
            }

        });
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            grabCursor: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

    </script>
@endsection
