@include('components.header')
<body>
  <!-- ======= Header ======= -->
  @include('components.navbar')
  <!-- End Header -->
  <!-- ======= Hero Section ======= -->
  @include('components.slider')
  <!-- End Hero -->
  <main>
    <!-- ======= About Section ======= -->
    @include('components.who_we_are')
    <!-- End About Section -->

    <!-- ======= News & Updates ======= -->
    @include('components.news')
    <!-- ======= End News & Updates ======= -->

    <!-- ======= Messages Section ======= -->
    @include('components.messages')
    <!-- End Messages Section -->

    <!-- ======= Services Section ======= -->
    @include('components.services')
    <!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    @include('components.gcscounter')
    @include('components.esscounter')
    @include('components.nsicounter')
    <!-- End Counts Section -->

    <!-- ======= CTA Section ======= -->
    @include('components.call_to_action')
    <!-- End CTA Section -->

    <!-- ======= Footer Section ======= -->
    @include('components.footer')
    <!-- End Footer -->
  </main>
  <!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('components.scripts')
</body>
</html>