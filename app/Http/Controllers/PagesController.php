<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $highlights = Post::latest()
            ->where('status', 'active')
            ->orderBy('importance', 'desc')
            ->take(4)
            ->get();

        $highlightIds = $highlights->pluck('id');

        $teachers = Post::latest()
        ->where('status', 'active')
        ->orderBy('importance', 'desc')
        ->take(4)
        ->get();

        $teachersIds = $teachers->pluck('id');

        $passports = Post::latest()
        ->where('status', 'active')
        ->first();

        $passportsId = $passports->pluck('id');

        $posts = Post::latest()
            ->where('status', 'active')
            ->whereNotIn('id', $highlightIds)
            ->whereNotIn('id', $teachersIds)
            ->whereNotIn('id', $passportsId)
            ->filter(request(['tag', 'search']))
            ->paginate(6);

        return view('pages/home', [
            'posts' => $posts,
            'highlights' => $highlights,
            'teachers' => $teachers,
            'passports' => $passports
        ]);
    }

    public function posts()
    {
        $posts = Post::latest()
            ->where('status', 'active')
            ->filter(request(['tag', 'search']))
            ->paginate(6);

        return view('pages/posts', [
            'posts' => $posts
        ]);
    }
}
