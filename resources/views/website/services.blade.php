@extends('layouts.master')

@section('content')

     <div class="normal-bg subheader" style="background-image: url('/website/img/service-banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subheader-content">
                        <h1 class="page-title text-white fw-600">Shalmani Overseas.</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>{{$normal->caption}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->

    <!-- Main Content Wrapper Start -->

        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-title">
                <h1>
                    {{$normal->caption}}</h1>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    @if ($normal->banner_image)
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="{{ $normal->banner_image }}" alt="Image">
                            </div>
                        </div>
                    @endif
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                          {!!  htmlspecialchars_decode($normal->short_content) !!}
                        </div>
                        <div class="about-text">
                            {!!  htmlspecialchars_decode($normal->long_content) !!}
                            <!-- <a class="btn" href="">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <a href="RecrutmentProcess.html">
                            <div class="card text-white card-has-bg click-col"
                                style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                                <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                                    alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="card-body">
                                        <small class="card-meta mb-2">Overseas Recruitment</small>
                                        <h4 class="card-title mt-0 "><a class="text-white" herf="#">Before going abroad for
                                                working purpose, it is compulsion to be acknowledged about the country. For
                                                this purpose...</a></h4>
                                        <small><i class="fa-solid fa-hand-point-right"></i> <a href="RecrutmentProcess.html">Read More</a></small>
                                    </div>
    
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
    
            </div>
        </section>


@endsection
