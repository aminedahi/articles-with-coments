<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'article_id' => 'required',
            'content' => 'required',
        ]);

        Comment::create($validatedData);

        return redirect()->back()->with('success', 'Comment added successfully.');
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);

        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'content' => 'required',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->update($validatedData);

        return redirect()->back()->with('success', 'Comment updated successfully.');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
}