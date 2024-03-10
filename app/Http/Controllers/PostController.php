<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts/index', [
            'posts' => Post::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }
    
    public function show(Post $post) {
        return view('posts/show', [
            'post' => $post
        ]);
    }
    
    public function create() {
        return view('posts/create');
    }
    
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
            'tags' => 'required'
        ]);

        if($request->hasFile('banner')) {
            $formFields['banner'] = $request->file('banner')->store('banners', 'public');
        }

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created successfully!');
    }

    public function edit(Post $post) {
        return view('posts/edit', ['post' => $post ]);
    }
    
    public function update(Request $request, Post $post) {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
            'tags' => 'required'
        ]);

        if($request->hasFile('banner')) {
            $formFields['banner'] = $request->file('banner')->store('banners', 'public');
        }

        $post->update($formFields);

        return back()->with('message', 'Post updated successfully!');
    }

    public function destroy(Post $post) {
        $post->delete();

        return redirect('/')->with('message', 'Post deleted successfully!');
    }
    
    public function manage() {
        return view('posts/manage', ['posts' => Post::latest()->paginate(8)]);
    }
}
