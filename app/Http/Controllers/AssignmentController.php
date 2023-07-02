<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use COM;
use App\Models\Assignment;
use App\Models\Classroom;

class AssignmentController extends Controller
{
    function create(Classroom $id) {
        return view('classroom.newAssignment', compact('id'));
    }

    function store(Request $req, Classroom $id) {


        $req->validate([
            'title' => 'required|string',
            'deadline' => 'required',
            'question' => 'required',
            'answer' => 'required'
        ]);

        $speak = new COM("SAPI.SpVoice");
        $stream = new COM("SAPI.SpFileStream");

        $audioFilePath = storage_path('app/public/speech.wav');

        $stream->Open($audioFilePath, 3, false);
        $speak->AudioOutputStream = $stream;

        $speak->Speak($req->question);

        $speak->AudioOutputStream = null;
        $stream->Close();

        $headers = [
            'Content-Type' => 'audio/wav',
        ];


        Assignment::create([
            'title' => $req->title,
            'deadline' => $req->deadline,
            // 'question' => $audioFilePath,
            'question' => $req->question, //SEMENTARA
            'answer' => $req->answer,
            'user_id' => auth()->user()->id,
            'classroom_id' => $id->id,
        ]);

        // dd($id);
        // return response()->file($audioFilePath, $headers);
        return redirect('/classroom/detail/'. $id->id);

    }
}
