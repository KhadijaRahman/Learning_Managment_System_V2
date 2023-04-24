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
                                    <h6 class="mb-0">institution</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->institution }}
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

                        @foreach ($courses as $course)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="course-item bg-light">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" src="img/course-1.jpg" alt="">
                                        <div
                                            class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                            <a href="{{route('lecture.web')}}" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                                style="border-radius: 30px 0 0 30px;">GoTO MY COURSE</a>
                                            <a href="{{ route('enrollment', $course->id) }}"
                                                class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                                style="border-radius: 0 30px 30px 0;"></a>
                                        </div>
                                    </div>
                                    <div class="text-center p-4 pb-0">
                                        <h3 class="mb-0">{{ $course->course_price }}</h3>
                                        <div class="mb-3">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small>(123)</small>
                                        </div>
                                        <h5 class="mb-4">{{ $course->course_Name }}</h5>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-clock text-primary me-2"></i>{{ $course->course_duration }}
                                            hrs</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-user text-primary me-2"></i>30 Students</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">

                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="btn btn-info " target="__blank" href="">MY Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <p class="btn btn-info " target="__blank" href="">MY Courses</p>
                        </div>
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
