@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          {{__('AARIA UPADTE TRACKER DATA')}}
        </div>
        <div class="card-body">
          @if($trackerData)
          <form method="post" action="{{route('userauth.trackerSecond.store')}}">
            @csrf
            <div class="form-group row">
              <label for="trackermaster_id" class="col-md-4 col-form-label text-md-right">{{__('Tracker ID')}}</label>
              <div class="col-md-6">
                <input id="trackermaster_id" type="number" name="trackermaster_id" class="form-control" required value="{{$trackerData->id}}"readonly autofocus>
              </div>
            </div>
            <div class="form-group row">
              <label for="user_id" class="col-md-4 col-form-label text-md-right">{{__('User_id ID')}}</label>
              <div class="col-md-6">
                <input id="user_id" type="number" name="user_id" class="form-control" required value="{{$trackerData->user_id}}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="comp_name" class="col-md-4 col-form-label text-md-right">{{__('COMPANY NAME')}}</label>
              <div class="col-md-6">
                <input id="comp_name" type="text" name="comp_name" class="form-control" required value="{{$trackerData->comp_name}}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="address" class="col-md-4 col-form-label text-md-right">{{__('Address')}}</label>
              <div class="col-md-6">
                <input id="address" type="text" name="address" class="form-control" required value="{{$trackerData->address}}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="mobileNum" class="col-md-4 col-form-label text-md-right">{{__('Mobile Number')}}</label>
              <div class="col-md-6">
                <input id="mobileNum" type="text" name="address" class="form-control" required value="{{$trackerData->mobileNum}}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="contact_person" class="col-md-4 col-form-label text-md-right">{{__('contact_person')}}</label>
              <div class="col-md-6">
                <input id="contact_person" type="text" name="contact_person" class="form-control" required value="{{$trackerData->contact_person}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="designation" class="col-md-4 col-form-label text-md-right">{{__('designation')}}</label>
              <div class="col-md-6">
                <input id="designation" type="text" name="designation" class="form-control" required value="{{$trackerData->designation}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="natureBuss" class="col-md-4 col-form-label text-md-right">{{__('natureBuss')}}</label>
              <div class="col-md-6">
                <input id="natureBuss" type="text" name="natureBuss" class="form-control" required value="{{$trackerData->natureBuss}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="comptbrand" class="col-md-4 col-form-label text-md-right">{{__('comptbrand')}}</label>
              <div class="col-md-6">
                <input id="comptbrand" type="text" name="comptbrand" class="form-control" required value="{{$trackerData->comptbrand}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="dateOfVisit1" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit1')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit1" type="date" name="dateOfVisit1" class="form-control" required value="{{$trackerData->dateOfVisit}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="purposeVisit1" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit1')}}</label>
              <div class="col-md-6">
                <input id="purposeVisit1" type="text" name="purposeVisit1" class="form-control" required value="{{$trackerData->purposeVisit}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="remarks1" class="col-md-4 col-form-label text-md-right">{{__('remarks1')}}</label>
              <div class="col-md-6">
                <input id="remarks1" type="text" name="remarks1" class="form-control" required value="{{$trackerData->reviewpoints}}" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="dateOfVisit2" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit2')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit2" type="date" name="dateOfVisit2" class="form-control" >
              </div>
            </div>
            <div class="form-group row">
              <label for="purposeVisit2" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit2')}}</label>
              <div class="col-md-6">
                <input id="purposeVisit2" type="text" name="purposeVisit2" class="form-control" >
              </div>
            </div>
            <div class="form-group row">
              <label for="remarks2" class="col-md-4 col-form-label text-md-right">{{__('remarks2')}}</label>
              <div class="col-md-6">
                <input id="remarks2" type="text" name="remarks2" class="form-control" >
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
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
