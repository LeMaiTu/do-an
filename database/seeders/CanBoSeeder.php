<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CanBoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('can_bo')->insert([
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
            'mota' => 'mo ta',
        ]);
        DB::table('can_bo')->insert([
            'ma_canbo' => 'CB002',
            'ten_canbo' => 'CB002',
            'role' => 'admin',
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
            'mota' => 'mo ta',
        ]);
        DB::table('can_bo')->insert([
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
            'mota' => 'mo ta',
        ]);
    }
}
