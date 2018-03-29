<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Mail;
use Auth;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6',
            'phoneNumber' => 'required|max:10',
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phoneNumber' => $request->phoneNumber,
        ]);

        $this->sendEmailConfirmationTo($user);
        session()->flash('success', 'Validation email has been sent, please check your mailbox!');
        return redirect('/');
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'password' => 'nullable|confirmed|min:6'
        ]);

        $this->authorize('update', $user);

        //User can choose to keep the password textfeld blank
        $data = [];
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);
        //generate a message
        session()->flash('success', 'Update profile seccessfully!');

        return redirect()->route('users.show', $user->id);
    }

    //filter the unauthorized users
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['show', 'create', 'store','confirmEmail']
        ]);

        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    protected function sendEmailConfirmationTo($user)
    {
        $view = 'emails.confirm';
        $data = compact('user');
        $to = $user->email;
        $subject = "Thanks for registering PRISM, please check your email!";

        Mail::send($view, $data, function ($message) use ($to, $subject) {
            $message->to($to)->subject($subject);
        });
    }

    public function confirmEmail($token)
    {
        $user = User::where('activation_token', $token)->firstOrFail();

        $user->activated = true;
        $user->activation_token = null;
        $user->save();

        Auth::login($user);
        session()->flash('success', 'Congratulation! Activation success!');
        return redirect()->route('users.show', [$user]);
    }

}
