<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CareerFactory extends Factory
{
    public function definition(): array
    {
        return [

            'name' => fake()->jobTitle(),

            'description' => fake()->sentence(),

            'skill' => fake()->word(),

            'score' => rand(70, 100),

            'category' => fake()->word(),

        ];
    }
}