<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTime();
            $train->arrival_time = $faker->dateTime();
            $train->train_code = $faker->bothify('???-????');
            $train->number_of_carriages = $faker->randomElement([20, 42, 50, 70, 100]);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
        // $train = new Train;
        // $train->company = 'Trenitalia';
        // $train->departure_station = 'Milano';
        // $train->arrival_station = 'Napoli';
        // $train->departure_time = '2024-06-28 12:36:26';
        // $train->arrival_time = '2024-06-28 17:36:26';
        // $train->train_code = 'TRE1234';
        // $train->number_of_carriages = 20;
        // $train->on_time = true;
        // $train->cancelled = false;
        // $train->save();
    }
}
