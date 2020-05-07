@extends('layouts.app')
@section('content')
<style>
.mystyle{
 border: 4px solid black;
}
</style>
<div class="alert alert-info" role="alert">
        <h6 class="text-center" style="margin-top:2px;">user Tracker Data</h6>
        </div>
<br />
@if(Session::has('Data_Submit'))
<p class="alert alert-danger">
  {{session('Data_Submit')}}
</p>
@endif
<table class="table table-hover table-bordered table-condensed mystyle">
  <thead>
    <tr>
      <th>id</th>
      <th>trackermaster_id</th>
      <th>purposeVisit1</th>
      <th>date</th>
      <th>remarks2</th>
    </tr>
  </thead>
  <tbody>
    @if($secondTrackerData)
    @foreach($secondTrackerData as $data)
    <tr>
      <td>{{$data->id}}</td>
    <td>{{$data->trackermaster_id}}</td>
    <td>{{$data->dateOfVisit2}}</td>
    <td>{{$data->purposeVisit2}}</td>
    <td>{{$data->remarks2}}</td>

  </tr>
  @endforeach
 @endif
</tbody>

</table>
@endsection
