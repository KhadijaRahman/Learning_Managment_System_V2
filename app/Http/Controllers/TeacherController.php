<?php

namespace App\Http\Controllers;

use App\Models\Courselist;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function list(){
        $teachers=Teacher::all();
        return view('backend.pages.teacher.list',compact('teachers'));
    }

    public function form(){
        $courselist=Courselist::all();
        return view('backend.pages.teacher.form',compact('courselist'));
    }

    public function store(Request $request)
   {


    Teacher::create([

        'name'=>$request->teacher_name,

        'address'=>$request->teacher_email,
        'email'=>$request->teacher_contact,
        'contact'=>$request->teacher_address,
        'designation'=>$request->teacher_designation,
    ]);
    return redirect()->route('teacher.list');
}
    public function view($id)
        {
            $teachers=Teacher::find($id);
            return view('backend.pages.teacher.view',compact('teachers'));
        }
        public function delete($id)

        {
            Teacher::find($id)->delete();

            return redirect()->back();
        }


}
