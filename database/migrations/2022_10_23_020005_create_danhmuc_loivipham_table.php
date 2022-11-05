<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhmucLoiviphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhmuc_loivipham', function (Blueprint $table) {
            $table->string('ma_loi')->primary();
            $table->string('ten_loi');
            $table->string('nghi_dinh');
            $table->string('chitie_nghidinh');
            $table->string('loai_phuongtien');
            $table->string('account');
            $table->text('gioi_tinh');
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
        Schema::dropIfExists('danhmuc_loivipham');
    }
}
