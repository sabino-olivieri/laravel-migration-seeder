<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       
        $faker = Faker\Factory::create('it_IT');

        for ($i=0; $i < 100; $i++) { 
            $newTrain = new Train();
            $newTrain->agency = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->dateTimeBetween('-1 week', '+1 month');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = substr($faker->word(), 0, 3) . $faker->randomNumber(4, true);
            $newTrain->number_carriages = $faker->numberBetween(3,12);
            $newTrain->save();
        }



    }
}
