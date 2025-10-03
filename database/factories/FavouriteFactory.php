<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favourite>
 */
class FavouriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'book_id' => Book::factory(),
        ];
    }

    /**
     * Create a unique user-book combination
     */
    public function unique(): static
    {
        return $this->state(function (array $attributes) {
            // Get random existing users and books if available
            $user = User::inRandomOrder()->first() ?? User::factory()->create();
            $book = Book::inRandomOrder()->first() ?? Book::factory()->create();

            return [
                'user_id' => $user->id,
                'book_id' => $book->id,
            ];
        });
    }
}
