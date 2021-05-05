<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(6),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    public function create(){

        return view('posts.create', ['post' => new Post]);
    }

    public function store(PostRequest $request, Post $post){
       //validate
        $arr = $request->all();

        //slug
        $arr['slug'] = Str::slug(request('title'));

        //create new post
        $post->create($arr);

        session()->flash('success', 'The Post Was Created');

        //redirect root posts
        return redirect('posts');
    }

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());
        session()->flash('success', 'The post was updated');
        return redirect('posts');
    }
    public function destroy(Post $post){
        $post->delete();
        session()->flash('success', 'The Post was deleted');
        return redirect('posts');
    }

}
