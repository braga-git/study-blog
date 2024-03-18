<?php

namespace Database\Factories;

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
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(3),
            'text' => $this->faker->paragraph(16),
            'tags' => 'contemporâneo, hip-hop, wacking',
            'importance' => $this->faker->numberBetween(1,5),
            'status' => $this->faker->numberBetween(1,2) == 2 ? 'inactive' : 'active'
        ];
    }
}
