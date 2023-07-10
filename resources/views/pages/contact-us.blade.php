@extends('includes.master')
@section('title',$title)
@section('content')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" style="height: 300px">
                    <div  id="map" style="overflow-x: hidden;">
                        <iframe class="text-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53556.69633454601!2d73.6580377027035!3d32.969657026552035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3918d5463ffca1f9%3A0xfb21140bcd1a264c!2sEcom%20Gladiators!5e0!3m2!1sen!2s!4v1688979853595!5m2!1sen!2s"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <h3 class="contact-title" >Get in Touch</h3>
                </div>
                <div class="col-lg-8">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <form class="form-contact contact_form" action="{{route('pages.contact-us-form')}}" method="POST">
                        @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" required placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" required placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" required placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" required style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                        <p class="float-end">Characters remaining: <span id="counter">200</span></p>


                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <div class="media-body">
                            <h6><i class="bi bi-house"></i> Citi Housing, Jhelum</h6>
                            <p>Basement, Malik Tower, Block B Citi Housing Jhelum</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <div class="media-body">
{{--                            <a href="tel:+923190143276"><h5><i class="bi bi-phone"></i>+92 319 0143276</h5></a>--}}
                            <h6><i class="bi bi-clock"></i> Office Timing</h6>
                            <p>Mon to Fri<br>10:00AM - 5:00PM (Onsite)<br>09:00PM - 3:00AM (Online)</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <div class="media-body">
                            <h6><i class="bi bi-envelope"></i> Send us your query at!</h6>
                            <a href="mailto:info@ecomgladiators.com"><p>info@ecomgladiators.com</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener("DOMContentLoaded", function () {
            var textarea = document.getElementById("message");
            var counter = document.getElementById("counter");

            textarea.addEventListener("input", function () {
                var message = textarea.value;

                if (message.length > 200) {
                    textarea.value = message.slice(0, 200);
                }

                counter.textContent = textarea.value.length + "/200";
            });
        });
    </script>
@endsection
