@extends('layouts.layout_canbo_kho')

@section('title','Chi tiết hồ sơ')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @include('commons.breadcrumbs',["breadcrumbs"=>[
       'Home' => 'cb_kho.index',
       'Hồ sơ' => 'cb_kho.ho_so_vipham',
       'Chi tiết hồ sơ ' . $hoso->ma_hoso => null
       ]])
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông Tin Hồ Sơ {{ $hoso->ten_hoso }}
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Mã Hồ Sơ:</p>
                            <p class="col-md-8">{{ $hoso->ma_hoso }}</p>
                        </div>
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Tên Hồ Sơ:</p>
                            <p class="col-md-8">{{ $hoso->ten_hoso }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Thời Gian Lập BB:</p>
                            <p class="col-md-8">{{ date('d/m/Y', strtotime($hoso->thoigian_lapbienban)) }}</p>
                        </div>
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Địa Điểm Lập BB:</p>
                            <p class="col-md-8">{{ $hoso->diadiem_lapbienban }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Địa Điểm Lập BB:</p>
                            <p class="col-md-8">{{ $hoso->diadiem_lapbienban }}</p>
                        </div>
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Mã CB Lập BB:</p>
                            <p class="col-md-8">{{ $hoso->ma_canbo_lapbienban }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Mã CB XLHS:</p>
                            <p class="col-md-8">{{ $hoso->ma_canbo_xuly_hoso }}</p>
                        </div>
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">CMND Nguoi Vi Pham:</p>
                            <p class="col-md-8">{{ $hoso->cmnd_nguoivipham }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Ngày Nhập Hồ Sơ:</p>
                            <p class="col-md-8">{{ date('d/m/Y', strtotime($hoso->ngaynhap_hoso)) }}</p>
                        </div>
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Ngày Xử Lý Hồ Sơ:</p>
                            <p
                                class="col-md-8">{{ $hoso->ngayxuly_hoso ? date('d/m/Y', strtotime($hoso->ngayxuly_hoso)): null }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Ngày Hẹn Xử Lý:</p>
                            <p class="col-md-8">{{ date('d/m/Y', strtotime($hoso->ngayhen_xuly)) }}</p>
                        </div>
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Thời Hạn Xử Lý:</p>
                            <p class="col-md-8">{{ $hoso->thoihan_xuly }} ngày</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Tình Trạng:</p>
                            <p
                                class="col-md-8">{{ config('constants.hoso_vipham.trang_thai')[$hoso->tinhtrang_hoso] }}</p>
                        </div>
                        <div class="row col-md-6">
                            <p class="col-md-4 text-right text-bold">Mô Tả:</p>
                            <p class="col-md-8">{{ $hoso->mota }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông Tin Lỗi
                </div>
                <table class="table-fixed table table-striped table-responsive table-hover text-center">
                    <thead>
                    <tr>
                        <th class="text-center">Mã Lỗi</th>
                        <th class="text-center">Tên Lỗi</th>
                        <th class="text-center">Phạt Hành Chính</th>
                        <th class="text-center">Mô Tả</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($chitietHoso as $loi)
                        <tr>
                            <td>{{ $loi->ma_loi_vipham }}</td>
                            <td>{{ $loi->ten_loi }}</td>
                            <td>{{ number_format($loi->phat_hanhchinh, 0, ',', '.') }} VNĐ</td>
                            <td>{{ $loi->mo_ta }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông Tin Tang Vật
                </div>
                <table class="table  table-striped table-responsive table-hover text-center">
                    <thead>
                    <tr>
                        <th class="text-center">Mã Tang Vật</th>
                        <th class="text-center">Tên</th>
                        <th class="text-center">Mã Hồ Sơ</th>
                        <th class="text-center">Mã CB Nhận</th>
                        <th class="text-center">Mã CB Trả</th>
                        <th class="text-center">Ngày giữ</th>
                        <th class="text-center">Thời gian giữ</th>
                        <th class="text-center">Ngày trả</th>
                        <th class="text-center">Trạng thái</th>
                        <th class="text-center">Mô tả</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($danhsachTangvat as $tangvat)
                        <tr>
                            <td>{{ $tangvat->ma_tangvat }}</td>
                            <td>{{ $tangvat->ten_tangvat }}</td>
                            <td>{{ $tangvat->ma_hoso }}</td>
                            <td>{{ $tangvat->ma_canbo_nhan }}</td>
                            <td>{{ $tangvat->ma_canbo_tra }}</td>
                            <td>{{ date('d/m/Y', strtotime($tangvat->ngay_tam_giu)) }}</td>
                            <td>{{ $tangvat->thoigian_tamgiu }} ngày</td>
                            <td>{{ $tangvat->ngaytra_tangvat ? date('d/m/Y', strtotime($tangvat->ngaytra_tangvat)) : null }}</td>
                            <td>{{ $tangvat->trang_thai }}</td>
                            <td>{{ $tangvat->mota }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
