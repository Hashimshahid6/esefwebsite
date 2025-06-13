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
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#exampleModal').modal('hide');" style="border-radius: 50%;width: 30px;color: red;border: none;font-weight: bold;">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-4">
							<img src="{{ url('/') }}/public/assets/img/logo.png" style="width: 500px;">
						</div>
						<div class="col-4">
						</div>
						<div class="col-4 text-right mb-3">
							<img src="{{ url('/') }}/public/assets/img/coming soon.jpg" style="border-radius: 50%; width: 115px;">
						</div>
						<hr>
					</div> <!-- end row -->
					<div class="row">
    				<div class="col-12">
							<h2 class="text-center">Coming Soon</h2>
							<ul>
								<li>
									<h4>ALP Middle Tech</h4></li>
									<li><h4>ALP Matric Tech</h4></li>
									<li><h4>RPL (Recognition of Prior Learning)</h4></li>
							</ul>
						</div>
					</div> <!-- end row -->
				</div>				
			</div>
		</div>
	</div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('components.scripts')	
</body>
</html>