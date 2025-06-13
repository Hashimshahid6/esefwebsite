@include('components/head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('components/top_bar')

  @include('components/side_menu')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        @if (\Session::has('error'))
          <div class="alert alert-danger">
            <p>{!! \Session::get('error') !!}</p>                
          </div>
        @endif
      </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">          
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">{{ @$row->month ? 'Edit' : 'Add' }} {{ __('Result') }}</h3>
                <span style="float:right !important"><a href="javascript:history.go(-1);">Back</a></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <label>{{ __('Select Class') }}</label>
                      <select name="class_id" class="form-control" onchange="class_change(this.value);">
                        <option value="" >-- Select Class --</option>
                        @foreach($esef_classes as $cl_key => $each_class)
                        <option value="{{ $each_class->id }}" >{{ $each_class->class_name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <!-- /.col 4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <label>{{ __('Subject') }}</label>
                      <select name="subject_id" id="subjSelect" class="form-control" onchange="subject_change(this.value);">
                        <option value="" >-- Select Subject --</option>
                      </select>
                    </div>
                    <!-- /.col 4 -->
                  </div>
                  <!-- /.row -->
                  <div class="row">
                    <div class="col-12 text-center mt-4 resp_msg alert d-none"></div>
                    <div class="stu_subj_list"></div>
                  </div> 
                  <!-- /.row -->
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  @include('components/footer')

</div>
<!-- ./wrapper -->
@include('components/scripts')
@include('components/schools_scripts')
<script>
  function class_change(class_id){
    var exam_id = '{{ $exam_id }}';
    $.ajax({
      url: '{{ url('/') }}/exams/class_wise_subjects',
      type: 'POST',
      data: {class_id: class_id, exam_id: exam_id, _token: '{{ csrf_token() }}'},
      success: function(resp){
        var options = '<option value="" >-- Select Subject --</option>';
        var respArr = resp;
        $.each(respArr, function(index, val) {
          /* iterate through array or object */
          options += '<option value="'+val.book_id+'" >'+val.book_name+'</option>';
        });
        $('[name="subject_id"]').html(options);
        $('.stu_subj_list').html(''); 
      }
    });
    
    
  } //
  function subject_change(subj_id){
    var class_id = $('[name="class_id"]').val();
    var exam_id = '{{ $exam_id }}';
    var school_code = '{{ $school_code }}';
    $.ajax({
      url: '{{ url('/') }}/exams/class_wise_students',
      type: 'POST',
      data: {exam_id: exam_id, subj_id: subj_id, class_id: class_id, school_code: school_code, _token: '{{ csrf_token() }}'},
      success: function(resp){
        $('.stu_subj_list').html(resp);
      }
    });
  } //      
</script>