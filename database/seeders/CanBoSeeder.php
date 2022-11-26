<?php

namespace Database\Seeders;

use App\Models\CanBo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class CanBoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin', 'guard_name' => 'admin']);

        $roleCbHoso = Role::create(['name' => 'cb_hoso', 'guard_name' => 'admin']);

        $roleCbKho = Role::create(['name' => 'cb_kho', 'guard_name' => 'admin']);

        $admin =  CanBo::create([
            'ma_canbo' => 'CB001',
            'ten_canbo' => 'CB001',
            'role' => 'admin',
            'email' => 'admin@yopmail.com',
            'account' => 'ADMIN',
            'password' => bcrypt('1'),
            'gioi_tinh' => '0',
            'cmnd' => '12345678',
            'chuc_vu' => 'chuc vu',
            'dia_chi' => 'dia chi',
            'ngay_sinh' => '2022-11-08',
            'sdt' => '123456789',
            'don_vi' => 'don vi',
            'hinh_anh' => 'hinh anh',
            'mo_ta' => 'mo ta',
        ]);
        $admin->assignRole('admin');

        $cbshoso =  CanBo::create([
            'ma_canbo' => 'CB002',
            'ten_canbo' => 'CB002',
            'role' => 'cb_hoso',
            'email' => 'cbhoso@yopmail.com',
            'account' => 'CBHOSO',
            'password' => bcrypt('1'),
            'gioi_tinh' => '0',
            'cmnd' => '12345678',
            'chuc_vu' => 'chuc vu',
            'dia_chi' => 'dia chi',
            'ngay_sinh' => '2022-11-08',
            'sdt' => '123456789',
            'don_vi' => 'don vi',
            'hinh_anh' => 'hinh anh',
            'mo_ta' => 'mo ta',
        ]);
        $cbshoso->assignRole('cb_hoso');

        $canbokho = CanBo::create([
            'ma_canbo' => 'CB003',
            'ten_canbo' => 'CB003',
            'role' => 'cb_kho',
            'email' => 'cb_kho@yopmail.com',
            'account' => 'CBKHO',
            'password' => bcrypt('1'),
            'gioi_tinh' => '0',
            'cmnd' => '12345678',
            'chuc_vu' => 'chuc vu',
            'dia_chi' => 'dia chi',
            'ngay_sinh' => '2022-11-08',
            'sdt' => '123456789',
            'don_vi' => 'don vi',
            'hinh_anh' => 'hinh anh',
            'mo_ta' => 'mo ta',
        ]);
        $canbokho->assignRole('cb_kho');

        CanBo::create([
            'ma_canbo' => 'CB004',
            'ten_canbo' => 'CB004',
            'role' => 'cb_lapbienban',
            'email' => 'cb_lapbienban@yopmail.com',
            'account' => 'CBLapBienBan',
            'password' => bcrypt('1'),
            'gioi_tinh' => '0',
            'cmnd' => '12345678',
            'chuc_vu' => 'chuc vu',
            'dia_chi' => 'dia chi',
            'ngay_sinh' => '2022-11-08',
            'sdt' => '123456789',
            'don_vi' => 'don vi',
            'hinh_anh' => 'hinh anh',
            'mo_ta' => 'mo ta',
        ]);
    }
}
