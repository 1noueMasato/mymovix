<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('content')->char('content', 500)->nullable();
            $table->date('screening_start_date')->nullable();
            $table->date('screening_end_date')->nullable();
            $table->string('cast')->nullable();
            $table->string('staff')->nullable();
            $table->integer('eirin_id');
            $table->string('main_img')->nullable();
            $table->string('detail_img_1')->nullable();
            $table->string('detail_img_2')->nullable();
            $table->string('detail_img_3')->nullable();
            $table->string('detail_img_4')->nullable();
            $table->softDeletes();
            $table->timestamps();
            // 改善案1：contentの文字数を増やす。映画の画像（TOP用、詳細用）を読み込めるようにする。
            //改善案2:上映時間。作品の料金、注意事項。削除フラグ。

            // $table->foreign('eirin_id')->references('eirin_id')->on('eirins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
