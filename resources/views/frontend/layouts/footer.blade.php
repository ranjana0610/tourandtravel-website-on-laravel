<style>
    .main-footer {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .main-footer-first-section {
        display: flex;
        gap: 50px;
    }

    .main-footer-second-section {
        display: flex;
        gap: 50px;
    }

    .footer-first-section-parent {
        display: flex;

    }

    .footer-first-section-tempparent2, .footer-first-section-tempparent1{
        display: flex;
        flex-direction: column;
    }

    .footersociallinks{
        display: flex;
gap: 15px;
    }

    .monumentsbanner{
        margin-top: -130px;
    }

    @media(max-width:768px)
    {
        .main-footer {
        display: flex;
        flex-direction: column;
gap: 25px;
    }
    .main-footer-second-section {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .main-footer-first-section {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .monumentsbanner{
        margin-top: -130px;
        height: 9rem !important;
    }
    }
</style>
<footer style="background-color: #233d5e12;" class="footer-wrapper footer-layout1">
    <div class="widget-area">
        <div class="container">
            <!-- <div class="newsletter-area">
                    <div class="newsletter-top">
                        <div class="row gy-4 align-items-center">
                            <div class="col-lg-5">
                                <h2 class="newsletter-title text-capitalize mb-0">get updated the latest newsletter</h2>
                            </div>
                            <div class="col-lg-7">
                                <form class="newsletter-form"><input class="form-control" type="email"
                                        placeholder="Enter Email" required=""> <button type="submit"
                                        class="th-btn style3">Subscribe Now <img src="assets/img/icon/plane.svg"
                                            alt=""></button></form>
                            </div>
                        </div>
                    </div>
                </div> -->
            <div class="main-footer">

                    <div class="footer-first-section-tempparent1">
                        <div>
                        <h3 class="widget_title">Quick Links</h3>
                        </div>
                        <div>
                            <ul class="menu main-footer-first-section">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="#about-sec">About us</a></li>
                                <li><a href="#service-sec">Services</a></li>
                                <li><a href="#events">Events</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-first-section-tempparent2">
                        <div>
                            <h3 class="widget_title">Social Links</h3>
                        </div>
                        <div class="th-social footersociallinks"><a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a> <a href="https://www.whatsapp.com/"><i
                                    class="fab fa-whatsapp"></i></a> <a href="https://instagram.com/"><i
                                    class="fab fa-instagram"></i></a></div>
                    </div>
            </div>
            <br>
            <br>
            <div class="widget footer-widget">
                <h3 class="widget_title">Reach Us</h3>
                <div class="th-widget-contact main-footer-second-section">
                    <div class="info-box_text">
                        <div class="icon"><img src="{{ asset('frontend/img/icon/phone.svg') }}" alt="img"></div>
                        <div class="details">
                            <p><a href="tel:+919319019095" class="info-box_link">+91 93190 19095</a></p>
                            <p><a href="tel:+919319019096" class="info-box_link">+91 93190 19096</a></p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="{{ asset('frontend/img/icon/envelope.svg') }}" alt="img"></div>
                        <div class="details">
                            <p><a href="mailto:info@mytourizi.com"
                                    class="info-box_link">info@mytourizi.com</a></p>
                            <!-- <p><a href="mailto:xyz24@tourm.com"
                                                class="info-box_link">xyz24@tourm.com</a></p> -->
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="{{ asset('frontend/img/icon/location-dot.svg') }}" alt="img"></div>
                        <div class="details">
                            <p>LG-5, Somdutt Chamber-1, Bhikaji Cama Place, New Delhi-110066</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <img class="monumentsbanner" src="{{asset ('frontend/img/bg-bodyw.png')}}" alt="" width="100%">
    <div class="copyright-wrap" data-bg-src="assets/img/bg/copyright_bg_1.jpg">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <p class="copyright-text">Copyright 2025 <a href="{{url('/')}}">MyTourizi</a>. All Rights
                        Reserved.</p>
                </div>
                <!-- <div class="col-md-6 text-end d-none d-md-block">
                        <div class="footer-card"><span class="title">We Accept</span> <img
                                src="assets/img/shape/cards.png" alt=""></div>
                    </div> -->
            </div>
        </div>
    </div>
</footer>
<style>
    .whats {
        position: fixed;
        bottom: 20px;
        left: 20px;
        /* 👈 moves it to the left side */
        z-index: 1000;
    }

    .whats:after {
        font-family: var(--icon-font);
        /* Make sure this is Font Awesome or your icon font */
        position: absolute;
        text-align: center;
        line-height: 50px;
        font-size: 20px;
        color: var(--theme-color);
        left: 0;
        top: 0;
        height: 50px;
        width: 50px;
        cursor: pointer;
        display: block;
        z-index: 1;
        border: 2px solid var(--theme-color);
        box-shadow: none;
        border-radius: 50%;
    }
</style>
<div style="display: flex; align-items: center; justify-content: center;">
    <!-- WhatsApp Icon -->
    <!-- <div class="whats">
            <a href="https://wa.me/919319019095" target="_blank">
                <img src="{{asset ('frontend/img/icons/whatsapp_icon.png')}}" alt="" style="height:60px;">
            </a>
        </div> -->

    <!-- Progress Circle -->
    <div class="progress-circle">
        <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
                </path>
            </svg>
        </div>
    </div>
</div>
<div id="login-form" class="popup-login-register mfp-hide">
    <ul class="nav" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation"><button class="nav-menu" id="pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                aria-selected="false">Login</button></li>
        <li class="nav-item" role="presentation"><button class="nav-menu active" id="pills-profile-tab"
                data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                aria-controls="pills-profile" aria-selected="true">Register</button></li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <h3 class="box-title mb-30">Sign in to your account</h3>
            <div class="th-login-form">
                <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                    class="login-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-12"><label>Username or email</label> <input type="text"
                                class="form-control" name="email" id="email" required="required"></div>
                        <div class="form-group col-12"><label>Password</label> <input type="password"
                                class="form-control" name="pasword" id="pasword" required="required"></div>
                        <div class="form-btn mb-20 col-12"><button class="th-btn btn-fw th-radius2">Send
                                Message</button></div>
                    </div>
                    <div id="forgot_url"><a href="my-account.html">Forgot password?</a></div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
        <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
            aria-labelledby="pills-profile-tab">
            <h3 class="th-form-title mb-30">Sign in to your account</h3>
            <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                class="login-form ajax-contact">
                <div class="row">
                    <!-- <div class="form-group col-12"><label>Username*</label> <input type="text" class="form-control"
                                name="usename" id="usename" required="required"></div> -->
                    <div class="form-group col-12"><label>Name*</label> <input type="text"
                            class="form-control" name="firstname" id="firstname" required="required"></div>
                    <!-- <div class="form-group col-12"><label>Last name*</label> <input type="text" class="form-control"
                                name="lastname" id="lastname" required="required"></div> -->
                    <div class="form-group col-12"><label for="new_email">Email*</label> <input type="text"
                            class="form-control" name="new_email" id="new_email" required="required"></div>
                    <div class="form-group col-12"><label for="new_email_confirm">Mobile*</label> <input
                            type="text" class="form-control" name="mobile" id="mobile"
                            required="required"></div>
                    <div class="form-group col-12"><label for="password">Password*</label> <input
                            type="text" class="form-control" name="password" id="password"
                            required="required"></div>
                    <!-- <div class="statement"><span class="register-notes">A password will be emailed to you.</span>
                        </div> -->
                    <div class="form-btn mt-20 col-12"><button class="th-btn btn-fw th-radius2">Sign up</button>
                    </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/js/gsap.min.js') }}"></script>
<script src="{{ asset('frontend/js/circle-progress.js') }}"></script>
<script src="{{ asset('frontend/js/matter.min.js') }}"></script>
<script src="{{ asset('frontend/js/matterjs-custom.js') }}"></script>
<script src="{{ asset('frontend/js/nice-select.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>


</body>
<!-- Mirrored from html.themeholy.com/tourm/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Mar 2025 10:16:12 GMT -->

</html>