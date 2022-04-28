<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => $this->faker->unique()->numberBetween(10, User::count()),
            'title' => $this->faker->name(),
            'slug' => $this->faker->slug,
            'subtitle' => $this->faker->name(),
            'content' => $this->faker->text
        ];
    }
}
