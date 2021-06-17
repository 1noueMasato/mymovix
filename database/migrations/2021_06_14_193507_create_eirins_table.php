<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEirinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eirins', function (Blueprint $table) {
            $table->id();
            $table->integer('eirin_id');
            $table->text('eirin_division');
            $table->text('eirin_division_icon');
            $table->string('eirin_division_explain');
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
        Schema::dropIfExists('eirins');
    }
}
