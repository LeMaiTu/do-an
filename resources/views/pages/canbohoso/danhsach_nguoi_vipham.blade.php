@extends('layouts.layout_canbo_hoso')

@section('title','Quản lý hồ sơ vi phạm')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông Tin Người Vi Phạm
                </div>
                <div class="panel-body">
                    <table class="table  table-striped table-responsive table-hover text-center">
                        <thead>
                        <tr>
                            <th class="text-center">Chứng minh thư</th>
                            <th class="text-center">Họ Tên</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Ngày Sinh</th>
                            <th class="text-center">Giới Tính</th>
                            <th class="text-center">Địa chỉ</th>
                            <th class="text-center">Số điện thoại</th>
                            <th class="text-center">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($danhsachNguoivipham as $nguoivipham)
                            <tr>
                                <td>{{ $nguoivipham->cmnd }}</td>
                                <td>{{ $nguoivipham->ho_ten }}</td>
                                <td>{{ $nguoivipham->email }}</td>
                                <td>{{ date('d/m/Y', strtotime($nguoivipham->ngay_sinh)) }}</td>
                                <td>
                                    {{ $nguoivipham->gioi_tinh == 0 ? "Nữ" : "Nam" }}
                                </td>
                                <td>{{ $nguoivipham->dia_chi }}</td>
                                <td>{{ $nguoivipham->sdt }}</td>
                                <td>
                                    <a type="button" class="btn btn-primary btn-edit"
                                       href="{{ route('cb_hoso.chinhsua_nguoivipham', $nguoivipham->cmnd) }}">
                                        Chỉnh sửa
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div><!--/.col-->
@endsection


