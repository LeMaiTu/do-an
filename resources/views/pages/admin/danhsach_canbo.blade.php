@extends('layouts.layout_admin')

@section('title','Admin')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="panel-body">
        <div class="row">

            <div class="col-lg-3 col-xl-4">
                <div class="card" style="width:300px">

                    <img class="card-img-top"
                        src="https://vcdn-giaitri.vnecdn.net/2019/05/07/lee-min-ho-5568-1557197339.jpg"
                        alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">1751220089</h4>
                        <h4 class="card-title">ABC PC</h4>
                        <p class="card-text">Admin</p>
                        <a href="#" class="btn btn-primary stretched-link" data-toggle="modal"
                            data-target="#myModal">Xem Thông Tin</a>
                        <a href="#" class="btn btn-primary stretched-link">Sửa</a>
                        <a href="#" class="btn btn-primary stretched-link">Xóa</a>
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">ABC PC</h4>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
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
                                                                            <td><a href="#!">TUAC5</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Tên Cán Bộ</th>
                                                                            <td>ABC PC</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Loại Cán Bộ</th>
                                                                            <td>Admin</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Giới Tính</th>
                                                                            <td>Bê Đê</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Chứng Minh Thư</th>
                                                                            <td><a href="#!">187566872</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Chức vụ</th>
                                                                            <td><a href="#!">Nhân Viên IT</a></td>
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
                                                                            <td>193 Nguyễn Lương Bằng, Liên Chiểu,
                                                                                Đà Nẵng</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Số Điện Thoại</th>
                                                                            <td>0123456789</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Dơn Vị</th>
                                                                            <td>Phòng Cán Bộ </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Email</th>
                                                                            <td><a
                                                                                    href="#!">hieupc6898@gmail.com</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Account</th>
                                                                            <td><a href="#!">hieupc</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Password</th>
                                                                            <td><a href="#!">hieupc6898</a></td>
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
                                            <div class="text-center">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="col-lg-3 col-xl-4">
                <div class="card" style="width:300px">

                    <img class="card-img-top"
                        src="https://vcdn-giaitri.vnecdn.net/2019/05/07/lee-min-ho-5568-1557197339.jpg"
                        alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">1751220021</h4>
                        <h4 class="card-title">ABC  IOS</h4>
                        <p class="card-text">Cán Bộ Phòng Xử Lý Hồ Sơ</p>
                        <a href="#" class="btn btn-primary stretched-link">Xem Thông Tin</a>
                        <a href="#" class="btn btn-primary stretched-link">Sửa</a>
                        <a href="#" class="btn btn-primary stretched-link">Xóa</a>
                    </div>


                </div>

            </div>
            <div class="col-lg-3 col-xl-4">
                <div class="card" style="width:300px">

                    <img class="card-img-top"
                        src="https://vcdn-giaitri.vnecdn.net/2019/05/07/lee-min-ho-5568-1557197339.jpg"
                        alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">1751220056</h4>
                        <h4 class="card-title">ABC  Androis</h4>
                        <p class="card-text">Cán Bộ Quản Lý Kho</p>
                        <a href="#" class="btn btn-primary stretched-link">Xem Thông Tin</a>
                        <a href="#" class="btn btn-primary stretched-link">Sửa</a>
                        <a href="#" class="btn btn-primary stretched-link">Xóa</a>
                    </div>


                </div>

            </div>

        </div>


    </div>
</div>
<!--/.col-->
@endsection
