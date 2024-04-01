<!-- ======= Messages Section ======= -->
@if($messages->count() > 0)
<section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">
    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Messages</h2>
    </div>
    <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach($messages as $message)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
            <img src="{{$message->picture}}" class="img-fluid" alt="">
            <div class="member-content">
                <h4>{{$message->name}}</h4>
                <span>{{$message->designation}}</span>
                <p>{!! $message->description !!}</p>
                <div class="social">
                <a href="{{$message->twitter_link}}"><i class="bi bi-twitter"></i></a>
                <a href="{{$message->facebook_link}}"><i class="bi bi-facebook"></i></a>
                <a href="{{$message->instagram_link}}"><i class="bi bi-instagram"></i></a>
                <a href="{{$message->linkedin_link}}"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</section><!-- End Messages Section -->
@endif