@extends('frontend.layouts.main')

@section('main-container')
<style>
    .hero-inner {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background: linear-gradient(to top, rgba(9, 9, 9, 1) 0%, rgba(244, 243, 249, 1) 100%);

        z-index: 1;
    }

    .hero-style1 {
        position: relative;
        z-index: 2;
        /* Keep content above the overlay */
    }
    #clrsec{
        color:#ff782a;
    }
</style>
<div class="th-hero-wrapper hero-1" id="hero">
    <div class="swiper th-slider hero-slider-1" id="heroSlide1" style="height:587px;"
        data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="th-hero-bg" data-bg-src="{{ asset('frontend/img/hero/slider_1.jpg') }}"></div>
                    <div class="container">
                        <div class="hero-style1">
                            <span class="sub-title style1" data-ani="slideinup"
                                data-ani-delay="0.2s">Save More with MyTourizi</span><br>
                            <h2 style="font-size: 2.3rem;animation-delay: 0.4s;" class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">MyTourizi offers Fully Refundable membership plans, with yearly benefits upto Rs 4.83 Lakhs besides enjoying significant savings.</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-swiper-custom"><button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img
                    src="assets/img/icon/right-arrow.svg" alt=""></button>
            <div class="slider-pagination"></div><button data-slider-next="#heroSlide1"
                class="slider-arrow slider-next"><img src="assets/img/icon/left-arrow.svg" alt=""></button>
        </div>
    </div>
</div>
<!-- <div class="booking-sec">
        <div class="container">
            <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                class="booking-form ajax-contact">
                <div class="input-wrap">
                    <div class="row align-items-center justify-content-between">
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon"><i class="fa-light fa-route"></i></div>
                            <div class="search-input"><label>Destination</label> <select name="subject" id="subject"
                                    class="form-select nice-select">
                                    <option value="Select Destination" selected="selected" disabled="disabled">Select
                                        Destination</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Dubai">Dubai</option>
                                    <option value="England">England</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="Saudi Arab">Saudi Arab</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Scandinavia">Scandinavia</option>
                                    <option value="Western Europe">Western Europe</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option class="Italy">Italy</option>
                                </select></div>
                        </div>
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon"><i class="fa-regular fa-person-hiking"></i></div>
                            <div class="search-input"><label>Type</label> <select class="nice-select" name="Adventure"
                                    id="Adventure">
                                    <option value="Adventure" selected="selected" disabled="disabled">Adventure</option>
                                    <option value="Beach">Beach</option>
                                    <option value="Group Tour">Group Tour</option>
                                    <option value="Couple Tour">Couple Tour</option>
                                    <option value="Family Tour">Family Tour</option>
                                </select></div>
                        </div>
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon"><i class="fa-light fa-clock"></i></div>
                            <div class="search-input"><label>Duration</label> <select class="form-select nice-select"
                                    name="Duration" id="Duration">
                                    <option value="Normal" selected="selected" disabled="disabled">Duration</option>
                                    <option value="1">1 days</option>
                                    <option value="2">2 days</option>
                                    <option value="3">3 days</option>
                                    <option value="4">4 days</option>
                                    <option value="5">5 days</option>
                                    <option value="6">6 days</option>
                                    <option value="7">7 days</option>
                                </select></div>
                        </div>
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon"><i class="fa-light fa-map-location-dot"></i></div>
                            <div class="search-input"><label>Tour Category</label> <select name="subject" id="category"
                                    class="form-select nice-select">
                                    <option value="Normal" selected="selected" disabled="disabled">Luxury</option>
                                    <option value="1">Delux</option>
                                    <option value="2">Economy</option>
                                </select></div>
                        </div>
                        <div class="form-btn col-md-12 col-lg-auto"><button class="th-btn"><img
                                    src="assets/img/icon/search.svg" alt="">Search</button></div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </div>
            </form>
        </div>
    </div> -->
<div class="about-area position-relative overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="img-box1">
                    <div class="img1"><img src="{{asset('frontend/img/normal/about_1_1.jpg') }}" alt="About"></div>
                    <div class="img2"><img src="{{asset('frontend/img/normal/about_1_2.jpg') }}" alt="About"></div>
                    <div class="img3"><img src="{{asset('frontend/img/normal/about_1_3.jpg') }}" alt="About"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ps-xl-4 ms-xl-2">
                    <div class="title-area mb-20 pe-xl-5 me-xl-5">
                        <!-- <span class="sub-title style1">Let’s Go Together</span> -->
                        <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">About <span id="clrsec">Us</span></h2>
                        <p style="text-align: justify;">
                            We are MyTourizi Where Adventure Begins! We are a passionate and dynamic travel agency founded by three close friends. Our journey began as colleagues at a travel company, where we handled pan-India administration, gaining valuable experience and insights into the travel industry. While working, we were often approached by friends and family for travel advice, asking for the best offers and pleasurable travel experiences. These requests consistently increased over a period of time which sparked our passion to create our own venture. </p>
                        <p style="text-align: justify;">MyTourizi was founded in New Delhi, India, in October 2016. Thus began our journey of providing committed services to create memorable travel experiences for our clients at reasonable rates. Our expertise in the field ensures that we cater to every travel need of our clients with comfort and care. In 2018, we were honored to be joined by our boss, who comes from a distinguished Army background. His invaluable contribution has helped us grow and thrive as a team. At MyTourizi, we’re not just about booking trips; we’re here to make your travel dreams come true. Whether it’s a relaxing getaway, an adventurous expedition, or a cultural immersion, we’re always there for you. Join us, and let us turn your next journey into a memorable story!</p>
                    </div>

                    <!-- <div class="about-item-wrap">
                            <div class="about-item">
                                <div class="about-item_img"><img src="assets/img/icon/map3.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Exclusive Trip</h5>
                                    <p class="about-item_text">There are many variations of passages of available but
                                        the majority.</p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-item_img"><img src="assets/img/icon/guide.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Professional Guide</h5>
                                    <p class="about-item_text">There are many variations of passages of available but
                                        the majority.</p>
                                </div>
                            </div>
                        </div> -->
                    <!-- <div class="mt-35"><a href="#" class="th-btn style3 th-icon">Learn More</a></div> -->
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="-16%"><img
                src="assets/img/shape/shape_1.png" alt="shape"></div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="-16%"><img
                src="assets/img/shape/shape_2.png" alt="shape"></div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="-10%"><img
                src="assets/img/shape/shape_3.png" alt="shape"></div>
        <div class="shape-mockup about-shape movingX d-none d-xxl-block" data-bottom="0%" data-right="-11%"><img
                src="assets/img/normal/about-slide-img.png" alt="shape"></div>
        <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="50%" data-right="-20%"><i
                class="fa-sharp fa-solid fa-star"></i><span>4.9k</span></div>
        <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="25%" data-right="5%"><img
                src="assets/img/icon/emoji.png" alt=""></div>
    </div>
</div>
<div class="membership_plan">
    <div class="container">
        <section class="membership-plans">
            <div class="container">
                <h2 class="title-area text-center sec-title" style="color:#113D48;font-family:var(--bs-font-sans-serif);">
                    Membership <span id="clrsec">Plans</span>
                </h2>

                <div class="row d-flex justify-content-center mt-4">
                    <!-- Card 1 -->
                    <div class="col-md-6">
                        <div class="card text-center p-4 shadow-lg">
                            <h3>Fly Standard Membership - Rs 2 Lakhs</h3>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Get Annual benefits worth Rs 56,000 </p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Annual Free Travel worth Rs 43,000</p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Cash vouchers (Movie/Food/Shopping) worth Rs 8,000 </p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Referral Bonus worth Rs 5,000 (utility bills/shopping/movie tickets/travel vouchers)</p>
                            <!-- <button class="btn btn-primary">Choose Plan</button> -->
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-6">
                        <div class="card text-center p-4 shadow-lg">
                            <h3>Fly Deluxe Membership - Rs 5 Lakhs</h3>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Get Annual benefits worth Rs 152,000</p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Annual Free Travel worth Rs 126,000</p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Cash vouchers worth Rs 16,000</p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Referral Bonus worth Rs 10,000 (utility bills/shopping vouchers/movie tickets/travel vouchers)</p>
                            <!-- <button class="btn btn-success">Choose Plan</button> -->
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-4">
                    <!-- Card 1 -->
                    <div class="col-md-6">
                        <div class="card text-center p-4 shadow-lg">
                            <h3>Fly Premium Membership - Rs 9 Lakhs</h3>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Get Annual benefits worth Rs 288,000</p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Annual Free Travel worth Rs 248,000</p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Cash vouchers worth Rs 25,000</p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Referral Bonus worth Rs 15,000 (utility bills/shopping vouchers/movie tickets/travel vouchers)</p>
                            <!-- <button class="btn btn-primary">Choose Plan</button> -->
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-6">
                        <div class="card text-center p-4 shadow-lg">
                            <h3>Fly Executive Membership - Rs 14 Lakhs</h3>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Get Annual benefits worth Rs 483,000</p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Annual Free Travel worth Rs 428,000</p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Cash vouchers worth Rs 35,000</p>
                            <p style="text-align:left;"><img src="{{asset('frontend/img/icon/right_icon.png')}}" alt="" style="height:20px;"> Referral Bonus worth Rs 20,000 (utility bills, shopping vouchers, movie tickets, and travel vouchers)</p>
                            <!-- <button class="btn btn-success">Choose Plan</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<section class="tour-area position-relative bg-top-center overflow-hidden space" id="service-sec"
    data-bg-src="assets/img/bg/tour_bg_1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-area text-center">
                    <span class="sub-title">Wonderful Place For You</span>
                    <h2 class="sec-title">Our <span id="clrsec">Services</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Box -->
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/category/category_4.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Visa</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/category/category_1.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Domestic & International Flight</a></h3>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-lg-5 mb-3">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/category/category_3.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Domestic & International Package</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 mb-3">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/category/category_2.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Domestic & International Hotel Reservation</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-3">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/category/category_5.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Train Booking</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-3">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/category/category_6.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Corporate Travel</a></h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<style>
    .event-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .event-card:hover {
        transform: translateY(-5px);
    }

    .event-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }
</style>
<div class="container my-5" id="events">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="title-area text-center">
                <span class="sub-title">Crafting Unforgettable Events</span>
                <h2 class="sec-title">Event and Photography <span id="clrsec">Planner</span></h2>
            </div>
        </div>
    </div>
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-3">
            <div class="card event-card">
                <img src="{{asset('frontend/img/event/01.jpg')}}" alt="No Hidden Charges">
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">Industrial Photography</h5>
                    <!-- <p class="card-text text-muted">Transparent pricing always</p> -->
                </div>
            </div>
        </div>


        <!-- Card 2 -->
        <div class="col-md-3">
            <div class="card event-card">
                <img src="{{asset('frontend/img/event/02.jpg')}}" alt="Flight Booking">
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">Baby Shower</h5>
                    <!-- <p class="card-text text-muted">Book flights at best prices</p> -->
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3">
            <div class="card event-card">
                <img src="{{asset('frontend/img/event/03.jpg')}}" alt="No Hidden Charges">
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">Birthday Parties</h5>
                    <!-- <p class="card-text text-muted">Transparent pricing always</p> -->
                </div>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-3">
            <div class="card event-card">
                <img src="{{asset('frontend/img/event/04.jpg')}}" alt="No Hidden Charges">
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">Wedding Anniversary</h5>
                    <!-- <p class="card-text text-muted">Transparent pricing always</p> -->
                </div>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-md-4">
            <div class="card event-card">
                <img src="{{asset('frontend/img/event/05.jpg')}}" alt="No Hidden Charges">
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">Corporate & Conference Event</h5>
                    <!-- <p class="card-text text-muted">Transparent pricing always</p> -->
                </div>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="col-md-4">
            <div class="card event-card">
                <img src="{{asset('frontend/img/event/06.jpg')}}" alt="No Hidden Charges">
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">Commercial Photography</h5>
                    <!-- <p class="card-text text-muted">Transparent pricing always</p> -->
                </div>
            </div>
        </div>
        <!-- Card 7 -->
        <div class="col-md-4">
            <div class="card event-card">
                <img src="{{asset('frontend/img/event/07.jpg')}}" alt="Free Travel">
                <div class="card-body text-center">
                    <h5 class="card-title mb-1">Wedding & Pre Wedding Shoot</h5>
                    <!-- <p class="card-text text-muted">Enjoy free travel options</p> -->
                </div>
            </div>
        </div>

    </div>
</div>
<section class="tour-area position-relative bg-top-center overflow-hidden space" id="service-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-area text-center">
                    <!-- <span class="sub-title">Best Place For You</span> -->
                    <h2 class="sec-title">Why Choose <span id="clrsec">Us</span></h2>
                </div>
            </div>
        </div>
        <style>
            .grid-container-new {
                display: grid;
                grid-template-columns: auto auto auto auto;
                gap: 10px;
                padding: 20px;
            }

            .item1 {
                grid-column: 1;
                height: 16rem;
            }

            .item2 {
                grid-column: 2;
                height: 16rem;

            }

            .item3 {
                grid-column: 3;
                grid-row: 1 / span 2;
                height: 32.6rem;
            }

            .item4 {
                width: 107.5%;

                grid-column: 4;
                grid-row: 1 / span 2;
                height: 32.6rem;

            }

            .item5 {
                grid-column: 1;
                height: 16rem;

            }

            .item6 {
                grid-column: 2;
                height: 16rem;


            }

            .item7 {
                height: 16rem;
                grid-column: 1 / span 2;
            }

            .item8 {
                height: 16rem;
                grid-column: 3 / span 4;
            }

            @media screen and (max-width: 768px) {
    .grid-container-new {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        padding: 10px;
    }

    .grid-container-new > div {
        grid-column: auto !important;
        grid-row: auto !important;
        width: 100% !important;
        height: auto !important;
    }
    .air-title {
    font-size: 20px !important;
    
}

    /* Item 3 and Item 6 should span both columns */
    .grid-container-new > div:nth-child(3),
    .grid-container-new > div:nth-child(6) {
        grid-column: 1 / span 2 !important;
    }

    .tour-content-overlay a {
    position: relative;
    z-index: 2;
    margin: 0;
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
}

.tour-box img {
    width: 100%;
    height: 145px;
    display: block;
    border-radius: 10px;
}
}



        </style>
        <div class="grid-container-new">
            <!-- Single Box -->
            <div class="item1">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/tour/free_travel.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Free Travel upto 4.83 lacs</a></h3>
                    </div>
                </div>
            </div>

            <div class="item2">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/tour/flight_booking.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Flight booking with no convenience fee</a></h3>
                    </div>
                </div>
            </div>

            <div class="item3">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/tour/no_hidden_charge.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">No Hidden Charges & Transparent T&Cs</a></h3>
                    </div>
                </div>
            </div>

            <div class="item4">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/tour/deals.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Exciting Deals</a></h3>
                    </div>
                </div>
            </div>

            <div class="item5">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/tour/refund.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Instant Refund</a></h3>
                    </div>
                </div>
            </div>

            <div class="item6">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/tour/help.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Help at Hand Customer Support</a></h3>
                    </div>
                </div>
            </div>

            <div class="item7">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/tour/advice.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">For the right advice</a></h3>
                    </div>
                </div>
            </div>

            <div class="item8">
                <div class="tour-box position-relative">
                    <img src="{{asset('frontend/img/tour/budget.jpg') }}" alt="image" class="img-fluid">
                    <div class="tour-content-overlay">
                        <h3 class="box-title"><a href="#">Budget Friendly Holiday Packages</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <div class="gallery-area">
        <div class="container th-container">
            <div class="title-area text-center"><span class="sub-title">Make Your Tour More Pleasure</span>
                <h2 class="sec-title">Recent Gallery</h2>
            </div>
            <div class="row gy-10 gx-10 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="{{ ('frontend/img/gallery/gallery_1_1.jpg') }}"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="{{ ('frontend/img/gallery/gallery_1_1.jpg') }}" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="{{ ('frontend/img/gallery/gallery_1_2.jpg') }}"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="{{ ('frontend/img/gallery/gallery_1_2.jpg') }}" alt="gallery image">
                            </a></div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="{{ ('frontend/img/gallery/gallery_1_3.jpg') }}"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="{{ ('frontend/img/gallery/gallery_1_3.jpg') }}" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="{{ ('frontend/img/gallery/gallery_1_4.jpg') }}"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="{{ ('frontend/img/gallery/gallery_1_4.jpg') }}" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="{{ ('frontend/img/gallery/gallery_1_5.jpg') }}"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="{{ ('frontend/img/gallery/gallery_1_5.jpg') }}" alt="gallery image">
                            </a></div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="{{ ('frontend/img/gallery/gallery_1_6.jpg') }}"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="{{ ('frontend/img/gallery/gallery_1_6.jpg') }}" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="{{ ('frontend/img/gallery/gallery_1_7.jpg') }}"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="{{ ('frontend/img/gallery/gallery_1_7.jpg') }}" alt="gallery image">
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup d-none d-xl-block" data-top="-25%" data-left="0%"><img
                    src="assets/img/shape/line.png" alt="shape"></div>
            <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-3%"><img class="gmovingX"
                    src="assets/img/shape/shape_4.png" alt="shape"></div>
        </div>
    </div> -->
<div class="position-relative overflow-hidden">
    <div class="container">
        <div class="title-area text-center"><span class="sub-title">Top Destination</span>
            <h2 class="sec-title">Popular <span id="clrsec">Destination</span></h2>
        </div>
        <div class="swiper th-slider destination-slider slider-drag-wrap" id="aboutSlider1"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"95","depth":"212","modifier":"1"},"centeredSlides":"true"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="{{url ('frontend/img/destination/destination_1_1.jpg')}}"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                        class="destination-subtitle">15 Listing</span>
                                </div>
                                <!-- <div class=""><a href="#" class="th-btn style2 th-icon">View
                                            All</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="{{url ('frontend/img/destination/destination_1_2.jpg')}}"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Thailand</a></h4><span
                                        class="destination-subtitle">22 Listing</span>
                                </div>
                                <!-- <div class=""><a href="#" class="th-btn style2 th-icon">View
                                            All</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="{{url ('frontend/img/destination/destination_1_3.jpg')}}"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Belgium</a></h4><span
                                        class="destination-subtitle">25 Listing</span>
                                </div>
                                <!-- <div class=""><a href="#" class="th-btn style2 th-icon">View
                                            All</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="{{url ('frontend/img/destination/destination_1_4.jpg')}}"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Island</a></h4><span
                                        class="destination-subtitle">28 Listing</span>
                                </div>
                                <!-- <div class=""><a href="#" class="th-btn style2 th-icon">View
                                            All</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="{{url ('frontend/img/destination/destination_1_5.jpg')}}"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                        class="destination-subtitle">30 Listing</span>
                                </div>
                                <!-- <div class=""><a href="#" class="th-btn style2 th-icon">View
                                            All</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="{{url ('frontend/img/destination/destination_1_1.jpg')}}"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                        class="destination-subtitle">15 Listing</span>
                                </div>
                                <!-- <div class=""><a href="#" class="th-btn style2 th-icon">View
                                            All</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="{{url ('frontend/img/destination/destination_1_2.jpg')}}"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Thailand</a></h4><span
                                        class="destination-subtitle">22 Listing</span>
                                </div>
                                <!-- <div class=""><a href="#" class="th-btn style2 th-icon">View
                                            All</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="{{url ('frontend/img/destination/destination_1_3.jpg')}}"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Belgium</a></h4><span
                                        class="destination-subtitle">25 Listing</span>
                                </div>
                                <!-- <div class=""><a href="#" class="th-btn style2 th-icon">View
                                            All</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="{{url ('frontend/img/destination/destination_1_4.jpg')}}"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Island</a></h4><span
                                        class="destination-subtitle">28 Listing</span>
                                </div>
                                <!-- <div class=""><a href="#" class="th-btn style2 th-icon">View
                                            All</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="{{url ('frontend/img/destination/destination_1_5.jpg')}}"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                        class="destination-subtitle">30 Listing</span>
                                </div>
                                <!-- <div class=""><a href="#" class="th-btn style2 th-icon">View
                                            All</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="counter-area space">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">12</span></h3>
                        <h6 class="counter-title">Years Experience</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">97</span>%</h3>
                        <h6 class="counter-title">Retention Rate</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">8</span>k</h3>
                        <h6 class="counter-title">Tour Completed</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">19</span>k</h3>
                        <h6 class="counter-title">Happy Travellers</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xl-block" data-top="30%" data-left="-15%"><img
                src="assets/img/shape/shape_1.png" alt="shape"></div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="45%" data-left="-13%"><img
                src="assets/img/shape/shape_2.png" alt="shape"></div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="32%" data-left="-7%"><img
                src="assets/img/shape/shape_3.png" alt="shape"></div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="-24%" data-left="-15%"><img
                src="assets/img/shape/shape_6.png" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="-10%"><img
                src="assets/img/shape/shape_5.png" alt="shape"></div>
    </div>
</div>
<style>
    .teammembers,
    .teammemberssecond {
        display: flex;
        gap: 10px;
        padding: 15px;
        margin-bottom: 15px;
    }

    .teammemberssecond {
        justify-content: center;
    }

    .swiper-slide {
        width: 25%;
    }

    @media (max-width: 992px) {
        .swiper-slide {
            width: 45%;
        }
    }

    @media (max-width: 768px) {
        .swiper-slide {
            width: 100%;
        }

        .teammembers,
        .teammemberssecond {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
<section class="bg-smoke space overflow-hidden" data-bg-src="assets/img/bg/team_bg_1.png" id="team">
    <div class="container z-index-common">
        <div class="title-area text-center"><span class="sub-title">Meet with Team</span>
            <h2 class="sec-title">Our <span id="clrsec">Team</span></h2>
        </div>
        <div class="teammembers">
            <div class="swiper-slide">
                <div class="th-team team-box">
                    <div class="team-img"><img src="{{asset('frontend/img/team/team_1.png') }}" alt="Team"></div>
                    <div class="team-content">
                        <div class="media-body">
                            <h3 class="box-title"><a href="#">Lt. Col. Rajeev Sharma</a></h3>
                            <span class="team-desig">CEO</span>
                            <!-- <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="th-team team-box">
                    <div class="team-img"><img src="{{asset('frontend/img/team/team_2.png') }}" alt="Team"></div>
                    <div class="team-content">
                        <div class="media-body">
                            <h3 class="box-title"><a href="#">Anuradha Sharma</a></h3>
                            <span class="team-desig"> Co Founder & CFO </span>
                            <!-- <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="th-team team-box">
                    <div class="team-img"><img src="{{asset('frontend/img/team/team_2.png') }}" alt="Team"></div>
                    <div class="team-content">
                        <div class="media-body">
                            <h3 class="box-title"><a href="#">Ratika Sahni</a></h3>
                            <span class="team-desig">Co Founder & VP- Operations </span>
                            <!-- <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="th-team team-box">
                    <div class="team-img"><img src="{{asset('frontend/img/team/team_3.png') }}" alt="Team"></div>
                    <div class="team-content">
                        <div class="media-body">
                            <h3 class="box-title"><a href="#">Sumit Arora</a></h3>
                            <span class="team-desig">COO</span>
                            <!-- <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="teammemberssecond">
            <div class="swiper-slide">
                <div class="th-team team-box">
                    <div class="team-img"><img src="{{asset('frontend/img/team/team_3.png') }}" alt="Team"></div>
                    <div class="team-content">
                        <div class="media-body">
                            <h3 class="box-title"><a href="#">Amit Arora</a></h3>
                            <span class="team-desig"> Co Founder & Marketing Head</span>
                            <!-- <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="th-team team-box">
                    <div class="team-img"><img src="{{asset('frontend/img/team/team_3.png') }}" alt="Team"></div>
                    <div class="team-content">
                        <div class="media-body">
                            <h3 class="box-title"><a href="#">Rahul Vig</a></h3>
                            <span class="team-desig">Sales & Marketing Manager</span>
                            <!-- <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="th-team team-box">
                    <div class="team-img"><img src="{{asset('frontend/img/team/team_2.png') }}" alt="Team"></div>
                    <div class="team-content">
                        <div class="media-body">
                            <h3 class="box-title"><a href="#">Kyna Tahiliani</a></h3>
                            <span class="team-desig"> Sales Manager</span>
                            <!-- <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<style>
    .brand-box img {
    width: 100px;  
    height: 100px;  
    object-fit: contain;
    display: block;
    margin: 0 auto;
}
.air-title {
    font-size: 30px;
    font-weight: 700;
    color: #113d48; /* Air India color theme or choose your own */
    margin-bottom: 15px;
    /* border-left: 4px solid #113d48; */
    padding-left: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
</style>
<div class="brand-area overflow-hidden" style="margin-top:90px;">
    <div class="container th-container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="title-area text-center">
                    <span class="sub-title"> </span>
                    <h2 class="sec-title">Deals <span id="clrsec">with</span></h2>
                </div>
            </div>
        </div>
        <div class="swiper th-slider brandSlider1" id="brandSlider1"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
            <p style="text-align: left;" class="air-title">Airlines</p>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/Air-India.jpg')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/Air-India.jpg')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/air-India-express.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/air-India-express.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/indigo.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/indigo.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/akasa_air.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/akasa_air.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/air_canada.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/air_canada.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/Emirates-Logo.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/Emirates-Logo.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/etihad.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/etihad.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/lot_polish.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/lot_polish.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/Air-France-Logo.jpg')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/Air-France-Logo.jpg')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/Cathay Pacific.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/Cathay Pacific.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/Singapore-Airlines-Logo.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/Singapore-Airlines-Logo.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/Delta_Air_Lines.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/Delta_Air_Lines.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/Lufthansa-Logo.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/Lufthansa-Logo.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
            </div>
        </div>
        <p style="text-align: left;" class="air-title">Hotels</p>
        <div class="swiper th-slider brandSlider1" id="brandSlider1"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Taj_Hotels_logo.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Taj_Hotels_logo.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Hyatt-Logo.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Hyatt-Logo.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Intercontinental_Hotels_Group.jpg')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Intercontinental_Hotels_Group.jpg')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/hilton.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/hilton.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/itc_hotels.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/itc_hotels.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Westin.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Westin.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Holiday_Inn.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Holiday_Inn.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Wyndham_Hotels_Resorts.webp')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Wyndham_Hotels_Resorts.webp')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/lemon-tree-hotels.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/lemon-tree-hotels.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Marriott.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Marriott.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/oberoi-hotelspng.webp')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/oberoi-hotelspng.webp')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Best_Western.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Best_Western.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Radisson_Hotel.jpg')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Radisson_Hotel.jpg')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Crowne_Plaza_logo.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Crowne_Plaza_logo.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="brand-area overflow-hidden" style="margin-top:90px;">
    <div class="container th-container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="title-area text-center">
                    <span class="sub-title">Book Smart. Stay Better.</span>
                    <h2 class="sec-title">Deals with Hotels</h2>
                </div>
            </div>
        </div>
        <div class="swiper th-slider brandSlider1" id="brandSlider1"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Taj_Hotels_logo.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Taj_Hotels_logo.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Hyatt-Logo.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Hyatt-Logo.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Intercontinental_Hotels_Group.jpg')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Intercontinental_Hotels_Group.jpg')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/hilton.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/hilton.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/itc_hotels.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/itc_hotels.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Westin.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Westin.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Holiday_Inn.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Holiday_Inn.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Wyndham_Hotels_Resorts.webp')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Wyndham_Hotels_Resorts.webp')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/lemon-tree-hotels.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/lemon-tree-hotels.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Marriott.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Marriott.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/oberoi-hotelspng.webp')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/oberoi-hotelspng.webp')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Best_Western.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Best_Western.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Radisson_Hotel.jpg')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Radisson_Hotel.jpg')}}"
                                alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/hotel/Crowne_Plaza_logo.png')}}"
                                alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/hotel/Crowne_Plaza_logo.png')}}"
                                alt="Brand Logo"></a></div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <img src="{{asset('frontend/img/bg-bodyw.png')}}" alt="" width="1500"> -->
<section class="testi-area overflow-hidden space" id="testi-sec">
    <div class="container-fluid p-0">
        <div class="title-area mb-20 text-center"><span class="sub-title">Testimonial</span>
            <h2 class="sec-title">What Client Say <span id="clrsec"></span>About us</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider testiSlider1 has-shadow" id="testiSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2","centeredSlides":"true"},"992":{"slidesPerView":"2","centeredSlides":"true"},"1200":{"slidesPerView":"2","centeredSlides":"true"},"1400":{"slidesPerView":"3","centeredSlides":"true"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="{{ ('frontend/img/testimonial/testi_1_1.jpg') }}"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Maria Doe</h3><span
                                            class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                until I discovered Ecoland Residence. From the moment I stepped into this community,
                                I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                            <div class="testi-card-quote"><img src="{{asset ('frontend/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="{{ ('frontend/img/testimonial/testi_1_2.jpg') }}"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Andrew Simon</h3><span
                                            class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                until I discovered Ecoland Residence. From the moment I stepped into this community,
                                I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                            <div class="testi-card-quote"><img src="{{asset ('frontend/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="{{ ('frontend/img/testimonial/testi_1_1.jpg') }}"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Alex Jordan</h3><span
                                            class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                until I discovered Ecoland Residence. From the moment I stepped into this community,
                                I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                            <div class="testi-card-quote"><img src="{{asset ('frontend/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="{{ ('frontend/img/testimonial/testi_1_2.jpg') }}"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Maria Doe</h3><span
                                            class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                until I discovered Ecoland Residence. From the moment I stepped into this community,
                                I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                            <div class="testi-card-quote"><img src="{{asset ('frontend/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="{{ ('frontend/img/testimonial/testi_1_1.jpg') }}"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Angelina Rose</h3><span
                                            class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                until I discovered Ecoland Residence. From the moment I stepped into this community,
                                I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                            <div class="testi-card-quote"><img src="{{asset ('frontend/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="{{ ('frontend/img/testimonial/testi_1_1.jpg') }}"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Maria Doe</h3><span
                                            class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                until I discovered Ecoland Residence. From the moment I stepped into this community,
                                I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                            <div class="testi-card-quote"><img src="{{asset ('frontend/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="{{ ('frontend/img/testimonial/testi_1_2.jpg') }}"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Andrew Simon</h3><span
                                            class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                until I discovered Ecoland Residence. From the moment I stepped into this community,
                                I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                            <div class="testi-card-quote"><img src="{{asset ('frontend/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="{{ ('frontend/img/testimonial/testi_1_1.jpg') }}"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Alex Jordan</h3><span
                                            class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury
                                until I discovered Ecoland Residence. From the moment I stepped into this community,
                                I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                            <div class="testi-card-quote"><img src="{{asset ('frontend/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-none d-xl-block" data-bottom="-2%" data-right="0%"><img
            src="assets/img/shape/line2.png" alt="shape"></div>
    <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="5%"><img
            src="assets/img/shape/shape_7.png" alt="shape"></div>
</section>


@endsection