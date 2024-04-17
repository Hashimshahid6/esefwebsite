@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>News List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('news.add')}}" class="btn btn-primary">Add New News</a>
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
                <h3 class="card-title">News List</h3>
              </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Slug</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Picture</th>
                      <th>Created By</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($news as $newsupdate)
                    <tr>
                      <td> {{$newsupdate->id}} </td>
                      <td> {{$newsupdate->title}} </td>
                      <td> {{$newsupdate->slug}} </td>
                      <td> {!! $newsupdate->description !!} </td>
                      <td> {{$newsupdate->date}} </td>
                      <td> <img src="{{asset($newsupdate->picture)}}" alt="{{$newsupdate->title}}" style="width: 200px; height: 150px;"> </td>
                      <td> {{$newsupdate->created_by_name}} </td>
                      <td> {{($newsupdate->status == 1) ? 'Active' : 'Inactive'}} </td>
                      <td>
                        <div class="d-flex">
                          <a href="{{route('news.edit', $newsupdate->id)}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{route('news.delete', $newsupdate->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this News?');">
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