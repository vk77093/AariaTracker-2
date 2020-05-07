@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="crad">
        <div class="card-header">
          {{__('List Of CompanyMaster')}}
        </div>
        <div class="card-body">
          <form method="post" action="{{route('userauth.comp.store')}}">
            @csrf
            <div class="form-group row">
              <label for="comp_name" class="col-md-4 col-form-label text-md-right">{{__('Name of the Comapny')}}</label>
              <div class="col-md-6">
                <input id="comp_name" type="text" name="comp_name" class="form-control" required autocomplete="comp_name" autofocus />
              </div>
            </div>
            <div class="form-group row">
              <label for="address" class="col-md-4 col-form-label text-md-right">{{__('Address Of Party')}}</label>
              <div class="col-md-6">
                <textarea id="address" class="form-control" name="address" rows="3" required></textarea>
              </div>
            </div>
<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
    <button type="submit" class="btn btn-primary">
        {{ __('SUBMIT DATA') }}
    </button>
</div>
</div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
