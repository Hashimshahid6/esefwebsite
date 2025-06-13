<!-- ======= ESS Counts Section ======= -->
<section id="counts" class="counts  section-bg">
  <div class="container">
    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
      <h2>Education Support Scheme (ESS)</h2>
      <p>The Education Support Scheme is a special initiative of the Government of Khyber Pakhtunkhwa with the objective of enrolling “out-of-school” children (OOSC) falling in the age bracket of 4-16. The scheme is for the areas where government is not providing schooling facility.</p> 
    </div>
    <div class="row no-gutters">
      <div class="col-lg align-items-md-stretch text-center">
        <div class="count-box">
        <i class="bi bi-building"></i>
        <span data-purecounter-start="0" data-purecounter-end="54" data-purecounter-duration="1" class="purecounter ess_schools"></span>
        <p><strong>Partner Schools</strong></p>
      </div>
    </div>
    <div class="col-lg align-items-md-stretch text-center">
      <div class="count-box">
        <i class="bi bi-gender-female"></i>
        <span data-purecounter-start="0" data-purecounter-end="4585" data-purecounter-duration="1" class="purecounter ess_stu_girls"></span>
        <p><strong>Total Girls</strong></p>
      </div>
    </div>
    <div class="col-lg align-items-md-stretch text-center">
      <div class="count-box">
        <i class="bi bi-gender-male"></i>
        <span data-purecounter-start="0" data-purecounter-end="1980" data-purecounter-duration="1" class="purecounter ess_stu_boys"></span>
        <p><strong>Total Boys</strong></p>
      </div>
    </div>
    <div class="col-lg align-items-md-stretch text-center">
      <div class="count-box text-center">
        <i class="bi bi-people text-center"></i>
        <span data-purecounter-start="0" data-purecounter-end="5547" data-purecounter-duration="1" class="purecounter ess_stu_total"></span>
        <p><strong>Total Enrollment</strong></p>
      </div>
    </div>
  </div>
</section><!-- End Counts Section -->
<script src="{{url('public/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript">
  $.ajax({
    url: 'https://www.esef.gkp.pk/ess/api/get_data/statistics_for_website',
    type: 'POST',
    success: function(resp){
      var data = resp.data[0];
      // console.log(data.total_schools)
      $('.ess_schools').attr('data-purecounter-end', data.total_schools);
      $('.ess_stu_girls').attr('data-purecounter-end', data.total_girls);
      $('.ess_stu_boys').attr('data-purecounter-end', data.total_boys);
      $('.ess_stu_total').attr('data-purecounter-end', data.total_enrollment);
    }
  });
</script>