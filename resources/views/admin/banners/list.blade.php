@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Banners List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('banners.add')}}" class="btn btn-primary">Add New Banner</a>
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
                <h3 class="card-title">Banners List</h3>
              </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Created By</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($banners as $banner)
                    <tr>
                      <td> {{$banner->id}} </td>
                      <td> {{$banner->title}} </td>
                      <td> {{$banner->description}} </td>
                      <td> <img src="{{asset($banner->picture)}}" alt="{{$banner->title}}" style="width: 150px; height: 100px;"> </td>
                      <td> {{$banner->created_by_name}} </td>
                      <td> {{($banner->status == 1) ? 'Active' : 'Inactive'}} </td>
                      <td>
                        <div class="d-flex">
                          <a href="{{route('banners.edit', $banner->id)}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{route('banners.delete', $banner->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Slider?');">
                            <i class="fas fa-trash"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                  {{$sliders->links()}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection