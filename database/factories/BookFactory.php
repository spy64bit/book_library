<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categories = [
            'Fiction',
            'Non-Fiction',
            'Science Fiction',
            'Fantasy',
            'Biography',
            'History',
            'Mystery',
            'Romance',
            'Self-Help',
            'Philosophy',
        ];

        return [
            'title' => fake()->catchPhrase(),
            'author' => fake()->name(),
            'category' => fake()->randomElement($categories),
            'description' => fake()->realText(200),
            'published_year' => fake()->year(),
        ];
    }
}
