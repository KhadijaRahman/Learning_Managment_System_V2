@extends('website.master')
@section('content')
    <h1>{{ $course->course_Name }}</h1>
    @foreach ($course->videos as $data)
        <h1>{{ $data->courselists_id }}</h1>
        <h1>{{ $course->course_Name }}</h1>
        <video width="400" controls>
            <source src="{{ url('/uploads/' . $data->filename) }}" type="video/mp4">
            <source src="mov_bbb.ogg" type="video/ogg">


        </video>
    @endforeach
@endsection
