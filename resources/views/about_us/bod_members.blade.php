@include('components.header')
<body>
    @include('components.navbar')
    @if($bodMembers->count() > 0)
        <main id="main">
            <!-- ======= Breadcrumbs Section ======= -->
            <section class="breadcrumbs">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                </div>
            </section><!-- End Breadcrumbs Section -->
            <section class="inner-page">
                <div class="container">
                    <div class="section-title">
                        <h2>Board of Directors</h2>
                        <p>Elementary & Secondary Education Foundation, Khyber Pakhtunkhwa</p>
                    </div>
                    <!-- ======= Events Section ======= -->
                    <section id="events" class="events">
                        <div class="container" data-aos="fade-up">
                            <div class="row align-center justify-content-center">
                                <div class="col-lg-4 align-center d-flex text-center">
                                    <div class="card">
                                        <img class="card-img-top" src="{{asset($bodMembers[0]->member_picture)}}" alt="{{$bodMembers[0]->member_name}}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$bodMembers[0]->member_name}}</h5>
                                            <p class="card-text">{{$bodMembers[0]->member_designation}}</p>
                                            <p class="card-text">{!! $bodMembers[0]->member_details !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
															@php
															$counter = 0;
															@endphp
                                @foreach($bodMembers as $index => $bodMember)
                                    @if(!$index == 0)
																				<div class="col-12 col-md-6 col-lg-1 align-center d-flex text-center">
																					&nbsp;
																				</div>
                                        <div class="col-12 col-md-6 col-lg-4 align-center d-flex text-center">
                                            <div class="card">
                                                <img class="card-img-top" src="{{ asset($bodMember->member_picture) }}" alt="{{$bodMember->member_name}}">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$bodMember->member_name}}</h5>
                                                    <p class="card-text">{{$bodMember->member_designation}}</p>
                                                    <p class="card-text">{!! $bodMember->member_details !!}</p>
                                                </div>
                                            </div>
                                        </div>	
																				<div class="col-12 col-md-6 col-lg-1 align-center d-flex text-center">
																					&nbsp;
																				</div>																			
                                    @endif
																				@php
																				$counter++;
																				if($counter %2 != 0){
																					echo '</div><div class="row">';
																					$counter = 1;
																				}
																				@endphp
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </main><!-- End #main -->
    @endif
    
    <!-- ======= Footer ======= -->
    @include('components.footer')
    <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('components.scripts')
</body>
</html>