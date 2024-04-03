@include('components.header')
<body>
  <!-- ======= Header ======= -->
  @include('components.navbar')
  <!-- End Header -->
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row no-gutters">
                <div class="section-title">
                    <h2>New School Initiative</h2>
                </div>
                <div class="content col-xl-6 d-flex align-items-stretch flex-column justify-content-center" data-aos="fade-up">
                    <div class="content">
                        <p> 
                            The program focuses on children of the areas where they do not have easy access to education facilities. The concept is cost effective, comparing to existing per student cost in the formal public education system. Moreover, under this scheme, schooling facility can be provided in less time as compared to the time required for the establishment of new formal school. The scheme is for the areas where government is not providing schooling facility.
                        </p>
                        <h4>The Objectives of New School Initiative are as follows:</h4>
                        <ul>
                            <li>To enroll 10,000 (10 Thousand only) children.</li>
                            <li>To support the private Entrepreneurs to provide access to quality education in the areas where public and private schools do not exist.</li>
                            <li>To strengthen the private education sector.</li>
                            <li>To create employment opportunities for educated youth.</li>
                            <li>To support the parents by providing tution fee, textbooks, shoes and uniform.</li>
                            <li>To support the GoKP in achieving the SDGs by providing free and compulsory education.</li>
                        </ul>
                    </div>
                </div>
                <div class="content col-xl-6" data-aos="fade-up">
                    <img src="{{asset('assets/img/nsi/nsi.png')}}" style="width: 700px; height: 90%;"/>
                    <!-- End .content-->
                </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= GCS Counts Section ======= -->
        @include('components.nsicounter')
        <!-- End GCS Counts Section -->

        <!--Establishment Criteria Section-->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Criteria for School Infrastructure</h2>
                    <h2>Primary School Criteria</h2>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-community-line"></i>
                            <h3>a) School must have 6 rooms.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-team-fill"></i>
                            <h3>b) Rooms are furnished with furniture, doors and windows.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-group-fill"></i>
                            <h3>c) Electricity and drinking facility is provided.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-map-pin-range-fill"></i>
                            <h3>d) Computer with accessories and internet facility are available.</h3>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="zoom-in mt-4">
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-task-fill"></i>
                            <h3>e) Washrooms</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-file-edit-fill"></i>
                            <h3>f) Atleast 5 teachers</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-eye-fill"></i>
                            <h3>g) Security clearance from local police station.</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Middle School Criteria</h2>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-community-line"></i>
                            <h3>a) School must have 3 rooms for middle section classes.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-team-fill"></i>
                            <h3>b) Rooms are furnished with furniture, doors and windows.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-group-fill"></i>
                            <h3>c) Electricity and drinking facility is provided.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-map-pin-range-fill"></i>
                            <h3>d) Computer with accessories and internet facility are available.</h3>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="zoom-in mt-4">
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-task-fill"></i>
                            <h3>e) Washrooms</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-file-edit-fill"></i>
                            <h3>f) Atleast 4 teachers covering all major subjects.</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-eye-fill"></i>
                            <h3>g) Security clearance from local police station.</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>High School Criteria</h2>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-community-line"></i>
                            <h3>a) School must have 3 rooms for high section classes.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-team-fill"></i>
                            <h3>b) Rooms are furnished with furniture, doors and windows.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-group-fill"></i>
                            <h3>c) Electricity and drinking facility is provided.</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-map-pin-range-fill"></i>
                            <h3>d) Computer, Internet, Library, Science Lab & Computer Lab are available.</h3>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="zoom-in mt-4">
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-task-fill"></i>
                            <h3>e) Washrooms</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-file-edit-fill"></i>
                            <h3>f) Atleast 5 teachers covering all science subjects, English & others</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-eye-fill"></i>
                            <h3>g) Security clearance from local police station.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Establishment Criteria Section-->
        <section id="criteria" class="criteria section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Establishment Criteria</h2>
                    <p>Village criteria for the establishment of New Schools Initiative are:</p>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch" style="flex-direction: column;" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <i class="bi bi-pin-map-fill"></i>
                            <h4>Plain Area</h4>
                            <p>✔ No government or private school(level and gender based),within the radius of 2 km.</p>
                            <p>✔ Distance will be measured from the center of village.</p>
                            <p>✔ Private Schools will be established at a minimum walking distance of 1.5 km from the government school (level and gender based).</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-house-door"></i>
                            <h4>Hilly Area</h4>
                            <p>✔ No government or private school(level and gender based),within the radius of 1.5 km </p>
                            <p>✔ Distance will be measured from the center of village.</p>
                            <p>✔ Private Schools will be established at a minimum walking distance of 1 km from the government school (level and gender based).</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-pencil-square"></i>
                            <p>The center of the village will be determined by the District Program Officer of ESEF in consulation with the secretary village council/union council and the local community in a Broad-Based Community Meeting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Establishment criteria-->
    </main><!-- End #main -->
    
    <!-- ======= Footer Section ======= -->
    @include('components.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @include('components.scripts')
</body>
</html>
