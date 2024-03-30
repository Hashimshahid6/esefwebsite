@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Services List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('services.add')}}" class="btn btn-primary">Add New Service</a>
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
                <h3 class="card-title">Services List</h3>
              </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Icon</th>
                      <th>Created By</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($services as $service)
                    <tr>
                      <td> {{$service->id}} </td>
                      <td> {{$service->title}} </td>
                      <td> {{$service->description}} </td>
                      <td> <img src="{{asset($service->icon)}}" alt="{{$service->title}}" style="width: 50px; height: 50px;"> </td>
                      <td> {{$service->created_by_name}} </td>
                      <td> {{($service->status == 1) ? 'Active' : 'Inactive'}} </td>
                      <td>
                        <div class="d-flex">
                          <a href="{{route('services.edit', $service->id)}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{route('services.delete', $service->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Slider?');">
                            <i class="fas fa-trash"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                  {{$services->links()}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection