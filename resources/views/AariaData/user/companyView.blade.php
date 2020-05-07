@extends('layouts.app')
@section('content')
<div class="alert alert-info" role="alert">
        <h6 class="text-center" style="margin-top:2px;">User DATA</h6>
        </div>
<br />
@if(Session::has('Data_Submit'))
<p class="alert alert-danger">
  {{session('Data_Submit')}}
</p>
@endif
<div class="text-center">
<a href="/comp/create"><button type="submit" class="btn btn-primary">ADD MORE</button></a>
</div>
<table class="table table-hover table-bordered table-condensed">
  <thead>
    <tr>
      <th>S.No.</th>
      <th>Company Name</th>
      <th>Address of the Party</th>
    </tr>
  </thead>
  <tbody>
    @if($compData)
    @foreach($compData as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->comp_name}}</td>
      <td>{{$data->address}}</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@endsection
