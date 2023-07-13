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
                                <li>Dozens of Digital Marketing Strategies</li>
                                <li>ChatGPT and Bard AI-powered marketing</li>
                                <li>Social media marketing using the most popular platforms</li>
                                <li>Facebook Meta Business Suit</li>
                                <li>Google Search Engine Optimization</li>
                                <li>Data Analytics tools and benefits</li>
                                <li>Email and content marketing</li>
                                <li>Evolution and benefits of digital marketing</li>
                                <li>Influencer and Affiliate Marketing</li>
                                <li>Leads data collection using data scraping tools</li>

                            </ul>

                        </div>

                        <h4 class="title">Course Outline</h4>
    <div class="container mt-3">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                        Module 1 (Introduction to Digital Marketing)
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <li>a) What is digital marketing?</li>
                            <li>b) Digital Marketing vs. Traditional Marketing</li>
                            <li>c) Evolution of Digital Marketing</li>
                            <li>d) Benefits of Digital Marketing</li>
                            <li>e) Types of Digital Marketing</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Module 2 (Digital Marketing Strategies)
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <li>a) Search Engine Optimization (SEO)
                                <ol type="i">
                                    <li>search engine algorithms</li>
                                    <li>Keyword research and on-page optimization</li>
                                    <li>Technical SEO and website performance</li>
                                    <li>Link building and on/off-page optimization strategies</li>
                                    <li>Tools and resources for SEO</li>
                                </ol>
                            </li>
                            <li>b) Guest Posting
                                <ol type="i">
                                    <li>Search Guest Posting Website</li>
                                    <li>Mailing request for Guest Posting</li>
                                </ol>
                            </li>
                            <li>c) Search Engine Marketing (SEM)
                                <ol type="i">
                                    <li>What is SEM?</li>
                                    <li>Types of SEM campaigns</li>
                                    <li>Create and manage SEM campaigns</li>
                                    <li>Tools and resources for SEM</li>
                                </ol>
                            </li>
                            <li>d) Pay-per-click (PPC)
                                <ol type="i">
                                    <li>Introduction to search engine advertising</li>
                                    <li>Google Ads and Bing Ads platforms</li>
                                    <li>Creating effective ad campaigns and ad groups</li>
                                    <li>Ad targeting, bidding strategies, and budget management</li>
                                </ol>
                            </li>
                            <li>e) Content Marketing
                                <ol type="i">
                                    <li>Creating a content marketing strategy</li>
                                    <li>Content ideation and creation</li>
                                    <li>Content distribution and promotion</li>
                                    <li>Measuring content marketing success</li>
                                </ol>
                            </li>
                            <li>f) Social Media Marketing
                                <ol type="i">
                                    <li>Major social media platforms and their demographics
                                        <ul>
                                            <li>Facebook Meta Business Account, Pixel</li>
                                            <li>Instagram Business Account, Facebook linking, Hashtags</li>
                                            <li>LinkedIn Business Account</li>
                                            <li>Twitter Business Account</li>
                                            <li>Youtube channel, youtube studio, shorts, reels</li>
                                            <li>Google keyword planner</li>
                                            <li>Tiktok Reels</li>
                                        </ul>
                                    </li>
                                    <li>Content creation and curation</li>
                                    <li>Paid and lead advertisements on social media</li>
                                </ol>
                            </li>
                            <li>g) Email marketing
                                <ol type="i">
                                    <li>Building an email list and segmentation</li>
                                    <li>Email campaign planning and automation</li>
                                    <li>Email content and subject lines</li>
                                    <li>Analyzing email marketing metrics</li>
                                </ol>
                            </li>
                            <li>h) Influencer and Affiliate Marketing
                                <ol type="i">
                                    <li>Understanding influencer marketing and its impact</li>
                                    <li>Identifying relevant influencers and building relationships</li>
                                    <li>Campaign planning and execution</li>
                                    <li>Monitoring and measuring influencer marketing campaigns</li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Module 3 (Data Analytics)
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <li>i) Web analytics tools
                                <ul>
                                    <li>Google Analytics</li>
                                    <li>Search Console</li>
                                    <li>Data Studio</li>
                                    <li>Page Speed Insight</li>
                                    <li>AdWords</li>
                                    <li>AdSense</li>
                                </ul>
                            </li>
                            <li>ii) Data Scraping, and its tools</li>
                            <li>iii) SWOT Analysis</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Module 4 (Emerging Trends and Future of Digital Marketing)
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <li>i) Exploring the latest digital marketing trends</li>
                            <li>ii) Voice search and AI-powered marketing
                                <ul>
                                    <li>ChatGPT and Bard AI</li>
                                </ul>
                            </li>
                            <li>iii) Augmented reality (AR) and virtual reality (VR) in marketing</li>
                            <li>iv) Ethical considerations in digital marketing</li>
                        </ol>
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
                                <span class="or">Ayesha Naveed</span>
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
