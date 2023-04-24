<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function list()
    {
        return view('backend.pages.teacher.upload');
    }

    public function store(Request $request)
    {
        $videoName = "";
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $videoName = $file[0]->getClientOriginalName();
        }

        Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'filename' => $videoName,
        ]);

        return redirect()->route('upload.list')
            ->with('success', 'Video uploaded successfully.');
    }
}
