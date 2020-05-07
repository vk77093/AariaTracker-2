@extends('layouts.app')
@section('content')
<style>
.mystyle{
 border: 4px solid black;
}
</style>
<div class="alert alert-info" role="alert">
        <h6 class="text-center" style="margin-top:2px;">ALL User List</h6>
        </div>
        <table class="table table-hover table-bordered table condensed mystyle">
          <thead>
            <tr>
              <tr>
  <th colspan="1" scope="colgroup"></th>
   <th colspan="2" scope="colgroup">Combine</th>
   <th colspan="2" scope="colgroup">Basic User Details</th>
   <th colspan="1" scope="colgroup"></th>
 </tr>
 <tr>

   <th scope="col">ID</th>
   <th scope="col">Name</th>
   <th scope="col">Email id</th>
   <th scope="col">Employee Code</th>
   <th scope="col">Mobile Number</th>
   <th scope="col">Designation</th>
   <th scope="col">Region</th>
   <th scope="col">Region Head</th>
   <th scope="col">Group</th>
   <th scope="col">City Region</th>
   <th scope="col">User Role</th>

 </tr>
</tr>

          </thead>
          <tbody>
            @if($userData)
            @foreach($userData as $user)
            <tr>

            <td><a href="{{route('adminauth.trackerSecond.show',$user->id)}}">{{$user->id}}</a></td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->empCode}}</td>
              <td>{{$user->mobileNum}}</td>
              <td>{{$user->designation}}</td>
              <td>{{$user->region}}</td>
              <td>{{$user->regionHead}}</td>
              <td>{{$user->group}}</td>
              <td>{{$user->cityregion}}</td>
              <td>{{$user->user_role}}</td>
            </tr>
            @endforeach
              @endif
          </tbody>
        </table>
@endsection
