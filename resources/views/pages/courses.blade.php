@extends('includes.master')
@section('title',$title)
@section('content')
    <style>
        .content-detail {
            display: none;
        }

        /*.course_list li:before {*/
        /*    content: '\f00c'; !* Checkmark icon *!*/
        /*    font-family: 'Font Awesome\ 5 Free', serif;*/
        /*    font-weight: 900;*/
        /*    margin-right: 10px;*/
        /*}*/

        .course_list h6:before {
            content: '\f02d'; /* Book icon */
            font-family: 'Font Awesome\ 5 Free', serif;
            margin-right: 10px;
        }

    </style>
    <section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{asset('assets/img/course-details.jpg')}}" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">Objectives</h4>
                        <div class="content" style="">
                            When you enter into any new area of science, you almost always find yourself with a
                            baffling new language of
                            technical terms to learn before you can converse with the experts. This is certainly
                            true in astronomy both in
                            terms of terms that refer to the cosmos and terms that describe the tools of the trade,
                            the most prevalent
                            being the telescope.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                        </div>

                        <h4 class="title">Eligibility</h4>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                            <br>
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea
                            commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum. Lorem ipsum dolor sit
                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum.
                        </div>

                        <h4 class="title">Course Outline</h4>
                        <div class="content">
                            <ul class="course_list">
                                <li class="justify-content-between d-flex">
                                    <h6>Lecture 1 (Basics):</h6>
                                    <a class="primary-btn text-uppercase collapsible justify-content-between">View Details</a>
                                </li>
                                <div class="content-detail">
                                    <p>E-commerce Vs Commerce</p>
                                    <p>Amazon and Why; preferred Amazon over Other E-commerce Platforms</p>
                                    <p>Amazon marketplaces like the USA, and Canada, give them research to find others</p>
                                    <p>General Business Models:</p>
                                    <ul>
                                        <li>B2B, B2C, C2B</li>
                                        <li>C2C, give them research</li>
                                    </ul>
                                    <p>Amazon Models:</p>
                                    <ul>
                                        <li>Wholesale Vs PL</li>
                                        <li>Which one is best and Why?</li>
                                        <li>Difference between them</li>
                                    </ul>
                                    <p>Amazon Important Acronyms:</p>
                                    <ul>
                                        <li>SKU, MOQ, UPC, EAN, FNSKU, MRP, MSRP, FBA Vs FBM, MCH, ODR, MAP</li>
                                    </ul>
                                    <p>Tell them how to change the location on Amazon’s website</p>
                                    <p>Tell them a little about their next lecture.</p>

                                </div>

                                <li class="justify-content-between d-flex">
                                    <h6>Lecture 2 (Wholesale Models):</h6>
                                    <a class="primary-btn text-uppercase collapsible justify-content-between">View Details</a>
                                </li>
                                <div class="content-detail">
                                    <p>Direct Sourcing and Reverse Sourcing</p>
                                    <p>Explain the difference and best method</p>
                                    <p>Direct Sourcing</p>
                                    <p>Generate Leads</p>
                                    <p>Ways of generating leads</p>
                                    <ul>
                                        <li>Google</li>
                                        <li>Map</li>
                                        <li>Directories, give them research</li>
                                        <li>LinkedIn</li>
                                        <li>Another way of finding the leads, give them research</li>
                                    </ul>
                                    <p>How to verify the lead as the correct lead</p>
                                    <p>Data we need from the websites or for leads</p>
                                </div>

                                <li class="justify-content-between d-flex">
                                    <h6>Lecture 3 (Communication with Suppliers)</h6>
                                    <a class="primary-btn text-uppercase collapsible justify-content-between">View Details</a>
                                </li>
                                <div class="content-detail">
                                    <p>Emailing, Calls, Contact Us form, Live Chat</p>
                                    <p>Why is Call better?</p>
                                    <p>Email Purpose, Format of emails</p>
                                    <p>Signature Important, why?</p>
                                    <p>Create a Template and Signature, give them research</p>
                                    <p>Adding it in Gmail settings</p>
                                    <p>Send emails to suppliers and check their responses</p>
                                </div>

                                <li class="justify-content-between d-flex">
                                    <h6>Lecture 4 (Product Analysis)</h6>
                                    <a class="primary-btn text-uppercase collapsible justify-content-between">View Details</a>
                                </li>
                                <div class="content-detail">
                                    <p>Account Creation:</p>
                                    <p>Why is Account Important, how we can create it, and what are the essential documents we need for it?</p>
                                    <p>After Account Creation:</p>
                                    <p>Catalog, Daily Deals, Website Hunting, and Telegram Channels</p>
                                    <p>Product Analysis:</p>
                                    <ul class="">
                                        <li>Current Selling Price: $15-$200</li>
                                        <li>Ratings: >3.5</li>
                                        <li>No Brand Dominance</li>
                                        <li>No Amazon Dominance</li>
                                        <li>No IP Complaint</li>
                                        <li>No Hazmat</li>
                                        <li>No FBM/FBA Seller Dominance</li>
                                        <li>Number of Sellers: >=3 with at least 1 or 2 FBA sellers</li>
                                        <li>At least 1 FBA seller should be selling</li>
                                        <li>(90 Days) BSR should be below 70K</li>
                                        <li>Sales should be at least 30 to 60 units/seller/month according to the fba tool kit</li>
                                        <li>Not more than 3 variations, and if variations exist, then run H10 review insight to check reviews shared on your selected variation</li>
                                        <li>Don't go with the product for which Keep is not giving the BSR of the root category if you run H10 Xray on it, you will get the sales stats as N/A</li>
                                        <li>Don't go with the product in which buy box rotation is not occurring"</li>
                                        <li>Profit: >= $2 (at 90 days keep avg price)</li>
                                        <li>Profit Margin >= 15%</li>
                                        <li>Weight <= 10 lbs</li>
                                        <li>The supplier should not have paid a subscription to continue purchasing.</li>
                                    </ul>
                                </div>

                                <li class="justify-content-between d-flex">
                                    <h6>Lecture 5 (Catalog Analysis)</h6>
                                    <a class="primary-btn text-uppercase collapsible justify-content-between">View Details</a>
                                </li>
                                <div class="content-detail">
                                    <p>Tools for catalog analysis</p>
                                    <p>Valid catalog and which columns are necessary?</p>
                                    <p>How we can analyze the catalog through keepa</p>
                                    <p>Give them a catalog and ask them to analyze the products</p>
                                </div>

                                <li class="justify-content-between d-flex">
                                    <h6>Lecture 6 (Reverse Sourcing)</h6>
                                    <a class="primary-btn text-uppercase collapsible justify-content-between">View Details</a>
                                </li>
                                <div class="content-detail">
                                    <p>Ways of reverse sourcing?</p>
                                    <p>Keep a > Product Viewer</p>
                                    <p>Seller ID</p>
                                    <p>Store Snipping</p>
                                    <p>Manual Hunting from Amazon</p>
                                    <p>Keep a best sellers</p>
                                    <p>Give them time to practice it</p>
                                </div>
                                <li class="justify-content-between d-flex">
                                    <h6>Lecture 7 (Brand Hunting)</h6>
                                    <a class="primary-btn text-uppercase collapsible justify-content-between">View Details</a>
                                </li>
                                <div class="content-detail">
                                    <p>Ways of hunting brands:</p>
                                    <p>SmartScout</p>
                                    <p>Keepa</p>
                                    <p>Hunt product and approach the brand</p>
                                    <p>Why is hunting brands more important than wholesalers or closeouts?</p>
                                    <p>How can we contact the brand?</p>
                                    <p>Contacting brand strategies:</p>
                                    <ul>
                                        <li>Budget</li>
                                        <li>Case Study of the Brand</li>
                                        <li>Hunt 3 - 4 products first then contact</li>
                                        <li>Check the LinkedIn profile of the brand first</li>
                                        <li>Hunt new brands first then go for OLD</li>
                                    </ul>
                                </div>

                                <li class="justify-content-between d-flex">
                                    <h6>Lecture 8 (Seller Central)</h6>
                                    <a class="primary-btn text-uppercase collapsible justify-content-between">View Details</a>
                                </li>
                                <div class="content-detail">
                                    <p>Profit Calculation</p>
                                    <p>Seller Central Management</p>
                                    <p>IP Issues</p>
                                    <p>How to solve them?</p>
                                    <p>Fake Invoice Vs Authentic Invoices</p>
                                    <p>IPI</p>
                                </div>

                            </ul>
                        </div>

                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Trainer’s Name</p>
                                <span class="or">George Mathews</span>
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
                    <a href="#" class="btn btn-primary text-uppercase enroll rounded-0 text-white">Enroll the course</a>

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
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Puncuality</span>
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
                                    <input type="text" placeholder="Enter you Username" name="Username" class="form-control" id="" required>
                                </div>
                                <div class="mb-2">
                                    <input type="email" placeholder="Enter you Email" name="Email" class="form-control" id="" required>
                                </div>
                                <div class="mb-2">
                                    <input type="text" placeholder="Enter you Feedback" name="Feedback" class="form-control" id="" required>
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
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>

        var collapsibleItems = document.getElementsByClassName('collapsible');
        for (var i = 0; i < collapsibleItems.length; i++) {
            collapsibleItems[i].addEventListener('click', function () {
                this.classList.toggle('active');
                var content = this.parentNode.nextElementSibling;
                if (content.style.display === 'block') {
                    content.style.display = 'none';
                } else {
                    content.style.display = 'block';
                }
            });
        }


    </script>

@endsection
