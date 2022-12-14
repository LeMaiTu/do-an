<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoSoViPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoso_vipham', function (Blueprint $table) {
            $table->string('ma_hoso')->primary();
            $table->string('ten_hoso');
            $table->date('thoigian_lapbienban');
            $table->string('diadiem_lapbienban');
            $table->string('ma_canbo_lapbienban');
            $table->string('ma_canbo_xuly_hoso');
            $table->integer('cmnd_nguoivipham');
            $table->date('ngaynhap_hoso');
            $table->date('ngayxuly_hoso')->nullable();
            $table->date('ngayhen_xuly');
            $table->integer('thoihan_xuly');
            $table->integer('tinhtrang_hoso')->default(0);
            $table->text('mo_ta')->nullable();
            $table->timestamps();
            $table->foreign('ma_canbo_lapbienban')->references('ma_canbo')->on('can_bo');
            $table->foreign('ma_canbo_xuly_hoso')->references('ma_canbo')->on('can_bo');
            $table->foreign('cmnd_nguoivipham')->references('cmnd')->on('nguoi_vipham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ho_so_vi_pham');
    }
}
