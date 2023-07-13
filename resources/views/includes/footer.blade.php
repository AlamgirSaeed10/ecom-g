<div class="container-fluid bg-dark text-light footer mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-sm-12 col-lg-2 col-md-2 text-center">
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <a href="https://eservices.secp.gov.pk/eServices/ControllerServlet?request_id=VERIFY_ONLINE_INCORP_CERT&id=0208828"
                       target="_blank">
                        <img src="{{asset('assets/img/gallery/eservices_verified.png')}}" class="img-thumbnail"
                             alt="e-service verified logo is here">
                    </a>

                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <h6 class="text-white">PAK</h6>
                <p class="text-capitalize text-white"><i class="bi bi-geo-alt me-3"></i>
                    <a href="https://goo.gl/maps/H9H2xwHsBsgs3Kre7" class="text-white"> Basement, Malik Tower, Block B Citi Housing
                        Jhelum</a></p>
                <h6 class="text-white">USA</h6>
                <p class="text-capitalize text-white"><i class="bi bi-geo-alt me-3"></i>
                    <a href="https://goo.gl/maps/EEqn2RFiWsLAVceS8" class="text-white">30 N Gould St. Ste 33293 Sheridan WY 82801</a></p>
                <p class="mb-2"><i class="bi bi-clock me-3"></i>Monday to Friday</p>
                <p class="">10:00AM - 5:00PM (Onsite)</p>
                <p class="">09:00PM - 3:00AM (Online)</p>

                <div class="d-flex pt-2 mb-3 footer-social">
                    <a class="a-pinterest" href="http://pinterest.com/ecomgladiators/" target="_blank"><i
                            class="bi bi-pinterest"></i></a>
                    <a class="a-instagram" href="https://www.instagram.com/ecomgladiators_/" target="_blank"><i
                            class="bi bi-instagram"></i></a>
                    <a class="a-facebook" href="https://www.facebook.com/profile.php?id=100086142884559&mibextid=ZbWKwL"
                       target="_blank"><i class="bi bi-facebook"></i></a>
                    <a class="a-linkedin" href="https://www.linkedin.com/in/ecom-gladiators" target="_blank"><i
                            class="bi bi-linkedin"></i></a>
                    <a class="a-whatsapp" href="https://wa.link/ue2pfq" target="_blank"><i
                            class="bi bi-whatsapp"></i></a>
                    <a class="a-twitter" href="https://twitter.com/EcomGladiators" target="_blank"><i
                            class="bi bi-twitter"></i></a>
                    <a class="a-telegram" href="https://t.me/ecomgladiators" target="_blank"><i
                            class="bi bi-telegram"></i></a>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-4 d-none d-lg-block">
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
                    &copy;<script>document.write(new Date().getFullYear())</script>
                    <a class="text-white" href="#">Ecomgladiators Private (LTD) </a> , All Right Reserved.
                    </a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a class="text-white" href="{{route('pages.privacy-policy')}}">Privacy Policy</a>
                        <a class="text-white" href="{{route('pages.sitemap')}}">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
