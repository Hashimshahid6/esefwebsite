@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sliders List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('sliders.add')}}" class="btn btn-primary">Add New Slider</a>
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
                <h3 class="card-title">Sliders List</h3>
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
                    @foreach($sliders as $slider)
                    <tr>
                      <td> {{$slider->id}} </td>
                      <td> {{$slider->title}} </td>
                      <td> {{$slider->description}} </td>
                      <td> <img src="{{asset($slider->picture)}}" alt="{{$slider->title}}" style="width: 150px; height: 100px;"> </td>
                      <td> {{$slider->created_by_name}} </td>
                      <td> {{($slider->status == 1) ? 'Active' : 'Inactive'}} </td>
                      <td>
                        <div class="d-flex">
                          <a href="{{route('sliders.edit', $slider->id)}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{route('sliders.delete', $slider->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Slider?');">
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