<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhmucLoivipham extends Model
{
    use HasFactory;

    protected $table = 'danhmuc_loivipham';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ma_loi',
        'ten_loi',
        'nghi_dinh',
        'chitiet_nghidinh',
        'loai_phuongtien',
        'muc_phat',
        'mo_ta',
    ];

}
