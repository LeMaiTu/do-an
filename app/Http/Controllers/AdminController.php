<?php

namespace App\Http\Controllers;

use App\Models\CanBo;
use App\Models\ChitietHosoVipham;
use App\Models\DanhmucLoivipham;
use App\Models\HosoVipham;
use App\Models\NguoiVipham;
use App\Models\ThongTinTangVat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function __construct(
        CanBo $canbo,
        HosoVipham $hosoVipham,
        DanhmucLoivipham $danhmucLoivipham,
        ChitietHosoVipham $chitietHosoVipham,
        NguoiVipham $nguoiVipham,
        ThongTinTangVat $thongTinTangVat
    )
    {
        $this->middleware('auth:admin');
        $this->canbo = $canbo;
        $this->hosoVipham = $hosoVipham;
        $this->danhmucLoivipham = $danhmucLoivipham;
        $this->chitietHosoVipham = $chitietHosoVipham;
        $this->nguoiVipham = $nguoiVipham;
        $this->thongTinTangVat = $thongTinTangVat;
    }

    public function ruleThemCanBo()
    {
        return [
            'ma_canbo' => 'required|string',
            'ten_canbo' => 'required|string',
            'role' => 'required|string',
            'email' => 'required|string',
            'account' => 'required|string',
            'password' => 'required|string',
            'gioi_tinh' => 'required|integer',
            'cmnd' => 'required|integer',
            'chuc_vu' => 'required|string',
            'dia_chi' => 'required|string',
            'ngay_sinh' => 'required|date',
            'sdt' => 'required|string',
            'don_vi' => 'required|string',
            'hinh_anh' => 'required|mimes:jpeg,jpg,png,gif',//|mimes:jpeg,jpg,png,gif
            'mo_ta' => 'nullable|string',
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

    public function ruleThemLoiVipham()
    {
        return [
            'ma_loi' => 'required|string',
            'ten_loi' => 'required|string',
            'nghi_dinh' => 'required|string',
            'chitiet_nghidinh' => 'required|string',
            'loai_phuongtien' => 'required|string',
            'muc_phat' => 'required|string',
            'mo_ta' => 'nullable|string',
        ];
    }

    public function ruleChinhsuaLoiVipham()
    {
        return [
            'ten_loi' => 'required|string',
            'nghi_dinh' => 'required|string',
            'chitiet_nghidinh' => 'required|string',
            'loai_phuongtien' => 'required|string',
            'muc_phat' => 'required|string',
            'mo_ta' => 'nullable|string',
        ];
    }

    public function index(){
        $admin = Auth::guard('admin')->user();
        return view('pages.admin.index', compact(['admin']));
    }

    public function danhSachCanBo(){
        $danhsachCanbo = $this->canbo->all();
        return view('pages.admin.danhsach_canbo', compact(['danhsachCanbo']));
    }

    public function themCanBo(){
        return view('pages.admin.them_canbo');
    }

    public function postThemCanBo(Request $request)
    {
        $request->validate($this->ruleThemCanBo());

        $dataCreate = $request->all();
        $pathSave = '';
        if ($request->hasFile('hinh_anh')) {
            $image      = $request->file('hinh_anh');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            if(Storage::disk('public')->exists('/images/canbo')){
                Storage::disk('public')->makeDirectory('/images/canbo', 0775, true, true);
            }
            $image->storeAs('public/images/canbo', $fileName);
            $pathSave = '/images/canbo/' . $fileName;
        }
        $dataCreate['hinh_anh'] = $pathSave;
        $dataCreate['password'] = bcrypt($dataCreate['password']);
        if ($dataCreate['role'] != 'cb_lapbienban') {
            $canbo = $this->canbo->create($dataCreate);
           $canbo->assignRole($dataCreate['role']);
        } else {
            $this->canbo->create($dataCreate);
        }
        return redirect()->route('admin.them_canbo')->with('success', 'Thêm cán bộ thành công!');
    }

    public function chinhsuaCanbo($ma_cb)
    {
        $canbo = $this->canbo->where([
            'ma_canbo' => $ma_cb
        ])->firstOrFail();
        return view('pages.admin.chinhsua_canbo', compact(['canbo']));
    }

    public function postChinhsuaCanBo(Request $request, $ma_cb)
    {
        $canbo = $this->canbo->where([
            'ma_canbo' => $ma_cb
        ])->firstOrFail();

        $request->validate($this->ruleChinhSuaCanBo());

        $data = $request->all();

        $pathSave = '';

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


        return redirect()->route('admin.chinhsua_canbo', $canbo->ma_canbo)->with('success', 'Cập nhật cán bộ thành công!');
    }

    public function themLoivipham()
    {
        return view('pages.admin.them_loivipham');
    }

    public function postThemLoivipham(Request $request)
    {
        $request->validate($this->ruleThemLoiVipham());

        $data = $request->all();

        $this->danhmucLoivipham->create($data);

        return redirect()->route('admin.them_loi')->with('success', 'Thêm lỗi vi phạm thành công!');
    }

    public function chinhsuaLoivipham($ma_loi)
    {
        $loi = $this->danhmucLoivipham->where([
            'ma_loi' => $ma_loi
        ])->firstOrFail();

        return view('pages.admin.chinhsua_loivipham', compact(['loi']));
    }

    public function postChinhsuaLoivipham(Request $request, $ma_loi)
    {
        $loi = $this->danhmucLoivipham->where([
            'ma_loi' => $ma_loi
        ])->firstOrFail();

        $request->validate($this->ruleChinhsuaLoiVipham());

        $data = $request->all();
        $dataUpdate = [];

        $dataUpdate['ten_loi'] = $data['ten_loi'];
        $dataUpdate['nghi_dinh'] = $data['nghi_dinh'];
        $dataUpdate['chitiet_nghidinh'] = $data['chitiet_nghidinh'];
        $dataUpdate['loai_phuongtien'] = $data['loai_phuongtien'];
        $dataUpdate['muc_phat'] = $data['muc_phat'];
        isset($data['mo_ta']) ? $dataUpdate['mo_ta'] = $data['mo_ta'] : null;

       $this->danhmucLoivipham->where([
           'ma_loi' => $ma_loi
       ])->update($dataUpdate);

        return redirect()->route('admin.chinhsua_loi', $loi->ma_loi)->with('success', 'Chỉnh sửa lỗi vi phạm thành công!');
    }

    public function danhsachHoso(){
        $hosoVipham = $this->hosoVipham->all();
        return view('pages.admin.danhsach_hoso', compact(['hosoVipham']));
    }

    public function chitietHoso($ma_hoso){

        $hoso = $this->hosoVipham->where([
            'ma_hoso' => $ma_hoso,
        ])->firstOrFail();

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

        return view('pages.admin.chitiet_hoso', compact(['hoso', 'chitietHoso', 'danhsachTangvat']));
    }

    public function danhmucLoi(){
        $danhmucLoi = $this->danhmucLoivipham->all();
        return view('pages.admin.danhmuc_loi', compact(['danhmucLoi']));
    }
}
