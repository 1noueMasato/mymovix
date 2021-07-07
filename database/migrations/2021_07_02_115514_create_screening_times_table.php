<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScreeningTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screening_times', function (Blueprint $table) {
            $table->id();
            $table->integer('movie_id');
            $table->date('screening_date');
            $table->time('screen_start_time_1');
            $table->time('screen_end_time_1');
            $table->time('screen_start_time_2')->nullable();
            $table->time('screen_end_time_2')->nullable();
            $table->time('screen_start_time_3')->nullable();
            $table->time('screen_end_time_3')->nullable();
            $table->time('screen_start_time_4')->nullable();
            $table->time('screen_end_time_4')->nullable();
            $table->time('screen_start_time_5')->nullable();
            $table->time('screen_end_time_5')->nullable();
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
        Schema::dropIfExists('screening_times');
    }
}
