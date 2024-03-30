@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Member</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('bodmembers.list')}}" class="btn btn-primary">Back</a>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Member</h3>
                        </div>
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Member Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="member_name" value="{{old('member_name')}}" name="member_name" placeholder="Enter Member Name">
                                            <p class="text-danger">{{ $errors->first('member_name') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Member Designation <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="member_designation" value="{{old('member_designation')}}" name="member_designation" placeholder="Enter Member Designation">
                                            <p class="text-danger">{{ $errors->first('member_designation') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Picture Sequence <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="picture_sequence" value="{{old('picture_sequence')}}" name="picture_sequence" placeholder="Enter Picture Sequence">
                                            <p class="text-danger">{{ $errors->first('picture_sequence') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Member Details <span class="text-danger">*</span></label>
                                    <textarea class="form-group editor" name="member_details" id="member_details">{{old('member_details')}}</textarea>
                                    <p class="text-danger">{{ $errors->first('member_details') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Member Image <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="member_picture" name="member_picture">
                                    @if ($errors->has('member_picture'))
                                    <p class="text-danger">{{ $errors->first('member_picture') }}</p>
                                    @else
                                    <p class="text-danger">Only JPEG, PNG, and JPG files are allowed to upload.</p>
                                    @endif
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
@endsection