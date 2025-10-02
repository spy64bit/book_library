<?php

namespace App\Livewire;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Favourite extends Component
{
    public Book $book;

    public bool $isFavourited = false;

    public function mount(Book $book)
    {
        $this->book = $book;
        $this->isFavourited = $this->book->favouritedBy()->where('user_id', Auth::id())->exists();
    }

    public function toggleFavourite()
    {
        if (! Auth::check()) {
            return;
        }

        if ($this->isFavourited) {
            $this->book->favouritedBy()->detach(Auth::id());
            $this->isFavourited = false;
        } else {
            $this->book->favouritedBy()->attach(Auth::id());
            $this->isFavourited = true;
        }
    }

    public function render()
    {
        return view('livewire.favourite');
    }
}
