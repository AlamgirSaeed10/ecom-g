<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ecomgladiators | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{asset('assets/img/logo/ecom-logo-head.png')}}" rel="icon">
    <link href="{{asset('assets/css/font-family.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="{{asset('assets/css/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owl-carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>

    </style>


</head>

<body>
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('assets/img/logo/ecom-logo-head.png')}}" alt="EcomGladiators logo image ">
            </div>
        </div>
    </div>
</div>
@include('includes.header')
@yield('content')
@include('includes.footer')

<!-- Back to Top -->
{{--<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>--}}



<script>
    $(window).on('load', function () {
        $('#preloader-active').delay(450).fadeOut('slow');
        $('body').delay(450).css({
            'overflow': 'visible'
        });
    });
</script>
<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/lib/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
