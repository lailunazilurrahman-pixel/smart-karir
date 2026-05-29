<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InterestFactory extends Factory
{
    public function definition(): array
    {
        return [

            'name' => fake()->word(),

            'created_at' => now(),

            'updated_at' => now(),

        ];
    }
}