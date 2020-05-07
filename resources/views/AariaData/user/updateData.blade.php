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
          <form method="POST" action="{{route('userauth.trackerSubmit.update',$trackerData->id)}}">
            @csrf
             @method('PATCH')
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
                <input id="mobileNum" type="text" name="mobileNum" class="form-control" required value="{{$trackerData->mobileNum}}" readonly>
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
            {{-- <div class="form-group row">
              <label for="remarks1" class="col-md-4 col-form-label text-md-right">{{__('remarks1')}}</label>
              <div class="col-md-6">
                <input id="remarks1" type="text" name="reviewpoints" class="form-control" required value="{{$trackerData->reviewpoints}}" disabled>
              </div>
            </div> --}}
            @if($trackerData->dateOfVisit2!==null)

            <div class="form-group row">
              <label for="dateOfVisit2" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit2')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit2" type="date" name="dateOfVisit2" class="form-control" value="{{$trackerData->dateOfVisit2}}" readonly>
              </div>
            </div>
            @else
            <div class="form-group row">
              <label for="dateOfVisit2" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit2')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit2" type="date" name="dateOfVisit2" class="form-control">
              </div>
            </div>
            @endif

            @if($trackerData->purposeVisit2!==null)
            <div class="form-group row">
              <label for="purposeVisit2" class="col-md-4 col-form-label text-md-right">{{__('Purpose Of Visit2')}}</label>
            <div class="col-md-6">
              <input id="purposeVisit2" type="text" class="form-control" name="purposeVisit2" value="{{$trackerData->purposeVisit2}}" required readonly>
              </div>
               </div>
            @else
            <div class="form-group row">
              <label for="purposeVisit2" class="col-md-4 col-form-label text-md-right">{{__('Purpose Of Visit2')}}</label>
            <div class="col-md-6">
              <select class="form-control" id="purposeVisit2" name="purposeVisit2" value="value="{{'purposeVisit2'}}"" required>
                <option value selected disabled="0">---Select the Purpose of Visit---- </option>
                <option value="Formal introduction meeting ">Formal introduction meeting </option>
                 <option value="Product introduct">Product introduct</option>
                 <option value="Review Meeting">Review Meeting </option>
                 <option value="Product Demonstrate">Product Demonstrate</option>
                  <option value="Order Meeting">Order Meeting </option>
                  <option value="Other Offical Meeting ">Other Offical Meeting </option>
              </select>
            </div>
               </div>
            @endif
            <!--- Remarks2 ------>
  @if($trackerData->remarks2!==null)
            <div class="form-group row">
              <label for="remarks2" class="col-md-4 col-form-label text-md-right">{{__('remarks2')}}</label>
              <div class="col-md-6">
                <input id="remarks2" type="text" name="remarks2" value="{{$trackerData->remarks2}}" class="form-control" readonly >
              </div>
            </div>
            @else
            <div class="form-group row">
              <label for="remarks2" class="col-md-4 col-form-label text-md-right">{{__('remarks2')}}</label>
              <div class="col-md-6">
                <input id="remarks2" type="text" name="remarks2" class="form-control" >
              </div>
            </div>
            @endif
        <!---- end of remarks2---->
        <!--- date of visit 3---->
        @if($trackerData->dateOfVisit3!=null)
            <div class="form-group row">
              <label for="dateOfVisit3" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit3')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit3" type="date" name="dateOfVisit3" class="form-control" value="{{$trackerData->dateOfVisit3}}" readonly>
              </div>
            </div>
            @else
            <div class="form-group row">
              <label for="dateOfVisit3" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit3')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit3" type="date" name="dateOfVisit3" class="form-control" >
              </div>
            </div>
            @endif
            <!---end of date of visit3---->
            <!---purposeVisit3------>
            @if($trackerData->purposeVisit3!=null)
            <div class="form-group row">
              <label for="purposeVisit3" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit3')}}</label>
              <div class="col-md-6">
                <input id="purposeVisit3" type="text" value="{{$trackerData->purposeVisit3}}" name="purposeVisit3" class="form-control"readonly >
              </div>
            </div>
            @else
            <div class="form-group row">
              <label for="purposeVisit3" class="col-md-4 col-form-label text-md-right">{{__('Purpose Of Visit3')}}</label>
            <div class="col-md-6">
              <select class="form-control" id="purposeVisit3" name="purposeVisit3" value="{{'purposeVisit3'}}">
                <option value selected disabled="0">---Select the Purpose of Visit---- </option>
                <option value="Formal introduction meeting ">Formal introduction meeting </option>
                 <option value="Product introduct">Product introduct</option>
                 <option value="Review Meeting">Review Meeting </option>
                 <option value="Product Demonstrate">Product Demonstrate</option>
                  <option value="Order Meeting">Order Meeting </option>
                  <option value="Other Offical Meeting ">Other Offical Meeting </option>
              </select>
            </div>
               </div>
            @endif
            <!---end of purposeVisit3------>
            <!--- remarks3------->
            @if($trackerData->remarks3!=null)
            <div class="form-group row">
              <label for="remarks3" class="col-md-4 col-form-label text-md-right">{{__('remarks3')}}</label>
              <div class="col-md-6">
                <input id="remarks3" type="text" name="remarks3" class="form-control" value="{{$trackerData->remarks3}}" readonly>
              </div>
            </div>
            @else
            <div class="form-group row">
              <label for="remarks3" class="col-md-4 col-form-label text-md-right">{{__('remarks3')}}</label>
              <div class="col-md-6">
                <input id="remarks3" type="text" name="remarks3" class="form-control">
              </div>
            </div>
            @endif
            <!---end of remarks3----->
            <!--- dateOfVisit4----->
            @if($trackerData->dateOfVisit4!=null)
            <div class="form-group row">
              <label for="dateOfVisit4" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit4')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit4" type="date" name="dateOfVisit4" class="form-control" value="{{$trackerData->dateOfVisit4}}" readonly>
              </div>
            </div>
            @else
            <div class="form-group row">
              <label for="dateOfVisit4" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit4')}}</label>
              <div class="col-md-6">
                <input id="dateOfVisit4" type="date" name="dateOfVisit4" class="form-control" >
              </div>
            </div>
            @endif
            <!--- end of dateOfVisit4---->
            <!---purposeVisit4------>
            @if($trackerData->purposeVisit4!=null)
            <div class="form-group row">
              <label for="purposeVisit4" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit4')}}</label>
              <div class="col-md-6">
                <input id="purposeVisit4" type="text" value="{{$trackerData->purposeVisit4}}" name="purposeVisit4" class="form-control"readonly >
              </div>
            </div>
            @else
            <div class="form-group row">
              <label for="purposeVisit4" class="col-md-4 col-form-label text-md-right">{{__('Purpose Of Visit4')}}</label>
            <div class="col-md-6">
              <select class="form-control" id="purposeVisit4" name="purposeVisit4" value="{{'purposeVisit4'}}">
                <option value selected disabled="0">---Select the Purpose of Visit---- </option>
                <option value="Formal introduction meeting ">Formal introduction meeting </option>
                 <option value="Product introduct">Product introduct</option>
                 <option value="Review Meeting">Review Meeting </option>
                 <option value="Product Demonstrate">Product Demonstrate</option>
                  <option value="Order Meeting">Order Meeting </option>
                  <option value="Other Offical Meeting ">Other Offical Meeting </option>
              </select>
            </div>
               </div>
            @endif

            <!--- end of purposeVisit4------>
            <!--- remarks4----->
            @if($trackerData->remarks4!=null)
            <div class="form-group row">
              <label for="remarks4" class="col-md-4 col-form-label text-md-right">{{__('remarks4')}}</label>
              <div class="col-md-6">
                <input id="remarks4" type="text" name="remarks4" class="form-control" value="{{$trackerData->remarks4}}" readonly>
              </div>
            </div>
            @else
            <div class="form-group row">
              <label for="remarks4" class="col-md-4 col-form-label text-md-right">{{__('remarks4')}}</label>
              <div class="col-md-6">
                <input id="remarks4" type="text" name="remarks4" class="form-control" >
              </div>
            </div>
            @endif
            <!---end of remarks4----->
<!---- copying code for 5th week entery------>
<!--- date of visit 5---->
@if($trackerData->dateOfVisit5!=null)
    <div class="form-group row">
      <label for="dateOfVisit5" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit5')}}</label>
      <div class="col-md-6">
        <input id="dateOfVisit5" type="date" name="dateOfVisit5" class="form-control" value="{{$trackerData->dateOfVisit5}}" readonly>
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="dateOfVisit5" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit5')}}</label>
      <div class="col-md-6">
        <input id="dateOfVisit5" type="date" name="dateOfVisit5" class="form-control" >
      </div>
    </div>
    @endif
    <!---end of date of visit5---->
    <!---purposeVisit5------>
    @if($trackerData->purposeVisit5!=null)
    <div class="form-group row">
      <label for="purposeVisit5" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit5')}}</label>
      <div class="col-md-6">
        <input id="purposeVisit5" type="text" value="{{$trackerData->purposeVisit5}}" name="purposeVisit5" class="form-control"readonly >
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="purposeVisit5" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit5')}}</label>
    <div class="col-md-6">
      <select class="form-control" id="purposeVisit5" name="purposeVisit5" value="{{'purposeVisit5'}}">
        <option value selected disabled="0">---Select the Purpose of Visit---- </option>
        <option value="Formal introduction meeting ">Formal introduction meeting </option>
         <option value="Product introduct">Product introduct</option>
         <option value="Review Meeting">Review Meeting </option>
         <option value="Product Demonstrate">Product Demonstrate</option>
          <option value="Order Meeting">Order Meeting </option>
          <option value="Other Offical Meeting ">Other Offical Meeting </option>
      </select>
    </div>
       </div>
    @endif
    <!---end of purposeVisit5------>
    <!--- remarks5------->
    @if($trackerData->remarks5!=null)
    <div class="form-group row">
      <label for="remarks5" class="col-md-4 col-form-label text-md-right">{{__('remarks5')}}</label>
      <div class="col-md-6">
        <input id="remarks5" type="text" name="remarks5" class="form-control" value="{{$trackerData->remarks5}}" readonly>
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="remarks5" class="col-md-4 col-form-label text-md-right">{{__('remarks5')}}</label>
      <div class="col-md-6">
        <input id="remarks5" type="text" name="remarks5" class="form-control">
      </div>
    </div>
    @endif
    <!---end of remarks5----->
<!--- ending for the 5th week entry------>
<!--- starting of the 6th week entry data---->
<!--- date of visit 6---->
@if($trackerData->dateOfVisit6!=null)
    <div class="form-group row">
      <label for="dateOfVisit6" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit6')}}</label>
      <div class="col-md-6">
        <input id="dateOfVisit6" type="date" name="dateOfVisit6" class="form-control" value="{{$trackerData->dateOfVisit6}}" readonly>
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="dateOfVisit6" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit6')}}</label>
      <div class="col-md-6">
        <input id="dateOfVisit6" type="date" name="dateOfVisit6" class="form-control" >
      </div>
    </div>
    @endif
    <!---end of date of visit6---->
    <!---purposeVisit6------>
    @if($trackerData->purposeVisit6!=null)
    <div class="form-group row">
      <label for="purposeVisit6" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit6')}}</label>
      <div class="col-md-6">
        <input id="purposeVisit6" type="text" value="{{$trackerData->purposeVisit6}}" name="purposeVisit6" class="form-control"readonly >
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="purposeVisit6" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit6')}}</label>
    <div class="col-md-6">
      <select class="form-control" id="purposeVisit6" name="purposeVisit6" value="{{'purposeVisit6'}}">
        <option value selected disabled="0">---Select the Purpose of Visit---- </option>
        <option value="Formal introduction meeting ">Formal introduction meeting </option>
         <option value="Product introduct">Product introduct</option>
         <option value="Review Meeting">Review Meeting </option>
         <option value="Product Demonstrate">Product Demonstrate</option>
          <option value="Order Meeting">Order Meeting </option>
          <option value="Other Offical Meeting ">Other Offical Meeting </option>
      </select>
    </div>
       </div>
    @endif
    <!---end of purposeVisit6------>
    <!--- remarks6------->
    @if($trackerData->remarks6!=null)
    <div class="form-group row">
      <label for="remarks6" class="col-md-4 col-form-label text-md-right">{{__('remarks6')}}</label>
      <div class="col-md-6">
        <input id="remarks6" type="text" name="remarks6" class="form-control" value="{{$trackerData->remarks6}}" readonly>
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="remarks6" class="col-md-4 col-form-label text-md-right">{{__('remarks6')}}</label>
      <div class="col-md-6">
        <input id="remarks6" type="text" name="remarks6" class="form-control">
      </div>
    </div>
    @endif
    <!---end of remarks6----->
<!--- end of 6th week entry------>

<!--- starting of 7th week entry------->
<!--- date of visit 7---->
@if($trackerData->dateOfVisit7!=null)
    <div class="form-group row">
      <label for="dateOfVisit7" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit7')}}</label>
      <div class="col-md-6">
        <input id="dateOfVisit7" type="date" name="dateOfVisit7" class="form-control" value="{{$trackerData->dateOfVisit7}}" readonly>
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="dateOfVisit7" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit7')}}</label>
      <div class="col-md-6">
        <input id="dateOfVisit7" type="date" name="dateOfVisit7" class="form-control" >
      </div>
    </div>
    @endif
    <!---end of date of visit7---->
    <!---purposeVisit7------>
    @if($trackerData->purposeVisit7!=null)
    <div class="form-group row">
      <label for="purposeVisit7" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit7')}}</label>
      <div class="col-md-6">
        <input id="purposeVisit7" type="text" value="{{$trackerData->purposeVisit7}}" name="purposeVisit7" class="form-control"readonly >
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="purposeVisit7" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit7')}}</label>
    <div class="col-md-6">
      <select class="form-control" id="purposeVisit7" name="purposeVisit7" value="{{'purposeVisit7'}}">
        <option value selected disabled="0">---Select the Purpose of Visit---- </option>
        <option value="Formal introduction meeting ">Formal introduction meeting </option>
         <option value="Product introduct">Product introduct</option>
         <option value="Review Meeting">Review Meeting </option>
         <option value="Product Demonstrate">Product Demonstrate</option>
          <option value="Order Meeting">Order Meeting </option>
          <option value="Other Offical Meeting ">Other Offical Meeting </option>
      </select>
    </div>
       </div>
    @endif
    <!---end of purposeVisit6------>
    <!--- remarks6------->
    @if($trackerData->remarks7!=null)
    <div class="form-group row">
      <label for="remarks7" class="col-md-4 col-form-label text-md-right">{{__('remarks7')}}</label>
      <div class="col-md-6">
        <input id="remarks7" type="text" name="remarks7" class="form-control" value="{{$trackerData->remarks7}}" readonly>
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="remarks7" class="col-md-4 col-form-label text-md-right">{{__('remarks7')}}</label>
      <div class="col-md-6">
        <input id="remarks7" type="text" name="remarks7" class="form-control">
      </div>
    </div>
    @endif
    <!---end of remarks3----->
<!---end of 7th week entry------>
<!---starting of 8th week entry----->
<!--- date of visit ---->
@if($trackerData->dateOfVisit8!=null)
    <div class="form-group row">
      <label for="dateOfVisit8" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit8')}}</label>
      <div class="col-md-6">
        <input id="dateOfVisit8" type="date" name="dateOfVisit8" class="form-control" value="{{$trackerData->dateOfVisit8}}" readonly>
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="dateOfVisit8" class="col-md-4 col-form-label text-md-right">{{__('dateOfVisit8')}}</label>
      <div class="col-md-6">
        <input id="dateOfVisit8" type="date" name="dateOfVisit8" class="form-control" >
      </div>
    </div>
    @endif
    <!---end of date of visit7---->
    <!---purposeVisit7------>
    @if($trackerData->purposeVisit8!=null)
    <div class="form-group row">
      <label for="purposeVisit8" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit8')}}</label>
      <div class="col-md-6">
        <input id="purposeVisit8" type="text" value="{{$trackerData->purposeVisit8}}" name="purposeVisit8" class="form-control"readonly >
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="purposeVisit8" class="col-md-4 col-form-label text-md-right">{{__('purposeVisit8')}}</label>
    <div class="col-md-6">
      <select class="form-control" id="purposeVisit8" name="purposeVisit8" value="{{'purposeVisit8'}}">
        <option value selected disabled="0">---Select the Purpose of Visit---- </option>
        <option value="Formal introduction meeting ">Formal introduction meeting </option>
         <option value="Product introduct">Product introduct</option>
         <option value="Review Meeting">Review Meeting </option>
         <option value="Product Demonstrate">Product Demonstrate</option>
          <option value="Order Meeting">Order Meeting </option>
          <option value="Other Offical Meeting ">Other Offical Meeting </option>
      </select>
    </div>
       </div>
    @endif
    <!---end of purposeVisit6------>
    <!--- remarks6------->
    @if($trackerData->remarks8!=null)
    <div class="form-group row">
      <label for="remarks8" class="col-md-4 col-form-label text-md-right">{{__('remarks8')}}</label>
      <div class="col-md-6">
        <input id="remarks8" type="text" name="remarks8" class="form-control" value="{{$trackerData->remarks8}}" readonly>
      </div>
    </div>
    @else
    <div class="form-group row">
      <label for="remarks8" class="col-md-4 col-form-label text-md-right">{{__('remarks8')}}</label>
      <div class="col-md-6">
        <input id="remarks8" type="text" name="remarks8" class="form-control">
      </div>
    </div>
    @endif
    <!---end of remarks3----->
<!---end of 8th week entry------->
            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update DATA') }}
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
