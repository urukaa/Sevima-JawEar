<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Classroom;

class ClassroomController extends Controller
{

    function index() {
        $classrooms = Classroom::all();
        return view('dashboard', compact('classrooms'));
    }

    function create(){
        return view('classroom.newClassroom');
    }

    function store(Request $req) {
        $req->validate([
            'name' => 'required|string'
        ]);

        Classroom::create([
            'name' => $req->name,
            'code' => $random = Str::random(6),
            'user_id' => auth()->user()->id

        ]);

        return redirect('/');
    }
}
