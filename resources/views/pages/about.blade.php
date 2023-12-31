@extends('includes.master')
@section('title',$title)
@section('content')

    <style>
        #ceo-img {
            float: left;
            margin: 5px;
            width: 30%;
            height: auto;
        }

        #coo-img {
            float: right;
            margin: 5px;
            width: 30%;
            height: auto;
        }

        p {
            text-align: justify;
        }

        .about-card {
            border-radius: 10px;
            margin: 15px auto 0;
            padding: 1.5%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border: 1px solid #e1e1e1;
        }

        .about-card:hover {
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-radius: 5px;

        }
    </style>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h6 class="section-title bg-white text-center text-primary px-3">About Us</h6>
                    <h1 class="mb-5">Welcome to Ecomgladiators!</h1>

                    <p class="mb-4" style="text-align: justify;">EcomGladiators empowers entrepreneurs,
                    elevates Amazon businesses to new heights, and drives improved sales while offering
                    expert guidance to navigate diverse international marketplaces. With a commitment to
                    providing professional Amazon training, EcomGladiators equips individuals with the
                    skills to achieve financial independence. Our client-focused, hands-on training approach
                    empowers candidates to launch successful eCommerce startups along with additional skills
                    of digital marketing and much more to thrive as accomplished entrepreneurs.</p>
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
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Digital Existence</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="bi bi-arrow-right text-primary me-2"></i>Multiple Income Sources</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-card">
                <img id="ceo-img" src="{{asset('assets/img/gallery/ceo.webp')}}" class="img-fluid" alt="ceo picture">
                <p>Greetings! I am honored to be the CEO and Co-Founder of EcomGladiators Private Limited, a leading
                    eCommerce training and consulting company in Pakistan. With over 5 years of experience in the
                    eCommerce industry, I am passionate advocate for helping people start and grow their own
                    businesses. It's a pleasure to have you visit my website.</p>

                <p> At EcomGladiators, my purpose is to provide aspiring entrepreneurs in Pakistan and abroad with
                    an exceptional journey in the eCommerce industry and various other income streams. I strive to
                    deliver a seamless experience through continuous support and guidance.</p>

                <p> Looking ahead, I envision transforming ecomgladiators to meet the challenges of a rapidly
                    changing technological environment as well as societal needs. My commitment lies in offering the
                    best affordable hands-on training programs that adhere to leading global standards.I am
                    passionate in providing the best possible training programs and services to people around the
                    world. I am also passionate about using my knowledge and experience to help others achieve their
                    dreams.</p>

                <p> At ecomgladiators, I want to assure parents of enrolled students that, we value the livelihood
                    and future of every child enrolled with us. We take every measure possible to ensure their
                    success by equipping them with the necessary skills and knowledge. Our goal is to prepare them
                    for today's dynamic world and the world of tomorrow, where they can confidently tackle the most
                    pressing challenges.</p>

                <p> In addition to serving our students, I extend my services to clients worldwide. Whether you're
                    seeking consulting, guidance, or collaboration, I'm here to assist you. I have had the privilege
                    of working with clients from various corners of the globe, providing valuable insights and
                    solutions.</p>

                <p> I warmly invite you to join us in any capacity as we shape the future, lead the progress of our
                    nation, and contribute to serving humanity. Together, we can create a powerful force that drives
                    positive change and leaves a lasting impact.

                    Thank you for visiting my website, and I look forward to embarking on a meaningful journey with
                    you.</p>

            </div>
            <div class="about-card">

                <img id="coo-img" src="{{asset('assets/img/gallery/osama.webp')}}" class="img-fluid" alt="coo picture">
                <p>I am a passionate advocate for the development of eCommerce in Pakistan. I believe that
                    Pakistan has the potential to be a major player in the global eCommerce market, but it
                    needs to overcome some challenges, such as a lack of awareness and a fear of
                    failure.</p>
                <p>
                    My vision with unwavering passion, is to encourage my fellow Pakistanis to embrace the
                    digital age, urging them to overcome their fears of failure and embrace their untapped
                    creativity. Recognizing the barriers that hinder Pakistan's advancement in the global
                    eCommerce industry. I want to help Pakistan overcome these challenges. I do this through
                    my work as the co-founder and COO of EcomGladiators Private Limited, a company that
                    provides training, consulting, and other services to help businesses succeed in
                    eCommerce. I also share my knowledge and experiences through public speaking engagements
                    and workshops.</p>
                <p>
                    I am a highly motivated and results-oriented individual and a strong believer in the
                    power of education and entrepreneurship to transform lives. With a keen focus on
                    empowering sellers to access international markets, EcomGladiators equips them with the
                    indispensable skills, knowledge, and attitudes necessary for effective leadership and
                    entrepreneurship. By empowering the youth, I and EcomGladiators strive to nurture
                    confident, independent, and remarkably successful individuals who will shape a brighter
                    future.
                </p>


            </div>
        </div>
    </div>
@endsection
