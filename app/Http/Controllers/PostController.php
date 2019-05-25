<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // $posts = Post::where('title', 'like', '%man%')->get();
        $dualima = Post::where('id', 25)->first();

        return view('post.index', compact('posts', 'dualima'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = $request->all();
        $save = Post::insert([
            'category_id' => 1,
            'author_id' => 1,
            'title' => $post['title'],
            'content' => $post['content'],
            'is_draft' => $post['is_draft']
        ]);

        if ($save) {
            return redirect('/posts')->with('success', 'Berhasil menambah postingan baru.');
        }

        return redirect()->back()->with('error', 'Gagal menambah postingan!');
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();

        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = $request->all();
        $update = Post::where('id', $id)->update([
            'category_id' => 1,
            'author_id' => 1,
            'title' => $post['title'],
            'content' => $post['content'],
            'is_draft' => $post['is_draft']
        ]);

        if ($update) {
            return redirect('/posts')->with('success', 'Berhasil mengubah postingan.');
        }

        return redirect()->back()->with('error', 'Gagal mengubah postingan!');
    }

    public function destroy(Request $request, $id)
    {
        $delete = Post::where('id', $id)->delete();

        if ($delete) {
            return redirect('/posts')->with('success', 'Berhasil menghapus postingan.');
        }

        return redirect()->back()->with('error', 'Gagal menghapus postingan!');
    }
}
