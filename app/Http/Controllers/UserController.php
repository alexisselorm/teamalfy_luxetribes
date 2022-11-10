<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    public function login(){
        return view('users.login');
    }

    public function authenticate(){
        $formfields= request()->validate([
            'username'=> ['required', 'username'],
            'password' => ['required']
        ]);
        if(auth()->attempt($formfields)){
            request()->session()->regenerate();

            return redirect('/')->with('message', 'User logged in');
        }
        return back()->withErrors(['username'=>'Invalid credentials'])->onlyInput('username');
    }

    public function store()
    {
        $formfields = request()->validate([
            'name' => ['required', 'min:2'],
            'username' => ['required', 'min:2'],
            'dob' => ['required', 'min:2'],
            'email' => ['required', 'email', 'unique:users'],
            'phone' => ['required', 'min:2'],
            'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/', 'min:6'],
            'about' => ['required'],

        ]);

        //  Hash password
        $formfields['password'] = bcrypt($formfields['password']);

        $user = User::create($formfields);

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in succesfully');
    }
}
