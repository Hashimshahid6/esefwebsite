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
                    <h2>Girls Community Schools</h2>
                </div>
                <div class="content col-xl-6 d-flex align-items-stretch flex-column justify-content-center" data-aos="fade-up">
                    <div class="content">
                        <p> The Elementary & Secondary Education Foundation establishes Girls Community Schools to serve
                            “out-of-schools” children belonging to families lacking access to educational opportunities.
                            These schools are established in those areas where government is not providing schooling
                            facility. Girls Community Schools are located in a room donated by community members. A
                            teacher from community teaches and Village Education Committee manages the schools
                            activities. They follow the primary school curriculum, and the government provides free
                            textbooks and teaching resources, and pays teachers honorarium.
                        </p>
                    </div>
                </div>
                <div class="content col-xl-6" data-aos="fade-up">
                    <img src="{{asset('assets/img/gcs/gcs_intro.jpeg')}}" height="50%" width="100%"/>
                    <!-- End .content-->
                </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= GCS Counts Section ======= -->
        @include('components.gcscounter')
        <!-- End GCS Counts Section -->

        <!--Establishment Criteria Section-->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>How to establish Girls Community School?</h2>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-community-line"></i>
                            <h3>1. Identification</h3>
                            <p>Village Indentification</p>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-team-fill"></i>
                            <h3>2. Community Meetings</h3>
                            <p>Corner / Broad based community meetings</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-group-fill"></i>
                            <h3>3. Establishment of VEC</h3>
                            <p>i. Establishment of VEC<br>
                                ii. Identification of Teacher
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-map-pin-range-fill"></i>
                            <h3>4. School Location</h3>
                            <p>i. Location for school Identification<br>
                                ii. Development of feasibility
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="zoom-in mt-4">
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-task-fill"></i>
                            <h3>5. Approval</h3>
                            <p>Scrutiny & Approval of Feasibility</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-file-edit-fill"></i>
                            <h3>6. Agreement</h3>
                            <p>Signing of Agreement / School Functional</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="icon-box text-center">
                            <i class="ri-eye-fill"></i>
                            <h3>7. Monitoring</h3>
                            <p>Regular Monitoring</p>
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
                    <p>For establishment of Girls Community School the criteria are:</p>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch" style="flex-direction: column;" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <i class="bi bi-pin-map-fill"></i>
                            <h4>Distance Measurement</h4>
                            <p>No government girls primary school at a radius of .75km in plain area and 0.50 km in
                                hilly area.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <i class="bi bi-mortarboard"></i>
                            <h4>Required Qualification</h4>
                            <p>Proposed teacher must be local with the qualification of F.A/F.Sc. or equivalent.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-house-door"></i>
                            <h4>Space Allotment</h4>
                            <p>Space will be provided by the community. </p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-person-check"></i>
                            <h4>Required Enrollment</h4>
                            <p>At least 25 enrollments are required.</p>
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
