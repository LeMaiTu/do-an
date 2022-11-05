<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongtinTangvatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtin_tangvat', function (Blueprint $table) {
            $table->string('ma_tangvat')->primary();
            $table->string('ten_tangvat');
            $table->string('ma_hoso');
            $table->string('ma_canbo_nhan');
            $table->string('ma_canbo_tra');
            $table->date('ngay_tam_giu');
            $table->integer('thoigian_tamgiu');
            $table->date('ngaytra_tangvat');
            $table->string('hinhanh_ky_nhantra');
            $table->integer('trang_thai');
            $table->text('mota');
            $table->timestamps();
            $table->foreign('ma_hoso')->cascadeOnUpdate()->references('ma_hoso')->on('hoso_vipham');
            $table->foreign('ma_canbo_nhan')->cascadeOnUpdate()->references('ma_canbo')->on('can_bo');
            $table->foreign('ma_canbo_tra')->cascadeOnUpdate()->references('ma_canbo')->on('can_bo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thongtin_tangvat');
    }
}
