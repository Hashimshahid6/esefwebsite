@include('components.header')

<body>
    <!-- ======= Header ======= -->
    @include('components.navbar')
    <main id="main">
        <!-- ======= Success Stories ======= -->
        <div class="container">
            <div class="row" style="text-align:center; margin: 0 auto;">
                <h1 style="font-weight: bold;margin-bottom: 20px;">Success Stories</h1>
                <br><br>
            </div> <!-- end row -->
            @if ($success_stories->count() > 0)
                @foreach ($success_stories as $successStory)
                    <div class="row mb-4" style="text-align:center; margin: 0 auto;">
                        <div class="col-md-6 mt-5 mb-5" style="margin-top: 20px;">
                            <p style="font-weight:bold; font-size:20px;">
                                {{ $successStory->description }}
                            </p>
                        </div>

                        <div class="col-md-6">
                            {!! $successStory->link !!}
                        </div>
                    </div> <!-- end row -->
                @endforeach
            @else
                <div class="row" style="text-align:center; margin: 0 auto;">
                    <h1 style="font-weight: bold;margin-bottom: 20px;">No Success Stories Found</h1>
                    <br><br>
                </div> <!-- end row -->
            @endif
        </div>
    </main><!-- End #main -->

    <!-- ======= Footer Section ======= -->
    @include('components.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('components.scripts')
</body>

</html>
