@extends('layouts.master')

@section('content')
    <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="/website/images/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Gallery</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/photo-gallery">{{$slug1->caption ?? $slug1 }}</a></li>
                        @if(isset($slug2))
                        <li class="current"><span>{{$slug2->caption ?? $slug2 }}</span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <div class="inner-page-content">
            <!-- Services Area Start -->
            <section class="services-area ptb--60">
                <div class="container">
                    <div class="gallery-view">
                        <div class="row" id="lightgallery">
                            @foreach ($photos as $photo)
                                <div class="item col-md-4" data-src="/uploads/photo_gallery/{{ $photo->file }}"
                                    data-sub-html="<h4>{{ $photo->caption }}</h4>">
                                    <a href="">
                                        <img src="/uploads/photo_gallery/{{ $photo->file }}" alt="Gallery" />
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services Area End -->
        </div>
    </main>
    <!-- Main Content Wrapper End -->
@endsection

 