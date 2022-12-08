@extends('layouts.layout_admin')

@section('title','Admin')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="panel panel-default">
            @include('commons.breadcrumbs',["breadcrumbs"=>[
            'Home' => 'admin.index',
            'Danh mục lỗi' => null,
            ]])
            <div class="panel-heading">
                Thông Tin Lỗi Vi Phạm
            </div>
            <div class="panel-body">
                <table class="table  table-striped table-responsive table-hover text-center">
                    <thead>
                    <tr>
                        <th class="text-center">Mã Lỗi</th>
                        <th class="text-center">Tên Lỗi</th>
                        <th class="text-center">Nghị Định</th>
                        <th class="text-center">Chi Tiết Nghị Định</th>
                        <th class="text-center">Loại Phương Tiện</th>
                        <th class="text-center">Mức Phạt</th>
                        <th class="text-center">Mô Tả</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($danhmucLoi as $loi)
                        <tr>
                            <td>{{ $loi->ma_loi }}</td>
                            <td>{{ $loi->ten_loi }}</td>
                            <td>{{ $loi->nghi_dinh }}</td>
                            <td>{{ $loi->chitiet_nghidinh }}</td>
                            <td>{{ $loi->loai_phuongtien }}</td>
                            <td>{{ $loi->muc_phat }}</td>
                            <td>{{ $loi->mo_ta }}</td>
                            <td>
                                <a type="button" class="btn btn-primary btn-edit"
                                   href="{{ route('admin.chinhsua_loi', $loi->ma_loi) }}">
                                    Chỉnh sửa
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {{ $danhmucLoi->links('vendor.pagination.default') }}
        </div>
        <a class="btn btn-link" href="{{ route('admin.them_loi') }}">
            Thêm Lỗi Vi Phạm
        </a>
    </div>
@endsection
