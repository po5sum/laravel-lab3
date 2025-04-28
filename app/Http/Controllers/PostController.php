<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // List all posts
    public function index()
    {
        $posts = Post::with('author')->get(); // eager load authors
        return view('posts.index', compact('posts'));
    }

    // Show a single post by ID
    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id); // eager load comments
        return view('posts.show', compact('post'));
    }
}
