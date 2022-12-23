@extends('layouts.layout_trangchu')

@section('title','Trang Chủ')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">
        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-heading text-bold">
                    Tra Cứu Thông Tin
                </div>
                @php
                    if(Session::has('request')) $request = Session::get('request');
                @endphp
                <div class="panel-body">
                    <form role="search" method="POST" action="{{ route('search') }}">
                        @csrf
                        <div class="form-group" style="justify-content: space-between">
                            <div class="form-group col-md-6">
                                <label for="first_name">Chứng Minh Thư</label>
                                <input type="text" id="cmnd" name="cmnd"
                                       value="{{ !empty($request['cmnd']) ? $request['cmnd'] : '' }}"
                                       class="form-control @error('cmnd') is-invalid @enderror"
                                       placeholder="Nhập Chứng Minh Thư">
                                @error('cmnd')
                                <div class="alert alert-danger d-none">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ho_ten">Họ Và Tên</label>
                                <input class="form-control @error('ho_ten') is-invalid @enderror" type="text"
                                       name="ho_ten" value="{{ !empty($request['ho_ten']) ? $request['ho_ten'] : '' }}"
                                       placeholder="Nhập Họ Và Tên">
                                @error('ho_ten')
                                <div class="alert alert-danger d-none">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sdt">Số Điện Thoại</label>
                                <input class="form-control @error('sdt') is-invalid @enderror" type="text" name="sdt"
                                       value="{{ !empty($request['sdt']) ? $request['sdt'] : '' }}"
                                       placeholder="Nhập Số Điện Thoại">
                                @error('sdt')
                                <div class="alert alert-danger d-none">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ngay_sinh">Ngày Sinh</label>
                                <input class="form-control @error('ngay_sinh') is-invalid @enderror" type="date"
                                       name="ngay_sinh"
                                       value="{{ !empty($request['ngay_sinh']) ? date('Y-m-d', strtotime($request['ngay_sinh'])) : '' }}"
                                       placeholder="Nhập Ngày Sinh">
                                @error('ngay_sinh')
                                <div class="alert alert-danger d-none">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12" style="display: flex; justify-content: center">
                                <button id="btn_search" class="btn btn-primary" type="submit">Tra Cứu <i
                                        class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading text-bold">
                    Kết Quả Tra Cứu
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            {!! \Session::get('message') !!}
                        </div>
                    @elseif((Session::has('data')))
                        @php
                            list($nguoivipham, $hosoVipham) = Session::get('data');
                        @endphp
                        <div class="panel panel-default nguoi_vipham">
                            <div class="panel-heading">
                                Thông Tin Cá Nhân
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
                                                                <td>{{ $nguoivipham->cmnd }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Họ Và Tên</th>
                                                                <td>{{ $nguoivipham->ho_ten }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Ngày Sinh</th>
                                                                <td>
                                                                    {{ date("d-m-Y", strtotime($nguoivipham->ngay_sinh)) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Giới Tính</th>
                                                                <td>
                                                                    {{ $nguoivipham->ngay_sinh == 0 ? 'Nữ' : 'Nam' }}
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <table class="table table-responsive">
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">Địa chỉ</th>
                                                                <td>{{ $nguoivipham->dia_chi }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Số Điện Thoại</th>
                                                                <td>{{ $nguoivipham->sdt }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Email</th>
                                                                <td>
                                                                    {{ $nguoivipham->email }}
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
                        </div>
                        @foreach($hosoVipham as $hoso)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Thông Tin Hồ Sơ {{ $hoso->ten_hoso }}
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="row col-md-6">
                                            <p class="col-md-6 text-right text-bold">Tên Hồ Sơ:</p>
                                            <p class="col-md-6">{{ $hoso->ten_hoso }}</p>
                                        </div>
                                        <div class="row col-md-6">
                                            <p class="col-md-6 text-right text-bold">Thời Gian Lập BB:</p>
                                            <p class="col-md-6">{{ date('d/m/Y', strtotime($hoso->thoigian_lapbienban)) }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="row col-md-6">
                                            <p class="col-md-6 text-right text-bold">Địa Điểm Lập BB:</p>
                                            <p class="col-md-6">{{ $hoso->diadiem_lapbienban }}</p>
                                        </div>
                                        <div class="row col-md-6">
                                            <p class="col-md-6 text-right text-bold">Ngày Hẹn Xử Lý:</p>
                                            <p class="col-md-6">{{ date('d/m/Y', strtotime($hoso->ngayhen_xuly)) }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="row col-md-6">
                                            <p class="col-md-6 text-right text-bold">Thời Hạn Xử Lý:</p>
                                            <p class="col-md-6">{{ $hoso->thoihan_xuly }} ngày</p>
                                        </div>
                                        <div class="row col-md-6">
                                            <p class="col-md-6 text-right text-bold">Tình Trạng:</p>
                                            <p
                                                class="col-md-6">{{ config('constants.hoso_vipham.trang_thai')[$hoso->tinhtrang_hoso] }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="row col-md-6">
                                            <p class="col-md-6 text-right text-bold">Mô Tả:</p>
                                            <p class="col-md-6">{{ $hoso->mota }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Thông Tin Lỗi
                                </div>
                                <table class="table-fixed table table-striped table-responsive table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Mã Lỗi</th>
                                        <th class="text-center">Tên Lỗi</th>
                                        <th class="text-center">Phạt Hành Chính</th>
                                        <th class="text-center">Mô Tả</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hoso->loi as $loi)
                                        <tr>
                                            <td>{{ $loi->ma_loi_vipham }}</td>
                                            <td>{{ $loi->ten_loi }}</td>
                                            <td>{{ number_format($loi->phat_hanhchinh, 0, ',', '.') }} VNĐ</td>
                                            <td>{{ $loi->mo_ta }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Thông Tin Tang Vật
                                </div>
                                <table class="table  table-striped table-responsive table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Mã Tang Vật</th>
                                        <th class="text-center">Tên</th>
                                        <th class="text-center">Mã Hồ Sơ</th>
                                        <th class="text-center">Ngày giữ</th>
                                        <th class="text-center">Thời gian giữ</th>
                                        <th class="text-center">Ngày trả</th>
                                        <th class="text-center">Trạng thái</th>
                                        <th class="text-center">Mô tả</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hoso->tangvat as $tangvat)
                                        <tr>
                                            <td>{{ $tangvat->ma_tangvat }}</td>
                                            <td>{{ $tangvat->ten_tangvat }}</td>
                                            <td>{{ $tangvat->ma_hoso }}</td>
                                            <td>{{ date('d/m/Y', strtotime($tangvat->ngay_tam_giu)) }}</td>
                                            <td>{{ $tangvat->thoigian_tamgiu }} ngày</td>
                                            <td>{{ $tangvat->ngaytra_tangvat ? date('d/m/Y', strtotime($tangvat->ngaytra_tangvat)) : null }}</td>
                                            <td>{{ config('constants.tang_vat.trang_thai')[$tangvat->trang_thai] }}</td>
                                            <td>{{ $tangvat->mota }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="panel-body">
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
                                                                    <span class="input-group-addon"><i
                                                                            class="icofont icofont-user"></i></span>
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Nội Dung Phản Hồi">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#!"
                                                       class="btn btn-primary waves-effect waves-light m-r-20">Gửi </a>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .nguoi_vipham table, .nguoi_vipham th, .nguoi_vipham tr, .nguoi_vipham td {
                border: none !important;
            }
        </style>
@endsection
