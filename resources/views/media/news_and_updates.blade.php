@include('components.header')

<body>
    <!-- ======= Header ======= -->
    @include('components.navbar')
    <main id="main">
        @include('components.news')

        {{-- News list --}}
        <section id="testimonials" class="testimonials">
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                <h2>All News & Updates</h2>
            </div>
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped small-table" style="margin: 0 auto; width:900px;">
                        <thead>
                            <tr>
                                <th width="15%">Date</th>
                                <th width="85%">Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $item)
                            <tr>
                                <td>{{$item->date}}</td>
                                <td>{{$item->title}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section><!-- End News List -->
    </main>

    <!-- ======= Footer Section ======= -->
    @include('components.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('components.scripts')
</body>

</html>
