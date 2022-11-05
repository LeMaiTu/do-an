<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietHosoViphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiet_hoso_vipham', function (Blueprint $table) {
            $table->integer('ma_chitiet_hoso_vipham')->primary();
            $table->string('ma_hoso');
            $table->string('ma_loi');
            $table->integer('phat_hanhchinh');
            $table->text('mo_ta');
            $table->timestamps();
            $table->foreign('ma_loi')->cascadeOnUpdate()->references('ma_loi')->on('danhmuc_loivipham');
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
        Schema::dropIfExists('chitiet_hoso_vipham');
    }
}
