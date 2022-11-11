<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function create()
    {
        $countries = Country::all();
        return view('users.register',[
            'countries' => $countries
        ]);
    }

    public function login(){
        return view('users.login');
    }

    public function authenticate(){
        $formfields= request()->validate([
            'username'=> ['required'],
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
            'image'=>['image'],
            'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/', 'min:6'],
            'about' => ['required'],

        ]);
        $image = request()->file('image')->store('players', 'public');

        $formfields['image'] = Storage::disk('public')->url($image);


        //  Hash password
        $formfields['password'] = bcrypt($formfields['password']);

        $user = User::create($formfields);

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in succesfully');
    }
    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('message', 'User logged out successfully');
    }
}
