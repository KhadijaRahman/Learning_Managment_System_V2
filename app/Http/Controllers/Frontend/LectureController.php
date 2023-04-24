<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LectureController extends Controller
{
   public function lecture()
   {

    return view('website.pages.lecture.lecture_content');
   }
}
