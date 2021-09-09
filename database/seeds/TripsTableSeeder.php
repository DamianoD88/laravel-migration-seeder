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

            // creazione nuova istanza
            $newTrip = new Trip();

            // aggiungiamo righe della tabella con valori fake
            $newTrip->title = 'viaggio numero ' . $i;
            $newTrip->destination = 'Santorini ' . $i;
            $newTrip->travellers = 'Viaggiatori n ' .rand(1,20);
            $newTrip->packages = 'pacchetti viaggio ' .rand (1,3);
            $newTrip->honeymoon = 'Luna di meile ' .rand (1,10);
            $newTrip->trips = 'numero di viaggi ' .rand (1,10);
            $newTrip->price = rand(10,30);
            $newTrip->Trip_description= 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae ipsam expedita doloremque obcaecati suscipit autem voluptates numquam quo blanditiis temporibus, ut placeat. Itaque recusandae asperiores rerum sapiente, dolore facere explicabo! ';

            // salvataggio nuova istanza nella tabella
            $newTrip->save();
            
            



            // $table->string('title',90);
            // $table->string('destination', 40);
            // $table->string('travellers',10);
            // $table->string('packages',200);
            // $table->string('honeymoon', 100);
            // $table->smallInteger('number_trips')->unsigned();
            // $table->float('price', 10, 5000)->unsigned();
            //$table->text('Trip_description', 100, 500);

        }
    }
}
