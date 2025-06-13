<!-- ======= GCS Counts Section ======= -->
<section id="counts" class="counts section-bg">
  <div class="container">
    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
      <h2>Girls Community Schools (GCS)</h2>
      <p>The Elementary & Secondary Education Foundation establishes Girls Community Schools to serve “out-of-schools” children belonging to families lacking access to educational opportunities. These schools are established in those areas where government is not providing schooling facility.</p>
    </div>
    <div class="row no-gutters">
      <div class="col-md-2 col-lg align-items-md-stretch text-center">
        <div class="count-box">
          <i class="bi bi-building"></i>
          <span data-purecounter-start="0" data-purecounter-end="3573" data-purecounter-duration="1" class="purecounter gcs_schools"></span>
          <p><strong>Schools</strong></p>
        </div>
      </div>
      <div class="col-md-2 col-lg align-items-md-stretch text-center">
        <div class="count-box">
          <i class="bi bi-person-workspace"></i>
          <span data-purecounter-start="0" data-purecounter-end="5508" data-purecounter-duration="1" class="purecounter gcs_teachers"></span>
          <p><strong>Teachers</strong></p>
        </div>
      </div>
      <div class="col-md-2 col-lg align-items-md-stretch text-center">
        <div class="count-box">
          <i class="bi bi-gender-female"></i>
          <span data-purecounter-start="0" data-purecounter-end="145936" data-purecounter-duration="1" class="purecounter gcs_stu_girls"></span>
          <p><strong>Total Girls</strong></p>
        </div>
      </div>
      <div class="col-md-2 col-lg align-items-md-stretch text-center">
        <div class="count-box">
          <i class="bi bi-gender-male"></i>
          <span data-purecounter-start="0" data-purecounter-end="93374" data-purecounter-duration="1" class="purecounter gcs_stu_boys"></span>
          <p><strong>Total Boys</strong></p>
        </div>
      </div>
      <div class="col-md-4 col-lg align-items-md-stretch text-center">
        <div class="count-box">
          <i class="bi bi-people"></i>
          <span data-purecounter-start="0" data-purecounter-end="239310" data-purecounter-duration="1" class="purecounter gcs_stu_total"></span>
          <p><strong>Total Enrollment</strong></p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Counts Section -->
<script src="{{url('public/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript">
  $.ajax({
    url: 'https://www.esef.gkp.pk/gcs/api/get_data/statistics_for_website',
    type: 'POST',
    success: function(resp){
      var data = resp.data[0];
      // console.log(data.total_schools)
      $('.gcs_schools').attr('data-purecounter-end', data.total_schools);
      $('.gcs_teachers').attr('data-purecounter-end', data.total_teachers);
      $('.gcs_stu_girls').attr('data-purecounter-end', data.total_girls);
      $('.gcs_stu_boys').attr('data-purecounter-end', data.total_boys);
      $('.gcs_stu_total').attr('data-purecounter-end', data.total_enrollment);
    }
  });
</script>