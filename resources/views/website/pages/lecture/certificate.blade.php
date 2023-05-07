@extends('website.master')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Certificate of Completion</title>


    </head>

    {{-- <body>
        <h1>Certificate of Completion</h1>
        <p>This certifies that</p>
        <h2>{{ $course->user->name }}</h2>
        <p>has successfully completed the course on</p>
        <h3>{{ $course->course->course_Name }}</h3>
        <p>on {{ $course->created_at }}</p>
        <p>Presented by {{ $course->course->teacher->name }}</p>
        <img src="{{ public_path('certificate.jpg') }}" alt="Certificate Image">
    </body> --}}

    <div id="printArea">
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans|Pinyon+Script|Rochester');

    .cursive {
        font-family: 'Pinyon Script', cursive;
    }

    .sans {
        font-family: 'Open Sans', sans-serif;
    }

    .bold {
        font-weight: bold;
    }

    .block {
        display: block;
    }

    .underline {
        border-bottom: 1px solid #777;
        padding: 5px;
        margin-bottom: 15px;
    }

    .margin-0 {
        margin: 0;
    }

    .padding-0 {
        padding: 0;
    }

    .pm-empty-space {
        height: 40px;
        width: 100%;
    }

    body {
        padding: 20px 0;
        background: #ccc;
    }

    .pm-certificate-container {
        position: relative;
        width: 800px;
        height: 600px;
        background-color: #618597;
        padding: 30px;
        color: #333;
        font-family: 'Open Sans', sans-serif;
        box-shadow: 0 0 5px rgba(0, 0, 0, .5);
        /*background: -webkit-repeating-linear-gradient(
    45deg,
    #618597,
    #618597 1px,
    #b2cad6 1px,
    #b2cad6 2px
  );
  background: repeating-linear-gradient(
    90deg,
    #618597,
    #618597 1px,
    #b2cad6 1px,
    #b2cad6 2px
  );*/

        .outer-border {
            width: 794px;
            height: 594px;
            position: absolute;
            left: 50%;
            margin-left: -397px;
            top: 50%;
            margin-top: -297px;
            border: 2px solid #fff;
        }

        .inner-border {
            width: 730px;
            height: 530px;
            position: absolute;
            left: 50%;
            margin-left: -365px;
            top: 50%;
            margin-top: -265px;
            border: 2px solid #fff;
        }

        .pm-certificate-border {
            position: relative;
            width: 720px;
            height: 520px;
            padding: 0;
            border: 1px solid #E1E5F0;
            background-color: rgba(255, 255, 255, 1);
            background-image: none;
            left: 50%;
            margin-left: -360px;
            top: 50%;
            margin-top: -260px;

            .pm-certificate-block {
                width: 650px;
                height: 200px;
                position: relative;
                left: 50%;
                margin-left: -325px;
                top: 70px;
                margin-top: 0;
            }

            .pm-certificate-header {
                margin-bottom: 10px;
            }

            .pm-certificate-title {
                position: relative;
                top: 40px;

                h2 {
                    font-size: 34px !important;
                }
            }

            .pm-certificate-body {
                padding: 20px;

                .pm-name-text {
                    font-size: 20px;
                }
            }

            .pm-earned {
                margin: 15px 0 20px;

                .pm-earned-text {
                    font-size: 20px;
                }

                .pm-credits-text {
                    font-size: 15px;
                }
            }

            .pm-course-title {
                .pm-earned-text {
                    font-size: 20px;
                }

                .pm-credits-text {
                    font-size: 15px;
                }
            }

            .pm-certified {
                font-size: 12px;

                .underline {
                    margin-bottom: 5px;
                }
            }

            .pm-certificate-footer {
                width: 650px;
                height: 100px;
                position: relative;
                left: 50%;
                margin-left: -325px;
                bottom: -105px;
            }
        }
    }
</style>
        <div class="container pm-certificate-container">
            <div class="outer-border"></div>
            <div class="inner-border"></div>

            <div class="pm-certificate-border col-xs-12">
                <div class="row pm-certificate-header">
                    <div class="pm-certificate-title cursive col-xs-12 text-center">
                        <h2> Certificate of Completion</h2>
                    </div>
                </div>

                <div class="row pm-certificate-body">

                    <div class="pm-certificate-block">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-2">
                                    <!-- LEAVE EMPTY -->
                                </div>
                                <div class="pm-certificate-name underline margin-0 col-xs-8 text-center">
                                    <span class="pm-name-text bold">{{ $course->user->name }}</span>
                                </div>
                                <div class="col-xs-2">
                                    <!-- LEAVE EMPTY -->
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-2">
                                    <!-- LEAVE EMPTY -->
                                </div>
                                <div class="pm-earned col-xs-8 text-center">
                                    <span
                                        class="pm-earned-text padding-0 block cursive">{{ $course->course->course_Name }}</span>
                                    <span class="pm-credits-text block bold sans">Under The Supervision of</span>
                                </div>
                                <div class="col-xs-2">
                                    <!-- LEAVE EMPTY -->
                                </div>
                                <div class="col-xs-12"></div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-2">
                                    <!-- LEAVE EMPTY -->
                                </div>
                                <div class="pm-course-title col-xs-8 text-center">
                                    <span class="pm-earned-text block cursive">{{ $course->course->teacher->name }}</span>
                                </div>
                                <div class="col-xs-2">
                                    <!-- LEAVE EMPTY -->
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-2">
                                    <!-- LEAVE EMPTY -->
                                </div>
                                <div class="pm-course-title underline col-xs-8 text-center">
                                    <span class="pm-credits-text block bold sans">{{ $course->created_at }}
                                    </span>
                                </div>
                                <div class="col-xs-2">
                                    <!-- LEAVE EMPTY -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="row">
                            <div class="pm-certificate-footer">
                                <div class="col-xs-4 pm-certified col-xs-4 text-center">
                                    <span class="pm-credits-text block sans">IUBAT</span>
                                    <span class="pm-empty-space block underline"></span>
                                    <span class="bold block">Successfully Completed the Course</span>
                                </div>
                                <div class="col-xs-4">
                                    <!-- LEAVE EMPTY -->
                                </div>
                                <div class="col-xs-4 pm-certified col-xs-4 text-center">
                                    <span class="pm-credits-text block sans"></span>
                                    <span class="pm-empty-space block underline"></span>
                                    <span class="bold block"> </span>
                                    <span class="bold block"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


 </div>
    <div class="col-md-4">


        <button class="btn btn-primary" onclick="printDiv('printArea')" type="button">Print</button>
    </div>
    <script>

        function printDiv(divID){
            var printContents = document.getElementById(divID).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endsection

