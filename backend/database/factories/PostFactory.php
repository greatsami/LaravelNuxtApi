<?php

namespace Database\Factories;

use App\Enums\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $sentence = fake()->sentence(),
            'status' => Status::PUBLISHED,
            'summary' => $description = fake()->text(160),
            'content' => fake()->paragraphs(fake()->numberBetween(5, 10), true),
            'meta' => [
                'title' => $sentence,
                'description' => $description,
                'author' => 'Sami Mansour',
            ],
            'user_id' => User::factory()
        ];
    }
}
