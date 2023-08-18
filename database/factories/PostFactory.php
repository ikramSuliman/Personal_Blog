<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
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
            'user_id' => $this->faker->randomElement(User::pluck('id')->toArray()),// Link the post to a random user
            'content' => $this->faker->paragraph,
        //    'status_id' => $this->faker->numberBetween(1, 3), // Assuming you have 3 statuses
            'title' => $this->faker->sentence,
            'is_featured' => $this->faker->boolean,
            'views_count' => $this->faker->numberBetween(0, 1000),
            'image' => $this->faker->imageUrl(), // Fake image URL
        ];
    }
}
