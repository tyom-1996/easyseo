<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ads_id');
            $table->string('title');
            $table->string('price');
            $table->string('main_photo');
            $table->string('photos',500);
            $table->string('location');
            $table->string('make');
            $table->string('model');
            $table->string('body_type');
            $table->string('year');
            $table->string('mileage');
            $table->string('engine_type');
            $table->string('engine_size');
            $table->string('transmission');
            $table->string('steering_wheel');
            $table->string('cleared_customs');
            $table->string('drive_type');
            $table->string('color');
            $table->longText('body_desc',0);
            $table->string('lang');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('phone');
            $table->longText('phone_content',0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
