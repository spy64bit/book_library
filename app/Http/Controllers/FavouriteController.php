<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    //
    public function toggle(Book $book)
    {
        $user = Auth::user();

        $user->favourites()->toggle($book->id);

        $favourited = $user->favourites()->where('book_id', $book->id)->exists();

        return response()->json(['favourited' => $favourited]);
    }
}
