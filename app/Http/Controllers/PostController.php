<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::where('title', 'like', '%man%')->get();
        $dualima = Post::where('id', 25)->first();

        return view('post.index', compact('posts', 'dualima'));
    }
}
