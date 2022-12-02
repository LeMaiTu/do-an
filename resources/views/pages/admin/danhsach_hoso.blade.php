@extends('layouts.layout_admin')

@section('title','Admin')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="panel-body">
{{--            <div class="btn btn-danger" style=" margin-bottom: 10px;">--}}
{{--                Sao Chép Dữ Liệu--}}
{{--            </div>--}}
            <div class="panel-heading">
                Danh Sách Hồ Sơ
            </div>
            <div class="panel panel-default">
                <div class="table-responsive table-scroll panel-body">
                    <table class="table table-striped table-hover text-center" style="width:100%; max-width: 100%">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 100px">Mã Hồ Sơ</th>
                            <th class="text-center" style="width: 100px">Tên Hồ Sơ</th>
                            <th class="text-center" style="width: 150px">Thời Gian Lập BB</th>
                            <th class="text-center" style="width: 150px">Địa Điểm Lập BB</th>
                            <th class="text-center" style="width: 150px">Mã CB Lập BB</th>
                            <th class="text-center" style="width: 150px">Mã CB XLHS</th>
                            <th class="text-center" style="width: 150px">CMND Nguoi Vi Pham</th>
                            <th class="text-center" style="width: 150px">Ngày Nhập Hồ Sơ</th>
                            <th class="text-center" style="width: 150px">Ngày Xử Lý Hồ Sơ</th>
                            <th class="text-center" style="width: 150px">Ngày Hẹn Xử Lý</th>
                            <th class="text-center" style="width: 150px">Thời Hạn Xử Lý</th>
                            <th class="text-center" style="width: 100px">Tình Trạng</th>
                            <th class="text-center" style="width: 150px">Mô Tả</th>
                            <th class="text-center" style="width: 100px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if( count($hosoVipham) <= 0)
                            <tr>
                                <td colspan="14">
                                    Hồ sơ trống!
                                </td>
                            </tr>
                        @else
                            @foreach($hosoVipham as $hoso)
                                <tr>
                                    <td style="width: 100px">{{ $hoso->ma_hoso }}</td>
                                    <td style="width: 100px">{{ $hoso->ten_hoso }}</td>
                                    <td style="width: 150px">{{ date('d/m/Y', strtotime($hoso->thoigian_lapbienban)) }}</td>
                                    <td style="width: 150px">{{ $hoso->diadiem_lapbienban }}</td>
                                    <td style="width: 150px">{{ $hoso->ma_canbo_lapbienban }}</td>
                                    <td style="width: 150px">{{ $hoso->ma_canbo_xuly_hoso }}</td>
                                    <td style="width: 150px">{{ $hoso->cmnd_nguoivipham }}</td>
                                    <td style="width: 150px">{{ date('d/m/Y', strtotime($hoso->ngaynhap_hoso)) }}</td>
                                    <td style="width: 150px">{{ $hoso->ngayxuly_hoso ? date('d/m/Y', strtotime($hoso->ngayxuly_hoso)): null }}</td>
                                    <td style="width: 150px">{{ date('d/m/Y', strtotime($hoso->ngayhen_xuly)) }}</td>
                                    <td style="width: 150px">{{ $hoso->thoihan_xuly }} ngày</td>
                                    <td style="width: 100px">{{ config('constants.hoso_vipham.trang_thai')[$hoso->tinhtrang_hoso] }}</td>
                                    <td style="width: 150px">{{ $hoso->mota }}</td>
                                    <td style="width: 100px">
                                        <a
                                           href="{{ route('admin.chitiet_hoso', $hoso->ma_hoso) }}">
                                            Xem chi tiết
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
@endsection
