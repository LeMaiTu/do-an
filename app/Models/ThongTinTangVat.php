<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongTinTangVat extends Model
{
    use HasFactory;

    protected $table = 'thongtin_tangvat';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ma_tangvat',
        'ten_tangvat',
        'ma_hoso',
        'ma_canbo_nhan',
        'ma_canbo_tra',
        'ngay_tam_giu',
        'thoigian_tamgiu',
        'ngaytra_tangvat',
        'hinhanh_ky_nhantra',
        'trang_thai',
        'mota',
    ];
}
