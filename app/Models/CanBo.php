<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class CanBo extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    use HasRoles;

    protected $table = 'can_bo';

    protected $guard_name = 'admin';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'ma_canbo',
        'ten_canbo',
        'role',
        'email',
        'password',
        'account',
        'gioi_tinh',
        'cmnd',
        'chuc_vu',
        'dia_chi',
        'ngay_sinh',
        'sdt',
        'don_vi',
        'hinh_anh',
        'mo_ta',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function danhSachCanbo()
    {
        return $this->all();
    }

    public function thongtinCanbo($ma_canbo)
    {
        return $this->where('ma_canbo', $ma_canbo)->first();
    }

}
