@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Slider Details</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('banners.list')}}" class="btn btn-primary">Back</a>
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
                            <h3 class="card-title">Edit Banner</h3>
                        </div>
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" value="{{old('title', $banner->title)}}" id="title"  name="title" placeholder="Enter Your Title">
                                    <p class="text-danger">{{ $errors->first('title') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="description" value="{{old('description', $banner->description)}}" name="description" placeholder="Enter Your Description">
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" id="picture" name="picture">
                                    @if ($errors->has('picture'))
                                    <p class="text-danger">{{ $errors->first('picture') }}</p>
                                    @else
                                    <p class="text-danger">Only JPEG, PNG, and JPG files are allowed to upload.</p>
                                    @endif
                                    @if($slider->picture)
                                        <img src="{{ asset($banner->picture) }}" alt="Slider Image" style="width: 150px; height: 100px;">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option {{(old('status', $banner->status ) == 1) ? 'selected' : ''}} value="1">Active</option>
                                        <option {{(old('status', $banner->status) == 0) ? 'selected' : ''}} value="0">Inactive</option>
                                    </select>
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