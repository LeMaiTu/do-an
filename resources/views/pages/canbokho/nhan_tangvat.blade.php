@extends('layouts.layout_canbo_kho')

@section('title','Quản lý tang vật')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @include('commons.breadcrumbs',["breadcrumbs"=>[
       'Home' => 'cb_kho.index',
       'Tang vật' => null,
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
                            <th></th>
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
                                    <td>
                                        <a
                                            href="{{ route('cb_kho.chitiet_hoso', $tangvat->ma_hoso) }}">
                                            {{ $tangvat->ma_hoso }}
                                        </a>
                                    </td>
                                    <td>{{ $tangvat->ma_canbo_nhan }}</td>
                                    <td>{{ $tangvat->ma_canbo_tra }}</td>
                                    <td>{{ date('d/m/Y', strtotime($tangvat->ngay_tam_giu)) }}</td>
                                    <td>{{ $tangvat->thoigian_tamgiu }} ngày</td>
                                    <td>{{ $tangvat->ngaytra_tangvat ? date('d/m/Y', strtotime($tangvat->ngaytra_tangvat)) : null }}</td>
                                    <td>{{ config('constants.tang_vat.trang_thai')[$tangvat->trang_thai] }}</td>
                                    <td>{{ $tangvat->mota }}</td>
                                    <td>
                                        <div style="display: flex; flex-direction: column;">
                                            <a style="width: 80px" type="button" class="btn btn-danger my-2"
                                               href="{{ route('cb_kho.chinhsua_tangvat', $tangvat->ma_tangvat) }}">
                                                Chỉnh sửa
                                            </a>
                                            <a style="width: 80px" type="button" class="btn btn-primary my-2"
                                               href="{{ route('cb_kho.nhan_tangvat_action', $tangvat->ma_tangvat) }}">
                                                Nhận
                                            </a>
                                        </div>
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
            {{ $danhsachTangvat->links('vendor.pagination.default') }}
        </div>
    </div>
@endsection
