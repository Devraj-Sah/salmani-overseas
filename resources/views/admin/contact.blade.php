

@extends('layouts.master')
@section('content')
    <!-- Start Subheader -->
    <div class="normal-bg subheader" style="background-image: url('/website/img/service-banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subheader-content">
                        <h1 class="page-title text-white fw-600">Shalmani Overseas.</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->


    {{-- <main class="main-content-wrapper">
        <div class="inner-page-content">
            <!-- Contact Area Start -->
            <section class="contact-area ptb--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 mb-md--50">
                            <div class="heading mb--42">
                                <h2>Get In Touch</h2>
                                <hr class="delimeter">
                            </div>
                            <div class="contact-info mb--30">
                                <p><i class="fa fa-map-marker"></i>{{ $global_setting->website_full_address }} </p>
                                <p><i class="fa fa-phone"></i> <a
                                        href="tel:{{ $global_setting->phone }}">{{ $global_setting->phone }}</a>, <a
                                        href="tel:{{ $global_setting->phone_ne }}">{{ $global_setting->phone_ne }}</a></p>
                                <p><i class="fa fa-envelope"></i> <a
                                        href="mailto:{{ $global_setting->site_email }}">{{ $global_setting->site_email }}</a>
                                </p>
                                <p><i class="fa fa-envelope"></i> <a
                                        href="mailto:{{ $global_setting->page_description }}">{{ $global_setting->page_description }}</a>
                                </p>
                            </div>
                            <ul class="social social-outline">
                                <li class="social__item">
                                    <a href="{{ $global_setting->facebook ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->extra_one ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->twitter ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->linkedin ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 offset-lg-1">
                            <div class="heading mb--42">
                                <h2>Contact Us</h2>
                                <hr class="delimeter">
                            </div>
                            <form action="{{ route('contactstore') }}" class="form" method="post" id="contact-form"
                                enctype='multipart/form-data'>
                                @csrf
                                <input type="email" name="email" id="email" class="form__input mb--30"
                                    placeholder="Email*">
                                <input type="text" name="first_name" id="first_name" class="form__input mb--30"
                                    placeholder="Name*">
                                <textarea class="form__input form__input--textarea mb--30" placeholder="Message" id="con_message" name="message"></textarea>
                                <button type="submit" class="btn btn-shape-round form__submit">Send Request</button>
                                <div class="form__output"></div>

                                @if (Session::has('contact'))
                                    <p class="alert alert-info">{{ Session::get('contact') }}</p>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Area End -->

            <!-- Google Map Area Start -->
            <!-- Google Map -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.845659969248!2d85.31929851541567!3d27.722051231451736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1919f7dd0685%3A0xc59baa0caae9c83d!2sLazimpat%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1670754752618!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- Google Map Area End -->
        </div>
       
    </main> --}}


            <!-- ====== Contact Section Start -->

            <div class="container">
                <div class="contact-area-page">
                    <div class="service-title">
                        <h1>Contact Us</h1>
                    </div>
                    <form class="row" action="{{ route('contactstore') }}"  method="post" id="contact-form" enctype='multipart/form-data'>
                        <div class="col-lg-6 col-md-12 col-12">
                            @if (Session::has('contact'))
                                <p class="alert alert-info">{{ Session::get('contact') }}</p>
                            @endif
                            <div class="form-area">
                                <div class="row">
                                    @csrf
                                        <div class="col-6">
                                            <div class="contact-form">
                                                <input type="text" name="first_name" class="form-control" id="inputName4" placeholder="Full Name *" required>
                                            </div>
            
                                        </div>
            
                                        <div class="col-6">
                                            <div class="contact-form">
                                                <input type="Phone" name="number" class="form-control" id="inputPhone" placeholder="Number *" required>
                                            </div>
            
                                        </div>
                                        <div class="col-12">
                                            <div class="contact-form">
                                                <input type="email" name="email" class="form-control" id="inputemail2" placeholder="Email *" required>
                                            </div>
            
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control" rows="5" id="comment" name="message"
                                                placeholder="Comment" required></textarea>
                                        </div>
                                        <div class="mr-auto">
                                            <button class="btn" type="submit">Submit</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="form-text-area ">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.4667363154454!2d85.33924361472678!3d27.733746582781034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1997bb7aa729%3A0xde3df4f6a9881eb2!2sShalmani%20Overseas%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1643106069807!5m2!1sen!2snp"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
        
                        </div>
        
        
                    </form>
        
                </div>
            </div>
            <!-- ====== Contact Section End -->


@endsection
