<!-- ======= Hero Section ======= -->
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
        <div class="slide first">
        <img src="assets/img/hero-bg1.jpg" alt=""  width= "100%" height="100vh">
        <div class="bannertext"><h1 style="margin-top: 50px;">Girls Community Schools</h1>
            <h2>Giving Access to "Out of School Children" in remote areas of the Province</h2>
        </div>
        <div class="bannerbtn">
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
        </div>
        <div class="slide">
        <img src="assets/img/hero-bg2.jpg" alt="" width= "100%" height="100vh">
        <div class="bannertext"><h1 style="margin-top: 50px;">Education Support Scheme</h1>
            <h2>Under the scheme "Out of School Children" are enrolled in the low cost private schools</h2>
            </div>
            <div class="bannerbtn">
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
        </div>
        <div class="slide">
        <img src="assets/img/hero-bg3.jpg" alt="" width= "100%" height="100vh">
        <div class="bannertext"><h1 style="margin-top: 50px;">New Schools Initiative</h1>
            <h2>Provide access to quality education in the areas where public and private schools do not exist</h2>
            </div>
            <div class="bannerbtn">
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
        </div>
        <div class="slide">
        <img src="assets/img/hero-bg4.jpg" alt="" width= "100%" height="100vh">
        <div class="bannertext"><h1 style="margin-top: 50px;">Digitization of ESEF Activities</h1>
            <h2>ESEF is digitizing all its activities, and signed the MoU with BISE Peshawar in the office of Minister for E&SE Department, Khyber Pakhtunkhwa</h2>
            </div>
            <div class="bannerbtn">
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
        </div>
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