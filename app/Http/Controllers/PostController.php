<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show_post(Request $request)
    {
        $id = $request->query('blog_id');
        
        

        return view('user_pages.post_page');
    }
}
