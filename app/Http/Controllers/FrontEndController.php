<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use App\Category;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $news)
    {
        $posts = Post::latest('id')->first();
        $last_post = [
            'title'=> $posts['title'],
            'author'=>$posts['author_id'],
            'photo' =>$posts['image_cover'],
            'date' =>$posts['created_at'],
        ];
        
        return view('frontend.index', compact('last_post'));
    }

    /**
     * Display a listing of the resource category.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        $categories = PostCategory::latest('id')->first();
        $category = [
            'title'=> $categories['title'],
            'content'=>$categories['content'],
            'photo' =>$categories['image_cover'],
            'date' =>$categories['created_at']
        ];

        return view('frontend.category', compact('category'));
    }

    /**
     * Display a listing of the search resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('frontend.search');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::all();
        $detail = Post::find($id);
        return view('frontend.detail' , compact('detail'));        
    }
}
