<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function list()
    {
        return view('backend.pages.teacher.take_exam');
    }
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

        $fileName = time() . '.' . $request->file->extension();

        $file_path = $request->file->move(public_path('uploads'), $fileName);
        return back()
            ->with('success', 'You have successfully upload file.')
            ->with('file', $fileName);
    }
}
