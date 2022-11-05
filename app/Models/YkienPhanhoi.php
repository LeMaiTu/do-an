<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YkienPhanhoi extends Model
{
    use HasFactory;

    protected $table = 'ykien_phanhoi';

    protected $fillable = [
        'ma_phanhoi',
        'cmnd',
        'ma_hoso',
        'noi_dung',
        'thoi_gian',
        'ma_canbo_xuly_bienban',
        'trang_thai',
    ];
}
