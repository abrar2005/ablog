<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function sign_up()
    {
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
        //
        $user = new User();


        $user->name = "Asad Ahmed";
        $user->gender = "man";
        $user->username = "asad";
        $user->profile_pic = "asad.png";
        $user->header_pic = "flower.png";
        $user->email = "asad@mail.com";
        $user->password = Hash::make('aaaa');
        $user->location = "Groningen, Netherlands";
        $user->bio = "Twitter maven. Web scholar. Freelance beer lover. Proud alcohol guru. Social media buff. Zombie specialist. Music aficionado.";
        $user->personal_job = "Doctor";
        // $user->followers = json_encode('water');
        // $user->saved = "null";
        // $user->liked_content = "null";
        // $user->followed_category = "null";

        $user->save();

        return redirect()->route('home.login');
    }
}
