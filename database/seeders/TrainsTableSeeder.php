<?php

namespace Database\Seeders;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $companies = ['trenitalia', 'italo'];
        $departure_stations = ['Milano', 'Roma', 'Bologna'];
        $arrival_stations = ['Torino', 'Napoli', 'Firenze'];

        $train = new Train();
        $train->company = $faker->randomElement('$companies');
        $train->departure_station = $faker->randomElement('departure_stations');
        $train->arrival_station = $faker->randomElement('arival_stations');

        $train->departure_time = $faker->dateTimeBetween('-1 day', '+1 day');

        $carbon_departure = new Carbon($train->departure_time);
        $carbon_arrival = $carbon_departure->addHours($faker->numberBetween(1,24))->format('Y-m-d H:i:s');



        
    }
}
