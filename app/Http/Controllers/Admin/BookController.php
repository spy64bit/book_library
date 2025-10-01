<?php

namespace App\Http\Controllers\Admin;

use App\BaseControllerTrait;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    use BaseControllerTrait;

    protected $model = Book::class;

    protected $viewPath = 'admin.books';

    protected $routeName = 'admin.books';

    protected $successMessage = 'Book saved successfully.';

    protected $validationRules = [
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'published_year' => 'required|integer|min:1500|max:2025',
        'description' => 'required|string',
    ];

    // public function index()
    // {
    //     $books = Book::paginate(10);

    //     return view('admin.books.index', compact('books'));
    // }

    // public function show($id)
    // {
    //     $book = Book::findOrFail($id);

    //     return view('admin.books.edit', compact('book'));
    // }

    // public function update($id)
    // {
    //     $book = Book::findOrFail($id);

    //     $validatedData = request()->validate([
    //         'title' => 'required|string|max:255',
    //         'author' => 'required|string|max:255',
    //         'category' => 'required|string|max:255',
    //         'published_year' => 'required|integer|min:0|max:'.date('Y'),
    //         'description' => 'nullable|string',
    //     ]);

    //     $book->update($validatedData);

    //     return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    // }
}
