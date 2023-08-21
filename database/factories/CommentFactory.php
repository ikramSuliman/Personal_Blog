<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
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
        return [
            // 'user_id' => $this->faker->numberBetween(1, 50),
            // 'post_id' => $this->faker->numberBetween(1, 20),
            'text' => $this->faker->word,
            'is_approved' => $this->faker->boolean,
            'content' => $this->faker->paragraph,
            'user_id' => $this->faker->randomElement(User::pluck('id')->toArray()),
            'post_id' => $this->faker->randomElement(Post::pluck('id')->toArray()),
           // 'user_id' => $this->faker->randomElement(range(1, 10)),
            //'post_id' => $this->faker->randomElement(range(1, 10)),
        ];
    }
}
