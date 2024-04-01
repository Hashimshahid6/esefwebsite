@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Messages List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('messages.add')}}" class="btn btn-primary">Add New Message</a>
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
                <h3 class="card-title">Messages List</h3>
              </div>
              <div style="overflow: auto;">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Description</th>
                      <th>Picture</th>
                      <th>Twitter Link</th>
                      <th>Facebook Link</th>
                      <th>Instagram Link</th>
                      <th>Linkedin Link</th>
                      <th>Created By</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($messages as $message)
                      <tr>
                        <td> {{$message->id}} </td>
                        <td> {{$message->name}} </td>
                        <td> {{$message->designation}} </td>
                        <td> {!! $message->description !!} </td>
                        <td> <img src="{{asset($message->picture)}}" alt="{{$message->name}}" style="width: 50px; height: 50px;"> </td>
                        <td> {{$message->twitter_link}} </td>
                        <td> {{$message->facebook_link}} </td>
                        <td> {{$message->instagram_link}} </td>
                        <td> {{$message->linkedin_link}} </td>
                        <td> {{$message->created_by_name}} </td>
                        <td> {{($message->status == 1) ? 'Active' : 'Inactive'}} </td>
                        <td>
                          <div class="d-flex">
                            <a href="{{route('messages.edit', $message->id)}}" class="btn btn-sm btn-primary">
                              <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{route('messages.delete', $message->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Message?');">
                              <i class="fas fa-trash"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              {{$messages->links()}}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection