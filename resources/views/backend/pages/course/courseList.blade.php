@extends('backend.master')
@section('content')

    <a href="{{route('course.create')}}" class="btn btn-success">Create new Course</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Course Name</th>
            <th scope="col">Category name</th>
            <th scope="col">Price</th>
            <th scope="col">Duration</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($coures as $key=>$course)
        <tr>

            <th scope="row">{{$key+1}}</th>
            <td>{{$course->course_Name}}</td>
            <td>{{$course->category?->category_name}}</td>
            <td>{{$course->course_price}}</td>
            <td>{{$course->course_duration}}</td>
            <td>
                <a href="{{route('view',$course->id)}}" class="btn btn-info">View</a>
                <a href="{{route('delete',$course->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $coures->links() }}
@endsection