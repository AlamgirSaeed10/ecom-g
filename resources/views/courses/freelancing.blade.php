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
    <li>Build a home-based business that can replace your 9 to 5 job</li>
    <li>Create a winning proposal that ensures you land high-paying, long-term clients to achieve freelance success</li>
    <li>Build a long-term relationship with clients to earn recurring income from your freelance business</li>
    <li>Benefits of using ChatGPT for freelancing</li>
    <li>Best practices for freelancing on Upwork and Fiverr</li>
    <li>Set up your payment method to make serious money on freelancing Fiverr</li>
    <li>Build a big freelancing business by hiring other freelancers</li>
    <li>Optimize your online presence and offerings to attract high-paying clients and increase project success rates, resulting in higher revenue</li>
    <li>Improve communication skills to convince the client</li>
    <li>Tips & tricks to improve productivity, success, and growth</li>
                            </ul>

                        </div>

                        <h4 class="title">Course Outline</h4>
                        <div class="container mt-3">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Module 1: Introduction to Freelancing
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Understanding the freelancing industry</li>
                                                <li>Overview of Upwork and Fiverr platforms</li>
                                                <li>Challenges of freelancing</li>
                                                <li>Freelancing as a Source of income</li>
                                                <li>AI-powered Tools to build your Business</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Module 2: Creating a Winning Profile
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Writing an engaging and professional bio</li>
                                                <li>Showcasing relevant skills and expertise</li>
                                                <li>Optimizing keywords for searchability</li>
                                                <li>Understanding the user interface of platforms</li>
                                                <li>Exploring available features and tools</li>
                                                <li>Managing your dashboard and notifications</li>
                                                <li>Set up a payment system</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Module 3: Creating an Irresistible Gig/portfolio/Service Offer
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Structuring your service effectively</li>
                                                <li>Writing a concise and convincing description</li>
                                                <li>Setting competitive pricing strategies</li>
                                                <li>Showcasing your sample or past work</li>
                                                <li>Create a robust online presence</li>
                                                <li>Leveraging additional service options and extras</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Module 4: Maintain your Reputation
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
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
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Module 5: Proposal Writing and Bidding Strategies
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ol>
                                                <li>Writing persuasive proposals that win clients</li>
                                                <li>Customizing proposals to match client needs</

                                                li>
                                                <li>Pricing and negotiation techniques</li>
                                                <li>Responding to client inquiries and feedback</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Module 6: Scaling Your Freelance Business
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                         data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
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
