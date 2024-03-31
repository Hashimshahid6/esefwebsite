@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('gallery.add')}}" class="btn btn-primary">Add New Image to Gallery</a>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            @include('admin.layouts.messages')
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Gallery List</h3>
              </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Created By</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($getGallery as $gallery)
                    <tr>
                      <td> {{$gallery->id}} </td>
                      <td> {{$gallery->title}} </td>
                      <td> <img src="{{asset($gallery->picture)}}" alt="{{$gallery->title}}" style="width: 150px; height: 100px;"> </td>
                      <td> {{$gallery->created_by_name}} </td>
                      <td> {{($gallery->status == 1) ? 'Active' : 'Inactive'}} </td>
                      <td>
                        <div class="d-flex">
                          <a href="{{route('gallery.edit', $gallery->id)}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{route('gallery.delete', $gallery->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Gallery Image?');">
                            <i class="fas fa-trash"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                  {{$getGallery->links()}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection