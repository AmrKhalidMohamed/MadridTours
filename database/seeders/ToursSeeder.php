<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Tours;

class ToursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $numberOfTours = 5;


        for ($i = 0; $i < $numberOfTours; $i++) {
            Tours::create([
                'title' => $faker->city,
                'type' => $faker->randomElement(['internal','external', 'religious']),
                'description' => $faker->paragraph,
                'price' => 1000,
                'start_date' => $faker->dateTimeBetween('-1 month', '+1 month'),
                'end_date' => $faker->dateTimeBetween('-1 month', '+1 month'),
            ]);
        }
    }
}
