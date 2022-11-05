@extends('layouts.layout_admin')

@section('title','Admin')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="panel-body">

        <div class="panel panel-default">
            <table class="table table-striped" style=" text-align: center;">
                <thead>
                  <tr >
                    <th style=" text-align: center;" >Mã Lỗi</th>
                    <th style=" text-align: center;">Tên Lỗi</th>
                    <th style=" text-align: center;">Nghị Định</th>
                    <th style=" text-align: center;">Loại Phương Tiện</th>
                    <th style=" text-align: center;">Mức Phạt</th>
                    <th style=" text-align: center;">Sửa</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>DTH656</td>
                    <td>Không Chấp Hành Đèn Tín Hiệu</td>
                    <td>Nghị định 46</td>
                    <td>Xe Máy</td>
                    <td>250.000 - 1.000.000</td>
                    <td> <button type="button" class="btn btn-primary  btn-edit" data-toggle="modal" data-target="#myModal">
                        Edit
                    </button></td>
                  </tr>
                  <tr>
                    <td>KHL896</td>
                    <td>Không Chấp Hành Hiệu Lệnh</td>
                    <td>Nghị định 46</td>
                    <td>Xe Máy</td>
                    <td>800.000 - 1.200.000</td>
                    <td> <button type="button" class="btn btn-primary  btn-edit" data-toggle="modal" data-target="#myModal">
                        Edit
                    </button></td>
                  </tr>
                  <tr>
                    <td>DTH656</td>
                    <td>Không Chấp Hành Đèn Tín Hiệu</td>
                    <td>Nghị định 46</td>
                    <td>Xe Máy</td>
                    <td>250.000 - 1.000.000</td>
                    <td> <button type="button" class="btn btn-primary  btn-edit" data-toggle="modal" data-target="#myModal">
                        Edit
                    </button></td>
                  </tr>
                </tbody>
              </table>
           
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog ">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Không Chấp Hành Tín Hiệu Đèn Giao Thông</h4>

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
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-user"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Tên Lỗi">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-user"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Phương Tiện">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i
                                                                                    class="icofont icofont-user"></i></span>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Nghị Định">
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <input id="dropper-default"
                                                                            class="form-control" type="text"
                                                                            placeholder="Mức Phạt" />
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
        <div class="btn btn-link"> 
            Thêm Lỗi Vi Phạm
        </div>

    </div>
</div>
@endsection