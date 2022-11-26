@extends('layouts.layout_canbo_hoso')

@section('title','Quản lý hồ sơ vi phạm')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="panel-body">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Hồ Sơ AT72
                    <button type="button" class="btn btn-success pull-right ">
                        HOÀN THÀNH
                    </button>
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Chỉnh Sửa Thông Tin Hồ Sơ</h4>

                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="edit-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon"><i
                                                                                                    class="icofont icofont-user"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Mã Cán Bộ Lập Biên Bản">
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <input id="dropper-default"
                                                                               class="form-control" type="text"
                                                                               placeholder="Mã Người Vi Phạm"/>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon"><i
                                                                                                    class="icofont icofont-location-pin"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Ngày Xử Lý">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon"><i
                                                                                                    class="icofont icofont-mobile-phone"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Tình Trạng Hồ Sơ">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon"><i
                                                                                                    class="icofont icofont-social-twitter"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Hình Ảnh">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon"><i
                                                                                                    class="icofont icofont-social-skype"></i></span>
                                                                            <input class="form-control"
                                                                                   placeholder="Mô Tả">
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                    </div>
                                                    <!-- end of row -->
                                                    <div class="text-center">
                                                        <a href="#!"
                                                           class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                        <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- end of edit info -->
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
                                                    <td><a href="#!">VUOGF</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tên Hồ Sơ</th>
                                                    <td>Vi Phạm xe Máy</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">TG_Lập Biên Bản</th>
                                                    <td>6h30' 27/12/2020</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Địa Điểm Lập Biên Bản</th>
                                                    <td>Ngã Tư Núi Thành - Phan Đăng Lưu</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mã Cán Bộ Lập Biên Bản</th>
                                                    <td><a href="#!">67HRT</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mã Người Vi Phạm</th>
                                                    <td><a href="#!">565GT67HRT</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end of table col-lg-6 -->
                                        <div class="col-lg-6 col-xl-6">
                                            <table class="table table-responsive">
                                                <tbody>

                                                <tr>
                                                    <th scope="row">Ngày Xử Lý HS</th>
                                                    <td>04/01/2021</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mã Cán Bộ XLHS</th>
                                                    <td>0344489999</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"> Mã Tang Vật</th>
                                                    <td><a href="#"> GTRHF</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tình Trạng Hồ Sơ</th>
                                                    <td>
                                                        Chưa Hoàn Thành
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Hình Ảnh</th>
                                                    <td><a href="#!">hieungao.jpg</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mô tả</th>
                                                    <td><a href="#!">vuongios</a></td>
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
                    <div class="panel-footer">
                        <button type="button" class="btn btn-link  " data-toggle="modal" data-target="#myChiTiet">
                            Chi tiết
                        </button>
                        <button type="button" style="margin: 0px 10px;" class="btn btn-primary pull-right ">
                            Delete
                        </button>
                        <button type="button" style="margin: 0px 10px;" class="btn btn-primary pull-right ">
                            Add
                        </button>
                        <button type="button" style="margin: 0px 10px;" class="btn btn-primary pull-right "
                                data-toggle="modal" data-target="#myModal">
                            Edit
                        </button>
                        <!-- The Modal -->
                        <div class="modal fade" id="myChiTiet">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Chi Tiết Hồ Sơ</h4>

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
                                                                        <th scope="row">Tên Người Vi Phạm</th>
                                                                        <td><a href="#!">Trương Văn Hiếu</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Ngày Sinh</th>
                                                                        <td>10/03/2000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Giới Tính</th>
                                                                        <td>Nam</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Địa Chỉ</th>
                                                                        <td><a href="#!">150 Nguyễn Hữu Thọ</a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Số Điện Thoại</th>
                                                                        <td>0123456789</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Giới Tính</th>
                                                                        <td>Nam</td>
                                                                    </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-6 col-xl-6">
                                                                <table class="table table-responsive">
                                                                    <tbody>

                                                                    <tr>
                                                                        <th scope="row">Lỗi Vi Phạm</th>
                                                                        <td>
                                                                            - Vượt Đèn Đỏ<br>

                                                                            - Xe Máy không có gương chiếu hậu <br>
                                                                            -Không Mũ Bảo Hiểm
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Loại Phương Tiện</th>
                                                                        <td>Xe Máy Sirius</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Phạt Hành Chính</th>
                                                                        <td>4.990.000đ</td>
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
                </div>
            </div>
        </div>
    </div><!--/.col-->
@endsection


