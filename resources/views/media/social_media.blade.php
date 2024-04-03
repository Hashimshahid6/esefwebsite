@include('components.header')
<body>
    <!-- ======= Header ======= -->
    @include('components.navbar')
    <main id="main">
        <!-- Process of Establishment-->
        <div class="section-title" style="background-image: url('sm_bg.jpg'); background-repeat:center no-repeat;"
            data-aos-delay="100">
            <br><br>
            <h2 data-aos-delay="100">Social Media Links</h2>
            <p>For latest updates visit our social media links:</p><br>
        </div>
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box text-center">
                            <h3>
                                <a href="https://www.facebook.com/esefkpk/"><img src="{{asset('assets/img/fb.png')}}" width="150px" height="150px" alt="">
                                </a>
                            </h3>
                            <br>
                            <p>Facebook</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box text-center">
                            <h3>
                                <a href="https://www.instagram.com/esefkpk/"><img src="{{asset('assets/img/insta.png')}}" width="150px" height="150px" alt="">
                                </a>
                            </h3>
                            <br>
                            <p>Instagram</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box text-center">
                            <h3>
                                <a href="https://youtube.com/channel/UCtd5nQpAiRk7-BBpr0n8_og">
                                    <img src="{{asset('assets/img/youtube.png')}}" width="150px" height="150px" alt="">
                                </a>
                            </h3>
                            <br>
                            <p>Youtube</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box text-center">
                            <h3>
                                <a href="https://www.twitter.com/esefkpk/">
                                    <img src="{{asset('assets/img/twitter.png')}}" width="150px" height="150px" alt="">
                                </a>
                            </h3>
                            <br>
                            <p>Twitter</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Process of Establishment-->
    </main><!-- End #main -->

    <!-- ======= Footer Section ======= -->
    @include('components.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @include('components.scripts')
</body>
</html>
