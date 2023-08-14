<div class="container-fluid bg-dark text-light footer mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-sm-12 col-lg-7 col-md-7">
                <h4 class="text-white mb-3">Contact Us</h4>
                <p class="text-capitalize text-white"><i class="bi bi-geo-alt me-3"></i>
                    <a href="https://goo.gl/maps/H9H2xwHsBsgs3Kre7" class="text-white"> Basement, Malik Tower, Block B
                        Citi Housing
                        Jhelum, PK</a></p>
                       
                <p class="text-capitalize text-white"><i class="bi bi-geo-alt me-3"></i>
                    <a href="https://goo.gl/maps/EEqn2RFiWsLAVceS8" class="text-white">30 N Gould St. Ste 33293 Sheridan
                        WY 82801, USA</a></p>
                         <br>
                <p class="mb-2"><i class="bi bi-clock me-3"></i>Monday to Friday</p>
                <p class="">10:00AM - 5:00PM (Onsite)</p>
                <p class="">09:00PM - 3:00AM (Online)</p>
 <br>
                <div class="d-flex pt-2 mb-3 footer-social">
                    <a class="a-whatsapp" href="https://wa.link/ue2pfq" target="_blank"><i
                            class="bi bi-whatsapp"></i></a>
                    <a class="a-facebook" href="https://www.facebook.com/profile.php?id=100086142884559&mibextid=ZbWKwL"
                       target="_blank"><i class="bi bi-facebook"></i></a>
                    <a class="a-instagram" href="https://www.instagram.com/ecomgladiators_/" target="_blank"><i
                            class="bi bi-instagram"></i></a>
                    <a class="a-linkedin" href="https://www.linkedin.com/in/ecom-gladiators" target="_blank"><i
                            class="bi bi-linkedin"></i></a>
                    <a class="a-telegram" href="https://t.me/ecomgladiators" target="_blank"><i
                            class="bi bi-telegram"></i></a>
                    <a class="a-twitter" href="https://twitter.com/EcomGladiators" target="_blank"><i
                            class="bi bi-twitter"></i></a>
                    <a class="a-pinterest" href="http://pinterest.com/ecomgladiators/" target="_blank"><i
                            class="bi bi-pinterest"></i></a>
                </div>
            </div>
            
            <div class="col-sm-12 col-lg-5 col-md-5  d-none d-lg-block">
                 @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                
                <h4 class="text-white mb-3 hidden-sm">Newsletter</h4>
                <p>Subscribe newsletter to know the latest offers, &amp; discounts!</p>
                <div class="position-relative mx-auto" style="max-width: 500px;">
                    <form action="{{route('pages.newsletter')}}" method="post" autocomplete="off">
                        @csrf
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="email" maxlength="40" name="NewsletterEmail"
                               placeholder="Enter your email" required>
                        <button type="submit"  class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            Subscribe!
                        </button>
                    </form>
                    <img src="{{asset('assets/img/gallery/ecommerce.webp')}}" alt="ecommerce" style = "width: 100%; height: auto;">
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 order-lg-first ">
                    &copy;<script>document.write(new Date().getFullYear())</script>
                    <a class="text-white" href="#">Ecomgladiators (Private) Limited </a> , All Rights Reserved.
                    </a>
                </div>
                <div class="col-md-6 text-center text-md-end order-sm-first">
                    <div class="footer-menu">
                        <a class="text-white" href="{{route('pages.privacy-policy')}}">Privacy Policy</a>
                        <a class="text-white" href="{{route('pages.sitemap')}}">Sitemap</a>
                        <a class="text-white" href="https://eservices.secp.gov.pk/eServices/ControllerServlet?request_id=VERIFY_ONLINE_INCORP_CERT&id=0208828"
                           target="_blank">SECP Registered</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
