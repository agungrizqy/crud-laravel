<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            "title" => "All Posts",
            "posts" => Post::latest()->filter()->paginate(7)->withQueryString()
        ]);
    }

    public function find(\App\Models\Post $post)
    {
        return view('post' , [
            "title" => "Single Post",
            "post" => $post
    
        ]);
    }
}
