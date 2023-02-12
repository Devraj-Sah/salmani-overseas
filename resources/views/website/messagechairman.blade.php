@extends('layouts.master')

@section('content')
    <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="website/images/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Message from the Chairperson</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="current"><span>Message from the Chairperson</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <!-- About Area Start -->

        <section class="message-area ptb--60">
            <div class="container">
                <div class="heading mb--22">
                    <h2>{{ $msg->caption }} @endphp</h2>
                    <hr class="delimeter">
                </div>
                <div class="row">
                    <div class="col-md-7">

                        <h3>{{ $msg->short_content }}</h3>
                        <p> {{ $msg->long_content }} </p>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <img src="{{ $msg->banner_image }}">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Area End -->
    </main>
    <!-- Main Content Wrapper End -->
@endsection
