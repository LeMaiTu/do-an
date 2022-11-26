<?php

namespace App\Http\Controllers;

use App\Models\ChitietHosoVipham;
use App\Models\DanhmucLoivipham;
use App\Models\HosoVipham;
use App\Models\NguoiVipham;
use App\Models\ThongTinTangVat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CanboHosoController extends Controller
{
    public function __construct(
        HosoVipham  $hosoVipham,
        NguoiVipham $nguoiVipham,
        DanhmucLoivipham $danhmucLoivipham,
        ChitietHosoVipham $chitietHosoVipham,
        ThongTinTangVat $thongTinTangVat
    )
    {
        $this->hosoVipham = $hosoVipham;
        $this->nguoiVipham = $nguoiVipham;
        $this->danhmucLoivipham = $danhmucLoivipham;
        $this->chitietHosoVipham = $chitietHosoVipham;
        $this->thongTinTangVat = $thongTinTangVat;
    }

    public function ruleTaoHoso()
    {
        return [
            // validate người vi phạm
            'nguoivipham' => 'array|required',
            'nguoivipham.cmnd' => 'required',
            'nguoivipham.ho_ten' => 'required',
            'nguoivipham.gioi_tinh' => 'required',
            'nguoivipham.ngay_sinh' => 'required',
            'nguoivipham.dia_chi' => 'required',
            'nguoivipham.sdt' => 'required',
            'nguoivipham.email' => 'required',

            // validate hồ sơ vi phạm
            'hosovipham' => 'array|required',
            'hosovipham.ma_hoso' => 'required',
            'hosovipham.ten_hoso' => 'required',
            'hosovipham.thoigian_lapbienban' => 'required',
            'hosovipham.diadiem_lapbienban' => 'required',
            'hosovipham.ma_canbo_lapbienban' => 'required',
            'hosovipham.ngay_nhaphoso' => 'required',
            'hosovipham.ngayhen_xuly' => 'required',
            'hosovipham.ma_canbo_xuly' => 'required',
            'hosovipham.mo_ta' => 'nullable',

            // validate thông tin tang vật
            'tangvat' => 'array|required',
            'tangvat.*.ma_tangvat' => 'required',
            'tangvat.*.ten_tangvat' => 'required',
            'tangvat.*.ngay_tamgiu' => 'required',
            'tangvat.*.thoigian_tamgiu' => 'required',
            'tangvat.*.mota' => 'nullable|string',

            // validate thông tin lỗi
            'loivipham' => 'array|required',
            'loivipham.*.ma_loi' => 'required',
            'loivipham.*.phat_hanhchinh' => 'required',
            'loivipham.*.mo_ta' => 'nullable|string',
        ];
    }
    public function index()
    {
        $cb_hoso = auth('admin')->user();
        return view('pages.canbohoso.index', compact(['cb_hoso']));
    }

    public function taoHosoVipham()
    {
        $danhmucloi = $this->danhmucLoivipham->all();
        return view('pages.canbohoso.tao_hoso_vipham', compact(['danhmucloi']));
    }

    public function postTaoHosoVipham(Request $request)
    {
//        dd($request->all());
        $request->validate($this->ruleTaoHoso());

        try {
            DB::beginTransaction();
            $data = $request->all();

            $dataNguoiVipham = $data['nguoivipham'];
            $cmndNguoiVipham = $this->nguoiVipham->create($dataNguoiVipham)->cmnd;

            $dataHosoVipham = $data['hosovipham'];
            $dataHosoVipham['cmnd_nguoivipham'] = $cmndNguoiVipham;

            $hosoVipham = $this->hosoVipham->create($dataHosoVipham);

            foreach ($data['tangvat'] as $tangvat) {
                $tangvat['ma_hoso'] = $hosoVipham->ma_hoso;
                $this->thongTinTangVat->create($tangvat);
            }

            foreach ($data['loivipham'] as $loivipham) {
                $loivipham['ma_hoso'] = $hosoVipham->ma_hoso;
                $this->chitietHosoVipham->create($loivipham);
            }

            DB::commit();
            return redirect()->route('cb_hoso.tao_hoso_vipham')->with('success', 'Tạo hồ sơ thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            return redirect()->route('cb_hoso.tao_hoso_vipham')->with('error', 'Tạo hồ sơ thất bại. Đã xảy ra lỗi hệ thống!');
        }
    }

    public function danhsachHoso()
    {
        return view('pages.canbohoso.danhsach_hoso');
    }

    public function danhsachNguoiViPham()
    {
        return view('pages.canbohoso.danhsach_nguoi_vipham');
    }

    public function thongtinTangvat()
    {
        return view('pages.canbohoso.thongtin_tangvat');
    }
}
