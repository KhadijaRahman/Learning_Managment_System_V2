@extends('website.master')
@section('content')

 @foreach ($lecture as $data)
<h1>{{ $data->courselists_id}}</h1>
<h1>habijabi</h1>
<video width="400" controls>
    <source src="" type="video/mp4">
        <source src="mov_bbb.ogg" type="video/ogg">


  </video>



  @endforeach
@endsection
