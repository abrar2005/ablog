<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function trending()
    {
        return view('home.trending');
    }

    public function about()
    {
        return view('home.about');
    }

    public function explore()
    {
        return view('home.explore');
    }

    public function blogit()
    {
        return view('home.blogit');
    }


}
