<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $posts = Post::latest()
            ->where('status', 'active')
            ->orderBy('importance', 'desc')
            ->take(3)
            ->get();

        return view('posts/show', ['post' => $post, 'posts' => $posts]);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
            'tags' => 'required',
            'importance' => 'required',
            'status' => 'required'
        ]);

        if ($request->hasFile('banner')) {
            $formFields['banner'] = $request
                ->file('banner')
                ->store('banners', 'public');
        }

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created successfully!');
    }

    public function edit(Post $post)
    {
        return view('posts/edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
            'tags' => 'required',
            'importance' => 'required',
            'status' => 'required'
        ]);

        if ($request->hasFile('banner')) {
            $formFields['banner'] = $request
                ->file('banner')
                ->store('banners', 'public');
        }

        $post->update($formFields);

        return back()->with('message', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return Redirect::back()->with('message', 'Post deleted successfully!');
    }

    public function manage()
    {
        return view('admin/posts', [
            'posts' => Post::filter(request(['search']), 'admin')
                ->paginate(8)
        ]);
    }
}
