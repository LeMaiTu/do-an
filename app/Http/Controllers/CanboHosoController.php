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

class CanboHosoController extends Controller
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
            'hosovipham.ngaynhap_hoso' => 'required',
            'hosovipham.thoihan_xuly' => 'required',
            'hosovipham.ngayhen_xuly' => 'required',
            'hosovipham.ma_canbo_xuly_hoso' => 'required',
            'hosovipham.mo_ta' => 'nullable',

            // validate thông tin tang vật
            'tangvat' => 'array|required',
            'tangvat.*.ma_tangvat' => 'required',
            'tangvat.*.ten_tangvat' => 'required',
            'tangvat.*.ngay_tam_giu' => 'required',
            'tangvat.*.thoigian_tamgiu' => 'required',
            'tangvat.*.mota' => 'nullable|string',

            // validate thông tin lỗi
            'loivipham' => 'array|required',
            'loivipham.*.ma_loi_vipham' => 'required',
            'loivipham.*.phat_hanhchinh' => 'required',
            'loivipham.*.mo_ta' => 'nullable|string',
        ];
    }

    public function ruleChinhsuaHoso() {
        return [
            // validate người vi phạm
            'nguoivipham' => 'array|required',
            'nguoivipham.ho_ten' => 'required',
            'nguoivipham.gioi_tinh' => 'required',
            'nguoivipham.ngay_sinh' => 'required',
            'nguoivipham.dia_chi' => 'required',
            'nguoivipham.sdt' => 'required',
            'nguoivipham.email' => 'required',

            // validate hồ sơ vi phạm
            'hosovipham' => 'array|required',
            'hosovipham.ten_hoso' => 'required',
            'hosovipham.thoigian_lapbienban' => 'required',
            'hosovipham.diadiem_lapbienban' => 'required',
            'hosovipham.ma_canbo_lapbienban' => 'required',
            'hosovipham.ngaynhap_hoso' => 'required',
            'hosovipham.thoihan_xuly' => 'required',
            'hosovipham.ngayhen_xuly' => 'required',
            'hosovipham.ma_canbo_xuly_hoso' => 'required',
            'hosovipham.mo_ta' => 'nullable',

            // validate thông tin tang vật
            'tangvat' => 'array|required',
            'tangvat.*.ma_tangvat' => 'required',
            'tangvat.*.ten_tangvat' => 'required',
            'tangvat.*.ngay_tam_giu' => 'required',
            'tangvat.*.thoigian_tamgiu' => 'required',
            'tangvat.*.mota' => 'nullable|string',

            // validate thông tin lỗi
            'loivipham' => 'array|required',
            'loivipham.*.ma_loi_vipham' => 'required',
            'loivipham.*.phat_hanhchinh' => 'required',
            'loivipham.*.mo_ta' => 'nullable|string',
        ];
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

    public function index()
    {
        $cb_hoso = auth('admin')->user();
        return view('pages.canbohoso.index', compact(['cb_hoso']));
    }

    public function taoHosoVipham()
    {
        $danhmucloi = $this->danhmucLoivipham->all();
        $canboLapbb = $this->canBo->where([
            'role' => config('constants.loaicanbo')[3],
        ])->get();
        return view('pages.canbohoso.tao_hoso_vipham', compact(['danhmucloi', 'canboLapbb']));
    }

    public function postTaoHosoVipham(Request $request)
    {
        $request->validate($this->ruleTaoHoso());

        try {
            DB::beginTransaction();
            $data = $request->all();

            $dataNguoiVipham = $data['nguoivipham'];

            $nguoivipham = $this->nguoiVipham->where([
                'cmnd' => $dataNguoiVipham['cmnd']
            ])->first();

            if (empty($nguoivipham->cmnd)) {
                $cmndNguoiVipham = $this->nguoiVipham->create($dataNguoiVipham)->cmnd;
            } else {
                $this->nguoiVipham->where([
                    'cmnd' => $dataNguoiVipham['cmnd']
                ])->update($dataNguoiVipham);
                $cmndNguoiVipham = $nguoivipham->cmnd;
            }


            $dataHosoVipham = $data['hosovipham'];
            $dataHosoVipham['cmnd_nguoivipham'] = $cmndNguoiVipham;

            $hosoVipham = $this->hosoVipham->create($dataHosoVipham);

            foreach ($data['tangvat'] as $tangvat) {
                $tangvat['ma_hoso'] = $hosoVipham->ma_hoso;
                $tangvat['ngay_tam_giu'] = date('Y-m-d');
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

    public function chinhsuaHosoVipham($ma_hoso) {
        $hoso = $this->hosoVipham->where([
            'ma_hoso' => $ma_hoso,
            'tinhtrang_hoso' => 0,
        ])->firstOrFail();

        $nguoivipham = NguoiVipham::where([
            'cmnd' => $hoso->cmnd_nguoivipham,
        ])->first();

        $danhmucloi = $this->danhmucLoivipham->all();
        $canboLapbb = $this->canBo->where([
            'role' => config('constants.loaicanbo')[3],
        ])->get();

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

        return view('pages.canbohoso.chinhsua_hoso_vipham', compact(['hoso', 'danhmucloi', 'danhsachTangvat', 'canboLapbb', 'nguoivipham', 'chitietHoso']));
    }

    public function postChinhsuaHosoVipham(Request $request, $ma_hoso)
    {
        $request->validate($this->ruleChinhsuaHoso());

        try {
            DB::beginTransaction();
            $data = $request->all();

            $hosoVipham = $this->hosoVipham::where([
                'ma_hoso' => $ma_hoso,
                'tinhtrang_hoso' => 0,
            ])->firstOrFail();

            $dataNguoiVipham = $data['nguoivipham'];

            $this->nguoiVipham->where([
                'cmnd' => $hosoVipham->cmnd_nguoivipham
            ])->update($dataNguoiVipham);

            $dataHosoVipham = $data['hosovipham'];

            $this->hosoVipham::where([
                'ma_hoso' => $ma_hoso
            ])->update($dataHosoVipham);

            $this->thongTinTangVat::where([
                'ma_hoso' => $hosoVipham->ma_hoso
            ])->delete();

            $this->chitietHosoVipham::where([
                'ma_hoso' => $hosoVipham->ma_hoso
            ])->delete();

            foreach ($data['tangvat'] as $tangvat) {
                $tangvat['ma_hoso'] = $hosoVipham->ma_hoso;
                $tangvat['ngay_tam_giu'] = date('Y-m-d');
                $this->thongTinTangVat->create($tangvat);
            }

            foreach ($data['loivipham'] as $loivipham) {
                $loivipham['ma_hoso'] = $hosoVipham->ma_hoso;
                $this->chitietHosoVipham->create($loivipham);
            }

            DB::commit();
            return redirect()->route('cb_hoso.chinhsua_hoso_vipham', $ma_hoso)->with('success', 'Cập nhật hồ sơ thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            return redirect()->route('cb_hoso.chinhsua_hoso_vipham', $ma_hoso)->with('error', 'Cập nhật hồ sơ thất bại. Đã xảy ra lỗi hệ thống!');
        }
    }

    public function chinhsuaCanbo($ma_cb)
    {
        $canbo = $this->canBo->where([
            'ma_canbo' => $ma_cb
        ])->firstOrFail();

        return view('pages.canbohoso.chinhsua_canbo', compact(['canbo']));
    }

    public function capnhatTrangthai($ma_hoso){
        try {
            $hoso = $this->hosoVipham::where([
                'ma_hoso' => $ma_hoso,
            ])->firstOrFail();
            $status = $hoso->tinhtrang_hoso;
            switch ($status) {
                case 0:
                    $this->hosoVipham->where([
                        'ma_hoso' => $ma_hoso,
                    ])->update(['tinhtrang_hoso' => 1]);
                    break;
                case 1:
                    $this->hosoVipham->where([
                        'ma_hoso' => $ma_hoso,
                    ])->update(['tinhtrang_hoso' => 2]);
                    break;
                case 2:
                    break;
            }
            return redirect()->route('cb_hoso.ho_so_vipham')->with('success', 'Cập nhật trạng thái thành công!');
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('cb_hoso.ho_so_vipham')->with('success', 'Cập nhật trạng thái thất bại!');
        }
    }

    public function xoaHoso($ma_hoso) {
        try {
            $hoso = $this->hosoVipham::where([
                'ma_hoso' => $ma_hoso,
            ])->firstOrFail();

            $this->thongTinTangVat::where([
                'ma_hoso' => $hoso->ma_hoso
            ])->delete();

            $this->chitietHosoVipham::where([
                'ma_hoso' => $hoso->ma_hoso
            ])->delete();

            $this->hosoVipham::where([
                'ma_hoso' => $ma_hoso,
            ])->delete();
            return redirect()->route('cb_hoso.ho_so_vipham')->with('success', 'Xóa hồ sơ thành công!');
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('cb_hoso.ho_so_vipham')->with('error', 'Xóa hồ sơ thất bại!');
        }
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

            return redirect()->route('cb_hoso.chinhsua_canbo', $canbo->ma_canbo)->with('success', 'Cập nhật cán bộ thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            return redirect()->route('cb_hoso.chinhsua_canbo', $canbo->ma_canbo)->with('error', 'Cập nhật cán bộ thất bại. Đã xảy lỗi hệ thống!');
        }
    }

    public function danhsachHoso()
    {
        $hosoVipham = $this->hosoVipham
            ->addSelect([
                'tangvat_chuaxuly' => ThongTinTangVat::selectRaw('COUNT(*)')
                                        ->whereColumn('thongtin_tangvat.ma_hoso', 'hoso_vipham.ma_hoso')
                                        ->where('thongtin_tangvat.trang_thai', '<>', 2)
            ])
            ->paginate(10);
        return view('pages.canbohoso.danhsach_hoso', compact('hosoVipham'));
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

        return view('pages.canbohoso.chitiet_hoso', compact(['hoso', 'chitietHoso', 'danhsachTangvat', 'nguoiVipham']));
    }

    public function danhsachNguoiViPham()
    {
        $danhsachNguoivipham = $this->nguoiVipham->paginate(10);
        return view('pages.canbohoso.danhsach_nguoi_vipham', compact(['danhsachNguoivipham']));
    }

    public function chinhsuaNguoiVipham($cmnd)
    {
        $nguoivipham = $this->nguoiVipham->where([
            'cmnd' => $cmnd
        ])->firstOrFail();

        return view('pages.canbohoso.chinhsua_nguoivipham', compact(['nguoivipham']));
    }

    public function ruleChinhsuaNguoivipham()
    {
        return [
            'ho_ten' => 'required|string',
            'email' => 'required|string',
            'ngay_sinh' => 'required|date',
            'gioi_tinh' => 'required|string',
            'dia_chi' => 'required|string',
            'sdt' => 'required|string',
        ];
    }

    public function postChinhsuaNguoiVipham(Request $request, $cmnd)
    {
        $nguoivipham = $this->nguoiVipham->where([
            'cmnd' => $cmnd
        ])->firstOrFail();

        $request->validate($this->ruleChinhsuaNguoivipham());

        try {
            DB::beginTransaction();

            $data = $request->all();
            $dataUpdate = [];

            $dataUpdate['ho_ten'] = $data['ho_ten'];
            $dataUpdate['email'] = $data['email'];
            $dataUpdate['ngay_sinh'] = $data['ngay_sinh'];
            $dataUpdate['gioi_tinh'] = $data['gioi_tinh'];
            $dataUpdate['dia_chi'] = $data['dia_chi'];
            $dataUpdate['sdt'] = $data['sdt'];

            $this->nguoiVipham->where([
                'cmnd' => $nguoivipham->cmnd
            ])->update($dataUpdate);

            DB::commit();

            return redirect()->route('cb_hoso.chinhsua_nguoivipham', $nguoivipham->cmnd)->with('success', 'Chỉnh sửa người vi phạm thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            return redirect()->route('cb_hoso.chinhsua_nguoivipham', $nguoivipham->cmnd)->with('error', 'Chỉnh sửa người vi phạm thất bại. Đã xảy ra lỗi hệ thống!');
        }
    }

    public function chinhsuaTangvat($ma_tangvat)
    {
        $tangvat = $this->thongTinTangVat->where([
            'ma_tangvat' => $ma_tangvat
        ])->firstOrFail();

        return view('pages.canbohoso.chinhsua_tangvat', compact(['tangvat']));
    }

    public function ruleChinhsuaTangvat()
    {
        return [
            'ten_tangvat' => 'required|string',
            'ngay_tam_giu' => 'required|date',
            'thoigian_tamgiu' => 'required|integer',
            'trang_thai' => 'required|string',
        ];
    }

    public function postChinhsuaTangvat(Request $request, $ma_tangvat)
    {
        $tangvat = $this->thongTinTangVat->where([
            'ma_tangvat' => $ma_tangvat
        ])->firstOrFail();

        $request->validate($this->ruleChinhsuaTangvat());

        try {
            DB::beginTransaction();

            $data = $request->all();
            $dataUpdate = [];

            $dataUpdate['ten_tangvat'] = $data['ten_tangvat'];
            $dataUpdate['ngay_tam_giu'] = $data['ngay_tam_giu'];
            $dataUpdate['thoigian_tamgiu'] = $data['thoigian_tamgiu'];
            $dataUpdate['trang_thai'] = $data['trang_thai'];

            $this->thongTinTangVat->where([
                'ma_tangvat' => $tangvat->ma_tangvat
            ])->update($dataUpdate);

            DB::commit();

            return redirect()->route('cb_hoso.chinhsua_tangvat', $tangvat->ma_tangvat)->with('success', 'Chỉnh sửa tang vật thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            return redirect()->route('cb_hoso.chinhsua_tangvat', $tangvat->ma_tangvat)->with('error', 'Chỉnh sửa tang vật thất bại. Đã xảy ra lỗi hệ thống!');
        }
    }

    public function thongtinTangvat()
    {
        $danhsachTangvat = $this->thongTinTangVat->paginate(10);
        return view('pages.canbohoso.thongtin_tangvat', compact('danhsachTangvat'));
    }
}
