@extends('includes.master')
@section('title',$title)
@section('content')
    <style>iframe {
            border: none;
            width: 100%;
            height: 100vh;
        }</style>
    <section class="py-5 m-5">
        <div class="container">
            <iframe src="" id="myCert"></iframe>

            <input type="hidden" name="" value="{{$stdName}}" id="StudentName">
            <input type="hidden" name="" value="{{$courseName}}" id="CourseName">
            <input type="hidden" name="" value="{{$compDate}}" id="CompDate">

            <p class="invisible" id="cert-url">{{url('verify')}}/{{$CertID}}</p>

            <button type="submit" id="download_cert" class="btn btn-outline-success float-end"><i class="bi bi-download"></i> Download Certificate</button>
        </div>
    </section>

    <script src="https://unpkg.com/pdf-lib/dist/pdf-lib.min.js"></script>
    <script src="https://unpkg.com/@pdf-lib/fontkit@0.0.4"></script>
    <script src="{{asset('assets/js/cert.js')}}"></script>
    <script src="{{asset('assets/js/filesaver.js')}}"></script>

@endsection
