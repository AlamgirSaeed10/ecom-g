@extends('includes.master')
@section('title',$title)
@section('content')

<style>
    p.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
    margin-bottom:10px;
}

/* Add a background color to the accordion if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
p.accordion.active, p.accordion:hover {
    background-color: #ddd;
}

/* Unicode character for "plus" sign (+) */
p.accordion:after {
    content: '\2795'; 
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

/* Unicode character for "minus" sign (-) */
p.accordion.active:after {
    content: "\2796"; 
}

/* Style the element that is used for the panel class */

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.4s ease-in-out;
    opacity: 0;
    margin-bottom:10px;
}

div.panel.show {
    opacity: 1;
    max-height: 9999px;
}
</style>

    <section class="course_details_area section_gap">
             
        <div class="container">
            <div class="row">
                @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{asset('assets/img/gallery/featured3.webp')}}" alt="">
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

<div class="accordion-container">

<p class="accordion"> Module 1 (Introduction to Digital Marketing)</p>
<div class="panel">
     <ol>
                                                <li> What is digital marketing?</li>
                                                <li> Digital Marketing vs. Traditional Marketing</li>
                                                <li> Evolution of Digital Marketing</li>
                                                <li> Benefits of Digital Marketing</li>
                                                <li> Types of Digital Marketing</li>
                                            </ol>
</div>

<p class="accordion"> Module 2 (Digital Marketing Strategies)</p>
<div class="panel">
<ol>
                                                <li> Search Engine Optimization (SEO)
                                                    <ol type="i">
                                                        <li>search engine algorithms</li>
                                                        <li>Keyword research and on-page optimization</li>
                                                        <li>Technical SEO and website performance</li>
                                                        <li>Link building and on/off-page optimization strategies</li>
                                                        <li>Tools and resources for SEO</li>
                                                    </ol>
                                                </li>
                                                <li> Guest Posting
                                                    <ol type="i">
                                                        <li>Search Guest Posting Website</li>
                                                        <li>Mailing request for Guest Posting</li>
                                                    </ol>
                                                </li>
                                                <li> Search Engine Marketing (SEM)
                                                    <ol type="i">
                                                        <li>What is SEM?</li>
                                                        <li>Types of SEM campaigns</li>
                                                        <li>Create and manage SEM campaigns</li>
                                                        <li>Tools and resources for SEM</li>
                                                    </ol>
                                                </li>
                                                <li> Pay-per-click (PPC)
                                                    <ol type="i">
                                                        <li>Introduction to search engine advertising</li>
                                                        <li>Google Ads and Bing Ads platforms</li>
                                                        <li>Creating effective ad campaigns and ad groups</li>
                                                        <li>Ad targeting, bidding strategies, and budget management</li>
                                                    </ol>
                                                </li>
                                                <li> Content Marketing
                                                    <ol type="i">
                                                        <li>Creating a content marketing strategy</li>
                                                        <li>Content ideation and creation</li>
                                                        <li>Content distribution and promotion</li>
                                                        <li>Measuring content marketing success</li>
                                                    </ol>
                                                </li>
                                                <li> Social Media Marketing
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
                                                <li> Email marketing
                                                    <ol type="i">
                                                        <li>Building an email list and segmentation</li>
                                                        <li>Email campaign planning and automation</li>
                                                        <li>Email content and subject lines</li>
                                                        <li>Analyzing email marketing metrics</li>
                                                    </ol>
                                                </li>
                                                <li> Influencer and Affiliate Marketing
                                                    <ol type="i">
                                                        <li>Understanding influencer marketing and its impact</li>
                                                        <li>Identifying relevant influencers and building relationships</li>
                                                        <li>Campaign planning and execution</li>
                                                        <li>Monitoring and measuring influencer marketing campaigns</li>
                                                    </ol>
                                                </li>
                                            </ol>
</div>

<p class="accordion"> Module 3 (Data Analytics)</p>
<div class="panel">
    <ol>
                                                <li> Web analytics tools
                                                    <ul>
                                                        <li>Google Analytics</li>
                                                        <li>Search Console</li>
                                                        <li>Data Studio</li>
                                                        <li>Page Speed Insight</li>
                                                        <li>AdWords</li>
                                                        <li>AdSense</li>
                                                    </ul>
                                                </li>
                                                <li> Data Scraping, and its tools</li>
                                                <li> SWOT Analysis</li>
                                            </ol>
</div>

<p class="accordion">Module 4 (Emerging Trends and Future of Digital Marketing)</p>
<div class="panel"><ol>
                                                <li> Exploring the latest digital marketing trends</li>
                                                <li> Voice search and AI-powered marketing
                                                    <ul>
                                                        <li>ChatGPT and Bard AI</li>
                                                    </ul>
                                                </li>
                                                <li> Augmented reality (AR) and virtual reality (VR) in marketing</li>
                                                <li> Ethical considerations in digital marketing</li>
                                            </ol>
                                            </div>

</div>


                        <h4 class="title">Requirements</h4>
                        <div class="content">
                            <ul>
                                <li>Essential equipment includes a computer/laptop, a reliable Internet connection, and Google Chrome or any browser.</li>
                                <li>It is recommended but not required to have a mobile for running social apps.</li>
                                <li>No prior knowledge or experience in marketing is required to enroll in this course.</li>
                                <li>You should be ready to take action and see real results!</li>

                            </ul>

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
                                <span>PKR 30,000 /- </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a class=" justify-content-between d-flex" href="#" role="button" id="availabilityDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="toggleAvailability()">
                                    <p>Available Seats</p>
                                    <i class="bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="p-3" id="availabilityDiv" style="display: none;">
                                <h6 class="p-1">Online<p class="float-end">15</p></h6>
                                <h6 class="p-1">OnSite<p class="float-end">09</p></h6>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a class=" justify-content-between d-flex" href="#" role="button" id="commencementDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="toggleCommecement()">
                                    <p>Commencement of Training</p>
                                    <i class="bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="p-3" id="commencementDiv" style="display: none;">
                                <h6 class="p-1">Online<p class="float-end">TBD</p></h6>
                                <h6 class="p-1">OnSite<p class="float-end">Immediate</p></h6>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a class=" justify-content-between d-flex" href="#" role="button" id="deadlineDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="toggleDeadline()">
                                    <p>Enrollment Deadline</p>
                                    <i class="bi-chevron-down"></i>
                                </a>
                            </div>
                            <div class="p-3" id="deadlineDiv" style="display: none;">
                                <h6 class="p-1">Online<p class="float-end">TBD</p></h6>
                                <h6 class="p-1">OnSite<p class="float-end">Rolling Admissions</p></h6>
                            </div>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Course Duration </p>
                                <span> 1.5 Months (Avg.)</span>
                            </a>
                        </li>
                    </ul>
                    <a href="{{route('pages.enrollment')}}" class="btn btn-primary text-uppercase enroll rounded-0 text-white">Enroll the
                        course</a>

                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                <h6>Teaching style &amp; communication</h5>
                                    <!--<div class="d-flex flex-row reviews justify-content-between">-->
                                    <div class="star" style="float: right;">
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <br>
                                    <!--<span>Outstanding</span>-->
                                <!--</div>-->
                                    <h6>Relevance &amp; Content Quality</h6>
                                    <!--<div class="d-flex flex-row reviews justify-content-between">-->
                                    <div class="star" style="float: right;">
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <!--<span>Outstanding</span>-->
                                <!--</div>-->
                                <br>
                                    <h6>Responsiveness &amp; Support</h6>
                                    <!--<div class="d-flex flex-row reviews justify-content-between">-->
                                    <div class="star" style="float: right;">
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                    <!--<span>Outstanding</span>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="feedeback">
                            <h6>Your Feedback</h6>
                            <h7>Be the first to review your learning experience.</h7>
                       

                            <form action="{{route('courses.feedback')}}" method="post">
                                @csrf
                                <div class="mb-2">
                                    <input type="hidden" name="CourseCode" value="dm" required>
                                   
                                    <input type="text" placeholder="Enter you Name" name="Username"
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
                                    $feedback = \Illuminate\Support\Facades\DB::table('course_feedback')->where('FeedbackStatus','1')->where('CourseCode','dm')->OrderBy('FeedbackID','DESC')->get();
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
                                                    <img src="https://cdn-icons-png.flaticon.com/512/707/707675.png" alt="user testimonial icon" width="50">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">{{$value->Username}}</a>
                                                        <div class="star">
                                                            <span class="bi bi-star-fill checked"></span>
                                                            <span class="bi bi-star-fill checked"></span>
                                                            <span class="bi bi-star-fill checked"></span>
                                                            <span class="bi bi-star-fill checked"></span>
                                                            <span class="bi bi-star-fill checked"></span>
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
       function toggleAvailability() {
            var availabilityDiv = document.getElementById('availabilityDiv');
            availabilityDiv.style.display = (availabilityDiv.style.display === 'block') ? 'none' : 'block';
        }
        function toggleCommecement() {
            var commencementDiv = document.getElementById('commencementDiv');
            commencementDiv.style.display = (commencementDiv.style.display === 'block') ? 'none' : 'block';
        }
        function toggleDeadline() {
            var deadlineDiv = document.getElementById('deadlineDiv');
            deadlineDiv.style.display = (deadlineDiv.style.display === 'block') ? 'none' : 'block';
        }

var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
 acc[i].onclick = function(){
 this.classList.toggle("active");
 this.nextElementSibling.classList.toggle("show");
};
}

    </script>
@endsection
