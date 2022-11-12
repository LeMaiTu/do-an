<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'can_bo';
    
=======
use Spatie\Permission\Traits\HasRoles;

class CanBo extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    use HasRoles;

    protected $table = 'can_bo';

    protected $guard_name = 'admin';

>>>>>>> ee85335e6a752fbb55183dc6deb45b762f031226
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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
        'mota',
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
<<<<<<< HEAD
=======

    public function danhSachCanbo()
    {
        return $this->all();
    }

    public function thongtinCanbo($ma_canbo)
    {
        return $this->where('ma_canbo', $ma_canbo)->first();
    }
>>>>>>> ee85335e6a752fbb55183dc6deb45b762f031226
}
