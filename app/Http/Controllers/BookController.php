<?php

namespace App\Http\Controllers;

use App\BaseControllerTrait;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    use BaseControllerTrait;

    protected $model = Book::class;

    protected $viewPath = 'books';

    protected $routeName = 'books';

    protected $validationRules = [
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'published_year' => 'required|integer|min:1500|max:2025',
        'description' => 'required|string',
    ];

    protected $successMessage = 'Book saved successfully.';

    // get 5 latest books
    public function latest()
    {
        $newBooks = Book::latest()->take(5)->get();
        $highestRated = Book::withAvg('ratings', 'rating')
            ->orderByDesc('ratings_avg_rating')
            ->take(5)
            ->get();

        return view('home', compact('newBooks', 'highestRated'));
    }

    public function userFavourites()
    {
        $user = Auth::user();
        $favouriteBooks = $user->favourites()->paginate(10);

        return view('collection.index', compact('favouriteBooks'));
    }
}
