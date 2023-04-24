<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Courselist;

class CourseController extends Controller
{
public function course () {

    //dd('course');
    $coures=Courselist::with('category')->paginate(4);
    return view('backend.pages.course.courseList',compact('coures'));
}

public function courseCreate () {
    //dd('$categories');
    $categories=Category::all();
    return view('backend.pages.course.create', compact('categories'));
}

public function courseStore(Request $request) {
    Courselist::create([
        'course_Name'=>$request->course_Name,
        'category_id'=>$request->category_id,
        'course_price'=>$request->price,
        'course_duration'=>$request->duration,

    ]);
    return redirect()->route('course.list');
}
public function view($id)
{
    $course=Courselist::find($id);

    //dd($id);
    return view('backend.pages.course.cview',compact('course'));
}
public function delete($id)

{
     Courselist::find($id)->delete();

    return redirect()->back();
}

}
