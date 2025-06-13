@include('components.header')

<body>
    <!-- ======= Header ======= -->
    @include('components.navbar')
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="" class="about">
            <div class="container mb-5" style="margin-top: 80px !important">
                <h3>Khyber Pakhtunkhwa ALP</h3>
								<div class="tabs">
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item" role="presentation">
											<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">ALP-Primary</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ALP-Middle</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">ALP-Middle Tech</button>
										</li>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" type="button" role="tab" aria-controls="documents" aria-selected="false">Documents</button>
										</li>
									</ul>
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
											<div class="container">
												<div class="row">	
													<h3 class="mt-3">ALP-Primary</h3>											
													<div class="col-lg-12 ml-2 mt-3 order-1 order-lg-">
														<ul class="nav nav-tabs" id="subTab" role="tablist">
															<li class="nav-item" role="presentation">
																<button class="nav-link active" id="primarycurriculum-tab" data-bs-toggle="tab" data-bs-target="#primarycurriculum" type="button" role="tab" aria-controls="primarycurriculum" aria-selected="false">Curriculum</button>
															</li>
															<li class="nav-item" role="presentation">
																<button class="nav-link" id="packageA-tab" data-bs-toggle="tab" data-bs-target="#packageA" type="button" role="tab" aria-controls="packageA" aria-selected="true">Package A</button>
															</li>
															<li class="nav-item" role="presentation">
																<button class="nav-link" id="packageB-tab" data-bs-toggle="tab" data-bs-target="#packageB" type="button" role="tab" aria-controls="packageB" aria-selected="false">Package B</button>
															</li>
															<li class="nav-item" role="presentation">
																<button class="nav-link" id="packageC-tab" data-bs-toggle="tab" data-bs-target="#packageC" type="button" role="tab" aria-controls="packageC" aria-selected="false">Package C</button>
															</li>															
														</ul>
														<div class="tab-content" id="subTabContent">
															<div class="tab-pane fade show active" id="primarycurriculum" role="tabpanel" aria-labelledby="primarycurriculum-tab">
																<div class="container mt-3">
																	<div class="row">
																		<table class="table table-bordered table-striped small-table">
																			<tr>
																				<th>Title</th>
																				<th>Download PDF</th>
																			</tr>
																			<tr>
																				<td>ALP Primary Curriculum KP 2022</td>
																				<td>
																					<a href="{{ url('/') }}/uploads/alp/primary/ALP-P-Curriculum-KP-2022-final.pdf" target="_blank">Download Curriculum</a>
																				</td>
																			</tr>
																		</table>																		
																	</div>
																</div>
															</div>
															<div class="tab-pane fade" id="packageA" role="tabpanel" aria-labelledby="packageA-tab">
																<div class="container mt-3">
																	<div class="row">
																		<table class="table table-bordered table-striped small-table">
																			<tr>
																				<th>Title</th>
																				<th>Download PDF</th>
																			</tr>
																			<tr>
																				<td>Package A Text Book</td>
																				<td>
																					<a href="{{ url('/') }}/uploads/alp/primary/English-A-TB-complete-2023.pdf" target="_blank">Download</a>
																				</td>
																			</tr>
																			<tr>
																				<td>Package A Teachers Guide</td>
																				<td>
																					<a href="{{ url('/') }}/uploads/alp/primary/English-A-TG-2023-Curved-final-22-09-2023.pdf" target="_blank">Download</a>
																				</td>
																			</tr>
																		</table>																		
																	</div>
																</div>
															</div>
															<div class="tab-pane fade" id="packageB" role="tabpanel" aria-labelledby="packageB-tab">
																<div class="container mt-3">
																	<div class="row">
																		<table class="table table-bordered table-striped small-table">
																			<tr>
																				<th>Title</th>
																				<th>Download PDF</th>
																			</tr>
																			<tr>
																				<td>Package B Text Book</td>
																				<td>
																					<a href="{{ url('/') }}/uploads/alp/primary/English-B-KP-TB-Complete-2023.pdf" target="_blank">Download</a>
																				</td>
																			</tr>
																		</table>																		
																	</div>
																</div>
															</div>
															<div class="tab-pane fade" id="packageC" role="tabpanel" aria-labelledby="packageC-tab">
																<div class="container mt-3">
																	<div class="row">
																		<table class="table table-bordered table-striped small-table">
																			<tr>
																				<th>Title</th>
																				<th>Download PDF</th>
																			</tr>
																			<tr>
																				<td>Package C Text Book</td>
																				<td>
																					<a href="{{ url('/') }}/uploads/alp/primary/English-C-new-2023-final-done 6-8-Curved-22-09-2023.pdf" target="_blank">Download</a>
																				</td>
																			</tr>
																		</table>																		
																	</div>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
											<div class="container">
												<div class="row">
													<h3 class="mt-3">ALP-Middle</h3>												
													<div class="col-lg-12 ml-2 mt-3 order-1 order-lg-">
														<ul class="nav nav-tabs" id="subTab" role="tablist">
															<li class="nav-item" role="presentation">
																<button class="nav-link active" id="middlecurriculum-tab" data-bs-toggle="tab" data-bs-target="#middlecurriculum" type="button" role="tab" aria-controls="middlecurriculum" aria-selected="false">Curriculum</button>
															</li>
															<li class="nav-item" role="presentation">
																<button class="nav-link" id="packageD-tab" data-bs-toggle="tab" data-bs-target="#packageD" type="button" role="tab" aria-controls="packageD" aria-selected="true">Package D</button>
															</li>
															<li class="nav-item" role="presentation">
																<button class="nav-link" id="packageE-tab" data-bs-toggle="tab" data-bs-target="#packageE" type="button" role="tab" aria-controls="packageE" aria-selected="false">Package E</button>
															</li>															
														</ul>
														<div class="tab-content" id="subTabContent">
															<div class="tab-pane fade show active" id="middlecurriculum" role="tabpanel" aria-labelledby="middlecurriculum-tab">...</div>
															<div class="tab-pane fade" id="packageD" role="tabpanel" aria-labelledby="packageD-tab">
																<div class="container mt-3">
																	<div class="row">
																		<table class="table table-bordered table-striped small-table">
																			<tr>
																				<th>Title</th>
																				<th>Download PDF</th>
																			</tr>
																			<tr>
																				<td>Package D English Book</td>
																				<td>
																					<a href="{{ url('/') }}/uploads/alp/primary/English-Package-D-Book.pdf" target="_blank">Download</a>
																				</td>
																			</tr>
																			<tr>
																				<td>Package D English Teaching Guide</td>
																				<td>
																					<a href="{{ url('/') }}/uploads/alp/primary/English-Teaching-Guide_Package-D-Urdu-Inham-sb-Final.pdf" target="_blank">Download</a>
																				</td>
																			</tr>
																			<tr>
																				<td>Package D English Teaching Guide</td>
																				<td>
																					<a href="{{ url('/') }}/uploads/alp/primary/English-Teaching-Guide_Package-D-Urdu-Inham-sb-Final.pdf" target="_blank">Download</a>
																				</td>
																			</tr>
																		</table>																		
																	</div>
																</div>
															</div>
															<div class="tab-pane fade" id="packageE" role="tabpanel" aria-labelledby="packageE-tab">...</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
											<div class="container">
												<div class="row">
													<h3 class="mt-3">ALP-Middle Tech</h3>												
													<div class="col-lg-12 ml-2 mt-3 order-1 order-lg-">
														<ul class="nav nav-tabs" id="subTab" role="tablist">
															<li class="nav-item" role="presentation">
																<button class="nav-link active" id="middletechcurriculum-tab" data-bs-toggle="tab" data-bs-target="#middletechcurriculum" type="button" role="tab" aria-controls="middletechcurriculum" aria-selected="false">Curriculum</button>
															</li>
															<li class="nav-item" role="presentation">
																<button class="nav-link" id="textbooks-tab" data-bs-toggle="tab" data-bs-target="#textbooks" type="button" role="tab" aria-controls="textbooks" aria-selected="true">Text Books</button>
															</li>															
														</ul>
														<div class="tab-content" id="subTabContent">
															<div class="tab-pane fade show active" id="middletechcurriculum" role="tabpanel" aria-labelledby="middletechcurriculum-tab">...</div>
															<div class="tab-pane fade" id="textbooks" role="tabpanel" aria-labelledby="textbooks-tab">
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">Coming Soon</div>
									</div>
								</div>
            </div>
            
        </section><!-- End About Section -->
    </main><!-- End #main -->

    <!-- ======= Footer Section ======= -->
    @include('components.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('components.scripts')
</body>

</html>
