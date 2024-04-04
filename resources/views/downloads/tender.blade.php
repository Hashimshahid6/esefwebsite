@include('components.header')

<body>
    <!-- ======= Header ======= -->
    @include('components.navbar')
    <main id="main">
        <section class="inner-page">
            <div class="container">
                <div class="row no-gutters">
                    <div class="section-title">
                        <br><br><br><br>
                        <h2>Tender</h2>
                    </div>
                    <div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped small-table" style="margin: 0 auto; width:900px;">
                                <tbody>
                                    <tr>
                                        <th width="15%">
                                            <h5> Date</h5>
                                        </th>
                                        <th width="65%">
                                            <h5>Title</h5>
                                        </th>
                                        <th width="10">
                                            <h5>Download PDF</h5>
                                        </th>
                                    </tr>
                                </tbody>
                                <tbody>
                                    @foreach ($tenders as $tender)
                                        <tr>
                                            <td>
                                                <h6 style="color:#999;">{{ $tender->date }}</h6>
                                            </td>
                                            <td>
                                                <h6 style="color:#999;">{{ $tender->title }}</h6>
                                            </td>
                                            <td style="text-align:center;">
                                                <a href="{{ asset($tender->attachment) }}" target="_blank"><img
                                                        src="{{asset('assets/img/pdf.png')}}" width="40" height="40"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer Section ======= -->
    @include('components.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('components.scripts')
</body>

</html>
