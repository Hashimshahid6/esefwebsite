@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User Details</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('admin.list')}}" class="btn btn-primary">Back</a>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">User Details</h3>
                        </div>
                        <form method="post" action="">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{$userRecord->name}}" id="name"  name="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" id="email" value="{{$userRecord->email}}" name="email" placeholder="Enter Email" required>
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                    @else
                                    <p class="text-danger">Do you want to change password? Please add new password!</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" id="status" required>
                                        <option {{($userRecord->status == 1) ? 'selected' : ''}} value="1">Active</option>
                                        <option {{($userRecord->status == 0) ? 'selected' : ''}} value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection