@if (isset($sliders))
    {{-- <section class="homepage-slider">
        <div class="element-carousel" data-slick-options='{
        "slidesToShow": 1,
        "autoplay": true
    }'>
            @foreach ($sliders as $slider)
                <div class="single-slide d-flex align-items-center"
                    style="background-image: url({{ $slider->banner_image }});">
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-lg-6 col-sm-8">
                                <div class="slider-content">
                                    <h1 class="heading__primary mb--3pt6" data-animation="fadeInUp" data-duration=".3s"
                                        data-delay=".3s">{{ $slider->caption }}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section> --}}
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($sliders as $slider)
                <li data-target="#carousel" data-slide-to="{{ $loop->iteration - 1}}" class=" @if($loop->iteration == 1) active @endif "></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($sliders as $slider)
                <div class="carousel-item @if($loop->iteration == 1) active @endif">
                    <img src="{{ $slider->banner_image }}" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">Welcome to shalmani overseas</p>
                        <h1 class="animated fadeInLeft">GET Your Dream JOB TODAY
                        </h1>
                        <a class="btn animated fadeInUp" href=""> <i class="fa-solid fa-hand-point-right"></i> Find a
                            Job</a>
                    </div>
                </div>          
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endif

