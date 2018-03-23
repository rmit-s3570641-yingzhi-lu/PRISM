<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);
        // User login in info can be remembered for 5 years
       if (Auth::attempt($credentials, $request->has('remember'))) {
        session()->flash('success', 'Welcome back！');
        return redirect()->route('users.show', [Auth::user()]);
    } else {
        session()->flash('danger', 'Sorry,Wrong Password or Email');
        return redirect()->back();
    }
       return;
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'Successfully Logged out!');
        return redirect('login');
    }
}
