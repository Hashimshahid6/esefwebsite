@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Upload PDF</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('news.list')}}" class="btn btn-primary">Back</a>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
									@if ($errors->any())
											<div class="alert alert-danger">
													<ul>
															@foreach ($errors->all() as $error)
																	<li>{{ $error }}</li>
															@endforeach
													</ul>
											</div>
									@endif
									@if (session('success'))
											<div class="alert alert-success">
													{{ session('success') }}
											</div>
									@endif
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Upload PDF</h3>
                        </div>
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
															@if($parents)
															<div class="row">
                                <div class="col-6 form-group">
                                    <label>Select Category <span class="text-danger">*</span></label>
                                    <select class="form-control" name="test" required onchange="getChildren(this.value)">
																			<option value="">-- Select --</option>
																			@foreach($parents as $parent)
																			<option value="{{ $parent->id }}">{{ $parent->name }}</option>
																			@endforeach
																		</select>
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
																<div class="col-6 form-group subcatdiv d-none">
                                    <label>Select Sub Category <span class="text-danger">*</span></label>
                                    <select class="form-control parent_id" name="parent_id">
																			<option value="">-- Select --</option>
																		</select>
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
															</div>
															@endif
                                <div class="form-group">
                                    <label>Document Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" value="{{old('name')}}" name="name" placeholder="Enter PDF Title" required>
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                </div>
																<div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" placeholder="Enter Description Here" >{{ $nfealp_row->description }}</textarea>
                                    <p class="text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label>Upload PDF <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="attachment" name="attachment" required>
																		<p class="text-danger">{{ $errors->first('attachment') }}</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
	function getChildren(parent_id){
		if(parent_id){
			$.ajax({
				type: "post",
				url: "{{ url('/') }}/admin/nfealp/getChildrenOnly",
				data: {parent_id: parent_id, _token: '{{csrf_token()}}'},
				success: function (data) {
					if(data.length > 0){
						var options = '<option value="">-- Select --</option>';
						$.each(data, function (arrayIndex, elementValue) { 
							options += `<option value="${elementValue.id}">${elementValue.name}</option>`;						 
						});
						// console.log('options',options);
						$('.parent_id').html(options);
						$('.subcatdiv').removeClass('d-none');
						$('.parent_id').attr('required', true);
					}else{
						var options = '<option value="'+parent_id+'">-- Select --</option>';
						$('.parent_id').html(options);
						$('.parent_id').attr('required', false);
						$('.subcatdiv').addClass('d-none');
					}
				},
				error: function(resp){

				}
			});
		}else{
			$('.subcatdiv').addClass('d-none');
			$('.parent_id').attr('required', false);
		} //
	} //
</script>
@endsection