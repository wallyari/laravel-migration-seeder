<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 150);
            $table->string('departure_station', 255);
            $table->string('arrival_station', 255);
            $table->date('departure_date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('train_code');
            $table->tinyInteger('carriage_number');
            $table->string('in_time', 5);
            $table->string('cancelled', 5);
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
        Schema::dropIfExists('trains');
    }
}
