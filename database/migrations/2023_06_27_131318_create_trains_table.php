<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            // MY COLUMN
            $table->string('company', 50);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->char('train_code', 5);
            $table->tinyInteger('train_cars');
            $table->boolean('is_on_time');
            $table->boolean('deleted');
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
};
