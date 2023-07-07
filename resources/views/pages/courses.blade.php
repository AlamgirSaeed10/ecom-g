@extends('includes.master')
@section('title',$title)
@section('content')<style>
    .lecture-title {
        cursor: pointer;
    }

    .collapse-icon {
        transition: transform 0.3s ease-in-out;
    }

    .collapsed .collapse-icon {
        transform: rotate(-90deg);
    }
</style>
<div class="container-xxl py-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 course_details_left">

        <h1>Course Outline</h1>

        <h5 class="mt-4">Week 1: Basics</h5>
        <div class="lecture">
            <h6 class="lecture-title d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#lecture1-content">
                <span>Lecture 1: E-commerce Vs Commerce</span>
                <i class="bi bi-chevron-down collapse-icon"></i>
            </h6>
            <ul id="lecture1-content" class="list-group collapse">
                <li class="list-group-item">Introduction to E-commerce and Commerce</li>
                <li class="list-group-item">Amazon and why it is preferred over other e-commerce platforms</li>
                <li class="list-group-item">Amazon marketplaces: USA, Canada, and others</li>
                <li class="list-group-item">General business models: B2B, B2C, C2B, C2C</li>
                <li class="list-group-item">Amazon models: Wholesale Vs PL</li>
                <li class="list-group-item">Difference between Wholesale and PL</li>
                <li class="list-group-item">Amazon important acronyms: SKU, MOQ, UPC, EAN, FNSKU, MRP, MSRP, FBA Vs FBM, MCH, ODR, MAP</li>
                <li class="list-group-item">How to change location on Amazon's website</li>
                <li class="list-group-item">Overview of the next lecture</li>
            </ul>
        </div>
        <h5 class="mt-4">Week 2: Wholesale Models</h5>
        <div class="lecture">
            <h6 class="lecture-title d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#lecture2-content">
                <span>Lecture 2: Direct Sourcing and Reverse Sourcing</span>
                <i class="bi bi-chevron-down collapse-icon"></i>
            </h6>
            <ul id="lecture2-content" class="list-group collapse">
                <li class="list-group-item">Difference between direct sourcing and reverse sourcing</li>
                <li class="list-group-item">Best method for sourcing</li>
                <li class="list-group-item">Generating leads for direct sourcing</li>
                <li class="list-group-item">Ways of generating leads: Google, Maps, Directories, LinkedIn, and other methods</li>
                <li class="list-group-item">Verifying leads</li>
                <li class="list-group-item">Data needed from websites or leads</li>
            </ul>
        </div>
        <h5 class="mt-4">Week 3: Communication with Suppliers</h5>
        <div class="lecture">
            <h6 class="lecture-title d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#lecture3-content">
                <span>Lecture 3: Emailing, Calls, Contact Us form, Live Chat</span>
                <i class="bi bi-chevron-down collapse-icon"></i>
            </h6>
            <ul id="lecture3-content" class="list-group collapse">
                <li class="list-group-item">Advantages of phone calls</li>
                <li class="list-group-item">Email purpose and format</li>
                <li class="list-group-item">Importance of a signature in emails</li>
                <li class="list-group-item">Creating email templates and signatures</li>
                <li class="list-group-item">Adding templates and signatures in Gmail settings</li>
                <li class="list-group-item">Sending emails to suppliers and checking responses</li>
            </ul>
        </div>
        <div class="lecture">
            <h6 class="lecture-title d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#lecture4-content">
                <span>Lecture 4: Product Analysis</span>
                <i class="bi bi-chevron-down collapse-icon"></i>
            </h6>
            <ul id="lecture4-content" class="list-group collapse">
                <li class="list-group-item">Importance of creating an account and required documents</li>
                <li class="list-group-item">After account creation: Catalog, Daily Deals, Website Hunting, Telegram Channels</li>
                <li class="list-group-item">Product analysis criteria: Selling price, ratings, brand dominance, Amazon dominance, IP complaints, hazmat, seller dominance, number of sellers, BSR, sales, variations, Keepa data</li>
                <li class="list-group-item">Profit and profit margin considerations</li>
                <li class="list-group-item">Supplier subscription status</li>
            </ul>
        </div>
        <h5 class="mt-4">Week 4: Catalog Analysis</h5>
        <div class="lecture">
            <h6 class="lecture-title d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#lecture5-content">
                <span>Lecture 5: Tools for catalog analysis</span>
                <i class="bi bi-chevron-down collapse-icon"></i>
            </h6>
            <ul id="lecture5-content" class="list-group collapse">
                <li class="list-group-item">Necessary columns for catalog analysis</li>
                <li class="list-group-item">Analyzing the catalog through Keepa</li>
                <li class="list-group-item">Practical exercise: Analyzing a provided catalog</li>
            </ul>
        </div>
        <h5 class="mt-4">Week 5: Reverse Sourcing</h5>
        <div class="lecture">
            <h6 class="lecture-title d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#lecture6-content">
                <span>Lecture 6: Ways of reverse sourcing</span>
                <i class="bi bi-chevron-down collapse-icon"></i>
            </h6>
            <ul id="lecture6-content" class="list-group collapse">
                <li class="list-group-item">Methods of reverse sourcing: Keepa Product Viewer, Seller ID, Store Snipping, Manual Hunting from Amazon, Keepa best sellers</li>
                <li class="list-group-item">Practice session for reverse sourcing</li>
            </ul>
        </div>
        <h5 class="mt-4">Week 6: Brand Hunting</h5>
        <div class="lecture">
            <h6 class="lecture-title d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#lecture7-content">
                <span>Lecture 7: Ways of hunting brands</span>
                <i class="bi bi-chevron-down collapse-icon"></i>
            </h6>
            <ul id="lecture7-content" class="list-group collapse">
                <li class="list-group-item">Methods of hunting brands: SmartScout, Keepa, product hunting and approaching the brand</li>
                <li class="list-group-item">Importance of hunting brands</li>
                <li class="list-group-item">Contacting brand strategies: budget, case study, hunting multiple products, checking LinkedIn profiles</li>
                <li class="list-group-item">Focus on new brands before old ones</li>
            </ul>
        </div>
        <div class="lecture">
            <h6 class="lecture-title d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#lecture8-content">
                <span>Lecture 8: Seller Central</span>
                <i class="bi bi-chevron-down collapse-icon"></i>
            </h6>
            <ul id="lecture8-content" class="list-group collapse">
                <li class="list-group-item">Profit calculation</li>
                <li class="list-group-item">Seller Central management</li>
                <li class="list-group-item">Dealing with IP issues</li>
                <li class="list-group-item">Fake invoice vs authentic invoices</li>
                <li class="list-group-item">IPI (Inventory Performance Index)</li>
            </ul>
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
                <a href="#" class="primary-btn2 text-uppercase enroll rounded-0 text-white">Enroll the course</a>

                <h4 class="title">Reviews</h4>
                <div class="content">
                    <div class="review-top row pt-40">
                        <div class="col-lg-12">
                            <h6 class="mb-15">Provide Your Rating</h6>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Quality</span>
                                <div class="star">
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Puncuality</span>
                                <div class="star">
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Quality</span>
                                <div class="star">
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star checked"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                        </div>
                    </div>
                    <div class="feedeback">
                        <h6>Your Feedback</h6>
                        <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                        <div class="mt-10 text-right">
                            <a href="#" class="primary-btn2 text-right rounded-0 text-white">Submit</a>
                        </div>
                    </div>
                    <div class="comments-area mb-30">
                        <div class="comment-list">
                            <div class="single-comment single-reviews justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a>
                                            <div class="star">
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star"></span>
                                                <span class="ti-star"></span>
                                            </div>
                                        </h5>
                                        <p class="comment">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment single-reviews justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a>
                                            <div class="star">
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star"></span>
                                                <span class="ti-star"></span>
                                            </div>
                                        </h5>
                                        <p class="comment">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment single-reviews justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a>
                                            <div class="star">
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star checked"></span>
                                                <span class="ti-star"></span>
                                                <span class="ti-star"></span>
                                            </div>
                                        </h5>
                                        <p class="comment">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore.
                                        </p>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('.lecture-title').on('click', function() {
            $(this).toggleClass('collapsed');
        });
    });
</script>

@endsection
