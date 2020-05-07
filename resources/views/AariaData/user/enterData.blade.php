@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          {{__('AARIA TRACKER DATA')}}
        </div>
        <div class="card-body">
          <form method="post" action="{{route('userauth.trackerSubmit.store')}}">
            @csrf
<div class="form-group row">
  <label for="comp_name" class="col-md-4 col-form-label text-md-right">{{__('Comapany/Person Name')}}</label>
  <div class="col-md-6">
     <select class="form-control" id="comp_name" name="comp_name" required autofocus>
           <option value selected disabled="0">---Select the Customer---- </option>
           @forelse ($comp_name as $name)
 <option value="{{$name->comp_name}}">{{$name->comp_name}}</option>
           @empty
<option>---No  Customer Is added---- </option>
           @endforelse


          </select>

  </div>
</div>
<div class="form-group row">
  <label for="address" class="col-md-4 col-form-label text-md-right">{{__('Address Of Party')}}</label>
  <div class="col-md-6">
    <textarea id="address" class="form-control" name="address" rows="3" required></textarea>
  </div>
</div>
<div class="form-group row">
  <label for="conatct_person" class="col-md-4 col-form-label text-md-right">{{__('Contact Person')}}</label>
  <div class="col-md-6">
    <input id="conatct_person" type="text"  name="contact_person" class="form-control" required />
  </div>
</div>
       <div class="form-group row">
         <label for="mobileNum" class="col-md-4 col-form-label text-md-right">{{__('Mobile Number')}}</label>
         <div class="col-md-6">
           <input id="mobileNum" type="tel" minlength="10" maxlength="10" name="mobileNum" class="form-control" required onkeyup="check(); return false;" ><span id="message"></span>
         </div>
       </div>
<div class="form-group row">
  <label for="designation" class="col-md-4 col-form-label text-md-right">{{__('Designation of Contact Person')}}</label>
  <div class="col-md-6">
    <input id="designation" type="text" name="designation" class="form-control" required/>
  </div>
</div>
     <div class="form-group row">
       <label for="natureBuss" class="col-md-4 col-form-label text-md-right">{{__('Nature Of Bussiness')}}</label>
       <div class="col-md-6">
         <select class="form-control" id="natureBuss" name="natureBuss" value="{{'natureBuss'}}" required>
           <option value selected disabled="0">---Select the Nature Of Bussiness---- </option>
           <option value="Hotel">Hotel</option>
           <option value="Distributor">Distributor</option>
            <option value="Shopkeeper">Shopkeeper</option>
             <option value="Restratuant">Restratuant</option>
              <option value="Franchises">Franchises</option>
          </select>
       </div>
     </div>
     <div class="form-group row">
       <label for="dateOfVisit" class="col-md-4 col-form-label text-md-right">{{__('Date Of Visit')}}</label>
       <div class="col-md-6">
         <input id="dateOfVisit" type="date" name="dateOfVisit" class="form-control" required />
       </div>
     </div>
     <div class="form-group row">
       <label for="purposeVisit" class="col-md-4 col-form-label text-md-right">{{__('Purpose Of Visit')}}</label>
     <div class="col-md-6">
       <select class="form-control" id="natureBuss" name="purposeVisit" value="{{'purposeVisit'}}" required>
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
     {{-- <div class="form-group row">
       <label for="mom" class="col-md-4 col-form-label text-md-right">{{__('Minutes Of Mettings')}}</label>
       <div class="col-md-6">
         <textarea id="mom" class="form-control" name="mom" rows="3" required></textarea>
       </div>
     </div> --}}
            <div class="form-group row">
              <label for="visitStatus" class="col-md-4 col-form-label text-md-right">{{__('Visit Status')}}</label>
            <div class="col-md-6">
              <select class="form-control" id="visitStatus" name="visitStatus" value="{{'visitStatus'}}" required>
            <option value selected disabled="0">
              ----Please Select the Visit Status------
            </option>
            <option value="Not Interested">Not Interested </option>
            <option value="Follow up">Follow up</option>
            <option value="Mature">Mature</option>
             <option value="Order">Order</option>
              </select>
            </div>
            </div>

          <div id="myorder">
  {{-- <p>Select order to show me, otherwise I'm invisible!</p> --}}
<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">If you select the order then click on below Link</label>
      <div class="col-md-6 text-center">
          <a href="">Click here For Add the Order</a>
        </div>
          </div>
          </div>

      {{-- <div class="form-group row">
        <label for="reviewpoints" class="col-md-4 col-form-label text-md-right" required>{{__('Review Point')}}</label>
        <div class="col-md-6">
          <textarea id="reviewpoints" class="form-control" name="reviewpoints" rows="2" required></textarea>
        </div>
      </div> --}}
  <div class="form-group row">
    <label for="comptbrand" class="col-md-4 col-form-label text-md-right">{{__('Compotitors Brand if any')}}</label>
    <div class="col-md-6">
      <input id="comptbrand" type="text" name="comptbrand" class="form-control" required />
    </div>
  </div>
      <div class="form-group row">
        <label for="Interested" class="col-md-4 col-form-label text-md-right">{{__('Interested In Which Segment')}}</label>
      <div class="col-md-6">
        <select class="form-control custom-scroll" multiple="multiple" id="Interested" name="Interested[]"  value="{{'Interested'}}"  required>
      <option value selected disabled="0">
        ----Please Select the Interested Segment (Multiple)------
      </option>
      <option value="Dark Chocolate">Dark Chocolate</option>
      <option value="Milk Chocolate">Milk Chocolate</option>
      <option value="White">White</option>
      <option value="Fillings">Fillings</option>
      <option value="Paste">Paste</option>
        </select>
      </div>
      </div>
      {{-- <div class="form-group row">
        <label for="callProd" class="col-md-4 col-form-label text-md-right" required>{{__('Call Productive')}}</label>
        <div class="col-md-6">
          <select class="form-control" id="callProd" name="callProd" value="{{'callProd'}}">
<option value selected disabled="0">
  ---Slect The call Productive (YES/NO)-----
</option>
<option value="Yes">Yes</option>
<option value="No">No</option>


          </select>
        </div>
      </div> --}}




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

<!--- My select check---->
{{-- <label>Choose an ice cream flavor:
  <select class="ice-cream" name="ice-cream">
    <option value="">Select One …</option>
    <option value="chocolate">Chocolate</option>
    <option value="sardine">Sardine</option>
    <option value="vanilla">Vanilla</option>
  </select>
</label>

<div class="result">

</div> --}}
<!--end of select check---->
<script>
var myorder = document.getElementById("myorder");

document.getElementById("visitStatus").onchange = function(){

  myorder.style.display = (this.selectedIndex == 4) ? "block" : "none";
  //myorder.style.display = (this.selectedIndex !== 4) ? "none" : "block";
}
// select check
const selectElement = document.querySelector('.ice-cream');

selectElement.addEventListener('change', (event) => {
  const result = document.querySelector('.result');
  result.textContent = `You like ${event.target.value}`;
});
//end of select check
function check()
{

    var pass1 = document.getElementById('mobileNum');


    var message = document.getElementById('message');

   var goodColor = "#0C6";
    var badColor = "#FF9B37";

    if(mobile.value.length!=10){

        mobile.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "required 10 digits, match requested format!"
    }}

</script>
@endsection
