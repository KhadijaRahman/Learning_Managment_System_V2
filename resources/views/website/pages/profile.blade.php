@extends('website.master')
@section('content')
    <br><br>
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ auth()->user()->name }}</h4>
                                    <p class="text-secondary mb-1">{{ auth()->user()->role }}</p>
                                    <p class="text-muted font-size-sm">{{ auth()->user()->address }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->email }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->phone }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Institution</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->Institution }}
                                </div>
                            </div>



                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->address }}
                                </div>
                            </div>
                            <hr>

                        </div>

                        <div class="row g-4 justify-content-center">


                            {{--                                         --}}

                            @foreach ($courses as $data)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="course-item bg-light">
                                        <div class="position-relative overflow-hidden">
                                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                                            <div
                                                class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">


                                                <a href="{{ route('enrollment', $data->id) }}"
                                                    class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                                    style="border-radius: 0 30px 30px 0;"></a>
                                            </div>
                                        </div>
                                        <div class="text-center p-4 pb-0">
                                            <a
                                                href="{{ route('lecture.web', $data->courselist_id) }}"class="mb-50">{{ $data->course->course_Name }}</a>


                                            <h5 class="mb-0">{{ $data->course->course_price }}</h5>BDT


                                        </div>
                                        <small class=""></i>{{ $data->course->teacher->name }}</small>

                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="flex-fill text-center border-end py-2"><i
                                                        class="fa fa-clock text-primary me-2"></i>{{ $data->course->course_duration }}
                                                    hrs</small>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div>

            <div class="row g-4 justify-content-center">




            </div>
        </div>
    @endsection
