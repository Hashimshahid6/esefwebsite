@include('components.header')
<body>
  <!-- ======= Header ======= -->
  @include('components.navbar')
  <!-- End Header -->
  <main id="main">
    <!-- ======= Objectives Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="content">
                        <h3>Objectives</h3>
                        <p> • To improve basic Literacy.</p>
                        <p> • To improve literacy rate, with particular focus on female, through opening of community / non-formal schools and employment of teachers.</p>
                        <p> • Promotion of community participation and ownership of elementary & secondary education program at grass root level.</p>
                        <p> • To improve quality of education through engaging private sector.</p>
                        <p> • Education and skill oriented programs for disabled, retarded and disadvantaged children.</p>
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 col-6 icon-box" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{url('public/assets/img/obj1.png')}}"/>
                            </div>
                            <div class="col-md-6 col-6 icon-box" data-aos="fade-left" data-aos-delay="200">
                                <img src="{{url('public/assets/img/obj2.png')}}"/>
                            </div>
                            <div class="col-md-6 col-6 icon-box" data-aos="fade-right" data-aos-delay="300">
                                <img src="{{url('public/assets/img/obj3.png')}}">
                            </div>
                            <div class="col-md-6 col-6 icon-box" data-aos="fade-left" data-aos-delay="400">
                                <img src="{{url('public/assets/img/obj4.png')}}"/>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>
        </div>
    </section>
    <!-- End Objectives Section -->

    @include('components.gcscounter')
    @include('components.esscounter')
    @include('components.nsicounter')
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('components.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('components.scripts')
</body>
</html>