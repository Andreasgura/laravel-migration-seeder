<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train;
        $train->company = 'Trenitalia';
        $train->departure_station = 'Milano';
        $train->arrival_station = 'Napoli';
        $train->departure_time = '2024-06-28 12:36:26';
        $train->arrival_time = '2024-06-28 17:36:26';
        $train->train_code = 'TRE1234';
        $train->number_of_carriages = 20;
        $train->on_time = true;
        $train->cancelled = false;
        $train->save();
    }
}
