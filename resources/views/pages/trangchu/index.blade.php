@extends('layouts.layout_trangchu')

@section('title','Trang Chủ')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">
    <div class="panel-body">
        <form role="search" method="POST" action="index.php">
            <div class="input-group">
                <input type="text" name="cmnd" value="<?= !empty($_POST['cmnd']) ? $_POST['cmnd'] : "" ?>" class="form-control" placeholder="Nhập CMND">
                <div class="input-group-btn">
                    <button id="btn_search" class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </form>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thông Tin Người Vi Phạm
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
                                                                <th scope="row">CMND</th>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Họ Và Tên</th>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Ngày Sinh</th>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Giới Tính</th>
                                                                <td>
                                                                </td>
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
                                                                <th scope="row">Email</th>
                                                                <td>
                                                                </td>
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
                                <!-- The Modal -->
                            </div>
                        </div>
                            <div class="panel-heading">
                                Thông Tin Hồ Sơ Vi Phạm
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
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tên Hồ Sơ</th>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Ngày Lập Biên Bản</th>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Địa Điểm Lập Biên Bản</th>
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
                                                                    <th scope="row">Ngày Hẹn</th>
                                                                    <td>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Tình Trạng</th>
                                                                    <td>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Thời Hạn</th>
                                                                    <td>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Mô Tả</th>
                                                                    <td>
                                                                    </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end of table col-lg-6 -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <div class="panel-heading">
                                        Thông Tin Lỗi Vi Phạm
                                    </div>
                                    <div class="panel-body">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="">
                                                                <table class="table m-0 table-responsive">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Mã Lỗi</th>
                                                                            <th scope="row">
                                                                                Tên Lỗi
                                                                            </th>
                                                                            <th scope="row">
                                                                                Nghị Định
                                                                            </th>
                                                                            <th scope="row">
                                                                                Phạt Hành Chính
                                                                            </th>
                                                                            <th scope="row">
                                                                                Mô Tả
                                                                            </th>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>
                                                                            </td>
                                                                            <td>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-heading">
                                        Thông Tin Tang Vật Bị Tạm Giữ
                                    </div>
                                    <div class="panel-body">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="">
                                                                <table class="table m-0 table-responsive">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Mã Tang Vật</th>
                                                                            <th scope="row">Tên Tang Vật</th>
                                                                            <th scope="row">
                                                                                Ngày Tạm Giữ
                                                                            </th>
                                                                            <th scope="row">
                                                                                Thời Hạn
                                                                            </th>
                                                                            <th scope="row">
                                                                                Tình Trạng
                                                                            </th>
                                                                            <th scope="row">
                                                                                Mô Tả
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>
                                                                                
                                                                            </td>
                                                                            <td>
                                                                               

                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                            <div class="panel-body">
                                <button type="button" class="btn btn-primary  btn-edit" data-toggle="modal" data-target="#myModal">
                                    Phản Hồi
                                </button>
                            </div>
                    </div>
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">PHản Hồi Ý Kiến</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="edit-info">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="general-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                    <input type="text" class="form-control" placeholder="Nội Dung Phản Hồi">
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
                                            <a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Gửi </a>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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

</div>
@endsection