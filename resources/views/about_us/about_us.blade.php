@include('components.header')
<body>
  <!-- ======= Header ======= -->
  @include('components.navbar')
  <!-- End Header -->
  
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row d-flex align-items-stretch">
          <div class="content col-md-6 col-xl-6" data-aos="fade-up">
            <div class="content">
              <br><br>
              <h3>About Us</h3>
              <p>
                Elementary & Secondary Education Foundation Govt. of Khyber Pakhtunkhwa (ESEF) is an autonomous body established under “Khyber Pakhtunkhwa Elementary & Secondary Education Foundation Ordinance No. XXX of 2002”.
                </br>
                </br>
                The main Objective of the Foundation is to take all such measure as it deems necessary for the promotions, improvement and financing of education development of human resource in the Khyber Pakhtunkhwa Province through strengthening of elementary & secondary education in the private sector in line with the education policy of the Government of Khyber Pakhtunkhwa.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-xl-6" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('assets/img/about_us_banner.png')}}"/>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

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