@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('adminauth.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

        <div class="form-group row">
          <label for="empCode" class="col-md-4 col-form-label text-md-right">{{__('Employee Code')}}</label>
          <div class="col-md-6">
            <input id="empCode" type="number" class="form-control" name="empCode" required />
          </div>
        </div>

        <div class="form-group row">
          <label for="mobileNum" class="col-md-4 col-form-label text-md-right">{{__('Mobile Numebr')}}</label>
          <div class="col-md-6">
            <input id="mobileNum" type="number" class="form-control" name="mobileNum" required />
          </div>
        </div>

        <div class="form-group row">
          <label for="designation" class="col-md-4 col-form-label text-md-right">{{__('Designation')}}</label>
          <div class="col-md-6">
            <select class="form-control"id="designation" name="designation" value="{{'designation'}}" required>
              <option value selected disabled=0>---Please Select User Designation----</option>
              <option value="AASMGR">ASST. AREA SALES MANAGER</option>
              <option value="ASMGR">AREA SALES MANAGER</option>
              <option value="ASO">ASST. SALES OFFICER</option>
              <option value="NSH">NATIONAL SALES HEAD</option>
              <option value="SLEX">SALES EXECUTIVE</option>
              <option value="SLO">SALES OFFICER</option>
              <option value="SRASMGR">SR. AREA SALES MANAGER</option>
              <option value="SRSO">SENIOR SALES OFFICER</option>
            </select>
          </div>
        </div>
<div class="form-group row">
  <label for="region" class="col-md-4 col-form-label text-md-right">{{__('Region Area')}}</label>
  <div class="col-md-6">
  <select class="form-control" id="region" name="region" value="{{'region'}}" required>
<option value selected disabled=0>---Please Select User Region----</option>
<option value="North">North</option>
<option value="South">South</option>
<option value="East">East</option>
<option value="West">West</option>
<option value="Central">Central</option>
<option value="PanIndia">Pan India</option>
  </select>
  </div>
</div>
      <div class="form-group row">
        <label for="regionHead" class="col-md-4 col-form-label text-md-right">{{__('Region Head')}}</label>
        <div class="col-md-6">
          <input id="regionHead" type="text" name="regionHead" class="form-control" required />
        </div>
      </div>
      <div class="form-group row">
        <label for="group"class="col-md-4 col-form-label text-md-right">{{__('State Group')}}</label>
        <div class="col-md-6">
          <input id="group" type="text" name="group" class="form-control" required />
        </div>
      </div>
<div class="form-group row">
  <label for="cityregion" class="col-md-4 col-form-label text-md-right">{{__('City')}}</label>
  <div class="col-md-6">
    <input id="cityregion" type="text" name="cityregion" class="form-control" required />
  </div>
</div>
    <div class="form-group row">
      <label for="user_role" class="col-md-4 col-form-label text-md-right">{{__('User Role')}}</label>
      <div class="col-md-6">
        <select class="form-control" id="user_role" name="user_role" value={{'user_role'}} required>
<option value selected disabled=0>---Please Select User Role----</option>
<option value="user">User</option>
<option value="admin">Admin</option>
    </select>
      </div>
    </div>

        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
