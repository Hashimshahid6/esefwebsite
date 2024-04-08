@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$header_title}}</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('tenders.list')}}" class="btn btn-primary">Back</a>
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
                            <h3 class="card-title">{{$header_title}}</h3>
                        </div>
                        <form method="post" action="{{route('tenders.insert')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="type" value="{{$type}}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title" placeholder="Enter Your Title">
                                    <p class="text-danger">{{ $errors->first('title') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Attachment <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="attachment" name="attachment" accept="application/pdf">
                                    <p class="text-danger">{{ $errors->first('attachment') }}</p>
                                </div>
                                <div class="form-group">
                                    <label>Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="date" value="{{old('date')}}" name="date">
                                    <p class="text-danger">{{ $errors->first('date') }}</p>
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