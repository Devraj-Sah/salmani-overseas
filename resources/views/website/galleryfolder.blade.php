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
                            <li>Gallary</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    {{-- <main class="main-content-wrapper">
        <!-- Gallery Area Start -->
        @if (isset($photos))
            <section class="gallery-folder ptb--60">
                <div class="container">
                    <div class="row">
                        @foreach ($photos as $photo)
                            <div class="col-lg-3 col-md-4">
                                <a href="{{route('GOTOGALLERY',$photo->nav_name)}}">
                                    <div class="folder">
                                        <div class="paper folder-pop"><img src="{{ $photo->banner_image }}"
                                                width="100%">
                                        </div>
                                        <div class="paper folder-pop-middle"><img src="{{ $photo->banner_image }}"
                                                width="100%"></div>
                                        <div class="paper folder-pop-last"><img src="{{ $photo->banner_image }}"
                                                width="100%"></div>
                                    </div>
                                    <h5 class="folder-text">{{ $photo->caption }}</h5>
                                </a>
                            </div>
                        @endforeach
                    </div><!-- /.row -->
                </div><!-- /.container -->
        @endif
        </section><!-- /.inner-details -->
        <!-- Gallery Area End -->
    </main> --}}
    <!-- Main Content Wrapper End -->


    <div class="Gallery">
        @if (isset($photos))
        <div class="container">
            <h1 class="text-center gallery-tittle">Gallery</h1>
            <div class="gallery" id="gallery">
                <div class="row">
                    @foreach ($photos as $photo)
                        <div class="col-md-3">
                            <div class="gallery-item">
                                <div class="content">
                                    <img src="{{asset('uploads/photo_gallery/'.$photo->file)}}"
                                        alt="{{ $photo->caption }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>



@endsection
