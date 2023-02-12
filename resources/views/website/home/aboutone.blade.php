{{-- <section class="about-area ptb--60">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <div class="heading">
                    <h1 class="mb--18">{{ $about->caption ?? '' }}</h1>
                    <hr class="delimeter mx-auto mb--22">
                </div>
                <p class="mb--25 text-center">{{ $about->short_content }}
                    <br>
                    {{ $about->long_content }}
                </p>

                <a href="/about-one" class="btn">Read More</a>
            </div>
        </div>
    </div>
</section> --}}
<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{ $about->banner_image ?? '' }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>About us</p>
                    <h2>{{ $about->caption ?? '' }}</h2>
                </div>
                <div class="about-text">
                    <p>
                        {{ $about->short_content }}
                    </p>
                    <p>
                        {{ $about->long_content }}
                    </p>
                    <a class="btn" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->