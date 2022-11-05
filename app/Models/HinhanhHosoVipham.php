<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhanhHosoVipham extends Model
{
    use HasFactory;

    protected $table = 'hinhanh_hoso_vipham';

    protected $fillable = [
        'ma_hinhanh',
        'ma_hoso_vipham',
        'loai_hinhanh',
        'hinhanh',
        'ma_hoso_vipham',
    ];

}
