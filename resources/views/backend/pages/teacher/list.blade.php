@extends('backend.master')
@section('content')

    <a href="{{route('teacher.form')}}" class="btn btn-success">Create new Faculty</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">contact</th>
            <th scope="col">address</th>
            <th scope="col">Designation</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

     @foreach($teachers as $data)
        <tr>
        <th scope="row">{{ $data->id}}</th>
            <td>{{ $data->name}}</td>
            <td>{{ $data->email}}</td>
            <td>{{ $data->contact}}</td>
            <td>{{ $data->address}}</td>
            <td>{{ $data->designation}}</td>
            <td>
                <a href="{{route('teacher.view',$data->id)}}" class="btn btn-info">view</a>
                <a href="{{route('teacher.delete',$data->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
