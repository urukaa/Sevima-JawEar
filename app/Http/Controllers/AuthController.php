<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class AuthController extends Controller
{
    function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $req)
    {
        $req->validate([
           'username' => 'required',
           'password' => 'required'
        ]);

        $user = [
            'username' => $req->username,
            'password' => $req->password
        ];

        if (auth()->attempt($user)) {
                return redirect('/');
        } else {
            return back();
        }

    }

    function showRegisterForm(){
        $roles = Role::all();
        return view('auth.register', compact('roles'));
    }

    function register(Request $req) {
        $req->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'role_id' => 'required|exists:roles,id'
        ]);

        $user = User::create([
            'username' => $req->username,
            'role_id' => $req->role_id,
            'password' => bcrypt($req->password)
        ]);

        return redirect('/login');

    }

    function logout() {
        auth()->logout();
        return redirect('/login');
    }

    function dashboard() {
        return view('dashboard');
    }


}
