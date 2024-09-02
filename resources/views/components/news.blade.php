<!-- ======= News Section ======= -->
@if ($news->count() > 0)
    <section id="testimonials" class="testimonials section-bg">
        <br><br>
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Latest News & Updates</h2>
        </div>
        <div class="container">
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($news->take(5) as $item)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                {{-- @php
                                echo "<pre>";
                                    print_r($item->picture);
                                    echo "</pre>";
                                    @endphp --}}
                                    <p>
                                    <img src="{{asset($item->picture)}}" alt="{{$item->title}}"  class="mb-2" style="width: 100%; height: 250px;">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {!! Str::words($item->description, 50, '...') !!}
                                    <a href="{{url('/media/news_detail/'. $item->slug)}}">See more</a>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <h4>{{ $item->date }}</h4>
                            </div>
                        </div><!-- News item -->
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->
@else
    <div class="container">
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <br>
            <br>
            <h2>Latest News & Updates</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <p>No news and updates available at the moment.</p>
            </div>
        </div>
    </div>
@endif
