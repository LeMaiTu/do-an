<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanBoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('can_bo', function (Blueprint $table) {
            $table->id();
            $table->string('ma_canbo')->unique();
            $table->string('ten_canbo');
            $table->string('role'); //ADMIN; CB_HOSO; CB_KHO; CB_LAPBIENBAN;
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('account')->unique();
            $table->string('password');
            $table->integer('gioi_tinh');
            $table->integer('cmnd');
            $table->string('chuc_vu');
            $table->string('dia_chi');
            $table->date('ngay_sinh');
            $table->string('sdt');
            $table->string('don_vi');
            $table->string('hinh_anh');
            $table->string('mo_ta')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('can_bo');
    }
}
