@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('admin.add')}}" class="btn btn-primary">Add New User</a>
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
                <h3 class="card-title">Users List</h3>
              </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($usersRecord as $userRecord)
                    <tr>
                      <td>{{$userRecord->id}}</td>
                      <td>{{$userRecord->name}}</td>
                      <td>{{$userRecord->email}}</td>
                      <td>{{$userRecord->status == 1 ? 'Active' : 'Inactive'}}</td>
                      <td>
                        <div class="d-flex">
                          <a href="{{route('admin.edit', $userRecord->id)}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{route('admin.delete', $userRecord->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this User?');">
                            <i class="fas fa-trash"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection