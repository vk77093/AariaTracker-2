<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css" />
<title>AARIA TRACKER</title>
</head>
<style>
.mystyle{
 border: 4px solid black;
}
</style>

<table id="example" class="table table-hover table-bordered table-condensed">

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
        @if($AlltrackerData)
          @foreach($AlltrackerData as $data)
            <tr>
            <td><a href="{{route('adminauth.trackerSecond.edit',$data->id)}}">{{$data->id}}</a></td>
            <td>{{$data->user->name}}</td>
              <td>{{$data->comp_name}}</td>
              <td>{{$data->address}}</td>
              <td>{{$data->mobileNum}}</td>
              <td>{{$data->contact_person}}</td>
              <td>{{$data->designation}}</td>
              <td>{{$data->natureBuss}}</td>
              <td>{{$data->dateOfVisit}}</td>
              <td>{{$data->purposeVisit}}</td>
              {{-- <td>{{$data->mom}}</td> --}}
              <td>{{$data->visitStatus}}</td>
              {{-- <td class="wrappable" style="width:2px;height:2px;">{{$data->reviewpoints}}</td> --}}
              <td>{{$data->comptbrand}}</td>
              <td>{{$data->Interested}}</td>
              {{-- <td>{{$data->callProd}}</td> --}}
              <td>{{$data->dateOfVisit2}}</td>
              <td>{{$data->purposeVisit2}}</td>
              <td class="wrappable" style="width:2px;height:2px;">{{$data->remarks2}}</td>
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
        <tfoot>
            <tr>
              <!-- <th>id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th> -->
            </tr>
        </tfoot>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'colvis'
        ]
    });
} );
</script>
</body>
</html>
