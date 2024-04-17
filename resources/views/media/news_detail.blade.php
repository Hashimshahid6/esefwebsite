@include('components.header')
<body>
    <!-- ======= Header ======= -->
    @include('components.navbar')
    <main id="main">
        <section class="inner-page">
            <br><br>
            <div class="section-title" align-cotent="justify-content">
                <br><br>
                <h2>News Details</h2>
            </div>
            <div class="container" style="text-align: justify;">
                <h3> {{$news_detail->title}} </h3>
                <p> <strong>Published Date:</strong> {{$news_detail->date}} </p>
                <img src="{{asset($news_detail->picture)}}" alt="{{$news_detail->title}}" style="width: 100%; height: auto;">
                <br><br>
                <p> {!! $news_detail->description !!} </p>
                <p style="text-decoration: underline;"> <a href="{{route('news_and_updates')}}">Back to News</p></a>
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
