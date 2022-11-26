<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucLoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('danhmuc_loivipham')->insert([
            'ma_loi' => 'DTH656',
            'ten_loi' => 'Không Chấp Hành Đèn Tín Hiệu',
            'nghi_dinh' => 'Nghị định 46',
            'chitiet_nghidinh' => '',
            'loai_phuongtien' => 'Xe Máy',
            'muc_phat' => '250.000 - 1.000.000',
            'mo_ta' => '',
        ]);
        DB::table('danhmuc_loivipham')->insert([
            'ma_loi' => 'KHL896	',
            'ten_loi' => 'Không Chấp Hành Hiệu Lệnh',
            'nghi_dinh' => 'Nghị định 46',
            'chitiet_nghidinh' => '',
            'loai_phuongtien' => 'Xe Máy',
            'muc_phat' => '800.000 - 1.200.000',
            'mo_ta' => '',
        ]);
        DB::table('danhmuc_loivipham')->insert([
            'ma_loi' => 'DTH657	',
            'ten_loi' => 'Không Chấp Hành Đèn Tín Hiệu',
            'nghi_dinh' => 'Nghị định 46',
            'chitiet_nghidinh' => '',
            'loai_phuongtien' => 'Xe Máy',
            'muc_phat' => '250.000 - 1.000.000',
            'mo_ta' => '',
        ]);
    }
}
