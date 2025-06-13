@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>NFE ALP</h1>
          </div>
          <div class="col-sm-6" style="text-align: right">
            <a href="{{route('nfealp.add')}}" class="btn btn-primary">Add New</a>
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
                <h3 class="card-title">NFE ALP</h3>
              </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Status</th>
                      <th>View Uploads</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list as $listitem)
											@if(!$listitem->childrencats->isEmpty())
                    <tr>
                      <th> {{$listitem->name}} </th>
                      <th> {{($listitem->status == 1) ? 'Active' : 'Inactive'}} </th>
                      <td>
                        &nbsp;
                      </td>
                    </tr>
											@foreach($listitem->childrencats as $each_child)
											<tr>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$each_child->name}} </td>
												<td> {{($each_child->status == 1) ? 'Active' : 'Inactive'}} </td>
												<td>
                        <div class="d-flex">
													<a href="{{ route('nfealp.listdocs', $each_child->id) }}" class="btn btn-sm btn-primary" title="View Uploaded PDFs">
                            <i class="fas fa-eye"></i>
                          </a>
                        </div>
                      </td>
											</tr>
											@endforeach
											@else
											 @if(!$listitem->children->isEmpty())
												<tr>
													<th> {{$listitem->name}} </th>
													<th> {{($listitem->status == 1) ? 'Active' : 'Inactive'}} </th>
													<td>
														&nbsp;
													</td>
												</tr>
												@foreach($listitem->children as $childItem)
												<tr>
													<td> {{$childItem->name}} </td>
													<td> {{($childItem->status == 1) ? 'Active' : 'Inactive'}} </td>
													<td>
														<a href="{{ url('/') }}/public/{{$childItem->attachment}}" target="_blank">View File</a> | <a href="{{ route('nfealp.edit', $childItem->id) }}">Edit</a>
													</td>
												</tr>
												@endforeach
											 @else
												<tr>
													<td> {{$listitem->name}} </td>
													<td> {{($listitem->status == 1) ? 'Active' : 'Inactive'}} </td>
													<td> <a href="{{ url('/') }}/public/{{$listitem->attachment}}" target="_blank">View File</a> | <a href="{{ route('nfealp.edit', $listitem->id) }}">Edit</a>												
													</td>
												</tr>
											 @endif
											@endif
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