<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users and books
        $users = User::pluck('id')->toArray();
        $books = Book::pluck('id')->toArray();

        if (empty($users) || empty($books)) {
            $this->command->warn('No users or books found. Creating some first...');
            
            // Create some users and books if they don't exist
            if (empty($users)) {
                User::factory(20)->create();
                $users = User::pluck('id')->toArray();
            }
            
            if (empty($books)) {
                Book::factory(50)->create();
                $books = Book::pluck('id')->toArray();
            }
        }

        $ratings = [];
        $targetCount = 300;
        $maxAttempts = $targetCount * 3; // Prevent infinite loop
        $attempts = 0;

        // Generate unique user-book combinations
        while (count($ratings) < $targetCount && $attempts < $maxAttempts) {
            $userId = $users[array_rand($users)];
            $bookId = $books[array_rand($books)];
            $combination = "{$userId}-{$bookId}";

            // Check if this combination already exists in our array
            if (!in_array($combination, array_column($ratings, 'combination'))) {
                $ratings[] = [
                    'user_id' => $userId,
                    'book_id' => $bookId,
                    'rating' => fake()->numberBetween(1, 5),
                    'combination' => $combination,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            
            $attempts++;
        }

        // Remove the temporary combination key before inserting
        $ratingsToInsert = array_map(function ($rating) {
            unset($rating['combination']);
            return $rating;
        }, $ratings);

        // Use insert ignore to handle any remaining duplicates gracefully
        DB::statement('SET SESSION sql_mode = ""'); // Temporarily disable strict mode
        
        // Insert in chunks to avoid memory issues
        $chunks = array_chunk($ratingsToInsert, 50);
        foreach ($chunks as $chunk) {
            try {
                Rating::insert($chunk);
            } catch (\Illuminate\Database\QueryException $e) {
                // If there are still duplicates, insert one by one with error handling
                if (str_contains($e->getMessage(), 'Duplicate entry')) {
                    foreach ($chunk as $rating) {
                        try {
                            Rating::updateOrCreate(
                                ['user_id' => $rating['user_id'], 'book_id' => $rating['book_id']],
                                $rating
                            );
                        } catch (\Exception $innerE) {
                            // Skip this one and continue
                            continue;
                        }
                    }
                } else {
                    throw $e;
                }
            }
        }

        $this->command->info('Ratings seeded successfully!');
    }
}
