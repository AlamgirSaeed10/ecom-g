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
                        <img class="img-fluid" src="{{asset('assets/img/gallery/featured1.webp')}}" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">What you will learn</h4>
                        <div class="content">
                            <ul>
                                <li>How to start &amp; scale a wholesale business from home.</li>
                                <li>A starter list of 5k+ reputable wholesale suppliers we have experienced.</li>
                                <li>How to use software to find profitable wholesale products you can source super quickly.</li>
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
                        <div class="accordion-container">
  <p class="accordion">Week #1</p>
  <div class="panel">
    <h6>Lecture 1(Basics)</h6>
    <ol>
      <li>E-commerce Vs Commerce</li>
      <li>Amazon and Why; preferred Amazon to Other E-commerce Platforms</li>
      <li>
        Amazon marketplaces like the USA, and Canada, give them research to find
        others
      </li>
      <li>
        General Business Models
        <ol>
          <li>B2B, B2C, C2B</li>
          <li>C2C, give them research</li>
        </ol>
      </li>
      <li>
        Amazon Models
        <ol>
          <li>Wholesale Vs PL</li>
          <li>Which one is best and Why?</li>
          <li>Difference between them</li>
        </ol>
      </li>
      <li>
        Amazon Important Acronyms
        <ol>
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
      <li>Tell them how to change the location on Amazon’s website</li>
      <li>Tell them a little about their next lecture.</li>
    </ol>

    <h6>Lecture 2 (Wholesale Models)</h6>

    <ol>
      <li>Direct Sourcing and Reverse Sourcing</li>
      <li>Explain the difference and best method</li>
      <li>Direct Sourcing</li>
      <li>Generate Leads</li>
      <li>
        Ways of generating leads
        <ol>
          <li>Google</li>
          <li>Map</li>
          <li>Directories, give them research</li>
          <li>LinkedIn</li>
          <li>Another way of finding the leads, give them research</li>
        </ol>
      </li>
      <li>How to verify the lead as the correct lead</li>
      <li>Data we need from the websites or for leads</li>
    </ol>
</div>
    <p class="accordion">Week #2</p>
    <div class="panel">
      <h6>Lecture 3 (Communication with Suppliers)</h6>

      <ol>
        <li>Emailing, Calls, Contact Us form, Live Chat</li>
        <li>Why is Call better?</li>
        <li>Email Purpose, Format of emails</li>
        <li>Signature Important, why?</li>
        <li>Create a Template and Signature, give them research</li>
        <li>Adding it in Gmail settings</li>
        <li>Send emails to suppliers and check their responses</li>
      </ol>

      <h6>Lecture 4 (Product Analysis)</h6>

      <ol>
        <li>
          Account Creation
          <ol>
            <li>Why is Account Important?</li>
            <li>How we can create it?</li>
            <li>What are the essential documents we need for it?</li>
          </ol>
        </li>
        <li>
          After Account Creation
          <ol>
            <li>Catalog</li>
            <li>Daily Deals</li>
            <li>Website Hunting</li>
            <li>Telegram Channels</li>
          </ol>
        </li>
        <li>
          Product Analysis
          <ol>
            <li>There will be certain criteria for product analysis</li>
          </ol>
        </li>
      </ol>
</div>
      <p class="accordion">Week #3</p>
      <div class="panel">
        <h6>Lecture 5 (Catalog Analysis)</h6>

        <ol>
          <li>Tools for catalog analysis</li>
          <li>Valid catalog and which columns are necessary?</li>
          <li>How we can analyze the catalog through Keepa</li>
          <li>Give them a catalog and ask them to analyze the products</li>
        </ol>

        <h6>Lecture 6(Reverse Sourcing)</h6>

        <ol>
          <li>
            Ways of reverse sourcing
            <ol>
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
        <p class="accordion">Week #4</p>
        <div class="panel">
          <h6>Lecture 7 (Brand Hunting)</h6>

          <ol>
            <li>
              Ways of hunting brands
              <ol>
                <li>SmartScout</li>
                <li>Keepa</li>
                <li>Hunt product and approach the brand</li>
              </ol>
            </li>
            <li>
              Why is hunting brands more important than wholesalers or
              closeouts?
            </li>
            <li>How can we contact the brand?</li>
            <li>
              Contacting brand strategies
              <ol>
                <li>Budget</li>
                <li>Case Study of the Brand</li>
                <li>Hunt 3 - 4 products first then contact</li>
                <li>Check the LinkedIn profile of the brand first</li>
                <li>Hunt new brands first then go for OLD</li>
              </ol>
            </li>
          </ol>

          <h6>Lecture 8 (Seller Central)</h6>

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
                                <span class="or">Ammar Haider</span>
                            </a>
                        </li>


                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Course Fee </p>
                                <span>PKR 30,000 /-</span>
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
                                    <p>Commencement of training</p>
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


                    <a href="{{route('pages.enrollment')}}"
                       class="btn btn-primary text-uppercase enroll rounded-0 text-white">Enroll the
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

                            <form action="{{route('courses.feedback')}}" method="post">
                                @csrf
                                <div class="mb-2">
                                    <input type="hidden" name="CourseCode" value="ws" required>
                                   
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
                                $feedback = \Illuminate\Support\Facades\DB::table('course_feedback')->where('FeedbackStatus','1')->where('CourseCode','ws')->OrderBy('FeedbackID','DESC')->get();
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
