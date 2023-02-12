{{-- <section class="services-area ptb--60 bg--gray">
    <div class="container">
        <div class="row">
            <div class="heading text-center">
                <h1 class="mb--18">Job Category</h1>
                <hr class="delimeter mx-auto mb--22">
            </div>
            <div class="col-12">
                <div class="element-carousel"
                    data-slick-options='{
                    "spaceBetween": 30,
                    "slidesToShow": 3,
                    "autoplay": true
                }'
                    data-slick-responsive='[
                    {"breakpoint": 1200, "settings": {"slidesToShow": 3}},
                    {"breakpoint": 992, "settings": {"slidesToShow": 2}},
                    {"breakpoint": 768, "settings": {"slidesToShow": 1}}
                ]'>
                
                    @if (isset($job_categories))
                        @foreach ($job_categories as $cat)
                            <div class="item">
                                <article class="blog">
                                    <div class="blog__inner">
                                        <div class="blog__media">
                                            <figure class="image">
                                                <img src="{{ $cat->banner_image }}" alt="Job" class="w-100">
                                                <a href="{{ route('JobList', $cat->nav_name) }}" class="item-overlay"></a>
                                            </figure>
                                        </div>
                                        <div class="blog__info">
                                            <h3 class="blog__title"><a href="{{ route('JobList', $cat->nav_name) }}">{{ $cat->caption }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section> --}}

     <!-- job Start -->
     <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <!-- <p>Our Services</p> -->
                <h2>FEATURED JOBS</h2>
            </div>
            <div class="row">
                @if (isset($job_categories))
                    @foreach ($job_categories as $cat)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{ $cat->banner_image }}" alt="Image">
                                    <div class="service-overlay">
                                    </div>
                                </div>
                                <div class="service-text">
                                    <h3>
                                        {{ $cat->caption }}
                                    </h3>
                                    <a class="btn" href="#">+</a>
                                </div>
                            </div>
                        </div>     
                    @endforeach
                @endif         
            </div>
        </div>
    </div>
    <!-- Service End -->