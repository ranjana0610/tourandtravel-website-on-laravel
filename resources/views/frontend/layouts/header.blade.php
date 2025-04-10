<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from html.themeholy.com/tourm/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Mar 2025 10:16:12 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MyTourizi</title>
    <meta name="author" content="Tourm">
    <meta name="description" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="keywords" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Manrope:wght@200..800&amp;family=Montez&amp;display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">


    <style>
        .blinkingButton{
    width: 15%;
}

        .tour-box {
                margin-bottom: 20px; /* Adjust as needed */
                height: 100%;
            }
        @media (max-width: 767px) {
            .tour-box {
                margin-bottom: 20px; /* Adjust as needed */
            }
        }
        .category-card {
        position: relative;
        overflow: hidden;
        text-align: left; /* Align text to the left */
        margin-bottom: 20px;
        height: 100%; /* Make sure all cards are uniform */
        display: flex;
        flex-direction: column;
    }

    .box-img {
    position: relative;
    flex-grow: 1;
    }
    .box-img img {
        width: 100%;
        height: auto;
        display: block;
    }

    .overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%; /* Full height for bottom-to-top effect */
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, #000 100%);
    display: flex;
    align-items: flex-end; /* Start from the bottom */
    justify-content: left;
    text-align:start;
    padding: 20px;
    transition: all 0.4s ease-in-out;
    opacity: 0;
}

.category-card .overlay {
    opacity: 1; 
}

.overlay h3 {
    margin: 0;
    color: white;
    font-size: 20px;
    text-align: center;
}


    .overlay a {
        color: #fff;
        text-decoration: none;
    }
       

        .our_services{
            background-image: url('assets/img/service_banner.jpg') !important;
            background-size: cover;
            background-position: center;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 40px;
            text-align: center;
            padding-bottom:30px;
     
            }

            .grid-item {
            /* background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px; */
            transition: transform 0.3s;
            }

            .grid-item:hover {
            transform: translateY(-10px);
            }

            .grid-item img {
            width: 60px;
            height: 60px;
            }

            .grid-item p {
            color: #333;
            font-size: 20px;
            margin-top: 10px;
            text-align: center;
            color:#113d48;
            /* text-align: start; */
            /* padding-left: 20px; */
            font-weight: 500;

            }

            @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
            }
            .why_choose {
                background-image: url('frontend/img/banner_bg.jpg') !important;
                background-size: cover;
                background-position: center;
                margin-bottom: 60px;
            }
            .our_services img{
                width: 100px;
                height: 100px;
            }
            .fit-image {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures image covers the area */
            }   
            @keyframes blink {
                0% { opacity: 1; }
                50% { opacity: 0.3; }
                100% { opacity: 1; }
            }

            .switchIcon {
                background: #292B7D;
                color: white;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                font-size: 16px;
                animation: blink 1s infinite;
            }    
           /* .img_ser{
            max-height: 200px !important;
            max-width: 380px !important;
           } */

           .tour-box {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.tour-box img {
    width: 100%;
    height: 100%;
    display: block;
    border-radius: 10px;
}

.tour-content-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 15px;
    text-align: center;
    color: #fff;
    z-index: 2;
    border-radius: 0 0 10px 10px;
}

.tour-content-overlay::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, #000 27%);
    z-index: 1;
    border-radius: 0 0 10px 10px;
}

.tour-content-overlay h3,
.tour-content-overlay a {
    position: relative;
    z-index: 2;
    margin: 0;
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    text-decoration: none;
}


/* Hover effect for better UI */
/* .tour-box:hover .tour-content-overlay {
    background: rgba(0, 0, 0, 0.8);
} */

.membership-plans .card {
    border: 2px solid #00bcd4; /* Light blue border */
    border-radius: 15px; /* Rounded corners */
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2); /* Smooth shadow */
    transition: all 0.3s ease-in-out;
    background: white; /* Ensuring a clean white background */
    padding: 20px;
}

.membership-plans .card:hover {
    transform: scale(1.05); /* Slight zoom effect on hover */
    box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.3); /* Stronger shadow on hover */
}

.membership-plans .card h3 {
    color: #113D48;
    font-weight: bold;
    font-size: 20px;
}

.membership-plans .card p {
    font-size: 16px;
    color: #555;
    margin-bottom: 10px;
}

.membership-plans img {
    margin-right: 10px;
    vertical-align: middle;
    height: 20px;
}

.blinkingButton2{
    display: none;
}
/* Responsive design improvements */
@media (max-width: 768px) {
    .membership-plans .col-md-6 {
        width: 100%;
        margin-bottom: 20px;
    }

    .blinkingButton{

    display: none;
}

.blinkingButton2{
    display: block;
}
}

/* why choose code */



    </style>
</head>

<body>
    <div class="cursor-follower"></div>
    <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i>
    </div>
   
    <!-- <div id="preloader" class="preloader"><button class="th-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner"><img src="assets/img/logo3.svg" alt=""></div>
         <h2 style="font-size: 25px;">LOGO</h2>
        <div id="loader" class="th-preloader">
            <div class="animation-preloader">
                <div class="txt-loading"><span preloader-text="T" class="characters">T </span><span preloader-text="O"
                        class="characters">O </span><span preloader-text="U" class="characters">U </span><span
                        preloader-text="R" class="characters">R </span><span preloader-text="M"
                        class="characters">M</span></div>
            </div>
        </div>
    </div> -->
    <div class="sidemenu-wrapper sidemenu-info">
        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget">
                <div class="th-widget-about">
                    <div class="about-logo"><a href="home-travel.html"><img src="{{asset ('frontend/img/logo_tourizi.jpeg')}}" alt="Tourm"></a>
                    </div>
                    <!-- <h2 style="font-size: 25px;">
                        LOGO
                    </h2> -->
                    <p class="about-text">Rapidiously myocardinate cross-platform intellectual capital model.
                        Appropriately create interactive infrastructures</p>
                    <div class="th-social"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a
                            href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a
                            href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                            href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></div>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img"><a href="blog-details.html"><img
                                    src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a></div>
                        <div class="media-body">
                            <div class="recent-post-meta"><a href="#"><i class="far fa-calendar"></i>24 Jun ,
                                    2025</a></div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Where Vision Meets
                                    Concrete Reality</a></h4>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img"><a href="blog-details.html"><img
                                    src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a></div>
                        <div class="media-body">
                            <div class="recent-post-meta"><a href="#"><i class="far fa-calendar"></i>22 Jun ,
                                    2025</a></div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Raising the Bar in
                                    Construction.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Get In Touch</h3>
                <div class="th-widget-contact">
                    <div class="info-box_text">
                        <div class="icon"><img src="assets/img/icon/phone.svg" alt="img"></div>
                        <div class="details">
                            <p><a href="tel:+01234567890" class="info-box_link">+01 234 567 890</a></p>
                            <p><a href="tel:+09876543210" class="info-box_link">+09 876 543 210</a></p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="assets/img/icon/envelope.svg" alt="img"></div>
                        <div class="details">
                            <p><a href="mailto:mailinfo00@tourm.com" class="info-box_link">mailinfo00@tourm.com</a></p>
                            <p><a href="mailto:support24@tourm.com" class="info-box_link">support24@tourm.com</a></p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img"></div>
                        <div class="details">
                            <p>789 Inner Lane, Holy park, California, USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i
                    class="fal fa-search"></i></button></form>
    </div>
    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="{{ url('/') }}"><img src="{{asset ('frontend/img/logo_tourizi.jpeg')}}" alt="Tourm" style="height: 75px;width: 200px;"></a></div>
             <!-- <h2 style="font-size: 25px;">
                        LOGO
                    </h2> -->
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children mega-menu-wrap"><a class="active" href="{{url ('/')}}">Home</a>
                        <!-- <ul class="sub-menu">
                            <li><a href="home-travel.html">Home Travel</a></li>
                            <li><a href="home-tour.html">Home Tour</a></li>
                            <li><a href="home-agency.html">Home Agency</a></li>
                            <li><a href="home-yacht.html">Home Yacht</a></li>
                            <li><a href="home-beach.html">Home Beach</a></li>
                            <li><a href="home-resort.html">Home Resort</a></li>
                            <li><a href="home-countryside-hotel.html">Home Countryside Hotel</a></li>
                            <li><a href="home-forest.html">Home Forest</a></li>
                        </ul> -->
                    </li>
                    <li><a href="#about-sec">About</a></li>
                    <li><a href="#service-sec">Services</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="th-header header-layout1">
        <div class="header-top" style="background-color: #f5f6f7;">
            <div class="container th-container">
                <div class="row justify-content-center justify-content-xl-between align-items-center">
                    <div class="col-auto d-none d-md-block">
                        <div class="header-links">
                            <ul>
                                <!-- <li class="d-none d-xl-inline-block"><i style="color:#fff" class="fa-sharp fa-regular fa-location-dot"></i>
                                    <span style="color:#fff">LG-5, Somdutt Chamber-1, Bhikaji Cama Place, New Delhi-110066</span></li> -->
                                <!-- <li class="d-none d-xl-inline-block"><i class="fa-regular fa-clock"></i> <span>Sun to
                                        Friday: 8.00 am - 7.00 pm</span></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-right">
                            <!-- <div class="currency-menu"><select class="form-select nice-select">
                                    <option selected="">language</option>
                                    <option>CNY</option>
                                    <option>EUR</option>
                                    <option>AUD</option>
                                </select>
                            </div> -->
                            <div class="blinkingButton2"> <a href="http://www.mytourizi.com/">
                                <button class="switchIcon" style="background:black;"><strong>Booking Online</strong></button>
                            </a></div>
                            <div class="header-links">
                                <ul>
                                    <!-- <li class="d-none d-md-inline-block"><a href="#">FAQ</a></li> -->
                                    <!-- <li class="d-none d-md-inline-block"><a href="contact.html">Support</a></li> -->
                                    <li><a href="{{ url('/login') }}" style="color:black" >Sign In</a></li>
                                    <li><a href="{{ url('/register') }}" style="color:black">Register<i
                                                class="fa-regular fa-user" style="color:black"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto ">
                           
                            <!-- <h2 style="font-size:25px;">LOGO</h2> -->
                        </div>
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <!-- Logo on the left -->
                            <div class="header-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('frontend/img/logo_tourizi.jpeg')}}" alt="Tourm" style="height:75px;">
                                </a>
                            </div>

                            <!-- Navigation Menu on the right -->
                            <nav class="main-menu d-none d-xl-flex ms-auto">
                                <ul class="d-flex mb-0">
                                    <li class="menu-item-has-children mega-menu-wrap header-button">
                                        
                                        <a class="th-btn" href="{{url('/')}}"  ><i class="fa-solid fa-house-user"></i><span>Home</span></a>
                                    </li>
                                    <li class="menu-item-has-children mega-menu-wrap header-button">
                                        <a href="#about-sec"  class="th-btn"  ><i class="fa-solid fa-address-card"></i><span>About Us</span></a>
                                    </li>
                                    <li class="menu-item-has-children mega-menu-wrap header-button">
                                        <a href="#service-sec"  class="th-btn"  ><i class="fa-brands fa-servicestack"></i><span>Services</span></a>
                                    </li>
                                    <li class="menu-item-has-children mega-menu-wrap header-button">
                                        <a href="#events"  class="th-btn"  ><i class="fa-solid fa-images"></i><span>Events</span></a>
                                    </li>
                                    <li class="menu-item-has-children mega-menu-wrap header-button">
                                        <a href="#team"  class="th-btn"  ><i class="fa-solid fa-images"></i><span>Team</span></a>
                                    </li>
                                    <li class="menu-item-has-children mega-menu-wrap header-button">
                                        <a href="#"  class="th-btn"  ><i class="fa-solid fa-address-book"></i><span>Contact Us</span></a>
                                    </li>
                                </ul>
                            </nav>

                            <div class="blinkingButton"> <a href="http://www.mytourizi.com/">
                                <button class="switchIcon" style="background:black;"><strong>Booking Online</strong></button>
                            </a></div>

                            <!-- Mobile Menu Button -->
                            <button type="button" class="th-menu-toggle d-block d-xl-none">
                                <i class="far fa-bars"></i>
                            </button>
                        </div>

                        <div class="col-auto d-none d-xl-block">
                            <!-- <div class="header-button"><a href="#" class="th-btn style3 th-icon">Register Now</a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="logo-bg" data-mask-src="assets/img/logo_bg_mask.png"></div>
            </div>
        </div>
    </header>