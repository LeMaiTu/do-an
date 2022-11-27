<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChitietHosoVipham extends Model
{
    use HasFactory;

    protected $table = 'chitiet_hoso_vipham';

    protected $fillable = [
        'ma_hoso',
        'ma_loi_vipham',
        'phat_hanhchinh',
        'mo_ta',
    ];
}
