<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:3|max:30',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([

            'name' => request('name'),
            'email' => request('email'),
            'password' => \Hash::make(request('password'))
       
        ]);

        //ToDo:: session()->flash('message', 'Registration successful!');
        //ToDo:: auth()->login($user);

        return redirect('/posts/create');
    }

    public function index()
    {
        return view('registration.create');
    }


}
