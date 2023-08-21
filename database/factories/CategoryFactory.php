<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         // 'status_id' => $this->faker->numberBetween(1, 3),
            'description' => $this->faker->paragraph,
            'name' => $this->faker->word,
            'thumbnail' => $this->faker->imageUrl(),
            'color' => $this->faker->hexColor,
        ];
    }
}
