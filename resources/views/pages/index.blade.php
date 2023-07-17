@extends('includes.master')
@section('title',$title)
@section('content')
    <?php
    $services =
        ["SELLER CENTRAL MANAGEMENT", "PRIVATE LABEL PRODUCT RESEARCH", "EXTENSIVE KEYWORD RESEARCH",
            "PRODUCT LISTING OPTIMIZATION", "ORDER PROCESSING AND TRACKING",
            "WHOLESALE ACCOUNT APPROVAL", "WHOLESALE PRODUCT HUNTING", "STOCK / INVENTORY MANAGEMENT"];

    $modal = ["exampleModalCenter", "PLProductResearch", "ExtensiveKeywordResearch", "ProductListingOptimization",
        "OrderProcessingandTracking", "WholesaleAccountApproval", "WholesaleProductHunting", "InventoryManagement",
    ];
    ?>
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('assets/img/hero/h1_hero.png')}}" alt="carousal second images">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                     style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Best Online
                                    Courses</h5>
                                <h1 class="display-3 text-white animated slideInDown">Online and On-site learning</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Learn the top income generating courses with
                                    Ecomgladiators</p>
                                <a href="{{route('pages.courses')}}"
                                   class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="{{route('pages.enrollment')}}" aria-expanded="false"
                                   class="btn btn-light py-md-3 px-md-5 animated slideInRight">Enroll Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('assets/img/gallery/carousal-1.webp')}}"
                     alt="carousal first image ">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                     style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">We empower
                                    Entrepreneurs</h5>
                                <h1 class="display-3 text-white animated slideInDown">Global E-commerce Business</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Expand your e-commerce presence globally and drive
                                    your business toward unprecedented growth</p>
                                <a href="{{route('pages.services')}}"
                                   class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" aria-expanded="false"
                                   data-bs-toggle="modal" data-bs-target="#get-quote"
                                   class="btn btn-light py-md-3 px-md-5 animated slideInRight">Get a Quote!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="bi bi-mortarboard text-primary mb-4 bi-icon"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>Expert mentors empowering knowledge growth through personalized guidance</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s"
                     style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="bi bi-globe text-primary mb-4 bi-icon"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Convenient virtual learning for flexible education anytime, anywhere</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="bi bi-book text-primary mb-4 bi-icon"></i>
                            <h5 class="mb-3">Learn & Earn</h5>
                            <p> Acquire knowledge while unlocking opportunities for financial prosperity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s"
                     style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="bi bi-clock text-primary mb-4 bi-icon"></i>
                            <h5 class="mb-3">Lifetime Access</h5>
                            <p>Unlimited educational resources for continuous growth and development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                             src="{{asset('assets/img/gallery/about2.png')}}"
                             alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Our Mission</h6>
                    <h1 class="mb-4">Welcome to Ecomgladiators</h1>
                    <p class="mb-4" style="text-align: justify;">EcomGladiators empowers entrepreneurs, builds Amazon
                        business to the next level, and
                        drives
                        better sales also help clients to navigate all challenges that USA and UK marketplaces throw at
                        them. EcomGladiators is
                        serving the nation with professional Amazon training through which people become independent to
                        earn their livelihood. We deliver
                        client-based hands-on training to our candidates so that they launch their startups in the world
                        of eCommerce to become
                        successful entrepreneurs.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Empowering Entrepreneurs
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Elevating Amazon
                                Businesses</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Driving Better Sales
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Launching Startups in
                                eCommerce</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Marketplaces Mastery</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Amazon Business
                                Acceleration
                            </p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{route('pages.about')}}">Read More</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Explore Top Subjects</h1>
            </div>

            <!-- Carousal for mobile devices -->
            <div class="col-12 d-md-none">
                <div id="carouselCourses" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($services as $key => $value)
                            <div class="carousel-item @if($key === 0) active @endif">
                                <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid"
                                             src="{{asset('assets/img/gallery/topic')}}{{++$key}}{{'.png'}}"
                                             alt="{{$value}}"
                                             title="{{$value}}">
                                    </div>
                                    <div class="text-center p-4 pb-2">
                                        <div class="topic-content">
                                            <a href="" aria-expanded="false" data-bs-toggle="modal"
                                               data-bs-target="#{{$modal[--$key]}}"><h6 class="mb-4">
                                                {{$value}}
                                            </h6></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev text-dark" href="#carouselCourses" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next text-dark" href="#carouselCourses" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>

            <!-- Cards for desktop -->
            <div class="justify-content-center d-none d-md-block">
                <div class="row">
                @foreach($services as $key => $value)

                    <div class="col-lg-3 col-md-6 wow fadeInUp mb-5" data-wow-delay="0.3s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{asset('assets/img/gallery/topic')}}{{++$key}}{{'.png'}}"
                                     alt="{{$value}}"
                                     title="{{$value}}">
                            </div>
                            <div class="text-center p-4 pb-2">
                                <div class="topic-content">
                                    <a href="" aria-expanded="false" data-bs-toggle="modal"
                                       data-bs-target="#{{$modal[--$key]}}"><h6 class="mb-4">
                                        {{$value}}
                                    </h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                 style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Services we provide</h1>
            </div>
            <div class="row">
                <div class="col-12 d-md-none">
                    <div id="carouselServices" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- Wholesale Business Card -->
                                <div class="card">
                                    <div class="card-head">
                                        <i class="bi bi-box-seam card-head-icon text-center" aria-expanded="false"></i>
                                        <h5>Wholesale Business</h5>
                                    </div>
                                    <div class="card-body text-start custom-hover">
                                        <p><i class="bi bi-gem" aria-expanded="false"></i> Research Brands/Distributors
                                        </p>
                                        <p><i class="bi bi-gem" aria-expanded="false"></i> Winning Product Selection</p>
                                        <p><i class="bi bi-gem" aria-expanded="false"></i> Source and negotiate with
                                            suppliers </p>
                                        <p><i class="bi bi-gem" aria-expanded="false"></i> Shipment and Restocking</p>
                                        <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Sales and
                                            order
                                            management</p>
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item">

                                <div class="card">
                                    <div class="card-head">
                                        <i class="bi bi-trophy card-head-icon text-center"
                                           aria-expanded="false"></i>
                                        <h5>Brand Approval & Winning Product</h5>
                                    </div>
                                    <div class="card-body text-start custom-hover">
                                        <p><i class="bi bi-gem" aria-expanded="false"></i> Communication and
                                            Documentation </p>
                                        <p><i class="bi bi-gem" aria-expanded="false"></i> Domain-Specific Account
                                            Approval </p>
                                        <p><i class="bi bi-gem" aria-expanded="false"></i> Product on suggested criteria
                                        </p>
                                        <p><i class="bi bi-gem" aria-expanded="false"></i> Restocking and Labeling </p>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div class="card-head">

                                        <i class="bi bi-code-slash card-head-icon text-center"
                                           aria-expanded="false"></i>
                                        <h5>Ecommerce Website Development</h5>
                                    </div>
                                    <div class="card-body text-start custom-hover">

                                        <p><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Website Design
                                        </p>
                                        <p><i class="bi bi-gem" aria-expanded="false"></i> Custom E-commerce Development
                                        </p>
                                        <p><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Platform Selection
                                        </p>
                                        <p><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Website Migration
                                        </p>
                                        <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Payment
                                            Gateway
                                            Integration </p>
                                        <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i>
                                            E-commerce
                                            SEO </p>
                                        <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i>
                                            E-commerce
                                            Analytics
                                            and Reporting </p>
                                        <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Mobile
                                            App
                                            Development </p>
                                        <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Ongoing
                                            Support and
                                            Maintenance </p>
                                        <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i>
                                            E-commerce
                                            Consulting
                                            and Strategy </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev " href="#carouselServices" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next " href="#carouselServices" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon  text-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 d-none d-sm-block">
                    <div class="card">
                        <div class="card-head">
                            <i class="bi bi-box-seam card-head-icon text-center" aria-expanded="false"></i>
                            <h5>Wholesale Business</h5>
                        </div>
                        <div class="card-body text-start custom-hover">
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Research Brands/Distributors
                            </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Winning Product Selection</p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Source and negotiate with
                                suppliers </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Shipment and Restocking</p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Sales and
                                order
                                management</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 d-none d-sm-block">
                    <div class="card">
                        <div class="card-head">
                            <i class="bi bi-trophy card-head-icon text-center"
                               aria-expanded="false"></i>
                            <h5>Brand Approval & Winning Product</h5>
                        </div>
                        <div class="card-body text-start custom-hover">

                            <p><i class="bi bi-gem" aria-expanded="false"></i> Communication and Documentation </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Domain-Specific Account Approval </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Product on suggested criteria </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Restocking and Labeling </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 d-none d-md-block">
                    <div class="card">
                        <div class="card-head">
                            <i class="bi bi-code-slash card-head-icon text-center"
                               aria-expanded="false"></i>
                            <h5>Ecommerce Website Development</h5>
                        </div>
                        <div class="card-body text-start custom-hover">

                            <p><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Website Design </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> Custom E-commerce Development </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Platform Selection </p>
                            <p><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Website Migration </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Payment Gateway
                                Integration </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> E-commerce SEO </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Analytics
                                and Reporting </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Mobile App
                                Development </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> Ongoing Support and
                                Maintenance </p>
                            <p class="hidden-desc"><i class="bi bi-gem" aria-expanded="false"></i> E-commerce Consulting
                                and Strategy </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 p-3 text-center">
            <a href="{{route('pages.services')}}" class="btn btn-outline-success">
                <i class="bi bi-arrow-right-short"></i> View More
            </a>
        </div>
    </div>



    <div class="modal fade" id="get-quote" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Get a Quote</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-contact contact_form" id="enrollment_form" action="{{route('get-quote')}}"
                          method="POST">
                        @csrf
                        <div class="form-group">

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Name</label>
                            <input type="text" class="form-control" id="cname" name="cname"
                                   placeholder="Enter your fullname">

                        </div>
                        <div class="mb-3">
                            <label for="recipient-Email">Email</label>
                            <input type="email" class="form-control" id="cemail" name="cemail"
                                   placeholder="Enter your email">

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Contact (Whatsapp/Telegram)</label>
                            <input type="text" class="form-control" id="ccontact" name="ccontact"
                                   placeholder="Enter Contact (Whatsapp/Telegram)">

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Estimated Budget</label>
                            <input type="number" class="form-control" id="cbudget" name="cbudget"
                                   placeholder="Enter your Estimated budget">

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Select Service</label>
                            <select name='cselectservice' class='form-control'>
                                <option selected>Please select the Service</option>
                                <option value="Wholesale Business">Wholesale Business</option>
                                <option value="Private Label Business">Private Label Business</option>
                                <option value="Amazon Account Reinstatemen">Amazon Account Reinstatement</option>
                                <option value="Brand Approval & Winning Product">Brand Approval & Winning Product
                                </option>
                                <option value="LLC/LTD (Company) Registration">LLC/LTD (Company) Registration</option>
                                <option value="Ecommerce Website Development">Ecommerce Website Development</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Amazon Account </label>
                            <select name="camazonaccount" class="form-control">
                                <option selected>Please select Account Type</option>
                                <option value="New">New</option>
                                <option value="Old">Old</option>
                                <option value="Need Account">Need Account</option>

                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name">Service Required</label>
                            <select name='crequired' class='form-control'>
                                <option selected>Please select the Service Required</option>
                                <option value="Semi Managed">Semi Managed</option>
                                <option value="Fully Managed">Fully Managed</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Amazon Seller Central Management</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>We teach how satisfactorily and quickly answer customer queries and also handle activities like
                        return and refund management.
                        Also, help manage logistics and tracking to ensure customers are able to receive their products
                        within the designated delivery date.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="PLProductResearch" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">PL Product Research</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>We loop up the trendy as well as seasonal products and discuss all the statistics with graphs and
                        figures so that the buyer can take a good decision.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="ExtensiveKeywordResearch" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Extensive Keyword Research</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>We teach virtual assistant students to give services by focusing on identifying the most relevant
                        product-centric keywords that will drive more traffic to the selected product listing and result
                        in improved conversions.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="ProductListingOptimization" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Product Listing Optimization</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>We teach how to identify the keywords within the product listing to help your listing rank
                        organically on Amazon SERPs.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="OrderProcessingandTracking" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Order Processing and Tracking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>A seller’s worst nightmare is forgetting to process an order and not tracking the order; we teach
                        our virtual
                        assistant students how to be organized on top of all the orders.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="WholesaleAccountApproval" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Wholesale Account Approval</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>On the client's behalf, Our Virtual Assistant students are taught well that they contact
                        distributors,
                        and brands through email and call to get resale approval.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="WholesaleProductHunting" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Wholesale Product Hunting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>The most important and time taking task is to find the best product that should comply the
                        predefined criteria, but not impossible. So, using a set of tools, tips, and tricks, our virtual
                        assistant students can list down a great number of products on criteria.</p>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="InventoryManagement" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Inventory Management</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Our managers and virtual assistant students work together to enable clients to optimally manage
                        their stock, keeping them
                        updated about purchased data, restocking, and much more. </p>
                </div>

            </div>
        </div>
    </div>

@endsection
