@extends('layouts.master')

@section('content')
    <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="/website/images/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="current"><span>Chart</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
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
