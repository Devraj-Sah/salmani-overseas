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
        <div class="container">
            <div class="recu-pro-area">
                <div class="service-title">
                    <h1>{{$normal->caption}}</h1>
                </div>
                <div class="recu-pro-content-area">
                    <div class="row">
                        @if ($normal->banner_image)
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="recu-pro-img">
                                    <img src="{{ $normal->banner_image }}" alt="">
                                </div>
                            </div>
                        @endif
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="recu-pro-content">
                                {!!  htmlspecialchars_decode($normal->short_content) !!}
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="recu-pro-content">
                        {!!  htmlspecialchars_decode($normal->long_content) !!}
                    </div>
                </div>
            </div>
        </div>

@endsection
