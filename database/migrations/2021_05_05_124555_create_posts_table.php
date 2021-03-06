<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->default(0);
            $table->integer('hillclimb_location_id')->unsigned()->default(0);
            $table->text('comment');
            $table->string('image_path');
            $table->integer('evaluation_point')->unsigned()->default(1);
            $table->integer('difficulty_point')->unsigned()->default(1);
            $table->integer('scenery_point')->unsigned()->default(1);
            $table->integer('road_surface_point')->unsigned()->default(1);
            $table->text('mileage');
            $table->integer('running_time')->unsigned()->default(0);
            $table->date('climbing_day');

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
        Schema::dropIfExists('posts');
    }
}
