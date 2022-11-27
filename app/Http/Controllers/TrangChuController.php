<?php

namespace App\Http\Controllers;

use App\Models\CanBo;
use App\Models\ChitietHosoVipham;
use App\Models\DanhmucLoivipham;
use App\Models\HosoVipham;
use App\Models\NguoiVipham;
use App\Models\ThongTinTangVat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TrangChuController extends Controller
{
    public function __construct(
        HosoVipham  $hosoVipham,
        NguoiVipham $nguoiVipham,
        DanhmucLoivipham $danhmucLoivipham,
        ChitietHosoVipham $chitietHosoVipham,
        ThongTinTangVat $thongTinTangVat,
        CanBo $canBo
    )
    {
        $this->hosoVipham = $hosoVipham;
        $this->nguoiVipham = $nguoiVipham;
        $this->danhmucLoivipham = $danhmucLoivipham;
        $this->chitietHosoVipham = $chitietHosoVipham;
        $this->thongTinTangVat = $thongTinTangVat;
        $this->canBo = $canBo;
    }

    public function index(){
        return view('pages.trangchu.index');
    }

    public function ruleSearch()
    {
        return [
//            'cmnd' => 'required',
//            'ho_ten' => 'required',
//            'sdt' => 'required',
//            'email' => 'required',
        ];
    }

    public function search(Request $request) {
        $request->validate($this->ruleSearch());
        try {
            $data = $request->all();
            Log::info($data);
            $nguoiVipham = $this->nguoiVipham
                ->where([
                    'cmnd' => $data['cmnd'],
                    'ho_ten' => $data['ho_ten'],
                    'sdt' => $data['sdt'],
                ])->whereDate('ngay_sinh', $data['ngay_sinh'])
                ->first();
            Log::info($nguoiVipham);
            if (!empty($nguoiVipham->cmnd)) {
                $thongtinHoso = $this->hosoVipham->where([
                    'cmnd_nguoivipham' => $nguoiVipham->cmnd
                ])->get();

                foreach ($thongtinHoso as $hoso) {
                    $tangvat = $this->thongTinTangVat->where([
                        'ma_hoso' => $hoso->ma_hoso
                    ])->get();
                    $hoso->tangvat = $tangvat;

                    $loi = $this->chitietHosoVipham->where([
                            'chitiet_hoso_vipham.ma_hoso' =>$hoso->ma_hoso,
                        ])->select([
                            'chitiet_hoso_vipham.ma_chitiet_hoso_vipham',
                            'chitiet_hoso_vipham.ma_hoso',
                            'chitiet_hoso_vipham.ma_loi_vipham',
                            'chitiet_hoso_vipham.phat_hanhchinh',
                            'chitiet_hoso_vipham.mo_ta',
                            'danhmuc_loivipham.ten_loi',
                        ])
                        ->leftJoin('danhmuc_loivipham', 'chitiet_hoso_vipham.ma_loi_vipham', '=', 'danhmuc_loivipham.ma_loi')
                        ->get();

                    $hoso->loi = $loi;
                }
                return redirect()->route('home')->with([
                    'data' => [$nguoiVipham, $thongtinHoso],
                    'request' => $request->all()
                ]);
            } else {
                return redirect()->route('home')->with([
                    'message' => 'Không có dữ liệu!',
                    'request' => $request->all()
                ]);
            }
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('home')->with([
                'message' => 'Không có dữ liệu!',
                'request' => $request->all()
            ]);
        }
    }
}
