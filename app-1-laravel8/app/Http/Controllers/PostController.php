<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id')->paginate(2);// 15
        //dd($posts);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $request)
    {
        $data = $request->all();

        if ($request->image->isValid()) {

            $nameFile = Str::of($request->title)->slug('-') . '.'
                . $request->image->getClientOriginalExtension();

            $file = $request->image->storeAs('public/posts',$nameFile);
            $file = str_replace('public/','',$file);
            $data['image'] = $file;

            /*$nameFile = Str::of($request->title)->slug('-') . '.'
                . $request->image->getClientOriginalExtension();
            $image = $request->image->storeAs('posts', $nameFile);
            $data['image'] = $image;*/
        }

        Post::create($data);
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
        if (!$post = Post::find($id)) {
            return redirect()->route('posts.index');
        }
        if(Storage::exists($post->image)){
            Storage::delete($post->image);
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

    public function update(StoreUpdatePost $request, $id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->image->isValid()) {

            if(Storage::exists($post->image)){
                Storage::delete($post->image);
            }

            $nameFile = Str::of($request->title)->slug('-') . '.'
                . $request->image->getClientOriginalExtension();

            $file = $request->image->storeAs('public/posts',$nameFile);
            $file = str_replace('public/','',$file);
            $data['image'] = $file;

            /*$nameFile = Str::of($request->title)->slug('-') . '.'
                . $request->image->getClientOriginalExtension();
            $image = $request->image->storeAs('posts', $nameFile);
            $data['image'] = $image;*/
        }

        //dd("Editando POST {$post->id}");
        //return view('admin.posts.edit', compact('post'));
        $post->update($data);
        return redirect()->route('posts.index')->with('message', "Post Editado com sucesso");
    }

    public function search(Request $request)
    {
        //$filters = $request->all();
        $filters = $request->except('_token');

        $posts =
            Post::where(    'title', 'LIKE', "%{$request->search}%")
                ->orWhere('content', 'LIKE', "%{$request->search}%")
                ->paginate(2);
        // toSql(); // debugar
        return view('admin.posts.index', compact('posts', 'filters'));

    }

}
