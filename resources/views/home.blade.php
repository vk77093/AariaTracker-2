@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  @if($userName)
                    Welcome to Aaria Tracker MR.  <b>{{Auth::user()->name}}</b>  please select your option below
                    @endif
                </div>

                <hr />
                @if(Auth::user()->user_role=='user')
                <div class="card-body">
                  <a href="/trackerSubmit/create"><button type="button" class="btn btn-outline-primary btn-lg">Enter Data--></button></a>
                  <a href="/trackerSubmit"><button type="button" class="btn btn-outline-secondary btn-lg">View Data--></button></a>
                  <a href="/comp"><button type="button" class="btn btn-outline-secondary btn-lg">Customer Master--></button></a>
                </div>
                @else
                <div class="card-body">
                  <!-- <a href="/trackerSubmit/create"><button type="button" class="btn btn-outline-primary btn-lg">Enter Data></button></a>
                  <a href="/trackerSubmit"><button type="button" class="btn btn-outline-secondary btn-lg">View Data></button></a> -->
                  <a href="/trackerSecond"><button type="button" class="btn btn-outline-secondary btn-lg">View ALL Data--></button></a>
                  <a href="/datatable"><button type="button" class="btn btn-outline-secondary btn-lg">View Sort Data--></button></a>
                  <a href="/register"><button type="button" class="btn btn-outline-secondary btn-lg">Create User--></button></a>
                  <a href="/userData"><button type="button" class="btn btn-outline-secondary btn-lg">View User--></button></a>

                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
