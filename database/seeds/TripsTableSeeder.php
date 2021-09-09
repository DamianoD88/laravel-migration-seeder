<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i ++){
            $newTrip = new Trip();
            $newTrip->title = 'viaggio numero ' . $i +1;
            $newTrip->destination = 'Santorini ' . $i +1;
            $newTrip->travellers = 'Viaggiatori n ' .rand(1,20);
            $newTrip->packages = 'pacchetti viaggio ' .rand (1,3);
            $newTrip->honeymoon = 'Luna di meile ' .rand (1,10);
            $newTrips->number_trips = 'numero di viaggi ' .rand (1,10);
            $newTrip->price = rand(100,5000);



            // $table->string('title',90);
            // $table->string('destination', 40);
            // $table->string('travellers',10);
            // $table->string('packages',200);
            // $table->string('honeymoon', 100);
            // $table->smallInteger('number_trips')->unsigned();
            // $table->float('price', 10, 5000)->unsigned();

        }
    }
}
