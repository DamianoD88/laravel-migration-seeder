<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('title',90);
            $table->string('destination', 40);
            $table->string('travellers',10);
            $table->string('packages',200);
            $table->string('honeymoon', 100);
            $table->smallInteger('number_trips')->unsigned();
            $table->float('price', 10, 30)->unsigned();
            $table->text('Trip_description', 100, 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
