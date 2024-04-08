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
            <a href="{{route('contacts_directory.list')}}" class="btn btn-primary">Back</a>
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
                            <h3 class="card-title">Add New Contact</h3>
                        </div>
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Designation <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="designation" value="{{old('designation')}}" name="designation" placeholder="Enter Designation">
                                            <p class="text-danger">{{ $errors->first('designation') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Telephone No <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="telephone_no" value="{{old('telephone_no')}}" name="telephone_no" placeholder="Enter Telephone No">
                                            <p class="text-danger">{{ $errors->first('telephone_no') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email" value="{{old('email')}}" name="email" placeholder="Enter Email">
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                        </div>
                                    </div>
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