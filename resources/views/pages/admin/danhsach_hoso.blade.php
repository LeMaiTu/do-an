@extends('layouts.layout_admin')

@section('title','Admin')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="panel-body">
            <div class="btn btn-danger" style=" margin-bottom: 10px;">
                Sao Chép Dữ Liệu
            </div>
            <div class="panel panel-default">
                @if( count($hosoVipham) <= 0)
                    <p class="panel-body text-center">Hồ sơ trống!</p>
                @else
                    @foreach($hosoVipham as $hoso)
                        <div class="panel-heading text-bold">Hồ Sơ {{ $hoso->ma_hoso }}</div>
                        <div class="panel-body">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-6 col-xl-6">
                                                    <table class="table m-0 table-responsive">
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">Mã Hồ Sơ</th>
                                                            <td>{{ $hoso->ma_hoso }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tên Hồ Sơ</th>
                                                            <td>{{ $hoso->ten_hoso }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Thời Gian Vi Phạm</th>
                                                            <td>{{ date('d/m/Y', strtotime($hoso->thoigian_lapbienban)) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Địa Điểm Vi Phạm</th>
                                                            <td>{{ $hoso->diadiem_lapbienban }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Mã CB Lập Biên bản</th>
                                                            <td>{{ $hoso->ma_canbo_lapbienban }}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->
                                                <div class="col-lg-6 col-xl-6">
                                                    <table class="table table-responsive">
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">Mã Người Vi Phạm</th>
                                                            <td>{{ $hoso->cmnd_nguoivipham }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Ngày Xử Lý Hồ Sơ</th>
                                                            <td>{{ date('d/m/Y', strtotime($hoso->ngaynhap_hoso)) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Mã Cán Bộ Xử Lý Hồ Sơ</th>
                                                            <td>{{ $hoso->ma_canbo_xuly_hoso }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tình Trạng Hồ Sơ</th>
                                                            <td>
                                                                @if($hoso->tinhtrang_hoso == 0)
                                                                    0
                                                                @else
                                                                    1
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Hình Ảnh</th>
                                                            <td><a href="#!">xuly111.jpg</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end of table col-lg-6 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of general info -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
