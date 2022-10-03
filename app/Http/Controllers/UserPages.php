<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserPages extends Controller
{
    // controlling the pages that user inputed [USER HAS TO BE SIGNED IN FOR THESE].

    public function show_user($url_userID = 'about')
    {
        // when on ('/') if the parameter is about, redirects you to the about page otherwise gets user_page with the parameter.
        if ($url_userID === 'about') {
            return redirect()->route('home.' . $url_userID);
        } else {
            $user = User::where('username', $url_userID)->first();

            if ($user) {
                return view('user_pages.profile_page', $user);
            } else {
                return "<h1>404</h1>";
            }
        }
    }
}
