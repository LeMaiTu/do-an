@extends('layouts.layout_admin')

@section('title','Admin')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

    <div class="panel-body">
        <form class="form-horizontal" action="" method="post">
            <fieldset>
                <!-- Mã Người Vi Phạm-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="manguoivipham">Mã Cán Bộ</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Nhập Mã Cán Bộ" class="form-control">
                    </div>
                </div>

                <!-- Tên Người Vi Phạm-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="Tennguoivipham">Tên Cán Bộ</label>
                    <div class="col-md-9">
                        <input id="email" name="email" type="text" placeholder="Nhập Tên Cán Bộ "
                            class="form-control">
                    </div>
                </div>

                <!-- Ngày Sinh -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="Ngaysinh">Loại Cán Bộ</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Loại Cán Bộ" class="form-control">
                    </div>
                </div>

                <!-- Giới Tính -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="Gioitinh">Giới Tính</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Nhập Giới Tính" class="form-control">
                    </div>
                </div>

                <!-- Địa Chỉ -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="Diachi">Chứng Minh Thư</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Nhập Chứng Minh Thư"
                            class="form-control">
                    </div>
                </div>
                <!-- Số Điện Thoại -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="Sodienthoai">Chức Vụ</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder=" Nhập Chức Vụ" class="form-control">
                    </div>
                </div>
                <!-- Email -->
                <div class="form-group">
                    <label class="col-md-3 control-label">Địa Chỉ</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Nhập Địa Chỉ " class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Số Điện Thoại</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Nhập Số Điện Thoại "
                            class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Đơn Vị</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Nhập Đơn Vị " class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="email">Email</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Nhập Email " class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Account</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Nhập Account " class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="password">Password</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Nhập Password " class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Mô tả</label>
                    <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Nhập Mô tả " class="form-control">
                    </div>
                </div>
                <!-- Form actions -->
                <div class="form-group">
                    <div class="col-md-12 widget-right">
                        <button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection