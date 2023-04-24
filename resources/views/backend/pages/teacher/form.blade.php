@extends('backend.master')

@section('content')

    <form action="{{route('teacher.store') }}"  method = 'post'>
    @csrf
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div>
                    <label for="">Teacher Name:</label>
                    <input name="teacher_name" placeholder="Enter Teacher name" type="text" class="form-control">
                </div>

                <div>
                    <label for="">Teacher Email:</label>
                    <input name="teacher_email" placeholder="Enter email" type="email" class="form-control">
                </div>

                <div>
                    <label for="">Contact:</label>
                    <input name="teacher_contact" placeholder="Enter Contact" type="text" class="form-control">
                </div>

                <div>
                    <label for="">Address:</label>
                    <input name="teacher_address" placeholder="Enter address" type="text" class="form-control">
                </div>

                <div>
                    <label for=""> Designation:</label>
                    <input name="teacher_designation" placeholder="Enter Designation" type="text" class="form-control">
                </div>



                <div>
                    <button type="submit" class="btn btn-success my-3">Create</button>
                </div>
        </div>
            <div class="col-md-4"></div>

        </div>
    </form>
@endsection
