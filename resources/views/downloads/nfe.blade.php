@include('components.header')

<body>
    <!-- ======= Header ======= -->
    @include('components.navbar')
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="" class="about">
            <div class="container mb-5" style="margin-top: 80px !important">
							<div class="row d-flex">
								<div class="content col-12">	
									<center><h4>NFE ALP</h4></center>																	
								</div>								
							</div>
							  
								@if($list)								
								<div class="tabs">
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										@foreach($list as $parentKey => $parent_cats)
										<li class="nav-item" role="presentation">
											<button class="nav-link {{ $parentKey == 0 ? 'active' : '' }}" id="{{ $parent_cats->name }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $parent_cats->name }}" type="button" role="tab" aria-controls="{{ $parent_cats->name }}" aria-selected="true">{{ $parent_cats->name }}</button>
										</li>
										@endforeach
										<!-- <li class="nav-item" role="presentation">
											<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ALP-Middle</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">ALP-Middle Tech</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" type="button" role="tab" aria-controls="documents" aria-selected="false">Documents</button>
										</li> -->
									</ul>
									<div class="tab-content" id="myTabContent">
										@foreach($list as $parent_key => $parent_cats)
										<div class="tab-pane fade {{ $parent_key == 0 ? 'show active' : '' }}" id="{{ $parent_cats->name }}" role="tabpanel" aria-labelledby="{{ $parent_cats->name }}-tab">
											<div class="container">
												<div class="row">	
													<small class="mb-3 mt-3 nfealp">{!! $parent_cats->description !!}</small>											
													<div class="col-lg-12 ml-2 mt-3 order-1 order-lg-">
														@if($parent_cats->childrencats != null && count($parent_cats->childrencats) > 0)
														<ul class="nav nav-tabs" id="subTab" role="tablist">
															@foreach($parent_cats->childrencats as $subKey => $subcats)
															<li class="nav-item" role="presentation">
																<button class="nav-link {{ $subKey == 0 ? 'active' : '' }}" id="{{ $parent_cats->name }}{{str_replace(' ','-',$subcats->name)}}-tab" data-bs-toggle="tab" data-bs-target="#{{ $parent_cats->name }}{{str_replace(' ','-',$subcats->name)}}" type="button" role="tab" aria-controls="{{ $parent_cats->name }}{{str_replace(' ','-',$subcats->name)}}" aria-selected="false">{{$subcats->name}}</button>
															</li>
															@endforeach																													
														</ul>
														<div class="tab-content" id="subTabContent">
															@foreach($parent_cats->childrencats as $sub_key => $subcats)
															<div class="tab-pane fade {{ $sub_key == 0 ? 'show active' : '' }}" id="{{ $parent_cats->name }}{{str_replace(' ','-',$subcats->name)}}" role="tabpanel" aria-labelledby="{{ $parent_cats->name }}{{str_replace(' ','-',$subcats->name)}}-tab">
																<div class="container mt-3">
																	<div class="row">
																		<small class="mb-3 mt-3 nfealp">{{ $subcats->description }}</small>
																		@if($subcats->children != null && count($subcats->children) > 0)		
																		<table class="table table-bordered table-striped small-table">
																			<tr>
																				<th>Title</th>
																				<th>Download PDF</th>
																			</tr>
																			@foreach($subcats->children as $each_upload)
																			<tr>
																				<td>{{$each_upload->name}}</td>
																				<td>
																					<a href="{{ url('/') }}/public/{{ $each_upload->attachment }}" target="_blank">Download {{$each_upload->name}}</a>
																				</td>
																			</tr>
																			@endforeach
																		</table>
																		@else
																		<div class="col-12">
																			<p>No File Found in {{ $parent_cats->name }} {{ $subcats->name }}</p>
																		</div>
																		@endif																		
																	</div>
																</div>
															</div>	
															@endforeach														
														</div>
														@else
															@if($parent_cats->children != null && count($parent_cats->children) > 0)
															<table class="table table-bordered table-striped small-table">
																<tr>
																	<th>Title</th>
																	<th>Download PDF</th>
																</tr>
																@foreach($parent_cats->children as $each_upload)
																<tr>
																	<td>{{$each_upload->name}}</td>
																	<td>
																		<a href="{{ url('/') }}/public/{{ $each_upload->attachment }}" target="_blank">Download {{$each_upload->name}}</a>
																	</td>
																</tr>
																@endforeach
															</table>
															@endif
														@endif
													</div>
												</div>
											</div>
										</div>
										@endforeach										
									</div>
								</div>
								@endif
            </div>
            
        </section><!-- End About Section -->
    </main><!-- End #main -->

    <!-- ======= Footer Section ======= -->
    @include('components.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('components.scripts')
		<style type="text/css">
			.nfealp{
				font-size: 16px !important;
			}
		</style>
</body>

</html>
