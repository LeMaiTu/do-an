<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HosoVipham extends Model
{
    use HasFactory;

    protected $table = 'hoso_vipham';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ma_hoso',
        'ten_hoso',
        'thoigian_lapbienban',
        'diadiem_lapbienban',
        'ma_canbo_lapbienban',
        'ma_canbo_xuly_bienban',
        'cmnd_nguoivipham',
        'ngaynhap_hoso',
        'ngayxuly_hoso',
        'ngayhen_xuly',
        'thoihan_xuly',
        'tinhtrang_hoso',
        'mo_ta',
    ];
}
