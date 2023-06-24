<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Classroom;
use App\Models\User;
use Session;

class ClassroomController extends Controller
{

    function index() {
        $classrooms = Classroom::where('user_id', auth()->user()->id)->get();
        $students = User::where('id', auth()->user()->id)->with('Classrooms')->get();
        return view('dashboard', compact('classrooms', 'students'));
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


    function detail(Classroom $id) {
        return view('classroom.detail', compact('id'));
    }



    function join(){

        return view('classroom.joinClassroom');
    }

    function joined(Request $req) {
        $classrooms = Classroom::where('code', $req->code)->first();
        if ($classrooms) {
        $classrooms->Users()->attach(auth()->user()->id);
            return redirect('/');
        }Session::flash('message', "your access code is wrong!");
        return back();
    }
}
