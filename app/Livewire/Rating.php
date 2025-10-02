<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Rating as RatingModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Rating extends Component
{
    public int $rating = 0;

    public Book $book;

    public function mount()
    {
        // Load existing rating for this user and book
        $existingRating = RatingModel::where('user_id', Auth::id())
            ->where('book_id', $this->book->id)
            ->first();

        if ($existingRating) {
            $this->rating = $existingRating->rating;
        }
    }

    public function render()
    {
        return view('livewire.rating');
    }

    public function setRating($value)
    {
        $this->rating = $value;

        RatingModel::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'book_id' => $this->book->id,
            ],
            [
                'rating' => $this->rating,
            ]
        );
    }
}
