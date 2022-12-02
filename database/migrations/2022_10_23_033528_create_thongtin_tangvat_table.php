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
            $table->string('ma_canbo_nhan')->nullable();
            $table->string('ma_canbo_tra')->nullable();
            $table->date('ngay_tam_giu');
            $table->integer('thoigian_tamgiu');
            $table->date('ngaytra_tangvat')->nullable();
            $table->string('hinhanh_ky_nhantra')->nullable();
            $table->integer('trang_thai')->default(0);
            $table->text('mota')->nullable();
            $table->timestamps();
            $table->foreign('ma_hoso')->references('ma_hoso')->on('hoso_vipham');
            $table->foreign('ma_canbo_nhan')->references('ma_canbo')->on('can_bo');
            $table->foreign('ma_canbo_tra')->references('ma_canbo')->on('can_bo');
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
