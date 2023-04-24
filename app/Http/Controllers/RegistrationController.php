<?php

namespace App\Http\Controllers;

use App\Models\Courselist;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration(){
        return view('website.registration.registration');
    }
    public function registrationStore(Request $request){

        User::create([

        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=>$request->address,
        'Institution'=>$request->Institution,
        'password'=>bcrypt($request->password),
        'role'=>$request->role

       ]);
       toastr()->success('Registration Success','Success');

       return to_route('website');


    }
    public function dashboard(){
        $course =Courselist::all()->count();
        $totaluser = User::get()->count();
        $totalEnroll = Order::get()->count();

        return view('backend.pages.dashboard.dashboard',compact('totaluser','totalEnroll','course'));
    }
}
