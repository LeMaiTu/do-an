@extends('layouts.layout_canbo_hoso')

@section('title','Quản lý hồ sơ vi phạm')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông Tin Tang Vật
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Chỉnh Sửa Thông Tin Tang Vật</h4>

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
                                                                                   placeholder="Mã Tang Vật">
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <input id="dropper-default"
                                                                               class="form-control" type="text"
                                                                               placeholder="Tên Tang Vật"/>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon"><i
                                                                                                    class="icofont icofont-location-pin"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="Mã Hồ Sơ ">
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
                                                                                   placeholder="Mã Người Vi Phạm">
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
                                                                                   placeholder="Mã Cán Bộ Nhận">
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
                                                                                   placeholder="Mã Cán Bộ Trả">
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
                                                    <th scope="row">Mã Tang Vật</th>
                                                    <td><a href="#!">HONDA</a></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tên Tang Vật</th>
                                                    <td>AB Honda</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mã Hồ Sơ</th>
                                                    <td>HFY56</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end of table col-lg-6 -->
                                        <div class="col-lg-6 col-xl-6">
                                            <table class="table table-responsive">
                                                <tbody>
                                                <tr>
                                                    <th scope="row">Mã Người Vi Phạm</th>
                                                    <td>1738495743</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mã Cán Bộ Nhận</th>
                                                    <td>HGTRF</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mã Cán Bộ Trả</th>
                                                    <td>DHFYT</td>
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


