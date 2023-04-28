<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Courselist;
use App\Models\Teacher;

class CourseController extends Controller
{
    public function course()
    {

        //dd('course');
        $coures = Courselist::with('category','teacher')->paginate(4);
        return view('backend.pages.course.courseList', compact('coures'));
    }

    public function courseCreate()
    {
        //dd('$categories');
        $teacher=Teacher::all();
        $categories = Category::all();
        return view('backend.pages.course.create', compact('categories','teacher'));
    }

    public function courseStore(Request $request)
    {
        Courselist::create([
            'course_Name' => $request->course_Name,
            'teacher_id'=>$request->teacher_id,
            'category_id' => $request->category_id,
            'course_price' => $request->price,
            'course_duration' => $request->duration,
            'course_description' => $request->course_description,
        ]);
        return redirect()->route('course.list');
    }
    public function view($id)
    {
        $course = Courselist::find($id);

        //dd($id);
        return view('backend.pages.course.cview', compact('course'));
    }
    public function delete($id)

    {
        Courselist::find($id)->delete();

        return redirect()->back();
    }
}
