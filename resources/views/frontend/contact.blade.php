@extends('frontend.layouts.main')

@section('main-container')
    <div class="breadcumb-wrapper" data-bg-src="{{asset ('frontend/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title">Get In Touch</span>
                <h2 class="sec-title">Our Contact Information</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon"><img src="{{asset ('frontend/img/icon/location-dot2.svg')}}" alt=""></div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Our Address</h6>
                            <p class="about-contact-details-text">LG-5, Somdutt Chamber-1,</p>
                            <p class="about-contact-details-text">Bhikaji Cama Place, New Delhi-110066</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon"><img src="{{asset ('frontend/img/icon/call.svg')}}" alt=""></div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Phone Number</h6>
                            <p class="about-contact-details-text"><a href="tel:+919319019095">+91 9319019095</a></p>
                            <p class="about-contact-details-text"><a href="tel:+919319019096">+91 9319019096</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon"><img src="{{asset ('frontend/img/icon/mail.svg')}}" alt=""></div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Email Address</h6>
                            <p class="about-contact-details-text"><a href="mailto:info@mytourizi.com">info@mytourizi.com</a></p>
                            <p class="about-contact-details-text"><a href="mailto:support24@tourm.com"></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-extra2-top space-extra2-bottom" data-bg-src="assets/img/bg/video_bg_1.jpg">
        <div class="container">
            <div class="row flex-row-reverse justify-content-center align-items-center">
                <div class="col-lg-6">
                    <img src="{{asset ('frontend/img/category/category_1_4.jpg')}}" alt="" style="height:500px;">
                </div>
                <div class="col-lg-6">
                    <div>
                        <form action="{{ route('phpmailer.send') }}" method="POST" >
                        @csrf
                            <h3 class="sec-title mb-30 text-capitalize">Book a tour</h3>
                            <div class="row">
                                <div class="col-12 form-group"><input type="text" class="form-control" name="name" id="name3" placeholder="First Name" required> <img src="{{asset ('frontend/img/icon/user.svg')}}" alt="" ></div>
                                <div class="col-12 form-group"><input type="email" class="form-control" name="email3" id="email3" placeholder="Your Mail" required> <img src="{{asset ('frontend/img/icon/mail.svg')}}" alt="" ></div>
                                <div class="col-12 form-group"><input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required> <img src="{{asset ('frontend/img/icon/phone_1.svg')}}" alt="" style="height:26px;" ></div>
                                <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message" required></textarea> <img src="{{asset ('frontend/img/icon/chat.svg')}}" alt="" ></div>
                                <div class="form-btn col-12 mt-24"><button type="submit" class="th-btn style3">Send message <img src="{{asset ('frontend/img/icon/plane.svg')}}" alt=""></button></div>
                            </div>
                            <!-- <p class="form-messages mb-0 mt-3"></p> -->
                             
                                {{-- ✅ Show flash messages --}}
                                @if(session('success'))
                                    <div class="alert alert-success mt-3">{{ session('success') }}</div>
                                @elseif(session('error'))
                                    <div class="alert alert-danger mt-3">{{ session('error') }}</div>
                                @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .alert {
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

    </style>
    <div class="">
        <div class="container-fluid">
            <div class="contact-map style2"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7008.153434407694!2d77.17818738958815!3d28.56745892548666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1d841fefffff%3A0x60445c4d74e8817a!2sSupremeWork%20%7C%20Co-working%20Space%20Bhikaji!5e0!3m2!1sen!2sin!4v1743835838305!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                <div class="contact-icon"><img src="{{asset ('frontend/img/icon/location-dot3.svg')}}" alt=""></div>
            </div>
        </div>
    </div>
@endsection