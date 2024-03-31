@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Member Details</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('messages.list')}}" class="btn btn-primary">Back</a>
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
                            <h3 class="card-title">Edit Member</h3>
                        </div>
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{old('name', $message->name)}}" id="name"  name="name" placeholder="Enter Name">
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Designation <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="designation" value="{{old('designation', $message->designation)}}" name="designation" placeholder="Enter Designation">
                                            <p class="text-danger">{{ $errors->first('designation') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea class="form-group editor" name="description" id="description">{{old('description',$message->description )}}</textarea>
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="url" class="form-control" id="facebook_link" value="{{old('facebook_link', $message->facebook_link)}}" name="facebook_link" placeholder="Enter Facebook Link">
                                            <p class="text-danger">{{ $errors->first('facebook_link') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="url" class="form-control" id="twitter_link" value="{{old('twitter_link', $message->twitter_link)}}" name="twitter_link" placeholder="Enter Twitter Link">
                                            <p class="text-danger">{{ $errors->first('twitter_link') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Linkedin</label>
                                            <input type="url" class="form-control" id="linkedin_link" value="{{old('linkedin_link', $message->linkedin_link)}}" name="linkedin_link" placeholder="Enter Linkedin Link">
                                            <p class="text-danger">{{ $errors->first('linkedin_link') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="url" class="form-control" id="instagram_link" value="{{old('instagram_link', $message->instagram_link)}}" name="instagram_link" placeholder="Enter Instagram Link">
                                            <p class="text-danger">{{ $errors->first('instagram_link') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class="form-control" id="picture" name="picture">
                                            @if ($errors->has('picture'))
                                            <p class="text-danger">{{ $errors->first('picture') }}</p>
                                            @else
                                            <p class="text-danger">Only JPEG, PNG, and JPG files are allowed to upload.</p>
                                            @endif
                                            @if($message->picture)
                                                <img src="{{ asset($message->picture) }}" alt="Slider Image" style="width: 50px; height: 50px;">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option {{(old('status', $message->status ) == 1) ? 'selected' : ''}} value="1">Active</option>
                                                <option {{(old('status', $message->status) == 0) ? 'selected' : ''}} value="0">Inactive</option>
                                            </select>
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