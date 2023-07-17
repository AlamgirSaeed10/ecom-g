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
                                <li>How to start &amp; scale a wholesale business from home.</li>
                                <li>A starter list of 5k+ reputable wholesale suppliers we have experienced.</li>
                                <li>How to use software to find profitable wholesale products you can source super
                                    quickly.
                                </li>
                                <li>How to win buy box and why it is necessary to win.</li>
                                <li>How to take advantage of existing, established Amazon listings.</li>
                                <li>Get approved to sell popular branded products.</li>
                                <li>Know the account health parameters and IPI score.</li>
                                <li>Utilizing a prep and pack to save your time and money.</li>
                                <li>Know how to call and communicate with Brands.</li>
                                <li>How to start with online arbitrage products.</li>
                            </ul>

                        </div>


                        <h4 class="title">Course Outline</h4>
                        <div class="container mt-3">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Week #1
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                         aria-labelledby="headingOne"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="accordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="sub-headingOne">
                                                        <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#sub-collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                            Lecture 1(Basics):
                                                        </button>
                                                    </h2>
                                                    <div id="sub-collapseOne" class="accordion-collapse collapse"
                                                         aria-labelledby="sub-headingOne"
                                                         data-bs-parent="#sub-accordionExample">
                                                        <div class="accordion-body">
                                                            <ol>
                                                                <li>E-commerce Vs Commerce</li>
                                                                <li>Amazon and Why; preferred Amazon to Other
                                                                    E-commerce Platforms
                                                                </li>
                                                                <li>Amazon marketplaces like the USA, and Canada, give
                                                                    them research to find others
                                                                </li>
                                                                <li>General Business Models:
                                                                    <ol type="a">
                                                                        <li>B2B, B2C, C2B</li>
                                                                        <li>C2C, give them research</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Amazon Models:
                                                                    <ol type="a">
                                                                        <li>Wholesale Vs PL</li>
                                                                        <li>Which one is best and Why?</li>
                                                                        <li>Difference between them</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Amazon Important Acronyms:
                                                                    <ol type="a">
                                                                        <li>SKU</li>
                                                                        <li>MOQ</li>
                                                                        <li>UPC</li>
                                                                        <li>EAN</li>
                                                                        <li>FNSKU</li>
                                                                        <li>MRP</li>
                                                                        <li>MSRP</li>
                                                                        <li>FBA Vs FBM</li>
                                                                        <li>MCH</li>
                                                                        <li>ODR</li>
                                                                        <li>MAP</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Tell them how to change the location on Amazon’s
                                                                    website
                                                                </li>
                                                                <li>Tell them a little about their next lecture.</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="sub-headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#sub-collapseTwo" aria-expanded="false"
                                                                aria-controls="sub-collapseTwo">
                                                            Lecture 2 (Wholesale Models):
                                                        </button>
                                                    </h2>
                                                    <div id="sub-collapseTwo" class="accordion-collapse collapse"
                                                         aria-labelledby="sub-headingTwo"
                                                         data-bs-parent="#sub-accordionExample">
                                                        <div class="accordion-body">
                                                            <ol>
                                                                <li>Direct Sourcing and Reverse Sourcing</li>
                                                                <li>Explain the difference and best method</li>
                                                                <li>Direct Sourcing</li>
                                                                <li>Generate Leads</li>
                                                                <li>Ways of generating leads
                                                                    <ol type="a">
                                                                        <li>Google</li>
                                                                        <li>Map</li>
                                                                        <li>Directories, give them research</li>
                                                                        <li>LinkedIn</li>
                                                                        <li>Another way of finding the leads, give them
                                                                            research
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li>How to verify the lead as the correct lead</li>
                                                                <li>Data we need from the websites or for leads</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            Week #2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="accordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="sub-headingOne">
                                                        <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#sub-collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                            Lecture 3 (Communication with Suppliers)
                                                        </button>
                                                    </h2>
                                                    <div id="sub-collapseOne" class="accordion-collapse collapse"
                                                         aria-labelledby="sub-headingOne"
                                                         data-bs-parent="#sub-accordionExample">
                                                        <div class="accordion-body">

                                                            <ol>
                                                                <li>Emailing, Calls, Contact Us form, Live Chat</li>
                                                                <li>Why is Call better?</li>
                                                                <li>Email Purpose, Format of emails</li>
                                                                <li>Signature Important, why?</li>
                                                                <li>Create a Template and Signature, give them
                                                                    research
                                                                </li>
                                                                <li>Adding it in Gmail settings</li>
                                                                <li>Send emails to suppliers and check their responses
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="sub-headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#sub-collapseTwo" aria-expanded="false"
                                                                aria-controls="sub-collapseTwo">
                                                            Lecture 4 (Product Analysis)
                                                        </button>
                                                    </h2>
                                                    <div id="sub-collapseTwo" class="accordion-collapse collapse"
                                                         aria-labelledby="sub-headingTwo"
                                                         data-bs-parent="#sub-accordionExample">
                                                        <div class="accordion-body">
                                                            <ol>
                                                                <li>Account Creation:
                                                                    <ol type="a">
                                                                        <li>Why is Account Important?</li>
                                                                        <li>How we can create it?</li>
                                                                        <li>What are the essential documents we need for
                                                                            it?
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li>After Account Creation:
                                                                    <ol type="a">
                                                                        <li>Catalog</li>
                                                                        <li>Daily Deals</li>
                                                                        <li>Website Hunting</li>
                                                                        <li>Telegram Channels</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Product Analysis:
                                                                    <ol type="a">
                                                                        <li>There will be certain criteria for product
                                                                            analysis
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                            </ol>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            Week #3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="headingThree"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="accordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="sub-headingOne">
                                                        <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#sub-collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                            Lecture 5 (Catalog Analysis)
                                                        </button>
                                                    </h2>
                                                    <div id="sub-collapseOne" class="accordion-collapse collapse"
                                                         aria-labelledby="sub-headingOne"
                                                         data-bs-parent="#sub-accordionExample">
                                                        <div class="accordion-body">
                                                            <ol>
                                                                <li>Tools for catalog analysis</li>
                                                                <li>Valid catalog and which columns are necessary?</li>
                                                                <li>How we can analyze the catalog through Keepa</li>
                                                                <li>Give them a catalog and ask them to analyze the
                                                                    products
                                                                </li>
                                                            </ol>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="sub-headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#sub-collapseTwo" aria-expanded="false"
                                                                aria-controls="sub-collapseTwo">
                                                            Lecture 6(Reverse Sourcing)
                                                        </button>
                                                    </h2>
                                                    <div id="sub-collapseTwo" class="accordion-collapse collapse"
                                                         aria-labelledby="sub-headingTwo"
                                                         data-bs-parent="#sub-accordionExample">
                                                        <div class="accordion-body">

                                                            <ol>
                                                                <li>Ways of reverse sourcing:
                                                                    <ol type="a">
                                                                        <li>Keepa > Product Viewer</li>
                                                                        <li>Seller ID</li>
                                                                        <li>Store Snipping</li>
                                                                        <li>Manual Hunting from Amazon</li>
                                                                        <li>Keepa best sellers</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Give them time to practice it</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                            Week #4
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                         aria-labelledby="headingFour"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="accordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="sub-headingFour">
                                                        <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#sub-collapseFour" aria-expanded="true"
                                                                aria-controls="collapseFour">
                                                            Lecture 7 (Brand Hunting)
                                                        </button>
                                                    </h2>
                                                    <div id="sub-collapseFour" class="accordion-collapse collapse"
                                                         aria-labelledby="sub-headingFour"
                                                         data-bs-parent="#sub-accordionExample">
                                                        <div class="accordion-body">

                                                            <ol>
                                                                <li>Ways of hunting brands:
                                                                    <ol type="a">
                                                                        <li>SmartScout</li>
                                                                        <li>Keepa</li>
                                                                        <li>Hunt product and approach the brand</li>
                                                                    </ol>
                                                                </li>
                                                                <li>Why is hunting brands more important than
                                                                    wholesalers or closeouts?
                                                                </li>
                                                                <li>How can we contact the brand?</li>
                                                                <li>Contacting brand strategies:
                                                                    <ol type="a">
                                                                        <li>Budget</li>
                                                                        <li>Case Study of the Brand</li>
                                                                        <li>Hunt 3 - 4 products first then contact</li>
                                                                        <li>Check the LinkedIn profile of the brand
                                                                            first
                                                                        </li>
                                                                        <li>Hunt new brands first then go for OLD</li>
                                                                    </ol>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="sub-headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#sub-collapseTwo" aria-expanded="false"
                                                                aria-controls="sub-collapseTwo">
                                                            Lecture 8 (Seller Central)
                                                        </button>
                                                    </h2>
                                                    <div id="sub-collapseTwo" class="accordion-collapse collapse"
                                                         aria-labelledby="sub-headingTwo"
                                                         data-bs-parent="#sub-accordionExample">
                                                        <div class="accordion-body">
                                                            <ol>
                                                                <li>Profit Calculation</li>
                                                                <li>Seller Central Management</li>
                                                                <li>IP Issues</li>
                                                                <li>How to solve them?</li>
                                                                <li>Fake Invoice Vs Authentic Invoices</li>
                                                                <li>IPI</li>
                                                            </ol>

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
                                <span class="or">Ammar Haider</span>
                            </a>
                        </li>


                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Course Fee </p>
                                <span>PKR 25,000 /-</span>
                            </a>
                        </li>

                        <li>
                            <div class="dropdown">
                                <a class=" justify-content-between d-flex" href="#" role="button"
                                   id="availabilityDropdown"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                   onclick="toggleAvailability()">
                                    <p>Available Seats</p>
                                    <i class="bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="p-3" id="availabilityDiv" style="display: none;">
                                <h6 class="p-1">Online<p class="float-end">10</p></h6>
                                <h6 class="p-1">OnSite<p class="float-end">10</p></h6>
                            </div>
                        </li>

                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Schedule </p>
                                <span>2.00 pm to 4.00 pm</span>
                            </a>
                        </li>
                    </ul>


                    <a href="{{route('pages.enrollment')}}"
                       class="btn btn-primary text-uppercase enroll rounded-0 text-white">Enroll the
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

    <script>
        const accordionItems = document.querySelectorAll(".accordion-item");

        accordionItems.forEach((item) => {
            const header = item.querySelector(".accordion-header button");
            header.addEventListener("click", () => {
                item.classList.toggle("show");

                if (item.classList.contains("show")) {
                    const content = item.querySelector(".accordion-collapse");
                    const contentHeight = content.scrollHeight;
                    content.style.height = contentHeight + "px";
                } else {
                    item.querySelector(".accordion-collapse").style.height = 0;
                }
            });
        });

        function toggleAvailability() {
            var availabilityDiv = document.getElementById('availabilityDiv');
            availabilityDiv.style.display = (availabilityDiv.style.display === 'block') ? 'none' : 'block';
        }
    </script>

@endsection
