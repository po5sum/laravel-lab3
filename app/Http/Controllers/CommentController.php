<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Store a new comment
    public function store(Request $request, $postId)
    {
        $validated = $request->validate([
            'commenter_name' => 'required|max:255',
            'comment' => 'required',
        ]);

        Comment::create([
            'post_id' => $postId,
            'commenter_name' => $validated['commenter_name'],
            'comment' => $validated['comment'],
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
