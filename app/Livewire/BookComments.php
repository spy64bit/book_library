<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BookComments extends Component
{
    public Book $book;

    public string $content = '';

    public function mount(Book $book)
    {
        $this->book = $book;
    }

    public function addComment()
    {
        if (! Auth::check()) {
            return;
        }

        $this->validate([
            'content' => 'required|string|max:1000',
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'book_id' => $this->book->id,
            'content' => $this->content,
        ]);

        $this->content = '';
        $this->book->refresh();
    }

    public function render()
    {
        return view('livewire.book-comments');
    }
}
