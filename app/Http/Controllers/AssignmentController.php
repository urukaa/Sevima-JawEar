<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use COM;
use App\Models\Assignment;

class AssignmentController extends Controller
{
    function create() {
        return view('classroom.newAssignment');
    }

    function store(Request $req) {
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
            'question' => $audioFilePath,
            'answer' => $req->answer
        ]);

        return response()->file($audioFilePath, $headers);
    }
}
