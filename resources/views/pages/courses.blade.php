@extends('includes.master')
@section('title',$title)
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Explore Top Subjects</h1>
            </div>
            <?php
            $services =
                [
                    " Wholesale",
                    " Private Label Outline",
                    " Digital Marketing",
                    " Freelancing (Fiverr & Upwork)",
                    " Online Arbitrage",
                ];
            $url = ["whole-sale", "private-label", 'digital-marketing', "freelancing", "online-arbitrage"];
            ?>


            <div class="row g-4 justify-content-center">
                @foreach($services as $key => $value)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{asset('assets/img/gallery/topic')}}{{++$key}}{{'.png'}}"
                                     alt="">
                            </div>
                            <div class="text-center p-4 pb-2">
                                <a href="{{route('courses.'.$url[--$key])}}">
                                    <h5 class="mb-4">{{$value}}</h5>
                                </a>

                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
