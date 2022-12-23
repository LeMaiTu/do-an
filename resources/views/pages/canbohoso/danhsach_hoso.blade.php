@extends('layouts.layout_canbo_hoso')

@section('title','Quản lý hồ sơ vi phạm')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @include('commons.breadcrumbs',["breadcrumbs"=>[
        'Home' => 'cb_hoso.index',
        'Hồ sơ' => null,
        ]])
        <div class="panel-body">
            <div class="panel panel-default">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {!! \Session::get('success') !!}
                    </div>
                @elseif((Session::has('error')))
                    <div class="alert alert-danger">
                        {!! \Session::get('error') !!}
                    </div>
                @endif
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
                                <td colspan="14" style="height: 100px">
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
                                        @if($hoso->tinhtrang_hoso == 0)
                                            <a class="btn btn-primary my-2"
                                               href="{{ route('cb_hoso.chinhsua_hoso_vipham', $hoso->ma_hoso) }}">
                                                Sửa
                                            </a>
                                            <a class="btn btn-danger my-2"
                                               href="{{ route('cb_hoso.xoa_hoso', $hoso->ma_hoso) }}">
                                                Xóa
                                            </a>
                                            <a class="btn btn-success my-2"
                                               href="{{ route('cb_hoso.capnhat_trangthai', $hoso->ma_hoso) }}">
                                                Xử lý
                                            </a>
                                        @elseif($hoso->tinhtrang_hoso == 1 && $hoso->tangvat_chuaxuly == 0)
                                            <a class="btn btn-danger my-2"
                                               href="{{ route('cb_hoso.capnhat_trangthai', $hoso->ma_hoso) }}">
                                                Hoàn tất
                                            </a>
                                        @endif
                                        <a class="btn my-2"
                                            href="{{ route('cb_hoso.chitiet_hoso', $hoso->ma_hoso) }}">
                                                Chi tiết
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
        <div class="d-flex justify-content-center">
            {{ $hosoVipham->links('vendor.pagination.default') }}
        </div>
    </div><!--/.col-->
@endsection


