<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class DanhmucLoivipham
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
        'chitie_nghidinh',
        'loai_phuongtien',
        'account',
        'gioi_tinh',
    ];

}
