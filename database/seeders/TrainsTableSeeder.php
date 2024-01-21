<?php

namespace Database\Seeders;

use App\Models\Train;

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

        
    }
}
