<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard.posts.index');
    }

    public function create()
    {
        $this->authorize('create', Post::class);

        return view('dashboard.posts.create');
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post);

        return view('dashboard.posts.edit', [
            'post' => $post
        ]);
    }
}
