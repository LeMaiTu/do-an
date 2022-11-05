<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NguoiVipham extends Model
{
    use HasFactory;

    protected $table = 'nguoi_vipham';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cmnd',
        'ho_ten',
        'ngay_sinh',
        'gioi_tinh',
        'dia_chi',
        'sdt',
        'email',
    ];
}
