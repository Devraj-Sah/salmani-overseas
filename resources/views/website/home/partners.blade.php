{{-- <div class="brand-logo-area bg-color ptb--17" data-bg-color="#011c4a">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="element-carousel"
                    data-slick-options='{
                    "slidesToShow": 9,
                    "autoplay": true
                }'
                    data-slick-responsive='[
                    {"breakpoint": 1200, "settings": {"slidesToShow": 7}},
                    {"breakpoint": 992, "settings": {"slidesToShow": 5}},
                    {"breakpoint": 768, "settings": {"slidesToShow": 4}},
                    {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                ]'>
                    @if (isset($partners))
                        @foreach ($partners as $partner)
                            <div class="item">
                                <figure>
                                    <img src="{{ $partner->banner_image }}" alt="Brand" class="mx-auto">
                                </figure>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <!-- client Start -->
    <div class="client">
        <div class="container">
            <h2 class="client-title">Clients</h2>
            <div class="row">
                <div class="col-12">
                    <div id="clients-slider" class="owl-carousel">
                        @if (isset($partners))
                            @foreach ($partners as $partner)
                                <div class="clients-item">
                                    <img src="{{ $partner->banner_image }}" alt="">
                                </div>                      
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client End -->