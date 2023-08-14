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
                        <img class="img-fluid" src="{{asset('assets/img/gallery/featured2.webp')}}" alt="">
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
                       <div class="accordion-container">
    <p class="accordion">Week 1</p>
    <div class="panel">
        <h6>Lecture 1 (Basics)</h6>
        <p>Why is PH important?</p>
        <p>Tools used in PH:</p>
        <ul>
            <li>Jungle Scout</li>
            <li>Viral launch</li>
            <li>Helium 10</li>
            <li>Merchant Words</li>
        </ul>

        <h6>Lecture 2 (Product Hunting Techniques)</h6>
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
    <p class="accordion">Week 2 </p>
    <div class="panel">
        <h6>Lecture 3 (Product Analysis)</h6>

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
        <ul>
        <li>Give them PH criteria first</li>
        <li>How to analyze JS</li>
        <li>How to analyze H10</li>
        <li>How to Analyze Viral Launch</li>
        <li>Google Trends</li>
        </ul>

        <h6>Lecture 4 (Keyword Research)</h6>
<ul>
        <li>Keyword research or Competitor Analysis</li>
        <li>Using H10 Magnet</li>
        <li>Using Cerebro</li>
        <li>How to select your competitor</li>
        </ul>
    </div>
    <p class="accordion">Week 3 </p>
    <div class="panel">
        <h6>Lecture 5 (Product Sourcing)</h6>
        
        <ul>

        <li>Product Sourcing</li>
        <li>From Alibaba</li>
        <li>Assignment: Other Sourcing Platforms</li>
        <li>Why Alibaba?</li>
        <li>How to Identify the Good Supplier</li>
        <li>How to contact suppliers and contact with them</li>
        <li>Shipping Terms: EXW, FOB, DDP</li>
        <li>Give a brief intro to them</li>
        <li>Product Inspection</li>
        <li>After product selection, we need to inspect the product by hiring teams from that Country.</li>
</ul>
        <h6>Lecture 6 (Enhanced Brand Content)</h6>
        
        <ul>
        <li>Feasibility Report:</li>
        <li>We need to make feasibility reports per the RFQ.</li>
        <li>Listing Creation or Content Writing:</li>
        <li>How can we write good listing content?</li>
        <li>What are the requirements of Amazon in writing listing content</li>
        <li>Keyword research for content</li>
        <li>Backend search terms</li>
        </ul>
    </div>
    
    <p class="accordion">Week 4</p>
        <div class="panel">
            <h6> Lecture 7 (Listing Optimization) </h6>
            
            <ul>

            <li>Patent Check</li>
            <li>Design Patent</li>
            <li>Utility Patent</li>
            <li>PPC Or Listing Optimization</li>
            <li>What is ACOS?</li>
            <li>How can we select bids?</li>
            <li>How to analyze keywords?</li>
            <li>How to set a Budget?</li>
</ul>
            <h6>Lecture 8 (PPC)</h6>
            
            <ul>

            <li>Advertisement Ways</li>
            <li>SABO</li>
            <li>Affiliate marketing</li>
            <li>Giveaways</li>
            <li>Fb Ads</li>
            <li>How to list PL Products on Seller Central.</li>
            <li>How to set and manage campaigns.</li>
            
            </ul>
        </div>

</div>
                        
                        
                        
                        
    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                
                        
                        <h4 class="title">Requirements</h4>
                        <div class="content">
                            <ul>
                                <li>Essential equipment includes a computer/laptop, a reliable Internet connection, and recommended softwares like Excel, Google Docs, Spreadsheet, and Chrome.</li>
                                <li>No prior knowledge or experience in online selling is required to enroll in this course.</li>
                                <li>Selling wholesale on Amazon can be challenging, but it is also rewarding. You will need to be persistent and willing to learn if you want to be successful.</li>

                            </ul>

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
                                <h6 class="p-1">OnSite<p class="float-end">03</p></h6>
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
                                <span>1.5 Months (Avg.)</span>
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
                                    <div class="d-flex flex-row reviews justify-content-between">
                                    <div class="star">
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                    </div>
                                    
                                    <span>Outstanding</span>
                                </div>
                                    <h6>Relevance &amp; Content Quality</h6>
                                    <div class="d-flex flex-row reviews justify-content-between">
                                    <div class="star">
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                    <h6>Responsiveness &amp; Support</h6>
                                    <div class="d-flex flex-row reviews justify-content-between">
                                    <div class="star">
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                        <i class="bi bi-star-fill checked"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                            </div>
                        </div>

                        
                        
                        
                        
                        
                        <div class="feedeback">
                            <h6>Your Feedback</h6>
                            <h7>Be the first to review your learning experience.</h7>

                            <form action="{{route('courses.feedback')}}" method="post">
                                @csrf
                                <div class="mb-2">
                                    <input type="hidden" name='CourseCode' value="pl" required>
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
                                    $feedback = \Illuminate\Support\Facades\DB::table('course_feedback')->where('FeedbackStatus','1')->where('CourseCode' ,'pl')->OrderBy('FeedbackID','ASC')->get();
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
