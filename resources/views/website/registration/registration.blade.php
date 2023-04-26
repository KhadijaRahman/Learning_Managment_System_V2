@extends('website.master')
@section('content')
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                            alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Information</h3>

                            <form action="{{ route('registration.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" required name="name"
                                        placeholder="Enter Your Name" />
                                    <label class="form-label" for="form3Example1q">Student Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example1q" required name="email" class="form-control"
                                        placeholder="Enter Your Email" />
                                    <label class="form-label" for="form3Example1q">Enter Your Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="tel" id="form3Example1q" required name="phone" class="form-control"
                                        placeholder="Enter Your Phone" />
                                    <label class="form-label" for="form3Example1q">Enter Your Phone</label>
                                </div>



                                <div class="row">
                                    <div>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example1q" required name="address" class="form-control"
                                                placeholder="Enter Your Address" />
                                            <label class="form-label" for="form3Example1q">Student Address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example1q" required name="Institution"
                                                class="form-control" placeholder="Enter Your Institution " />
                                            <label class="form-label" for="form3Example1q">Educational Institution</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example1q" required name="password" class="form-control"
                                                placeholder="Enter Your password " />
                                            <label class="form-label" for="form3Example1q">Password</label>
                                        </div>




                                      <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example1q">Select Role</label>
                                            <select name="role" id="role" class="form-control">
                                                {{-- <option value="teacher">Teacher</option> --}}
                                                <option value="student">Student</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-lg mb-1">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
