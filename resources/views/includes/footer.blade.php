<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-2 col-md-6">
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <img src="{{asset('assets/img/gallery/eservices_verified.png')}}" alt="" style="max-width: 180px">
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href=""><i class="bi bi-chevron-right fw-semi-bold"></i> About Us</a>
                <a class="btn btn-link" href=""><i class="bi bi-chevron-right fw-semi-bold"></i> Contact Us</a>
                <a class="btn btn-link" href=""><i class="bi bi-chevron-right fw-semi-bold"></i> Privacy Policy</a>
                <a class="btn btn-link" href=""><i class="bi bi-chevron-right fw-semi-bold"></i> Terms & Condition</a>
                <a class="btn btn-link" href=""><i class="bi bi-chevron-right fw-semi-bold"></i> FAQs & Help</a>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="text-capitalize text-white"><i class="bi bi-geo-alt me-3"></i>
                    Basement, Malik Tower, Block B Citi Housing Jhelum</p>
                <p class="text-capitalize text-white"><i class="bi bi-geo-alt me-3"></i>
                    30 N Gould St. Ste 33293 Sheridan WY 82801</p>
                <p class="mb-2"><i class="bi bi-clock me-3"></i>Monday to Friday</p>
                <p class="">10:00AM - 5:00PM (Onsite)</p>
                <p class="">09:00PM - 3:00AM (Online)</p>

                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="http://pinterest.com/ecomgladiators/" target="_blank"><i class="bi bi-pinterest"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/ecomgladiators_/"
                       target="_blank"><i class="bi bi-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social"
                       href="https://www.facebook.com/profile.php?id=100086142884559&mibextid=ZbWKwL"
                       target="_blank"><i class="bi bi-facebook"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/ecom-gladiators"
                       target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://wa.link/ue2pfq" target="_blank"><i
                            class="bi bi-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://twitter.com/EcomGladiators"
                       target="_blank"><i class="bi bi-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://t.me/ecomgladiators" target="_blank"><i
                            class="bi bi-telegram"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 hidden-sm">
                <h4 class="text-white mb-3 hidden-sm">Newsletter</h4>
                <p>Subscribe newsletter to stay up to date with new promotions.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <form action="{{route('pages.newsletter')}}" method="post" autocomplete="off">
                        @csrf
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" name="NewsletterEmail"
                               placeholder="Your email">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            SignUp
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    <a class="text-white" href="#">Ecomgladiators</a> , All Right Reserved.
                    </a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{route('pages.privacy-policy')}}">Privacy Policy</a>
                        <a href="{{route('pages.sitemap')}}">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
