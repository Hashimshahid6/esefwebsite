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
                    <h2>Education Support Scheme</h2>
                </div>
                <div class="content col-xl-6 d-flex align-items-stretch flex-column justify-content-center" data-aos="fade-up">
                    <div class="content">
                        <p> The Education Support Scheme is a special initiative of the Government of Khyber Pakhtunkhwa with the objective of enrolling “out-of-school” children (OOSC) falling in the age bracket of 4-16. The scheme is for the areas where government is not providing schooling facility.
                        </p>
                    </div>
                </div>
                <div class="content col-xl-6" data-aos="fade-up">
                    <img src="{{asset('assets/img/ess/ess_intro.png')}}" height="50%" width="100%"/>
                    <!-- End .content-->
                </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= GCS Counts Section ======= -->
        @include('components.esscounter')
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
                            <p>Village, Children and Private School Indentification</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-team-fill"></i>
                            <h3>2. Search & Scrutiny Committee</h3>
                            <p>i. Scrutiny of existing Private Schools
                                ii. Determine the number of Students</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-group-fill"></i>
                            <h3>3. Enrollment Verification</h3>
                            <p>Verification of Enrollments by Head Office</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="icon-box text-center">
                            <i class="ri-map-pin-range-fill"></i>
                            <h3>4. School Location</h3>
                            <p>i. School Location Identification<br>
                                ii. Development of Feasibility
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
                            <p>Signing of Agreement</p>
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
                            <p>Government is not providing schooling facility in a radius of 2km in plain area and 1km in hilly area.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <i class="bi bi-building"></i>
                            <h4>Private School</h4>
                            <p>Village should have at least one private school registered with PSRA.</p>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-house-door"></i>
                            <h4>Distance between Private and Government School</h4>
                            <p>Private School(s) are at minimum distance of 1.5km from government school for plain area and 0.75km for hilly area(level and gender based).</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-people-fill"></i>
                            <h4>Students</h4>
                            <p>Out of School Children are available.</p>
                            <br>
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
