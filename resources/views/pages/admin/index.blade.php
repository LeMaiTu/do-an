@extends('layouts.layout_admin')

@section('title','Trang quản lý')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="panel-body">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin của {{  $admin->ten_canbo }}
                <a class="btn btn-primary btn-edit" href="{{ route('admin.chinhsua_canbo', $admin->ma_canbo) }}">
                    Chỉnh sửa
                </a>
                <!-- The Modal -->
            </div>
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
                                                    <th scope="row">Mã Cán Bộ</th>
                                                    <td>{{ $admin->ma_canbo }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tên Cán Bộ</th>
                                                    <td>{{ $admin->ten_canbo }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Loại Cán Bộ</th>
                                                    <td>{{ $admin->role }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Giới Tính</th>
                                                    <td>
                                                        @if($admin->gioi_tinh == 1)
                                                            Nam
                                                        @else
                                                            Nữ
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chứng Minh Thư</th>
                                                    <td>{{ $admin->cmnd }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chức vụ</th>
                                                    <td>{{ $admin->chuc_vu }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end of table col-lg-6 -->
                                    <div class="col-lg-6 col-xl-6">
                                        <table class="table table-responsive">
                                            <tbody>

                                                <tr>
                                                    <th scope="row">Địa chỉ</th>
                                                    <td>{{ $admin->dia_chi }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Số Điện Thoại</th>
                                                    <td>{{ $admin->sdt }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dơn Vị</th>
                                                    <td>{{ $admin->don_vi }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email</th>
                                                    <td>{{ $admin->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Account</th>
                                                    <td>{{ $admin->account }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Password</th>
                                                    <td>*****</td>
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

        </div>
    </div>
</div>
</div>
@endsection


