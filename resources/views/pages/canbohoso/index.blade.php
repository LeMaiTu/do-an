@extends('layouts.layout_canbo_hoso')

@section('title','Quản lý hồ sơ vi phạm')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @include('commons.breadcrumbs',["breadcrumbs"=>[
        'Home' => 'cb_hoso.index',
        'Thông tin cá nhân' => null,
        ]])
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông Tin của {{ $cb_hoso->ten_canbo }}
                    <a class="btn btn-primary btn-edit" href="{{ route('cb_hoso.chinhsua_canbo', $cb_hoso->ma_canbo) }}">
                        Chỉnh sửa
                    </a>
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
                                                    <td>{{ $cb_hoso->ma_canbo  }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tên Cán Bộ</th>
                                                    <td>{{ $cb_hoso->ten_canbo  }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Loại Cán Bộ</th>
                                                    <td>{{ $cb_hoso->role }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Giới Tính</th>
                                                    <td>
                                                        @if($cb_hoso->gioitinh == 1)
                                                            Nam
                                                        @else
                                                            Nữ
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chứng Minh Thư</th>
                                                    <td>{{ $cb_hoso->cmnd }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chức vụ</th>
                                                    <td>{{ $cb_hoso->chuc_vu }}</td>
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
                                                    <td>{{ $cb_hoso->dia_chi }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Số Điện Thoại</th>
                                                    <td>{{ $cb_hoso->sdt }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dơn Vị</th>
                                                    <td>{{ $cb_hoso->don_vi }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email</th>
                                                    <td>{{ $cb_hoso->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Account</th>
                                                    <td>{{ $cb_hoso->account }}</td>
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
{{--                <div class="panel-footer">--}}
{{--                    <button type="button" class="btn btn-link " data-toggle="modalMatKhau"--}}
{{--                            data-target="#myModalMatKhau">--}}
{{--                        Quên Mật Khẩu--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>
    </div><!--/.col-->
@endsection


