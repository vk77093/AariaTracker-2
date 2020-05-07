@extends('layouts.app')
@section('content')
<form class="form-inline" action="/sortedData2" method="post" role="search">
  @csrf
  <div class="form-group">
    <label for="name">user Select  </label>

      <select class="form-control" id="name" name="name">

       @foreach($allUser as $data=>$value)
      <option value="{{$value}}">{{$value}}</option>
        @endforeach
      </select>

  </div>


  <div class="form-group">
    <label for="name">Select State   </label>

      <select class="form-control" id="name" name="sate">

       @foreach($state as $data=>$value2)
      <option value="{{$value2}}">{{$value2}}</option>
        @endforeach
      </select>

  </div>
  <div class="form-group">
    <label for="name">Select Hotel Name   </label>

      <select class="form-control" id="name" name="state">

       @foreach($hotel as $data=>$value2)
      <option value="{{$value2}}">{{$value2}}</option>
        @endforeach
      </select>

  </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>



@endsection
