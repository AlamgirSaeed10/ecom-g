@extends('includes.master')
@section('title',$title)
@section('content')
    <section class="py-5 mt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55 mt-50">
                        <h2>Have a happy Learning!</h2>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <h1 class="display-4">Under Maintenance</h1>
                <p class="text-center">We apologize for the inconvenience, but we're performing some maintenance at the
                    moment. Please check back soon!</p>
                <p class="text-center">
                    <a href="{{route('pages.contact-us')}}" class="btn btn-outline-success"><strong> <i
                                class="bi bi-telephone"></i> Contact Us</strong></a></p>
            </div>
        </div>

    </section>

    {{--    <section class="course_details_area section_gap">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-8 course_details_left">--}}
    {{--                    <div class="main_image">--}}
    {{--                        <img class="img-fluid" src="{{asset('assets/img/course-details.jpg')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="content_wrapper">--}}
    {{--                        <h4 class="title">What you will learn</h4>--}}
    {{--                        <div class="content">--}}
    {{--                            <ul>--}}
    {{--                                <li>How to start &amp; scale a wholesale business from home.</li>--}}
    {{--                                <li>A starter list of 5k+ reputable wholesale suppliers we have experienced.</li>--}}
    {{--                                <li>How to use software to find profitable wholesale products you can source super--}}
    {{--                                    quickly.--}}
    {{--                                </li>--}}
    {{--                                <li>How to win buy box and why it is necessary to win.</li>--}}
    {{--                                <li>How to take advantage of existing, established Amazon listings.</li>--}}
    {{--                                <li>Get approved to sell popular branded products.</li>--}}
    {{--                                <li>Know the account health parameters and IPI score.</li>--}}
    {{--                                <li>Utilizing a prep and pack to save your time and money.</li>--}}
    {{--                                <li>Know how to call and communicate with Brands.</li>--}}
    {{--                                <li>How to start with online arbitrage products.</li>--}}
    {{--                            </ul>--}}

    {{--                        </div>--}}

    {{--                        <h4 class="title">Course Outline</h4>--}}
    {{--                        <div class="accordion" id="accordionExample">--}}
    {{--                            <div class="accordion-item">--}}
    {{--                                <h2 class="accordion-header" id="headingOne">--}}
    {{--                                    <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse"--}}
    {{--                                            data-bs-target="#collapseOne" aria-expanded="true"--}}
    {{--                                            aria-controls="collapseOne">--}}
    {{--                                        Week #1--}}
    {{--                                    </button>--}}
    {{--                                </h2>--}}
    {{--                                <div id="collapseOne" class="accordion-collapse collapse"--}}
    {{--                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">--}}
    {{--                                    <div class="accordion-body">--}}

    {{--                                        <div class="accordion" id="sub-accordionExample">--}}
    {{--                                            <div class="accordion-item">--}}
    {{--                                                <h2 class="accordion-header" id="sub-headingOne">--}}
    {{--                                                    <button class="accordion-button" type="button"--}}
    {{--                                                            data-bs-toggle="collapse" data-bs-target="#sub-collapseOne"--}}
    {{--                                                            aria-expanded="true" aria-controls="collapseOne">--}}
    {{--                                                        Lecture 1(Basics)--}}
    {{--                                                    </button>--}}
    {{--                                                </h2>--}}
    {{--                                                <div id="sub-collapseOne" class="accordion-collapse collapse"--}}
    {{--                                                     aria-labelledby="sub-headingOne"--}}
    {{--                                                     data-bs-parent="#sub-accordionExample">--}}
    {{--                                                    <div class="accordion-body">--}}

    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="accordion-item">--}}
    {{--                                                <h2 class="accordion-header" id="sub-headingTwo">--}}
    {{--                                                    <button class="accordion-button collapsed" type="button"--}}
    {{--                                                            data-bs-toggle="collapse" data-bs-target="#sub-collapseTwo"--}}
    {{--                                                            aria-expanded="false" aria-controls="sub-collapseTwo">--}}
    {{--                                                        Lecture 2 (Wholesale Models)--}}
    {{--                                                    </button>--}}
    {{--                                                </h2>--}}
    {{--                                                <div id="sub-collapseTwo" class="accordion-collapse collapse"--}}
    {{--                                                     aria-labelledby="sub-headingTwo"--}}
    {{--                                                     data-bs-parent="#sub-accordionExample">--}}
    {{--                                                    <div class="accordion-body">--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                            </div>--}}
    {{--                            <div class="accordion-item">--}}
    {{--                                <h2 class="accordion-header" id="headingTwo">--}}
    {{--                                    <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse"--}}
    {{--                                            data-bs-target="#collapseTwo" aria-expanded="true"--}}
    {{--                                            aria-controls="collapseTwo">--}}
    {{--                                        Week #2--}}
    {{--                                    </button>--}}
    {{--                                </h2>--}}
    {{--                                <div id="collapseTwo" class="accordion-collapse collapse"--}}
    {{--                                     aria-labelledby="headingTwo" data-bs-parent="#accordionExample">--}}
    {{--                                    <div class="accordion-body">--}}

    {{--                                        <div class="accordion" id="sub-accordionExample">--}}
    {{--                                            <div class="accordion-item">--}}
    {{--                                                <h2 class="accordion-header" id="sub-headingThree">--}}
    {{--                                                    <button class="accordion-button" type="button"--}}
    {{--                                                            data-bs-toggle="collapse" data-bs-target="#sub-collapseThree"--}}
    {{--                                                            aria-expanded="true" aria-controls="collapseThree">--}}
    {{--                                                        Lecture 3 (Communication with Suppliers)--}}
    {{--                                                    </button>--}}
    {{--                                                </h2>--}}
    {{--                                                <div id="sub-collapseThree" class="accordion-collapse collapse"--}}
    {{--                                                     aria-labelledby="sub-headingThree"--}}
    {{--                                                     data-bs-parent="#sub-accordionExample">--}}
    {{--                                                    <div class="accordion-body">--}}

    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="accordion-item">--}}
    {{--                                                <h2 class="accordion-header" id="sub-headingFour">--}}
    {{--                                                    <button class="accordion-button collapsed" type="button"--}}
    {{--                                                            data-bs-toggle="collapse" data-bs-target="#sub-collapseFour"--}}
    {{--                                                            aria-expanded="false" aria-controls="sub-collapseFour">--}}
    {{--                                                        Lecture 4 (Product Analysis)--}}
    {{--                                                    </button>--}}
    {{--                                                </h2>--}}
    {{--                                                <div id="sub-collapseFour" class="accordion-collapse collapse"--}}
    {{--                                                     aria-labelledby="sub-headingFour"--}}
    {{--                                                     data-bs-parent="#sub-accordionExample">--}}
    {{--                                                    <div class="accordion-body">--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                            </div>--}}
    {{--                            <div class="accordion-item">--}}
    {{--                                <h2 class="accordion-header" id="headingOne">--}}
    {{--                                    <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse"--}}
    {{--                                            data-bs-target="#collapseOne" aria-expanded="true"--}}
    {{--                                            aria-controls="collapseOne">--}}
    {{--                                        Week #3--}}
    {{--                                    </button>--}}
    {{--                                </h2>--}}
    {{--                                <div id="collapseOne" class="accordion-collapse collapse"--}}
    {{--                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">--}}
    {{--                                    <div class="accordion-body">--}}

    {{--                                        <div class="accordion" id="sub-accordionExample">--}}
    {{--                                            <div class="accordion-item">--}}
    {{--                                                <h2 class="accordion-header" id="sub-headingOne">--}}
    {{--                                                    <button class="accordion-button" type="button"--}}
    {{--                                                            data-bs-toggle="collapse" data-bs-target="#sub-collapseOne"--}}
    {{--                                                            aria-expanded="true" aria-controls="collapseOne">--}}
    {{--                                                        Lecture 5 (Catalog Analysis)--}}
    {{--                                                    </button>--}}
    {{--                                                </h2>--}}
    {{--                                                <div id="sub-collapseOne" class="accordion-collapse collapse"--}}
    {{--                                                     aria-labelledby="sub-headingOne"--}}
    {{--                                                     data-bs-parent="#sub-accordionExample">--}}
    {{--                                                    <div class="accordion-body">--}}

    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="accordion-item">--}}
    {{--                                                <h2 class="accordion-header" id="sub-headingTwo">--}}
    {{--                                                    <button class="accordion-button collapsed" type="button"--}}
    {{--                                                            data-bs-toggle="collapse" data-bs-target="#sub-collapseTwo"--}}
    {{--                                                            aria-expanded="false" aria-controls="sub-collapseTwo">--}}
    {{--                                                        Lecture 6(Reverse Sourcing)--}}
    {{--                                                    </button>--}}
    {{--                                                </h2>--}}
    {{--                                                <div id="sub-collapseTwo" class="accordion-collapse collapse"--}}
    {{--                                                     aria-labelledby="sub-headingTwo"--}}
    {{--                                                     data-bs-parent="#sub-accordionExample">--}}
    {{--                                                    <div class="accordion-body">--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                            </div>--}}
    {{--                            <div class="accordion-item">--}}
    {{--                                <h2 class="accordion-header" id="headingFour">--}}
    {{--                                    <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse"--}}
    {{--                                            data-bs-target="#collapseFour" aria-expanded="true"--}}
    {{--                                            aria-controls="collapseFour">--}}
    {{--                                        Week #4--}}
    {{--                                    </button>--}}
    {{--                                </h2>--}}
    {{--                                <div id="collapseFour" class="accordion-collapse collapse"--}}
    {{--                                     aria-labelledby="headingFour" data-bs-parent="#accordionExample">--}}
    {{--                                    <div class="accordion-body">--}}

    {{--                                        <div class="accordion" id="sub-accordionExample">--}}
    {{--                                            <div class="accordion-item">--}}
    {{--                                                <h2 class="accordion-header" id="sub-headingFour">--}}
    {{--                                                    <button class="accordion-button" type="button"--}}
    {{--                                                            data-bs-toggle="collapse" data-bs-target="#sub-collapseFour"--}}
    {{--                                                            aria-expanded="true" aria-controls="collapseFour">--}}
    {{--                                                        Lecture 7 (Brand Hunting)--}}
    {{--                                                    </button>--}}
    {{--                                                </h2>--}}
    {{--                                                <div id="sub-collapseFour" class="accordion-collapse collapse"--}}
    {{--                                                     aria-labelledby="sub-headingFour"--}}
    {{--                                                     data-bs-parent="#sub-accordionExample">--}}
    {{--                                                    <div class="accordion-body">--}}

    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="accordion-item">--}}
    {{--                                                <h2 class="accordion-header" id="sub-headingFour">--}}
    {{--                                                    <button class="accordion-button collapsed" type="button"--}}
    {{--                                                            data-bs-toggle="collapse" data-bs-target="#sub-collapseFour"--}}
    {{--                                                            aria-expanded="false" aria-controls="sub-collapseFour">--}}
    {{--                                                        Lecture 8 (Seller Central)--}}
    {{--                                                    </button>--}}
    {{--                                                </h2>--}}
    {{--                                                <div id="sub-collapseFour" class="accordion-collapse collapse"--}}
    {{--                                                     aria-labelledby="sub-headingFour"--}}
    {{--                                                     data-bs-parent="#sub-accordionExample">--}}
    {{--                                                    <div class="accordion-body">--}}
    {{--                                                        week 4--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                </div>--}}


    {{--                <div class="col-lg-4 right-contents">--}}
    {{--                    <ul>--}}
    {{--                        <li>--}}
    {{--                            <a class="justify-content-between d-flex" href="#">--}}
    {{--                                <p>Trainer’s Name</p>--}}
    {{--                                <span class="or">George Mathews</span>--}}
    {{--                            </a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="justify-content-between d-flex" href="#">--}}
    {{--                                <p>Course Fee </p>--}}
    {{--                                <span>$230</span>--}}
    {{--                            </a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="justify-content-between d-flex" href="#">--}}
    {{--                                <p>Available Seats </p>--}}
    {{--                                <span>15</span>--}}
    {{--                            </a>--}}
    {{--                        </li>--}}
    {{--                        <li>--}}
    {{--                            <a class="justify-content-between d-flex" href="#">--}}
    {{--                                <p>Schedule </p>--}}
    {{--                                <span>2.00 pm to 4.00 pm</span>--}}
    {{--                            </a>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                    <a href="#" class="btn btn-primary text-uppercase enroll rounded-0 text-white">Enroll the--}}
    {{--                        course</a>--}}

    {{--                    <h4 class="title">Reviews</h4>--}}
    {{--                    <div class="content">--}}
    {{--                        <div class="review-top row pt-40">--}}
    {{--                            <div class="col-lg-12">--}}
    {{--                                <h6 class="mb-15">Provide Your Rating</h6>--}}
    {{--                                <div class="d-flex flex-row reviews justify-content-between">--}}
    {{--                                    <span>Quality</span>--}}
    {{--                                    <div class="star">--}}
    {{--                                        <i class="bi bi-star checked"></i>--}}
    {{--                                        <i class="bi bi-star checked"></i>--}}
    {{--                                        <i class="bi bi-star checked"></i>--}}
    {{--                                        <i class="bi bi-star"></i>--}}
    {{--                                        <i class="bi bi-star"></i>--}}
    {{--                                    </div>--}}
    {{--                                    <span>Outstanding</span>--}}
    {{--                                </div>--}}
    {{--                                <div class="d-flex flex-row reviews justify-content-between">--}}
    {{--                                    <span>Puncuality</span>--}}
    {{--                                    <div class="star">--}}
    {{--                                        <i class="bi bi-star checked"></i>--}}
    {{--                                        <i class="bi bi-star checked"></i>--}}
    {{--                                        <i class="bi bi-star checked"></i>--}}
    {{--                                        <i class="bi bi-star"></i>--}}
    {{--                                        <i class="bi bi-star"></i>--}}
    {{--                                    </div>--}}
    {{--                                    <span>Outstanding</span>--}}
    {{--                                </div>--}}
    {{--                                <div class="d-flex flex-row reviews justify-content-between">--}}
    {{--                                    <span>Quality</span>--}}
    {{--                                    <div class="star">--}}
    {{--                                        <i class="bi bi-star checked"></i>--}}
    {{--                                        <i class="bi bi-star checked"></i>--}}
    {{--                                        <i class="bi bi-star checked"></i>--}}
    {{--                                        <i class="bi bi-star"></i>--}}
    {{--                                        <i class="bi bi-star"></i>--}}
    {{--                                    </div>--}}
    {{--                                    <span>Outstanding</span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="feedeback">--}}
    {{--                            <h6>Your Feedback</h6>--}}

    {{--                            <form action="" method="post">--}}
    {{--                                <div class="mb-2">--}}
    {{--                                    <input type="text" placeholder="Enter you Username" name="Username"--}}
    {{--                                           class="form-control" id="" required>--}}
    {{--                                </div>--}}
    {{--                                <div class="mb-2">--}}
    {{--                                    <input type="email" placeholder="Enter you Email" name="Email"--}}
    {{--                                           class="form-control"--}}
    {{--                                           id="" required>--}}
    {{--                                </div>--}}
    {{--                                <div class="mb-2">--}}
    {{--                                    <input type="text" placeholder="Enter you Feedback" name="Feedback"--}}
    {{--                                           class="form-control" id="" required>--}}
    {{--                                </div>--}}
    {{--                                <div class="mt-3 mb-3 text-right">--}}
    {{--                                    <input type="submit" class="btn btn-primary text-right rounded-0 text-white">--}}
    {{--                                </div>--}}
    {{--                            </form>--}}

    {{--                            <div class="comments-area mb-30">--}}

    {{--                                @php--}}
    {{--                                    $feedback = \Illuminate\Support\Facades\DB::table('course_feedback')->where('FeedbackStatus','1')->OrderBy('FeedbackID','DESC')->get();--}}
    {{--                                @endphp--}}
    {{--                                @foreach($feedback as $key => $value)--}}
    {{--                                    @php--}}
    {{--                                        ++$key;--}}
    {{--                                    if($key === 4){--}}
    {{--                                        break;--}}
    {{--                                        }--}}
    {{--                                    @endphp--}}


    {{--                                    <div class="comment-list">--}}
    {{--                                        <div class="single-comment single-reviews justify-content-between d-flex">--}}
    {{--                                            <div class="user justify-content-between d-flex">--}}
    {{--                                                <div class="thumb p-4">--}}
    {{--                                                    <img src="{{asset('assets/img/team-4.jpg')}}" alt="" width="50">--}}
    {{--                                                </div>--}}
    {{--                                                <div class="desc">--}}
    {{--                                                    <h5><a href="#">{{$value->Username}}</a>--}}
    {{--                                                        <div class="star">--}}
    {{--                                                            <span class="bi bi-star checked"></span>--}}
    {{--                                                            <span class="bi bi-star checked"></span>--}}
    {{--                                                            <span class="bi bi-star checked"></span>--}}
    {{--                                                            <span class="bi bi-star"></span>--}}
    {{--                                                            <span class="bi bi-star"></span>--}}
    {{--                                                        </div>--}}
    {{--                                                    </h5>--}}
    {{--                                                    <p class="comment">--}}
    {{--                                                        {{$value->Message}}--}}
    {{--                                                    </p>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                @endforeach--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
@endsection
