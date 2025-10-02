<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'book_id' => 'required|exists:books,id',
    //         'content' => 'required|string|max:1000',
    //     ]);

    //     $book = Book::find($request->book_id);
    //     if (! $book) {
    //         return response()->json(['success' => false, 'message' => 'Book not found.'], 404);
    //     }

    //     $comment = $book->comments()->create([
    //         'user_id' => Auth::id(),
    //         'content' => $request->content,
    //     ]);

    //     return response()->json([
    //         'success' => true,
    //         'comment' => [
    //             'user_naame' => Auth::user()->name,
    //             'content' => $comment->content,
    //             'created_at' => $comment->created_at->toDateTimeString(),
    //         ],
    //         'comment_count' => $book->comments()->count(),
    //     ], 201);

    // }
}
