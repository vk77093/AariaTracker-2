@extends('layouts.app')
@section('content')
<style>
.mystyle{
 border: 4px solid black;
}
</style>
<div class="alert alert-info" role="alert">
        <h6 class="text-center" style="margin-top:2px;">ALL User DATA</h6>
        </div>
<br />
@if(Session::has('Data_Submit2'))
<p class="alert alert-danger">
  {{session('Data_Submit2')}}
</p>
@endif
<table class="table table-hover table-bordered table-condensed mystyle">
  <thead>
    <tr>
      <th>Id</th>
       <th>User</th>
       <th>Company Name</th>
       <th>Address</th>
       <th>mobile Num</th>
       <th>Conatct Person</th>
        <th>Designation</th>
       <th>NatureOfBuss</th>
       <th>dateOfVisit</th>
       <th>purposeVisit</th>
       {{-- <th>Minutes Of Meeting</th> --}}
       <th>Visit Status</th>
       {{-- <th>Review points</th> --}}
       <th>Compotitors Brand</th>
        <th>Interested Segmanet</th>
        {{-- <th>call Productive</th> --}}
      <th>dateOfVisit2</th>
      <th>purposeVisit2</th>
      <th>remarks2</th>
        <th>dateOfVisit3</th>
        <th>purposeVisit3</th>
        <th>remarks3</th>
        <th>dateOfVisit4</th>
        <th>purposeVisit4</th>
        <th>remarks4</th>
        <th>dateOfVisit5</th>
        <th>purposeVisit5</th>
        <th>remarks5</th>
        <th>dateOfVisit6</th>
        <th>purposeVisit6</th>
        <th>remarks6</th>
        <th>dateOfVisit7</th>
        <th>purposeVisit7</th>
        <th>remarks7</th>
        <th>dateOfVisit8</th>
        <th>purposeVisit8</th>
        <th>remarks8</th>
        <th>Created_at</th>
        <th>Updated_at</th>

    </tr>
  </thead>
  <tbody>
  @if($AlltrackerData)
    @foreach($AlltrackerData as $data)
    <tr>
        <td><a href="{{route('adminauth.trackerSecond.edit',$data->id)}}">{{$data->id}}</a></td>
      <td>{{$data->user->name}}</td>

<td><a href="{{route('adminauth.trackerSecond.show',$data->comp_name)}}">{{$data->comp_name}}</a></td>



      <td>{{$data->address}}</td>
      <td>{{$data->mobileNum}}</td>
      <td>{{$data->contact_person}}</td>
      <td>{{$data->designation}}</td>
      <td>{{$data->natureBuss}}</td>
      <td>{{$data->dateOfVisit}}</td>
      <td>{{$data->purposeVisit}}</td>
      {{-- <td>{{$data->mom}}</td> --}}
      <td>{{$data->visitStatus}}</td>
      {{-- <td><textarea row="3" placeholder="{{$data->reviewpoints}}" disabled></textarea></td> --}}
      <td>{{$data->comptbrand}}</td>
      <td>{{$data->Interested}}</td>
      {{-- <td>{{$data->callProd}}</td> --}}
      <td>{{$data->dateOfVisit2}}</td>
      <td>{{$data->purposeVisit2}}</td>
      <td><textarea class="form-control" row="3" placeholder="{{$data->remarks2}}" disabled></textarea></td>
      <td>{{$data->dateOfVisit3}}</td>
      <td>{{$data->purposeVisit3}}</td>
      <td>{{$data->remarks3}}</td>
      <td>{{$data->dateOfVisit4}}</td>
      <td>{{$data->purposeVisit4}}</td>
      <td>{{$data->remarks4}}</td>
      <td>{{$data->dateOfVisit5}}</td>
      <td>{{$data->purposeVisit5}}</td>
      <td>{{$data->remarks5}}</td>
      <td>{{$data->dateOfVisit6}}</td>
      <td>{{$data->purposeVisit6}}</td>
      <td>{{$data->remarks6}}</td>
      <td>{{$data->dateOfVisit7}}</td>
      <td>{{$data->purposeVisit7}}</td>
      <td>{{$data->remarks7}}</td>
      <td>{{$data->dateOfVisit8}}</td>
      <td>{{$data->purposeVisit8}}</td>
      <td>{{$data->remarks8}}</td>
      <td>{{$data->created_at->diffForHumans()}}</td>
      <td>{{$data->updated_at->diffForHumans()}}</td>
    </tr>
    @endforeach
   @endif
  </tbody>

</table>
@endsection
