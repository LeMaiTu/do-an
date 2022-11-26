
@extends('layouts.layout_canbo_kho')

@section('title','Quản lý tang vật')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="panel-body">

            <div class="panel panel-default">
                <div class="panel-heading">HỒ Sơ 175PTHVAC5</div>
                <div class="panel-body">
                    <div class="view-info">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="general-info">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <table class="table m-0 table-responsive">
                                                <tbody>
                                                <tr>
                                                    <th scope="row">Mã Tang Vật</th>
                                                    <td>175PT</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Tên Tang Vật</th>
                                                    <td>Xe SH150I</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mã Người Vi Phạm</th>
                                                    <td>REREF</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mô Tả</th>
                                                    <td>SH 150i, màu trắng, xướt phần đuôi xe</td>
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
                        <button  type="button" style="margin: 0px 10px;" class="btn btn-primary pull-right ">
                            Nhận Tang Vật
                        </button>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
