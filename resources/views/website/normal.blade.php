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
                            <p>{{$normal->caption}}</p>
                            <h2>{!!  htmlspecialchars_decode($normal->short_content) !!}</h2>
                        </div>
                        <div class="about-text">
                            {!!  htmlspecialchars_decode($normal->long_content) !!}
                            <!-- <a class="btn" href="">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{-- @if ($normal->banner_image)
        <main class="main-content-wrapper">
            <!-- About Area Start -->
            <section class="about-area ptb--60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading mb--22">
                                <h2>@php echo $normal->short_content; @endphp</h2>
                                <hr class="delimeter">
                            </div>
                            <p> @php echo $normal->long_content; @endphp </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ $normal->banner_image }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End -->
        </main>
    @else
        <main class="main-content-wrapper">
            <!-- About Area Start -->
            <section class="about-area ptb--60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading mb--22">
                                <h2>@php echo $normal->short_content; @endphp</h2>
                                <hr class="delimeter">
                            </div>
                            <p> @php echo $normal->long_content; @endphp </p>
                        </div>
                    </div>

                </div>

            </section>
            <!-- About Area End -->
        </main>
    @endif --}}

    <!-- Main Content Wrapper End -->
@endsection
