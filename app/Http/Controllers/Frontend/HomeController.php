<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Courselist;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function website()
    {
        return view('website.pages.home');
    }


    public function course(){
        $courses = Courselist::all();
        return view('website.pages.course',compact('courses'));
}
 public function weblogin()
 {

        $validate=Validator::make( $request->all(),[
           'email'=>'required',
           'password'=>'required',
        ]);

        if($validate->fails())
        {
            toastr()->error($validate->getMessageBag());
            return redirect()->back();
        }

        $credentials=$request->except('_token');
       if(auth()->attempt($credentials))
       {
           toastr()->success('Login success');
           return redirect()->back();
       }
        toastr()->error('Login failed');
        return redirect()->back();

 }

}
