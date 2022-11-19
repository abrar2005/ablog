<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }

    public function login()
    {
        if(Auth::check()){return Redirect::to('/'. auth()->user()->username);}
        return view('auth.login');
    }

    public function sign_up()
    {
        if(Auth::check()){return Redirect::to('/'. auth()->user()->username);}
        return view('auth.sign_up');
    }

    public function register_login(Request $request)
    {
        // post funciton to register user
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(request()->only(['username', 'password']))) {
            return redirect()
                ->route('show_user', auth()->user()->username)
                ->with('success', "Welcome back");
        } else {
            return redirect()->back()->with('fail', 'Invalid username or password');
        }
    }

    public function register_sign_up(Request $request)
    {
    
        $request->validate([
            'username' => ['required', 'string', 'unique:users', 'min:5', 'max:15'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required']
        ]);

        $user = User::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);
        
        auth()->login($user);
        return redirect('/' . auth()->user()->username);

    }
}
