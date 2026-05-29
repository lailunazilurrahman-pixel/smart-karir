<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    public function run(): void
    {
        $careers = [];

        for ($i = 1; $i <= 200; $i++) {

            $careers[] = [

                'name' => 'Career ' . $i,

                'description' => 'Deskripsi Career ' . $i,

                'skill' => 'Skill ' . rand(1, 50),

                'score' => rand(70, 100),

                'category' => 'Category ' . rand(1, 20),

                'created_at' => now(),

                'updated_at' => now(),

            ];

        }

        foreach ($careers as $career) {

            Career::create($career);

        }
    }
}