@extends('includes.master')
@section('title',$title)
@section('content')




<section class="py-5 mt-100">
            <div class="container mt-5">
                <div class="row p-4">
                    <div class="col-lg-8 mx-auto pt-4 px-5 shadow">
                        <h4 class="contact-title text-center mb-4">Enter Certificate Number to Verify Certificate</h4>

                        <form action="{{route('pages.verify_certificate')}}" method="post" autocomplete="off">
                                @csrf
                                <input class="form-control" name="CertificateNo" type="text" placeholder="Enter Certificate Number" required>

                                <div class="form-group mt-3 mb-3 float-end">
                                    <button type="submit" class="btn btn-outline-dark" >Enroll Now</button>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>



@endsection
