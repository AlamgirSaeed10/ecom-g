@extends('includes.master')
@section('title',$title)
@section('content')
    <section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{asset('assets/img/course-details.jpg')}}" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">What you will learn</h4>
                        <div class="content">
                            <ul>
                                <li>Make a passive income with Amazon FBA business!</li>
                                <li>Analyze a product and product category on Amazon with proven criteria in minutes and decide what to sell on Amazon.</li>
                                <li>Negotiate the best price for various manufactured goods.</li>
                                <li>How to sell on Amazon and earn a second income.</li>
                                <li>Work from home as an entrepreneur.</li>
                                <li>Source products from around the world.</li>
                                <li>Minimally be able to find a product that will sell 10 units or a net profit of $100/day.</li>
                                <li>Be able to avoid the pitfalls and costly mistakes often made by new sellers.</li>
                                <li>Save a ton of time by tapping into niches and products that have been already researched.</li>
                                <li>How to avoid getting your seller account suspended.</li>

                            </ul>

                        </div>

                        <h4 class="title">Course Outline</h4>
                        <div class="container mt-3">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                        Week 1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="accordion" id="sub-accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#sub-collapseOne" aria-expanded="true"
                                            aria-controls="sub-collapseOne">
                                        Lecture 1 (Basics):
                                    </button>
                                </h2>
                                <div id="sub-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="sub-headingOne" data-bs-parent="#sub-accordionExample">
                                    <div class="accordion-body">
                                        <p>Why is PH important?</p>
                                        <p>Tools used in PH:</p>
                                        <ul>
                                            <li>Jungle Scout</li>
                                            <li>Viral launch</li>
                                            <li>Helium 10</li>
                                            <li>Merchant Words</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#sub-collapseTwo" aria-expanded="false"
                                            aria-controls="sub-collapseTwo">
                                        Lecture 2 (Product Hunting Techniques):
                                    </button>
                                </h2>
                                <div id="sub-collapseTwo" class="accordion-collapse collapse"
                                     aria-labelledby="sub-headingTwo" data-bs-parent="#sub-accordionExample">
                                    <div class="accordion-body">
                                        <p>Manual Hunting or Product Ideas:</p>
                                        <ul>
                                            <li>Use Amazon Suggestion Expander Ext</li>
                                            <li>Search different keywords in Amazon SearchBar</li>
                                            <li>Search by 123456 method</li>
                                            <li>Amazon Best Sellers</li>
                                            <li>Amazon movers and shakers</li>
                                            <li>Pinterest</li>
                                            <li>Ali Express</li>
                                            <li>Instagram</li>
                                            <li>Facebook</li>
                                            <li>Other E-commerce Websites</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Week 2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="accordion" id="sub-accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#sub-collapseThree" aria-expanded="false"
                                            aria-controls="sub-collapseThree">
                                        Lecture 3 (Product Analysis):
                                    </button>
                                </h2>
                                <div id="sub-collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="sub-headingThree" data-bs-parent="#sub-accordionExample">
                                    <div class="accordion-body">
                                        <p>Hunting Through Tools:</p>
                                        <ul>
                                            <li>Through Jungle Scout Web App</li>
                                            <li>Opportunity Finder</li>
                                            <li>Will explore more!</li>
                                            <li>Through Helium 10</li>
                                            <li>Magnet</li>
                                            <li>Blackbox</li>
                                            <li>Cerebro</li>
                                        </ul>
                                        <p>Product Analysis:</p>
                                        <p>Give them PH criteria first</p>
                                        <p>How to analyze JS</p>
                                        <p>How to analyze H10</p>
                                        <p>How to Analyze Viral Launch</p>
                                        <p>Google Trends</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#sub-collapseFour" aria-expanded="false"
                                            aria-controls="sub-collapseFour">
                                        Lecture 4 (Keyword Research):
                                    </button>
                                </h2>
                                <div id="sub-collapseFour" class="accordion-collapse collapse"
                                     aria-labelledby="sub-headingFour" data-bs-parent="#sub-accordionExample">
                                    <div class="accordion-body">
                                        <p>Keyword research or Competitor Analysis:</p>
                                        <p>Using H10 Magnet</p>
                                        <p>Using Cerebro</p>
                                        <p>How to select your competitor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Week 3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="accordion" id="sub-accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#sub-collapseFive" aria-expanded="false"
                                            aria-controls="sub-collapseFive">
                                        Lecture 5 (Product Sourcing)
                                    </button>
                                </h2>
                                <div id="sub-collapseFive" class="accordion-collapse collapse"
                                     aria-labelledby="sub-headingFive" data-bs-parent="#sub-accordionExample">
                                    <div class="accordion-body">
                                        <p>Product Sourcing</p>
                                        <p>From Alibaba</p>
                                        <p>Assignment: Other Sourcing Platforms</p>
                                        <p>Why Alibaba?</p>
                                        <p>How to Identify the Good Supplier</p>
                                        <p>How to

                                            contact suppliers and contact with them</p>
                                        <p>Shipping Terms: EXW, FOB, DDP</p>
                                        <p>Give a brief intro to them</p>
                                        <p>Product Inspection</p>
                                        <p>After product selection, we need to inspect the product by hiring teams from that Country.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#sub-collapseSix" aria-expanded="false"
                                            aria-controls="sub-collapseSix">
                                        Lecture 6 (Enhanced Brand Content)
                                    </button>
                                </h2>
                                <div id="sub-collapseSix" class="accordion-collapse collapse"
                                     aria-labelledby="sub-headingSix" data-bs-parent="#sub-accordionExample">
                                    <div class="accordion-body">
                                        <p>Feasibility Report:</p>
                                        <p>We need to make feasibility reports per the RFQ.</p>
                                        <p>Listing Creation or Content Writing:</p>
                                        <p>How can we write good listing content?</p>
                                        <p>What are the requirements of Amazon in writing listing content</p>
                                        <p>Keyword research for content</p>
                                        <p>Backend search terms</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Week 4
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="accordion" id="sub-accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#sub-collapseSeven" aria-expanded="false"
                                            aria-controls="sub-collapseSeven">
                                        Lecture 7 (Listing Optimization)
                                    </button>
                                </h2>
                                <div id="sub-collapseSeven" class="accordion-collapse collapse"
                                     aria-labelledby="sub-headingSeven" data-bs-parent="#sub-accordionExample">
                                    <div class="accordion-body">
                                        <p>Patent Check</p>
                                        <p>Design Patent</p>
                                        <p>Utility Patent</p>
                                        <p>PPC Or Listing Optimization</p>
                                        <p>What is ACOS?</p>
                                        <p>How can we select bids?</p>
                                        <p>How to analyze keywords?</p>
                                        <p>How to set a Budget?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#sub-collapseEight" aria-expanded="false"
                                            aria-controls="sub-collapseEight">
                                        Lecture 8 (PPC)
                                    </button>
                                </h2>
                                <div id="sub-collapseEight" class="accordion-collapse collapse"
                                     aria-labelledby="sub-headingEight" data-bs-parent="#sub-accordionExample">
                                    <div class="accordion-body">
                                        <p>Advertisement Ways</p>
                                        <p>SABO</p>
                                        <p>Affiliate marketing</p>
                                        <p>Giveaways</p>
                                        <p>Fb Ads</p>
                                        <p>How to list PL Products on Seller Central.</p>
                                        <p>How to set and manage campaigns.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    </div>

                </div>


                <div class="col-lg-4 right-contents">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Trainer’s Name</p>
                                <span class="or">Shumaila Bashir</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Course Fee </p>
                                <span>$230</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Available Seats </p>
                                <span>15</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Schedule </p>
                                <span>2.00 pm to 4.00 pm</span>
                            </a>
                        </li>
                    </ul>
                    <a href="{{route('pages.enrollment')}}" class="btn btn-primary text-uppercase enroll rounded-0 text-white">Enroll the
                        course</a>

                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                <h6 class="mb-15">Provide Your Rating</h6>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="star">
                                        <i class="bi bi-star checked"></i>
                                        <i class="bi bi-star checked"></i>
                                        <i class="bi bi-star checked"></i>
                                        <i class="bi bi-star checked"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Punctuality</span>
                                    <div class="star">
                                        <i class="bi bi-star checked"></i>
                                        <i class="bi bi-star checked"></i>
                                        <i class="bi bi-star checked"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="star">
                                        <i class="bi bi-star checked"></i>
                                        <i class="bi bi-star checked"></i>
                                        <i class="bi bi-star checked"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                            </div>
                        </div>
                        <div class="feedeback">
                            <h6>Your Feedback</h6>

                            <form action="" method="post">
                                <div class="mb-2">
                                    <input type="text" placeholder="Enter you Username" name="Username"
                                           class="form-control" id="" required>
                                </div>
                                <div class="mb-2">
                                    <input type="email" placeholder="Enter you Email" name="Email"
                                           class="form-control"
                                           id="" required>
                                </div>
                                <div class="mb-2">
                                    <input type="text" placeholder="Enter you Feedback" name="Feedback"
                                           class="form-control" id="" required>
                                </div>
                                <div class="mt-3 mb-3 text-right">
                                    <input type="submit" class="btn btn-primary text-right rounded-0 text-white">
                                </div>
                            </form>

                            <div class="comments-area mb-30">

                                @php
                                    $feedback = \Illuminate\Support\Facades\DB::table('course_feedback')->where('FeedbackStatus','1')->OrderBy('FeedbackID','DESC')->get();
                                @endphp
                                @foreach($feedback as $key => $value)
                                    @php
                                        ++$key;
                                    if($key === 4){
                                        break;
                                        }
                                    @endphp


                                    <div class="comment-list">
                                        <div class="single-comment single-reviews justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb p-4">
                                                    <img src="{{asset('assets/img/team-4.jpg')}}" alt="" width="50">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">{{$value->Username}}</a>
                                                        <div class="star">
                                                            <span class="bi bi-star checked"></span>
                                                            <span class="bi bi-star checked"></span>
                                                            <span class="bi bi-star checked"></span>
                                                            <span class="bi bi-star"></span>
                                                            <span class="bi bi-star"></span>
                                                        </div>
                                                    </h5>
                                                    <p class="comment">
                                                        {{$value->Message}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
