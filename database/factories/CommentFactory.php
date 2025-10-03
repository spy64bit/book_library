<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $sampleComments = [
            'Great book! Highly recommend.',
            'I learned a lot from this.',
            'Not my favorite, but interesting.',
            'Amazing writing style!',
            'Couldn’t put it down!',
            'Very informative and well-written.',
            'I enjoyed every chapter.',
            'The plot was a bit slow at first.',
            'Characters felt very real.',
            'I didn’t like the ending.',
            'Would read it again!',
            'A masterpiece of modern literature.',
            'Helpful for beginners.',
            'Engaging from start to finish.',
            'The pacing was perfect.',
            'I got bored in the middle.',
            'Loved the dialogue and humor.',
            'Some parts were confusing.',
            'Inspirational and motivating.',
            'Not what I expected, but good.',
            'The themes were deep and meaningful.',
            'I wish there were more illustrations.',
            'A fun read for the weekend.',
            'I couldn’t relate to the characters.',
            'The writing is beautiful.',
            'Very well-researched.',
            'Couldn’t finish it.',
            'It exceeded my expectations.',
            'Too predictable in some parts.',
            'I learned a lot about history.',
            'Heartwarming and touching.',
            'Interesting perspective.',
            'The book kept me hooked.',
            'I found it repetitive.',
            'Perfect for book clubs.',
            'I love this author’s style.',
            'Not suitable for kids.',
            'Thought-provoking and insightful.',
            'The chapters were too long.',
            'I laughed out loud several times.',
            'The storyline was confusing.',
            'I recommend it to friends.',
            'Beautifully illustrated.',
            'A little disappointing overall.',
            'The characters are unforgettable.',
            'A great addition to my collection.',
            'It inspired me to learn more.',
            'The ending left me speechless.',
            'Easy to read and engaging.',
            'I didn’t enjoy it as much as expected.',
        ];

        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'book_id' => Book::inRandomOrder()->first()->id ?? Book::factory(),
            'content' => $sampleComments[array_rand($sampleComments)],
        ];
    }
}
