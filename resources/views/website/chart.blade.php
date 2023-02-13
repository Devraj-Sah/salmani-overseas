@extends('layouts.master')

@section('content')
    <!-- Breadcrumb area Start -->
    <div class="normal-bg subheader" style="background-image: url('/website/img/service-banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subheader-content">
                        <h1 class="page-title text-white fw-600">Shalmani Overseas.</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>{{$chart->caption}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->



        <main class="main-content-wrapper">
            <!-- About Area Start -->
            <section class="about-area ptb--60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           <img src="{{ $chart->banner_image }}" alt="" style="width:100%;">
                           
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End -->
        </main>
 





    <!-- Main Content Wrapper End -->
@endsection
