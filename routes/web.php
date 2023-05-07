<?php

use App\Http\Controllers\AttendenceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\RegistrationController;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay.now');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

// Website

Route::get('/', [FrontendHome::class, 'website'])->name('website');


// Route For Going to Lecture for student
Route::get('/mylecture/{id}', [VideoController::class, 'lecture'])->name('lecture.web');


// Route for courses in Frontend
Route::get('/course', [FrontendHome::class, 'course'])->name('course.web');
Route::get('/course-category', [FrontendHome::class, 'courseCategory'])->name('category.web');







//Registration

Route::get('/registration/frontend', [RegistrationController::class, 'registration'])->name('registration');
Route::post('registration/store', [RegistrationController::class, 'registrationStore'])->name('registration.store');


// Route for ordercourse

Route::get('/order/{id}', [ProfileController::class, 'order'])->name('order.now');

Route::post('/order/store', [ProfileController::class, 'orderStore'])->name('order.store');

// Route for certificate

Route::get('course/progress-status/{id}', [CertificateController::class, 'certificateList'])->name('certificate.list');
Route::get('course/certificate/{id}', [CertificateController::class, 'certificate_generate'])->name('certificate.generate');
// Frontend LogIn
Route::get('/login', [UserController::class, 'login'])->name("login");

Route::get('/logout', [UserController::class, 'logout'])->name('logout');


// Admin Panel
Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [UserController::class, 'login'])->name("login");
    Route::post('/dologin', [UserController::class, 'dologin'])->name("dologin");



    Route::group(['middleware' => 'auth'], function () {




        Route::group(['middleware' => 'checkAdmin'], function () {



            //DashBoard

            Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

            // For single view
            Route::get('/enrollment/{id}', [ProfileController::class, 'enrollment'])->name('enrollment');
            Route::get('/', [UserController::class, 'home'])->name('home');


            // Route For Profile
            Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');



            // For course
            Route::get('/course/list', [CourseController::class, 'course'])->name('course.list');
            Route::get('/course/create', [CourseController::class, 'courseCreate'])->name('course.create');
            Route::post('/course/store', [CourseController::class, 'courseStore'])->name('course.store');
            Route::get('/course/view{id}', [CourseController::class, 'view'])->name('view');
            Route::get('/course/delete{id}', [CourseController::class, 'delete'])->name('delete');






            // For Category
            Route::get('/category/list', [CategoryController::class, 'list'])->name('category.list');
            Route::get('/category/form', [CategoryController::class, 'form'])->name('category.form');
            Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
            Route::get('/category/view{id}', [CategoryController::class, 'view'])->name('view');
            Route::get('/course/delete{id}', [CategoryController::class, 'delete'])->name('delete');




            // For Student
            Route::get('/student/list', [StudentController::class, 'list'])->name('student.list');
            Route::get('/student/form', [StudentController::class, 'form'])->name('student.form');
            Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
            Route::get('/student/view{id}', [StudentController::class, 'view'])->name('view');
            Route::get('/student/delete{id}', [StudentController::class, 'delete'])->name('delete');


            // For Teacher
            Route::get('/teacher/list', [TeacherController::class, 'list'])->name('teacher.list');
            Route::get('/teacher/form', [TeacherController::class, 'form'])->name('teacher.form');
            Route::post('/teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
            Route::get('/teacher/view{id}', [TeacherController::class, 'view'])->name('teacher.view');
            Route::get('/teacher/delete{id}', [TeacherController::class, 'delete'])->name('teacher.delete');






            // For Enrollment store in backend (enroll_list )

            Route::get('/enroll/list', [EnrollController::class, 'enroll'])->name('enroll.list');


            // Route For Teacher to upload Video content
            Route::get('/upload/list', [VideoController::class, 'list'])->name('upload.list');
            Route::get('/upload/create', [VideoController::class, 'create'])->name('upload.create');
            Route::post('/upload/store', [VideoController::class, 'store'])->name('upload.store');




            // Route For Teacher to upload Exam-paper
            Route::get('/Exam/list', [ExamController::class, 'list'])->name('exam.list');
            Route::get('/Exam/create', [ExamController::class, 'create'])->name('exam.create');
            Route::post('/Exam/store', [ExamController::class, 'store'])->name('exam.store');


            // Route for Attendence
            Route::get('attendence', [AttendenceController::class, 'attendence'])->name('attendence');
            Route::get('attendence/present{id}', [AttendenceController::class, 'present'])->name('attendence.present');
            Route::get('attendence/absent{id}', [AttendenceController::class, 'absent'])->name('attendence.absent');
            Route::get('attendence/create', [AttendenceController::class, 'create'])->name('attendence.create');


            Route::post('attendence/store', [AttendenceController::class, 'store'])->name('attendence.store');
        });
    });
});
