@include('components.header')

<body>
    <!-- ======= Header ======= -->
    @include('components.navbar')
    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <div class="container">
            <!-- ======= Portfolio Section ======= -->
            @if ($gallery->count() > 0)
                <section id="portfolio" class="portfolio">
                    <div class="container">
                        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                            <h2>Gallery</h2>
                        </div>
                        <div class="row portfolio-container" data-aos="fade-up">
                            @foreach ($gallery as $item)
                                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                    <div class="portfolio-wrap">
                                        <img height="300px" width="100%" src="{{ asset($item->picture) }}" style="object-fit: cover;">
                                        <div class="portfolio-links">
                                            <a href="{{ asset($item->picture) }}" class="portfolio-lightbox"
                                                title="{{ $item->title }}"  data-gallery="portfolioGallery"><i class="bx bx-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section><!-- End Portfolio Section -->
            @else
                <div class="container">
                    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                        <h2>Gallery</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <p>No gallery available at the moment.</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </main><!-- End #main -->

    <!-- ======= Footer Section ======= -->
    @include('components.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('components.scripts')
</body>

</html>
