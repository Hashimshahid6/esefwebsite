@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit News Details</h1>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit News</h3>
                        </div>
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" value="{{old('title', $news->title)}}" id="title"  name="title" placeholder="Enter Your Title">
                                    <p class="text-danger">{{ $errors->first('title') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control editor" name="description" id="description">{{old('description', $news->description)}}</textarea>
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" value="{{old('date', $news->date)}}" id="date" name="date">
                                    <p class="text-danger">{{ $errors->first('date') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option {{(old('status', $news->status ) == 1) ? 'selected' : ''}} value="1">Active</option>
                                        <option {{(old('status', $news->status) == 0) ? 'selected' : ''}} value="0">Inactive</option>
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