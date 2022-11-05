@extends('layouts.layout_admin')

@section('title','Admin')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="panel-body">

        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin của
                <button type="button" class="btn btn-primary  btn-edit" data-toggle="modal" data-target="#myModal">
                    Edit
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Chỉnh Sửa Thông Tin Cá Nhân</h4>

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
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-user"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Loại Cán Bộ">
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-user"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Địa Chỉ">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-user"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Đơn Vị">
                                                                        </select>
                                                                        </div>                                                                   
                                                                                 
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-location-pin"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Số Điện Thoại">
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
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-mobile-phone"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Email">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-social-twitter"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Account">
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-social-skype"></i></span>
                                                                            <input type="email" class="form-control"
                                                                                placeholder="Password">
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
                                                        data-dismiss="modal">Close</button>
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
                                                    <th scope="row">Mã Cán Bộ</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tên Cán Bộ</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Loại Cán Bộ</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Giới Tính</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chứng Minh Thư</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chức vụ</th>
                                                    <td></td>
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
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Số Điện Thoại</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Dơn Vị</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Account</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Password</th>
                                                    <td></td>
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


