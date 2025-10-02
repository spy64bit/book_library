<?php

namespace App\Http\Controllers;

use App\BaseControllerTrait;
use App\Models\Book;

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
        $mostViewed = Book::latest()->take(5)->get();

        return view('home', compact('newBooks', 'mostViewed'));
    }
}
