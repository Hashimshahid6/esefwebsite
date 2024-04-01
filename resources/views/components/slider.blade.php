<!-- ======= Hero Section ======= -->
@if($banners->count() > 0)
<section id="hero">
    <div class="hero-container"  data-aos="fade-up">
        <!-- Slider-->
        <!-- Image Slider Start -->
        <div class="slider">
            <div class="slides">
                <!-- Radio Button Start  -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4"> 
                <!-- Radio Button Close  -->
                <!-- Slide Image Start -->
                @foreach($banners as $key => $banner)
                    <div class="slide {{ $key == 0 ? 'first' : ''}}">
                        <img src="{{ url('/' . $banner->picture)}}" alt=""  width= "100%" height="80vh">
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
                <div class="auto-btn-1"></div>
                <div class="auto-btn-2"></div>
                <div class="auto-btn-3"></div>
                <div class="auto-btn-4"></div>
            </div>
            <!-- Automatic Navigation Close -->
        </div>
        <!-- Mannual Navigation Start -->
        <div class="navigation-mannual">
            <label for="radio1" class="mannual-btn"></label>
            <label for="radio2" class="mannual-btn"></label>
            <label for="radio3" class="mannual-btn"></label>
            <label for="radio4" class="mannual-btn"></label>
        </div> 
        <!-- Mannual Navigation Close -->
    </div>
    <!-- Image Slider Close -->
    <script>
    var counter = 1;
    setInterval(function()  {
    document.getElementById('radio'+ counter).checked = true;
    counter++; 
    if(counter>4){
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