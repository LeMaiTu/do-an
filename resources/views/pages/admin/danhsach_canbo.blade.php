@extends('layouts.layout_admin')

@section('title','Admin')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @include('commons.breadcrumbs',["breadcrumbs"=>[
        'Home' => 'admin.index',
        'Cán bộ' => null,
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
                    Thông Tin Cán Bộ
                </div>
                <table class="table  table-striped table-responsive table-hover text-center">
                    <thead>
                    <tr>
                        <th class="text-center">Mã Cán Bộ</th>
                        <th class="text-center">Tên Cán Bộ</th>
                        <th class="text-center">Hình Ảnh</th>
                        <th class="text-center">Loại Cán Bộ</th>
                        <th class="text-center">Chứng Minh Thư</th>
                        <th class="text-center">Chức Vụ</th>
                        <th class="text-center">Địa Chỉ</th>
                        <th class="text-center">Đơn Vị</th>
                        <th class="text-center">Ngày sinh</th>
                        <th class="text-center">Số Điện Thoại</th>
                        <th class="text-center">Mô tả</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($danhsachCanbo as $canbo)
                        <tr>
                            <td>{{ $canbo->ma_canbo }}</td>
                            <td>{{ $canbo->ten_canbo }}</td>
                            <td>
                                <div class="profile-userpic">
                                    @if(file_exists(public_path() . '/storage/' . $canbo->hinh_anh))
                                        <img src="{{ asset('storage/' . $canbo->hinh_anh ) }}"
                                             class="img-responsive" alt="">
                                    @else
                                        <img src="{{ asset('/storage/images/canbo/default.png') }}"
                                             class="img-thumbnail" alt="">
                                    @endif
                                </div>
                            </td>
                            <td>{{ $canbo->role }}</td>
                            <td>{{ $canbo->cmnd }}</td>
                            <td>{{ $canbo->chuc_vu }}</td>
                            <td>{{ $canbo->dia_chi }}</td>
                            <td>{{ $canbo->don_vi }}</td>
                            <td>{{ $canbo->ngay_sinh }}</td>
                            <td>{{ $canbo->sdt }}</td>
                            <td>{{ $canbo->mo_ta }}</td>
                            <td>
                                <a style="width: 80px" type="button" class="btn btn-primary my-2"
                                   href="{{ route('admin.chinhsua_canbo', $canbo->ma_canbo) }}">Chỉnh sửa</a>
                                @if($canbo->role != 'admin')
                                    <a style="width: 80px" type="button" class="btn btn-danger my-2"
                                       href="{{ route('admin.xoa_canbo', $canbo->ma_canbo) }}">Xóa</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                {{ $danhsachCanbo->links('vendor.pagination.default') }}
            </div>
            <a class="btn btn-link" href="{{ route('admin.them_canbo') }}">
                Thêm Cán Bộ
            </a>
        </div>
    </div>
    <!--/.col-->
@endsection
