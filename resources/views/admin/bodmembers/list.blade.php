@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Members List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('bodmembers.add')}}" class="btn btn-primary">Add New Member</a>
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
                <h3 class="card-title">Members List</h3>
              </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Description</th>
                      <th>Picture</th>
                      <th>Picture Sequence</th>
                      <th>Created By</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($bodmembers as $bodmember)
                    <tr>
                      <td> {{$bodmember->id}} </td>
                      <td> {{$bodmember->member_name}} </td>
                      <td> {{$bodmember->member_designation}} </td>
                      <td> {!! $bodmember->member_details !!} </td>
                      <td> <img src="{{asset($bodmember->member_picture)}}" alt="{{$bodmember->member_name}}" style="width: 50px; height: 50px;"> </td>
                      <td> {{$bodmember->picture_sequence}} </td>
                      <td> {{$bodmember->created_by_name}} </td>
                      <td> {{($bodmember->status == 1) ? 'Active' : 'Inactive'}} </td>
                      <td>
                        <div class="d-flex">
                          <a href="{{route('bodmembers.edit', $bodmember->id)}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{route('bodmembers.delete', $bodmember->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this BOD Member?');">
                            <i class="fas fa-trash"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                  {{$bodmembers->links()}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection