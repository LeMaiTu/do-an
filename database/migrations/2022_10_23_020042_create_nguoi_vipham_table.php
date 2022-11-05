<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoiViphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_vipham', function (Blueprint $table) {
            $table->integer('cmnd')->primary();
            $table->string('ho_ten');
            $table->date('ngay_sinh');
            $table->integer('gioi_tinh');
            $table->string('dia_chi');
            $table->string('sdt');
            $table->string('email');
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
        Schema::dropIfExists('nguoi_vipham');
    }
}
