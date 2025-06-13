<!-- ======= Hero Section ======= -->
@if($banners->count() > 0)
<section id="hero">
    <div class="hero-container"  data-aos="fade-up">
        <!-- Slider-->
        <!-- Image Slider Start -->
        <div class="slider">
            <div class="slides">
                @foreach($banners as $key => $banner)
                <!-- Radio Button Start  -->
                <input type="radio" name="radio-btn" id="radio<?php echo $key+1 ?>">
                <!-- <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">  -->
                <!-- Radio Button Close  -->
								@endforeach
                <!-- Slide Image Start -->
                @foreach($banners as $key => $banner)
                    <div class="slide {{ $key == 0 ? 'first' : ''}}">
                        <img src="{{ url('/' . $banner->picture)}}" alt="">
                        <div class="bannertext"><h1 style="margin-top: 50px;">{{$banner->title}}</h1>
                            <h2>{!! $banner->description !!}</h2>
                        </div>
                        <div class="bannerbtn">
                            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
                        </div>
                    </div>
                @endforeach
                <!-- Slide Image Close -->
                <!-- Automatic Navigation Start -->
                <div class="navigation-auto">
								@foreach($banners as $key => $banner)	
                <div class="auto-btn-<?php echo $key+1 ?>"></div>
								@endforeach
                <!-- <div class="auto-btn-2"></div>
                <div class="auto-btn-3"></div>
                <div class="auto-btn-4"></div> -->
            </div>
            <!-- Automatic Navigation Close -->
        </div>
        <!-- Mannual Navigation Start -->
        {{-- <div class="navigation-mannual">
            <label for="radio1" class="mannual-btn"></label>
            <label for="radio2" class="mannual-btn"></label>
            <label for="radio3" class="mannual-btn"></label>
            <label for="radio4" class="mannual-btn"></label>
        </div>  --}}
        <!-- Mannual Navigation Close -->
    </div>
    <!-- Image Slider Close -->
    <script>
    var counter = 1;
		var banners_count = <?php echo count($banners) ?>;
    setInterval(function()  {
    document.getElementById('radio'+ counter).checked = true;
    counter++; 
    if(counter>banners_count+1){
    counter=1
    }
    }, 5000);
    </script>
    <!--Slider End-->
    <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a> 
</div>
</section>  
<!-- End Hero -->
@endif