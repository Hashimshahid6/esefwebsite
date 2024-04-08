@include('components.header')

<body>
    <!-- ======= Header ======= -->
    @include('components.navbar')
    <main id="main">
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">
                <br><br>
                <div class="section-title">
                    <h2>Contact Us</h2>
                    <p>Got a question? We would love to hear from you. Send us a message and we will respond as soon as
                        possible.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>Elementary & Secondary Education Foundation <br>Plot No.20, Street No.13, Sector E-8,
                                Phase-7, Hayatabad, Peshawar, Khyber Pakhtunkhwa</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@eef.org.pk<br><br></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>091-9219106, 9219107<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d413.61553094161246!2d71.41993553795035!3d33.96878649577286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d9114763cbda15%3A0x5eea137b8822f05c!2sElementary%20and%20Secondary%20Education%20Foundation%20(ESEF)!5e0!3m2!1sen!2s!4v1658401347666!5m2!1sen!2s"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6">
                        @include('admin.layouts.messages')
                        <div class="section-title">
                            <h2>Send us a message</h2>
                        </div>
                        <form action="{{ route('contact_us.insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name">
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email">
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label>Subject <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject">
                                    <p class="text-danger">{{ $errors->first('subject') }}</p>
                            </div>
                            <div class="form-group mt-3">
                                <label>Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                                <p class="text-danger">{{ $errors->first('message') }}</p>
                            </div>
                            <div class="mt-3">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Send
                                    Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
        @if ($contacts_directory->count() > 0)
            <section style="padding-top:0 !important;">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="section-title">
                            <br><br><br><br>
                            <h2>Contacts Directory</h2>
                        </div>
                        <div class="container">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped small-table"
                                    style="margin: 0 auto; width:900px;">
                                    <thead>
                                        <tr>
                                            <th>Designation</th>
                                            <th>Telephone No</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts_directory as $contacts_data)
                                            <tr>
                                                <td>{{ $contacts_data->designation }}</td>
                                                <td>{{ $contacts_data->telephone_no }}</td>
                                                <td>{{ $contacts_data->email }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </main><!-- End #main -->

    <!-- ======= Footer Section ======= -->
    @include('components.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('components.scripts')
</body>

</html>
