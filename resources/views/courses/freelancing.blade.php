@php use Illuminate\Support\Facades\DB; @endphp
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
                        <img class="img-fluid" src="{{asset('assets/img/gallery/featured4.webp')}}" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">What you will learn</h4>
                        <div class="content">
                            <ul>
                                <li>Build a home-based business that can replace your 9 to 5 job</li>
                                <li>Create a winning proposal that ensures you land high-paying, long-term clients to
                                    achieve freelance success
                                </li>
                                <li>Build a long-term relationship with clients to earn recurring income from your
                                    freelance business
                                </li>
                                <li>Benefits of using ChatGPT for freelancing</li>
                                <li>Best practices for freelancing on Upwork and Fiverr</li>
                                <li>Set up your payment method to make serious money on freelancing Fiverr</li>
                                <li>Build a big freelancing business by hiring other freelancers</li>
                                <li>Optimize your online presence and offerings to attract high-paying clients and
                                    increase project success rates, resulting in higher revenue
                                </li>
                                <li>Improve communication skills to convince the client</li>
                                <li>Tips & tricks to improve productivity, success, and growth</li>
                            </ul>

                        </div>
     <h4 class="title">Course Outline</h4>
                        <div class="accordion-container">
                            
                            <p class="accordion"> Module 1: Introduction to Freelancing</p>
                            <div class="panel">
                                <ol>
                                                <li>Understanding the freelancing industry</li>
                                                <li>Overview of Upwork and Fiverr platforms</li>
                                                <li>Challenges of freelancing</li>
                                                <li>Freelancing as a Source of income</li>
                                                <li>AI-powered Tools to build your Business</li>
                                            </ol>
                            </div>
                           
                           
                            <p class="accordion"> Module 2: Creating a Winning Profile</p>
                            <div class="panel">
                                 <ol>
                                                <li>Writing an engaging and professional bio</li>
                                                <li>Showcasing relevant skills and expertise</li>
                                                <li>Optimizing keywords for search-ability</li>
                                                <li>Understanding the user interface of platforms</li>
                                                <li>Exploring available features and tools</li>
                                                <li>Managing your dashboard and notifications</li>
                                                <li>Set up a payment system</li>
                                            </ol>
                            </div>
                            
                            <p class="accordion"> Module 3: Creating an Irresistible Gig/portfolio/Service Offer</p>
                            <div class="panel">
                                <ol>
                                                <li>Structuring your service effectively</li>
                                                <li>Writing a concise and convincing description</li>
                                                <li>Setting competitive pricing strategies</li>
                                                <li>Showcasing your sample or past work</li>
                                                <li>Create a robust online presence</li>
                                                <li>Leveraging additional service options and extras</li>
                                            </ol>
                            </div>
                            
                            <p class="accordion">  Module 4: Maintain your Reputation</p>
                            <div class="panel">
                                
                                  <ol>
                                                <li>Securing positive reviews</li>
                                                <li>Providing exceptional customer service</li>
                                                <li>Increase your response rate</li>
                                                <li>Nudge returning buyer</li>
                                                <li>Updating Profile and Gigs periodically</li>
                                                <li>Manage tasks exceeding the deadline</li>
                                                <li>Communication and collaboration with clients</li>
                                                <li>Get featured on Upwork and Fiverr</li>
                                            </ol>
                                
                            </div>
                            
                            <p class="accordion">Module 6: Scaling Your Freelance Business</p>
                            <div class="panel">
                                <ol>
                                                <li>Strategies for growing your freelancing business</li>
                                                <li>Building a solid client base and repeat business</li>
                                                <li>Hiring subcontractors or creating a team</li>
                                                <li>Expanding services and diversifying income streams</li>
                                                <li>Managing finances and planning for long-term success</li>
                                                <li>Use social media to market your services</li>
                                                <li>Interviews with successful freelancers</li>
                                            </ol>
                                            
                            </div>
                            

                            
                        </div>
                        
                         <h4 class="title">Requirements</h4>
                        <div class="content">
                            <ul>
                                <li>Prior freelance or job experience is optional to enroll in this course but not required. This course teaches you how to achieve freelance success from scratch.</li>
                                <li>However, you need to know (or have an idea of) what freelance service you're going to offer.</li>
                                <li>Essential equipment includes a computer/laptop, a reliable Internet connection, and recommended softwares like Excel, Google Docs, Spreadsheet, and Chrome.</li>
                                <li>After all, you need just time and a willingness to learn to earn.</li>
                            </ul>

                        </div>
                    </div>

                </div>


                <div class="col-lg-4 right-contents">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Trainer’s Name</p>
                                <span class="or">Abrar Ahmed</span>
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
                                <h6 class="p-1">OnSite<p class="float-end">10</p></h6>
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
                                <span>1 Month (Avg.)</span>
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
                                                                        <input type="hidden" name="CourseCode" value="fl" required>

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
                                    $feedback = \Illuminate\Support\Facades\DB::table('course_feedback')->where('FeedbackStatus','1')->where('CourseCode','fl')->OrderBy('FeedbackID','DESC')->get();
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
