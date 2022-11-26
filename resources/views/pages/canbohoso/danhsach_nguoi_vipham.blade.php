@extends('layouts.layout_canbo_hoso')

@section('title','Quản lý hồ sơ vi phạm')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông Tin Người Vi Phạm
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Chỉnh Sửa Thông Tin Người Vi Phạm</h4>
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
                                                                                   placeholder="Mã Người Vi Phạm">
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <input id="dropper-default"
                                                                               class="form-control" type="text"
                                                                               placeholder="Tên Người Vi Phạm"/>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon"><i
                                                                                                    class="icofont icofont-location-pin"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Ngày Sinh">
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
                                                                                   placeholder="Giới tính">
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
                                                                                   placeholder="Địa Chỉ">
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
                                                                                   placeholder="Số Điện Thoại">
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
                                                    <th scope="row">Mã Người Vi Phạm</th>
                                                    <td><a href="#!">19875456324</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tên Người Vi Phạm</th>
                                                    <td>Trương Văn Hiếu</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ngày Sinh</th>
                                                    <td>10/03/2000</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end of table col-lg-6 -->
                                        <div class="col-lg-6 col-xl-6">
                                            <table class="table table-responsive">
                                                <tbody>
                                                <tr>
                                                    <th scope="row">Giới Tính</th>
                                                    <td>Nam</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Địa chỉ</th>
                                                    <td>193 Núi Thành, Hải Châu, Đà Nẵng</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Số Điện Thoại</th>
                                                    <td>0344489999</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!--/.col-->
@endsection


