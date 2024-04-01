<!-- ======= Services Section ======= -->
@if($services->count() > 0)
<section id="services" class="services">
    <div class="container">
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Schemes</h2>
        </div>
        <div class="row">
        @foreach($services as $service)
        <div class="col-md-4 col-lg d-flex align-items-stretch mb-5 mb-lg-0 center">
            <div class="icon-box" data-aos="fade-up">
            <a href="gcs.html">
                <div class="icon">
                <a href="gcs.html">
                    <img src="{{$service->icon}}" alt="{{$service->title}}" style="width:50px; height:50px">
                </a>
                </div>
                <h4 class="title">
                <a href="gcs.html">{{$service->title}}
                </a>
                </h4>
                <a href="gcs.html" class="description">
                <p>{!! $service->description !!}</p>
                </a>
            </a>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</section><!-- End Services Section -->
@endif