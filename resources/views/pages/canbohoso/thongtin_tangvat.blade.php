@extends('layouts.layout_canbo_hoso')

@section('title','Quản lý hồ sơ vi phạm')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông Tin Tang Vật
                </div>
                <div class="panel-body">
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
                        @if( count($danhsachTangvat) <= 0)
                            <tr>
                                <td colspan="11" style="height: 100px">
                                    Không có dữ liệu !
                                </td>
                            </tr>
                        @else
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
                                <td>{{ config('constants.tang_vat.trang_thai')[$tangvat->trang_thai] }}</td>
                                <td>{{ $tangvat->mota }}</td>
                                <td>
                                    <a type="button" class="btn btn-primary btn-edit"
                                       href="{{ route('cb_hoso.chinhsua_tangvat', $tangvat->ma_tangvat) }}">
                                        Chỉnh sửa
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div><!--/.col-->
@endsection


