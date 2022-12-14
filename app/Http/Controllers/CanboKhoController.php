<?php

namespace App\Http\Controllers;

use App\Models\CanBo;
use App\Models\ChitietHosoVipham;
use App\Models\DanhmucLoivipham;
use App\Models\HosoVipham;
use App\Models\NguoiVipham;
use App\Models\ThongTinTangVat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CanboKhoController extends Controller
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
        $this->middleware('auth:admin');
        $this->hosoVipham = $hosoVipham;
        $this->nguoiVipham = $nguoiVipham;
        $this->danhmucLoivipham = $danhmucLoivipham;
        $this->chitietHosoVipham = $chitietHosoVipham;
        $this->thongTinTangVat = $thongTinTangVat;
        $this->canBo = $canBo;
    }

    public function index()
    {
        $cb_kho = auth('admin')->user();
        return view('pages.canbokho.index', compact(['cb_kho']));
    }


    public function chinhsuaCanbo($ma_cb)
    {
        $canbo = $this->canBo->where([
            'ma_canbo' => $ma_cb
        ])->firstOrFail();

        return view('pages.canbokho.chinhsua_canbo', compact(['canbo']));
    }

    public function ruleChinhSuaCanBo()
    {
        return [
            'ten_canbo' => 'required|string',
            'email' => 'required|string',
            'account' => 'required|string',
            'password' => 'nullable|string',
            'gioi_tinh' => 'required|integer',
            'cmnd' => 'required|integer',
            'chuc_vu' => 'required|string',
            'dia_chi' => 'required|string',
            'ngay_sinh' => 'required|date',
            'sdt' => 'required|string',
            'don_vi' => 'required|string',
            'hinh_anh' => 'nullable|mimes:jpeg,jpg,png,gif',//|mimes:jpeg,jpg,png,gif
            'mo_ta' => 'nullable|string',
        ];
    }

    public function postChinhsuaCanBo(Request $request, $ma_cb)
    {
        $canbo = $this->canBo->where([
            'ma_canbo' => $ma_cb
        ])->firstOrFail();

        $request->validate($this->ruleChinhSuaCanBo());

        try {
            $data = $request->all();

            $pathSave = '';
            DB::beginTransaction();

            if ($request->hasFile('hinh_anh')) {
                $image      = $request->file('hinh_anh');
                $fileName   = time() . '.' . $image->getClientOriginalExtension();

                if (Storage::disk('public')->exists('/images/canbo')) {
                    Storage::disk('public')->makeDirectory('/images/canbo', 0775, true, true);
                }

                $old_path = $canbo->hinh_anh;

                if (Storage::disk('public')->exists($old_path)) {
                    Storage::disk('public')->delete($old_path);
                }

                $image->storeAs('public/images/canbo', $fileName);
                $pathSave = '/images/canbo/' . $fileName;
                $canbo['hinh_anh'] = $pathSave;
            }

            !empty($data['password']) ? $canbo['password'] = bcrypt($data['password']) : null;
            $canbo['ten_canbo'] = $data['ten_canbo'];
            $canbo['email'] = $data['email'];
            $canbo['account'] = $data['account'];
            $canbo['cmnd'] = $data['cmnd'];
            $canbo['gioi_tinh'] = $data['gioi_tinh'];
            $canbo['chuc_vu'] = $data['chuc_vu'];
            $canbo['dia_chi'] = $data['dia_chi'];
            $canbo['ngay_sinh'] = $data['ngay_sinh'];
            $canbo['sdt'] = $data['sdt'];
            $canbo['dia_chi'] = $data['dia_chi'];
            $canbo['don_vi'] = $data['don_vi'];
            isset($data['mo_ta']) ? $canbo['mo_ta'] = $data['don_vi'] : null;

            $canbo->save();
            $canbo->refresh();
            DB::commit();

            return redirect()->route('cb_kho.chinhsua_canbo', $canbo->ma_canbo)->with('success', 'C???p nh???t c??n b??? th??nh c??ng!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            return redirect()->route('cb_kho.chinhsua_canbo', $canbo->ma_canbo)->with('error', 'C???p nh???t c??n b??? th???t b???i. ???? x???y l???i h??? th???ng!');
        }
    }

    public function danhsachTangvat()
    {
        $danhsachTangvat = $this->thongTinTangVat
            ->select('thongtin_tangvat.*', 'hoso_vipham.tinhtrang_hoso')
            ->where('trang_thai', '>', 0)
            ->join('hoso_vipham', 'hoso_vipham.ma_hoso', 'thongtin_tangvat.ma_hoso')
            ->where('hoso_vipham.tinhtrang_hoso', '>', 0)->paginate(10);
        return view('pages.canbokho.danhsach_tangvat', compact(['danhsachTangvat']));
    }

    public function nhanTangvat()
    {
        $danhsachTangvat = $this->thongTinTangVat
            ->select('thongtin_tangvat.*', 'hoso_vipham.tinhtrang_hoso')
            ->where([
                'trang_thai' => 0,
            ])->join('hoso_vipham', 'hoso_vipham.ma_hoso', 'thongtin_tangvat.ma_hoso')
            ->where('hoso_vipham.tinhtrang_hoso', '>', 0)
            ->paginate(10);

        return view('pages.canbokho.nhan_tangvat', compact(['danhsachTangvat']));
    }

    public function nhanTangvatAction($ma_tangvat){
        try {
            $this->thongTinTangVat->where([
                'ma_tangvat' => $ma_tangvat,
                'trang_thai' => 0,
            ])->update([
                'trang_thai' => 1,
                'ma_canbo_nhan' => auth('admin')->user()->ma_canbo,
            ]);
            return redirect()->route('cb_kho.nhan_tangvat')->with('success', '???? x??c nh???n!');
        } catch (\Exception $e) {
            return redirect()->route('cb_kho.nhan_tangvat')->with('error', 'Ch??a x??c nh???n. ???? x???y l???i h??? th???ng!');
        }
    }

    public function traTangvatAction($ma_tangvat){
        try {
            $this->thongTinTangVat->where([
                'ma_tangvat' => $ma_tangvat,
                'trang_thai' => 1,
            ])->update([
                'trang_thai' => 2,
                'ma_canbo_tra' => auth('admin')->user()->ma_canbo,
            ]);
            return redirect()->route('cb_kho.danhsach_tangvat')->with('success', '???? x??c nh???n!');
        } catch (\Exception $e) {
            return redirect()->route('cb_kho.danhsach_tangvat')->with('error', 'Ch??a x??c nh???n. ???? x???y l???i h??? th???ng!');
        }
    }

    public function chinhsuaTangvat($ma_tangvat)
    {
        $tangvat = $this->thongTinTangVat->where([
            'ma_tangvat' => $ma_tangvat,
            'trang_thai' => 0,
        ])->firstOrFail();

        return view('pages.canbokho.chinhsua_tangvat', compact(['tangvat']));
    }

    public function ruleChinhsuaTangvat()
    {
        return [
            'ten_tangvat' => 'required|string',
            'mota' => 'nullable|string'
        ];
    }

    public function postChinhsuaTangvat(Request $request, $ma_tangvat)
    {
        $tangvat = $this->thongTinTangVat->where([
            'ma_tangvat' => $ma_tangvat,
            'trang_thai' => 0,
        ])->firstOrFail();

        $request->validate($this->ruleChinhsuaTangvat());

        try {
            DB::beginTransaction();

            $data = $request->all();
            $dataUpdate = [];

            $dataUpdate['ten_tangvat'] = $data['ten_tangvat'];
            $dataUpdate['mota'] = $data['mota'];

            $this->thongTinTangVat->where([
                'ma_tangvat' => $tangvat->ma_tangvat
            ])->update($dataUpdate);

            DB::commit();

            return redirect()->route('cb_kho.chinhsua_tangvat', $tangvat->ma_tangvat)->with('success', 'Ch???nh s???a tang v???t th??nh c??ng!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            return redirect()->route('cb_kho.chinhsua_tangvat', $tangvat->ma_tangvat)->with('error', 'Ch???nh s???a tang v???t th???t b???i. ???? x???y ra l???i h??? th???ng!');
        }
    }

    public function danhsachHoso()
    {
        $hosoVipham = $this->hosoVipham->paginate(10);
        return view('pages.canbokho.danhsach_hoso', compact('hosoVipham'));
    }

    public function chitietHoso($ma_hoso){

        $hoso = $this->hosoVipham->where([
            'ma_hoso' => $ma_hoso,
        ])->firstOrFail();

        $nguoiVipham = $this->nguoiVipham->where([
            'cmnd' => $hoso->cmnd_nguoivipham,
        ])->first();

        $chitietHoso = $this->chitietHosoVipham->where([
            'chitiet_hoso_vipham.ma_hoso' => $ma_hoso,
        ])
            ->select([
                'chitiet_hoso_vipham.ma_chitiet_hoso_vipham',
                'chitiet_hoso_vipham.ma_hoso',
                'chitiet_hoso_vipham.ma_loi_vipham',
                'chitiet_hoso_vipham.phat_hanhchinh',
                'chitiet_hoso_vipham.mo_ta',
                'danhmuc_loivipham.ten_loi',
            ])
            ->join('danhmuc_loivipham', 'chitiet_hoso_vipham.ma_loi_vipham', '=', 'danhmuc_loivipham.ma_loi')
            ->get();

        $danhsachTangvat = $this->thongTinTangVat->where([
            'ma_hoso' => $ma_hoso,
        ])->get();

        return view('pages.canbokho.chitiet_hoso', compact(['hoso', 'chitietHoso', 'danhsachTangvat', 'nguoiVipham']));
    }
}
