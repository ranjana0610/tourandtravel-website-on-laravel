@extends('frontend.layouts.main')

@section('main-container')

    <div class="breadcumb-wrapper" data-bg-src="{{asset('frontend/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Tourm</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>About Tourm</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-area position-relative overflow-hidden overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="img-box3">
                        <div class="img1"><img src="{{asset ('frontend/img/normal/about_3_1.jpg')}}" alt="About"></div>
                        <div class="img2"><img src="{{asset ('frontend/img/normal/about_3_2.jpg')}}" alt="About"></div>
                        <div class="img3 movingX"><img src="{{asset ('frontend/img/normal/about_3_3.jpg')}}" alt="About"></div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="ps-xl-4">
                        <div class="title-area mb-20"><span class="sub-title style1">Welcome To MyTourizi</span>
                            <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">We are world reputeted travel agency
                            </h2>
                        </div>
                        <p class="pe-xl-5" style="text-align: justify;">We are MyTourizi Where Adventure Begins! We are a passionate and dynamic travel agency founded by three close friends. Our journey began as colleagues at a travel company, where we handled pan-India administration, gaining valuable experience and insights into the travel industry. While working, we were often approached by friends and family for travel advice, asking for the best offers and pleasurable travel experiences. These requests consistently increased over a period of time which sparked our passion to create our own venture. </p>
                        <p class="mb-30 pe-xl-5" style="text-align: justify;">New Delhi, India, in October 2016. Thus began our journey of providing committed services to create memorable travel experiences for our clients at reasonable rates. Our expertise in the field ensures that we cater to every travel need of our clients with comfort and care. In 2018, we were honored to be joined by our boss, who comes from a distinguished Army background. His invaluable contribution has helped us grow and thrive as a team. At MyTourizi, we’re not just about booking trips; we’re here to make your travel dreams come true. Whether it’s a relaxing getaway, an adventurous expedition, or a cultural immersion, we’re always there for you. Join us, and let us turn your next journey into a memorable story!</p>
                        
                        <div class="mt-35"><a href="{{url('/contact')}}" class="th-btn style3 th-icon">Contact With Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup movingX d-none d-xxl-block" data-top="0%" data-left="-18%"><img
                    src="assets/img/shape/shape_2_1.png" alt="shape"></div>
            <div class="shape-mockup jump d-none d-xxl-block" data-top="28%" data-right="-15%"><img
                    src="assets/img/shape/shape_2_2.png" alt="shape"></div>
            <div class="shape-mockup spin d-none d-xxl-block" data-bottom="18%" data-left="-112%"><img
                    src="assets/img/shape/shape_2_3.png" alt="shape"></div>
            <div class="shape-mockup movixgX d-none d-xxl-block" data-bottom="18%" data-right="-12%"><img
                    src="assets/img/shape/shape_2_4.png" alt="shape"></div>
        </div>
    </div>
    <section class="category-area bg-top-center" data-bg-src="{{ asset('frontend/img/bg/category_bg_1.png') }}">
        <div class="container th-container">
            <div class="title-area text-center">
                <span class="sub-title">Wonderful Place For You</span>
                <h2 class="sec-title">Our Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="category-card">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend/img/category/category_1.jpg') }}" alt="Image" class="img_ser">
                            <div class="overlay">
                                <h3 class="box-title"><a href="#">Domestic & International Flight</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend/img/category/category_2.jpg') }}" alt="Image" class="img_ser">
                            <div class="overlay">
                                <h3 class="box-title"><a href="#">Domestic & International Hotel Reservation</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend/img/category/category_3.jpg') }}" alt="Image" class="img_ser">
                            <div class="overlay">
                                <h3 class="box-title"><a href="#">Domestic & International Package</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend/img/category/category_4.jpg') }}" alt="Image" class="img_ser">
                            <div class="overlay">
                                <h3 class="box-title"><a href="#">Visa</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend/img/category/category_5.jpg') }}" alt="Image" class="img_ser">
                            <div class="overlay">
                                <h3 class="box-title"><a href="#">Train Booking</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="category-card">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend/img/category/category_6.jpg') }}" alt="Image" class="img_ser">
                            <div class="overlay">
                                <h3 class="box-title"><a href="#">Corporate Travel</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="elements-sec bg-white overflow-hidden">
        <div class="container-fluid">
            <div class="tags-container relative"></div>
        </div>
    </div> -->
    <section class="bg-smoke space overflow-hidden" data-bg-src="assets/img/bg/team_bg_1.png">
        <div class="container z-index-common">
            <div class="title-area text-center"><span class="sub-title">Meet with Team</span>
                <h2 class="sec-title">Our Team</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider teamSlider1 has-shadow" id="teamSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img"><img src="{{asset('frontend/img/team/team_1_1.jpg') }}" alt="Team"></div>
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
                                <div class="team-img"><img src="{{asset('frontend/img/team/team_1_3.jpg') }}" alt="Team"></div>
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
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img"><img src="{{asset('frontend/img/team/team_3_4.jpg') }}" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="#">Anuradha Sharma</a></h3>
                                        <span class="team-desig">Vice President – Product & Sales</span>
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
                                <div class="team-img"><img src="{{asset('frontend/img/team/team_1_2.jpg') }}" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="#">Ratika Sahni</a></h3>
                                        <span class="team-desig">Vice President - Operations</span>
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
                                <div class="team-img"><img src="{{asset('frontend/img/team/team_1_6.jpg') }}" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="#">Amit Arora</a></h3>
                                        <span class="team-desig">Marketing Head</span>
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
                                <div class="team-img"><img src="{{asset('frontend/img/team/team_3_1.jpg') }}" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="#">Rahul Vig</a></h3>
                                        <span class="team-desig">Marketing Manager</span>
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
                                <div class="team-img"><img src="{{asset('frontend/img/team/team_1_4.jpg') }}" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="#">Kyna Tahiliani</a></h3>
                                        <span class="team-desig">Sales Manager</span>
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
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="testi-area overflow-hidden space" id="testi-sec">
        <div class="container-fluid p-0">
            <div class="title-area mb-20 text-center"><span class="sub-title">Testimonial</span>
                <h2 class="sec-title">What Client Say About us</h2>
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
    <div class="brand-area overflow-hidden">
        <div class="container th-container">
            <div class="swiper th-slider brandSlider1" id="brandSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_1.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_1.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_2.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_2.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_3.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_3.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_4.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_4.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_5.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_5.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_6.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_6.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_7.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_7.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_8.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_8.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_4.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_4.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_3.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_3.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_2.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_2.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original" src="{{asset ('frontend/img/brand/brand_1_1.svg')}}"
                                    alt="Brand Logo"> <img class="gray" src="{{asset ('frontend/img/brand/brand_1_1.svg')}}"
                                    alt="Brand Logo"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-gallery-area space">
        <div class="container-fluid">
            <div class="slider-area">
                <div class="swiper th-slider has-shadow"
                    data-slider-options='{"centeredSlides":"true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="{{asset ('frontend/img/gallery/gallery_4_1.jpg')}}"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="{{asset ('frontend/img/gallery/gallery_4_2.jpg')}}"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="{{asset ('frontend/img/gallery/gallery_4_3.jpg')}}"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="{{asset ('frontend/img/gallery/gallery_4_4.jpg')}}"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="{{asset ('frontend/img/gallery/gallery_4_5.jpg')}}"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="{{asset ('frontend/img/gallery/gallery_4_1.jpg')}}"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="{{asset ('frontend/img/gallery/gallery_4_2.jpg')}}"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="{{asset ('frontend/img/gallery/gallery_4_3.jpg')}}"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="{{asset ('frontend/img/gallery/gallery_4_4.jpg')}}"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="{{asset ('frontend/img/gallery/gallery_4_5.jpg')}}"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb style2 global-img"><img src="{{asset ('frontend/img/gallery/gallery_4_2.jpg')}}"
                                    alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/"
                                    class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection