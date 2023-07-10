@extends('includes.master')
@section('title',$title)
@section('content')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h6 class="section-title bg-white text-center text-primary px-3">About Us</h6>
                    <h1 class="mb-5">Welcome to Ecomgladiators</h1>

                    <p class="mb-4 text-start">Ecomgladiators empowers entrepreneurs, builds Amazon business to the next
                        level, and
                        drives
                        better sales also help clients to navigate all challenges that USA and UK marketplaces throw at
                        them. Ecomgladiators is
                        serving the nation with professional Amazon training through which people become independent to
                        earn their livelihood. We deliver
                        client-based hands-on training to our candidates so that they launch their startups in the world
                        of eCommerce to become
                        successful entrepreneurs.</p>
                    <div class="row gy-2 gx-4 mb-4 text-start">
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
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 text-center">
                    <img src="{{asset('assets/img/gallery/N_kazim.png')}}" class="img-thumbnail" alt="">
                </div>
                <div class="col-lg-8">
                    <p>Welcome to Ecomgladiators, your premier e-commerce service provider specializing in Amazon
                        wholesale and private label business services.
                        With a focus on key marketplaces such as the USA, UK, Germany, Canada, UAE, Italy, and France,
                        we offer tailored solutions to
                        help businesses thrive in these lucrative regions.</p>
                    <p> From product sourcing and brand development to optimized listing creation
                        and inventory management, we handle every aspect of your e-commerce journey. With our
                        comprehensive knowledge of international
                        regulations and logistics, we ensure smooth operations, timely delivery, and customer
                        satisfaction across borders.</p>
                    <p>
                        Trust Ecomgladiators to be your trusted partner in expanding your e-commerce presence globally,
                        connecting you with millions
                        of potential customers and driving your business toward unprecedented growth.
                    </p>
                </div>
            </div>
            <div class="row g-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4 order-sm-1 order-lg-2">
                            <img src="{{asset('assets/img/gallery/N_usama.png')}}" class="img-thumbnail" alt="Image">
                        </div>
                        <div class="col-sm-12 col-lg-8 order-sm-2 order-lg-1">

                                <p>Welcome to Ecomgladiators, your premier e-commerce service provider specializing in Amazon
                                    wholesale and private label business services.
                                    With a focus on key marketplaces such as the USA, UK, Germany, Canada, UAE, Italy, and France,
                                    we offer tailored solutions to
                                    help businesses thrive in these lucrative regions.</p>
                                <p> From product sourcing and brand development to optimized listing creation
                                    and inventory management, we handle every aspect of your e-commerce journey. With our
                                    comprehensive knowledge of international
                                    regulations and logistics, we ensure smooth operations, timely delivery, and customer
                                    satisfaction across borders.</p>
                                <p>
                                    Trust Ecomgladiators to be your trusted partner in expanding your e-commerce presence globally,
                                    connecting you with millions
                                    of potential customers and driving your business toward unprecedented growth.
                                </p>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
