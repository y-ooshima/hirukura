<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHillclimbLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hillclimb_locations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('locations_name');
            $table->string('prefectures');
            $table->integer('prefectures_id');
            
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
        Schema::dropIfExists('hillclimb_locations');
    }
}
