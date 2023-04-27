<?php

namespace App\Http\Controllers;

use App\Models\Courselist;
use App\Models\Teacher;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function list()
    {
        $video = Video::with('courselist', 'teacher');
        return view('backend.pages.video.videolist', compact('video'));
    }

    public function create()
    {
        $courselist = Courselist::all();
        $teacher = Teacher::all();
        return view('backend.pages.video.video_form', compact('courselist', 'teacher'));
    }

    public function store(Request $request)
    {


        if ($request->hasFile('video')) {
            foreach ($request->video as $data) {
                $videoName = '';
                $videoName = date('Ymdhis') . '.' . $data->getClientOriginalExtension();
                $data->storeAs('/uploads', $videoName);
                Video::create([
                    'title' => $request->title,
                    'courselists_id' => $request->courselists_id,
                    'teacher_id' => $request->teacher_id,
                    'description' => $request->description,
                    'filename' => $videoName,
                ]);
            }
        }





        return redirect()->route('upload.list')
            ->with('success', 'Video uploaded successfully.');
    }

    public function lecture($id)
    {
        $course = Courselist::with('videos')->find($id);


        return view('website.pages.lecture.lecture_content', compact('course'));
    }
}
