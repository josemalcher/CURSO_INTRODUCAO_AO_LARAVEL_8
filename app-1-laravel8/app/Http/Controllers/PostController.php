<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id')->paginate();// 15
        //dd($posts);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $request)
    {
        Post::create($request->all());
        return redirect()->route('posts.index')->with('message', "Post Criado com sucesso");
    }

    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->route('post.index');
        }
        return view('admin.posts.show', compact('post'));
    }

    public function destroy($id)
    {
        if(!$post = Post::find($id)){
            return redirect()->route('posts.index');
        }
        $post->delete();

        return redirect()
            ->route('posts.index')
            ->with('message', 'Post Deletado com sucesso');
    }
    public function edit($id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }
        return view('admin.posts.edit', compact('post'));
    }
    public function update(StoreUpdatePost $request,$id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }
        //dd("Editando POST {$post->id}");
        //return view('admin.posts.edit', compact('post'));
        $post->update($request->all());
        return redirect()->route('posts.index')->with('message', "Post Editado com sucesso");
    }
}
