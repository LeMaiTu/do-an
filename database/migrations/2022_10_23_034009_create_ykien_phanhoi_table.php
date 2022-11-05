<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYkienPhanhoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ykien_phanhoi', function (Blueprint $table) {
            $table->integer('ma_phanhoi')->primary();
            $table->integer('cmnd');
            $table->string('ma_hoso');
            $table->text('noi_dung');
            $table->date('thoi_gian');
            $table->integer('trang_thai');
            $table->timestamps();
            $table->foreign('ma_hoso')->cascadeOnUpdate()->references('ma_hoso')->on('hoso_vipham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ykien_phanhoi');
    }
}
