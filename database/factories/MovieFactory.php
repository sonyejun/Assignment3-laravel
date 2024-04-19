<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'genre' => $this->faker->word(),
            'director' => $this->faker->name(),
            'rating' => $this->faker->randomFloat(1, 0, 10),
            'thumbnail' => $this->faker->imageUrl(),
            'poster' => $this->faker->imageUrl(),
            'release_date' => $this->faker->date(),
            'synopsis' => $this->faker->sentence(),
            'user_id' => User::pluck('id')->random()
        ];
    }
}
