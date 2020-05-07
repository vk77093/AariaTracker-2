 @extends('layouts.app')
@section('content')

<h4>Hii i will provide you the sorted data</h4>
@if(isset($trackerData))
@foreach($trackerData as $data)

{{$data->comp_name}}
<br />
{{$data->address}}
@endforeach


@endif

@endsection
