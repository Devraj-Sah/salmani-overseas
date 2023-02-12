{{-- <section class="message-area ptb--60">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <img src="{{ $message->banner_image }}">
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="heading">
                    <h1 class="mb--18">{{ $message->caption }}</h1>
                    <hr class="delimeter mb--22">
                </div>
                <p class="mb--15"> {{ $message->short_content }} <a href="/message-from-chairman" class="read-more-text">Read More +</a>
                </p>
                <h3> {{ $message->long_content }}</h3>
                
            </div>
        </div>
    </div>
</section> --}}

<!-- Testimonial Start -->
<div class="testimonial wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="testimonial-title"> Testimonial</h1>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider-nav">
                    @if (isset($message))
                        @foreach ($message as $messages)
                            <div class="slider-nav"><img src="{{ $messages->banner_image }}" alt="Testimonial"></div>
                        @endforeach
                    @endif 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    @if (isset($message))
                        @foreach ($message as $messages)
                            <div class="slider-item">
                                <h3>{{ $messages->nav_name }}</h3>
                                <h4>{{ $messages->caption }}</h4>
                                <p>{{ html_entity_decode($messages->long_content) }}</p>
                            </div>
                        @endforeach
                    @endif 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->