<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhanhHosoViphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh_hoso_vipham', function (Blueprint $table) {
            $table->integer('ma_hinhanh')->primary();
            $table->string('ma_hoso_vipham');
            $table->integer('loai_hinhanh');
            $table->string('hinhanh');
            $table->foreign('ma_hoso_vipham')->references('ma_hoso')->on('hoso_vipham');
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
        Schema::dropIfExists('hinhanh_hoso_vipham');
    }
}
