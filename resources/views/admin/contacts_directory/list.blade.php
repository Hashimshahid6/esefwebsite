@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('contacts_directory.add')}}" class="btn btn-primary">Add New Contact</a>
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
                <h3 class="card-title">Contacts List</h3>
              </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Designation</th>
                      <th>Telephone No</th>
                      <th>Email</th>
                      <th>Created By</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($contactsdirectory as $contacts_data)
                    <tr>
                      <td> {{$contacts_data->id}} </td>
                      <td> {{$contacts_data->designation}} </td>
                      <td> {{$contacts_data->telephone_no}} </td>
                      <td> {{$contacts_data->email}} </td>
                      <td> {{$contacts_data->created_by_name}} </td>
                      <td> {{($contacts_data->status == 1) ? 'Active' : 'Inactive'}} </td>
                      <td>
                        <div class="d-flex">
                          <a href="{{route('contacts_directory.edit', $contacts_data->id)}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="{{route('contacts_directory.delete', $contacts_data->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this BOD Member?');">
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