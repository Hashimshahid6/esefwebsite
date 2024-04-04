@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tenders List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('tenders.add')}}" class="btn btn-primary">Add New Tender</a>
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
                <h3 class="card-title">Tenders List</h3>
              </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Attachment</th>
                      <th>Date</th>
                      <th>Created By</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tenders as $tender)
                    <tr>
                      <td> {{$tender->id}} </td>
                      <td> {{$tender->title}} </td>
                      <td>
                        <a href="{{ asset($tender->attachment) }}" target="_blank"><img
                          src="{{asset('assets/img/pdf.png')}}" width="40" height="40"></a>
                      </td>
                      <td> {{$tender->date}} </td>
                      <td> {{$tender->created_by_name}} </td>
                      <td> {{($tender->status == 1) ? 'Active' : 'Inactive'}} </td>
                      <td>
                        <div class="d-flex">
                          <a href="{{route('tenders.edit', $tender->id)}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{route('tenders.delete', $tender->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Tender?');">
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