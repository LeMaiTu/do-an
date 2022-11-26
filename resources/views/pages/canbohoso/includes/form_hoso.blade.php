@php
//    if(!empty($errors)) dd($errors);
@endphp
<form class="form-horizontal" id="form_nvp" action="{{ route('cb_hoso.post_tao_hoso') }}" enctype="multipart/form-data"
      method="POST">
    @csrf
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4>THÔNG TIN NGƯỜI VI PHẠM</h4>
        </div>
        <div class="panel-body">
            <fieldset class="">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="cmnd">CMND của Người Vi Phạm</label>
                    <div class="col-md-6">
                        <input id="cmnd" name="nguoivipham[cmnd]" type="number" placeholder="Nhập CMND"
                               value="{{ old('nguoivipham.cmnd') }}"
                               class="form-control @error('nguoivipham.cmnd') is-invalid @enderror"
                        >
                        @error('nguoivipham.cmnd')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="ho_ten">Tên Người Vi Phạm</label>
                    <div class="col-md-6">
                        <input id="ho_ten" name="nguoivipham[ho_ten]" type="text"
                               placeholder="Nhập Tên Người Vi Phạm "
                               class="form-control @error('nguoivipham.ho_ten') is-invalid @enderror"
                               value="{{ old('nguoivipham.ho_ten') }}">
                        @error('nguoivipham.ho_ten')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="gioi_tinh">Giới Tính</label>
                    <div class="col-md-6">
                        <select class="form-control @error('nguoivipham.gioi_tinh') is-invalid @enderror"
                                name="nguoivipham[gioi_tinh]" id="gioi_tinh">
                            <option value="">Giới tính</option>
                            <option value="0" {{ old('nguoivipham.gioi_tinh') == 0 ? 'selected' : '' }}">Nữ</option>
                            <option value="1" {{ old('nguoivipham.gioi_tinh') == 1 ? 'selected' : '' }}>Nam</option>
                        </select>
                        @error('nguoivipham.gioi_tinh')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="ngay_sinh">Ngày sinh</label>
                    <div class="col-md-6">
                        <input id="ngay_sinh" name="nguoivipham[ngay_sinh]" type="date" placeholder="Nhập ngày sinh"
                               class="form-control @error('nguoivipham.ngay_sinh') is-invalid @enderror"
                               value="{{ old('nguoivipham.ngay_sinh') }}">
                        @error('nguoivipham.ngay_sinh')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="dia_chi">Địa Chỉ</label>
                    <div class="col-md-6">
                        <input id="dia_chi" name="nguoivipham[dia_chi]" type="text"
                               placeholder="Nhập Địa Chỉ"
                               class="form-control @error('nguoivipham.dia_chi') is-invalid @enderror"
                               value="{{ old('nguoivipham.dia_chi') }}">
                        @error('nguoivipham.dia_chi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="sdt">Số Điện Thoại</label>
                    <div class="col-md-6">
                        <input id="sdt" name="nguoivipham[sdt]" type="number" placeholder="Nhập Số Điện Thoại "
                               class="form-control @error('nguoivipham.sdt') is-invalid @enderror"
                               value="{{ old('nguoivipham.sdt') }}">
                        @error('nguoivipham.sdt')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="email">Email</label>
                    <div class="col-md-6">
                        <input id="email" name="nguoivipham[email]" type="email"
                               placeholder="Nhập Email"
                               class="form-control @error('nguoivipham.email') is-invalid @enderror"
                               value="{{ old('nguoivipham.email') }}">
                        @error('nguoivipham.email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4>THÔNG TIN HỒ SƠ VI PHẠM</h4>
        </div>
        <div class="panel-body">
            <fieldset>
                <!-- Mã Người Vi Phạm-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="ma_hoso">Mã Hồ Sơ</label>
                    <div class="col-md-6">
                        <input id="ma_hoso" name="hosovipham[ma_hoso]" type="text"
                               placeholder="Nhập Mã Hồ Sơ"
                               class="form-control @error('hosovipham.ma_hoso') is-invalid @enderror"
                               value="{{ old('hosovipham.ma_hoso') }}">
                        @error('hosovipham.ma_hoso')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Tên Người Vi Phạm-->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="ten_hoso">Tên Hồ Sơ</label>
                    <div class="col-md-6">
                        <input id="ten_hoso" name="hosovipham[ten_hoso]" type="text"
                               placeholder="Nhập Tên Hồ Sơ "
                               class="form-control @error('hosovipham.ten_hoso') is-invalid @enderror"
                               value="{{ old('hosovipham.ten_hoso') }}">
                        @error('hosovipham.ten_hoso')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <!-- Giới Tính -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="thoigian_lapbienban">TG_Lập Biên Bản</label>
                    <div class="col-md-6">
                        <input id="thoigian_lapbienban" name="hosovipham[thoigian_lapbienban]" type="date"
                               placeholder="Nhập TG_Lập Biên Bản"
                               class="form-control @error('hosovipham.thoigian_lapbienban') is-invalid @enderror"
                               value="{{ old('hosovipham.thoigian_lapbienban') }}">
                        @error('hosovipham.thoigian_lapbienban')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Địa Chỉ -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="diadiem_lapbienban">Địa Điểm Lập Biên Bản</label>
                    <div class="col-md-6">
                        <input id="diadiem_lapbienban" name="hosovipham[diadiem_lapbienban]" type="text"
                               placeholder="Nhập Địa Điểm Lập Biên Bản"
                               class="form-control @error('hosovipham.diadiem_lapbienban') is-invalid @enderror"
                               value="{{ old('hosovipham.diadiem_lapbienban') }}">
                        @error('hosovipham.diadiem_lapbienban')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- Số Điện Thoại -->
                <div class="form-group">
                    <label class="col-md-3 control-label" for="ma_canbo_lapbienban">Mã Cán Bộ Lập Biên Bản</label>
                    <div class="col-md-6">
                        <input id="ma_canbo_lapbienban" name="hosovipham[ma_canbo_lapbienban]" type="text"
                               placeholder=" Nhập Mã Cán Bộ Lập Biên Bản"
                               class="form-control @error('hosovipham.ma_canbo_lapbienban') is-invalid @enderror"
                               value="{{ old('hosovipham.ma_canbo_lapbienban') }}">
                        @error('hosovipham.ma_canbo_lapbienban')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" fo="ngay_nhaphoso">Ngày Nhập HS</label>
                    <div class="col-md-6">
                        <input id="ngay_nhaphoso" name="hosovipham[ngay_nhaphoso]" type="date"
                               placeholder="Nhập Ngày Nhập HS "
                               class="form-control @error('hosovipham.ngay_nhaphoso') is-invalid @enderror"
                               value="{{ old('hosovipham.ngay_nhaphoso') }}">
                        @error('hosovipham.ngay_nhaphoso')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="ngayhen_xuly">Ngày Hẹn Xử Lý HS</label>
                    <div class="col-md-6">
                        <input id="ngayhen_xuly" name="hosovipham[ngayhen_xuly]" type="date"
                               placeholder="Nhập Ngày Hẹn Xử Lý HS "
                               class="form-control @error('hosovipham.ngayhen_xuly') is-invalid @enderror"
                               value="{{ old('hosovipham.ngayhen_xuly') }}">
                        @error('hosovipham.ngayhen_xuly')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="thoihan_xuly">Thời Hạn Xử Lý HS</label>
                    <div class="col-md-6">
                        <input id="thoihan_xuly" name="hosovipham[thoihan_xuly]" type="number"
                               placeholder="Nhập Thời Hạn Xử Lý HS"
                               class="form-control @error('hosovipham.thoihan_xuly') is-invalid @enderror"
                               value="{{ old('hosovipham.thoihan_xuly') }}">
                        @error('hosovipham.thoihan_xuly')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="ma_canbo_xuly">Mã Cán Bộ XLHS</label>
                    <div class="col-md-6">
                        <input id="ma_canbo_xuly" name="hosovipham[ma_canbo_xuly]"
                               value="{{ auth('admin')->user()->ma_canbo }}" type="text"
                               placeholder="Nhập Mã Cán Bộ XLHS "
                               class="form-control @error('hosovipham.ma_canbo_xuly') is-invalid @enderror"
                               value="{{ old('hosovipham.ma_canbo_xuly') }}"
                               readonly>
                        @error('hosovipham.ma_canbo_xuly')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="hinh_anh">Hình Ảnh</label>
                    <div class="col-md-6">
                        <input class="form-control @error('hosovipham.hinh_anh') is-invalid @enderror" type="file"
                               id="hosovipham[hinh_anh]" name="hinh_anh" placeholder="Hình Ảnh"
                               value="{{ old('hosovipham.hinh_anh') }}"/>
                        @error('hosovipham.hinh_anh')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="mo_ta">Mô tả</label>
                    <div class="col-md-6">
                    <textarea id="mo_ta" name="hosovipham[mo_ta]" type="text" placeholder="Nhập Mô tả" rows="4"
                              cols="50"
                              class="form-control @error('hosovipham.mo_ta') is-invalid @enderror"
                    >{{ old('hosovipham.mo_ta') }}</textarea>
                        @error('hosovipham.mo_ta')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4>THÔNG TIN TANG VẬT</h4>
        </div>
        <div class="panel-body">
            <table class="table  table-responsive table-fixed text-center">
                <thead>
                <tr class="row">
                    <th class="col-md-2 text-center">Mã Tang Vật</th>
                    <th class="col-md-2 text-center">Tên Tang Vật</th>
                    <th class="col-md-2 text-center">Ngày Tạm Giữ</th>
                    <th class="col-md-2 text-center">Thời Gian Tạm Giữ</th>
                    <th class="col-md-3 text-center">Mô Tả</th>
                    <th class="col-md-1 text-center">
                        <button id="btn_add_tv" type="button" class="btn btn-primary">
                            Thêm
                        </button>
                    </th>
                </tr>
                </thead>
                <tbody id="res_tv">
                @if(empty(old('tangvat')))
                    <tr id="tv_0" class="row">
                        <td class="col-md-2">
                            <div class="group">
                                <input id="ma_tangvat" name="tangvat[0][ma_tangvat]" type="text "
                                       class="form-control @error('tangvat.0.ma_tangvat') is-invalid @enderror">
                                @error('tangvat.0.ma_tangvat')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </td>
                        <td class="col-md-2">
                            <div class="group">
                                <input id="ten_tangvat" name="tangvat[0][ten_tangvat]" type="text"
                                       class="form-control @error('tangvat.0.ten_tangvat') is-invalid @enderror">
                                @error('tangvat.0.ten_tangvat')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </td>
                        <td class="col-md-2">
                            <div class="group">
                                <input id="ngay_tamgiu" name="tangvat[0][ngay_tamgiu]" type="date"
                                       class="form-control @error('tangvat.0.ngay_tamgiu') is-invalid @enderror">
                                @error('tangvat.0.ngay_tamgiu')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </td>
                        <td class="col-md-2">
                            <div class="group">
                                <input id="thoigian_tamgiu" name="tangvat[0][thoigian_tamgiu]" type="number"
                                       class="form-control @error('tangvat.0.thoigian_tamgiu') is-invalid @enderror">
                                @error('tangvat.0.thoigian_tamgiu')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </td>
                        <td class="col-md-3">
                            <div class="group">
                                <input id="mota" name="tangvat[0][mota]" type="text"
                                       class="form-control @error('tangvat.0.mota') is-invalid @enderror">
                                @error('tangvat.0.mota')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </td>
                        <td class="col-md-1">
                            <div class="group">
                                <button id="del_loi_0" type="button" class="btn btn-danger"
                                        onclick="deleteTangVat(this.id)">
                                    Xóa
                                </button>
                            </div>
                        </td>
                    </tr>
                @else
                    @foreach(old('tangvat') as $key_tv => $tangvat)
                        <tr id="tv_{{$key_tv}}" class="row">
                            <td class="col-md-2">
                                <div class="group">
                                    <input id="ma_tangvat" name="tangvat[{{$key_tv}}][ma_tangvat]" type="text "
                                           class="form-control @error('tangvat.'.$key_tv.'.ma_tangvat') is-invalid @enderror"
                                           value="{{$tangvat['ma_tangvat']}}"
                                    >
                                    @error('tangvat.'.$key_tv.'.ma_tangvat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </td>
                            <td class="col-md-2">
                                <div class="group">
                                    <input id="ten_tangvat" name="tangvat[{{$key_tv}}][ten_tangvat]" type="text"
                                           class="form-control @error('tangvat.'.$key_tv.'.ten_tangvat') is-invalid @enderror"
                                           value="{{$tangvat['ten_tangvat']}}">
                                    @error('tangvat.'.$key_tv.'.ten_tangvat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </td>
                            <td class="col-md-2">
                                <div class="group">
                                    <input id="ngay_tamgiu" name="tangvat[{{$key_tv}}][ngay_tamgiu]" type="date"
                                           class="form-control @error('tangvat.'.$key_tv.'.ngay_tamgiu') is-invalid @enderror"
                                           value="{{$tangvat['ngay_tamgiu']}}">
                                    @error('tangvat.'.$key_tv.'.ngay_tamgiu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </td>
                            <td class="col-md-2">
                                <div class="group">
                                    <input id="thoigian_tamgiu" name="tangvat[{{$key_tv}}][thoigian_tamgiu]"
                                           type="number"
                                           class="form-control @error('tangvat.'.$key_tv.'.thoigian_tamgiu') is-invalid @enderror"
                                           value="{{$tangvat['thoigian_tamgiu']}}">
                                    @error('tangvat.'.$key_tv.'.thoigian_tamgiu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </td>
                            <td class="col-md-3">
                                <div class="group">
                                    <input id="mota" name="tangvat[{{$key_tv}}][mota]" type="text"
                                           class="form-control @error('tangvat.'.$key_tv.'.mota') is-invalid @enderror"
                                           value="{{$tangvat['mota']}}">
                                    @error('tangvat.'.$key_tv.'.mota')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </td>
                            <td class="col-md-1">
                                <div class="group">
                                    <button id="del_loi_{{$key_tv}}" type="button" class="btn btn-danger"
                                            onclick="deleteTangVat(this.id)">
                                        Xóa
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading text-center">
            <h4>THÔNG TIN LỖI</h4>
        </div>
        <div class="panel-body">
            <table class="table  table-responsive text-center">
                <thead>
                <tr class="row">
                    <th class="col-md-3 text-center">Mã Lỗi</th>
                    <th class="col-md-3 text-center">Phạt Hành Chính</th>
                    <th class="col-md-6 text-center">Mô Tả</th>
                    <th class="col-md-6 text-center">
                        <button id="btn_add_loi" type="button" class="btn btn-primary  pull-left">
                            Thêm
                        </button>
                    </th>
                </tr>
                </thead>
                <tbody id="res_loi">
                @php
                    //                dd($danhmucloi);
                @endphp
                @if(empty(old('loivipham')))
                    <tr id="loi_0" class="row">
                        <td class="col-md-3">
                            <div class="group">
                                <select id="ma_loi" name="loivipham[0][ma_loi]" type="text"
                                        class="form-control @error('loivipham.0.ma_loi') is-invalid @enderror">
                                    <option value="">Lỗi vi phạm</option>
                                    @foreach($danhmucloi as $loi)
                                        <option value="{{ $loi->ma_loi }}">{{ $loi->ten_loi }}</option>
                                        @endforeach
                                        </option>
                                </select>
                                @error('loivipham.0.ma_loi')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </td>
                        <td class="col-md-3">
                            <div class="group">
                                <input
                                    id="phat_hanhchinh" step="1"
                                    name="loivipham[0][phat_hanhchinh]"
                                    type="number"
                                    class="form-control @error('loivipham.0.phat_hanhchinh') is-invalid @enderror">
                                @error('loivipham.0.ma_loi')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </td>
                        <td class="col-md-5">
                            <div class="group">
                                <input id="mo_ta"
                                       name="loivipham[0][mo_ta]"
                                       type="text"
                                       class="form-control @error('loivipham.0.mo_ta') is-invalid @enderror">
                                @error('loivipham.0.mo_ta')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </td>
                        <td class="col-md-1">
                            <div class="group">
                                <button id="del_loi_0" type="button" class="btn btn-danger"
                                        onclick="deleteLoi(this.id)">
                                    Xóa
                                </button>
                            </div>
                        </td>
                    </tr>
                @else
                    @foreach(old('loivipham') as $key_loi => $item)
                        <tr id="loi_{{$key_loi}}" class="row">
                            <td class="col-md-3">
                                <div class="group">
                                    <select
                                        id="ma_loi"
                                        name="loivipham[{{$key_loi}}][ma_loi]"
                                        class="form-control @error('loivipham.'.$key_loi.'.ma_loi') is-invalid @enderror"
                                    >
                                        <option value="">Lỗi vi phạm</option>
                                        @foreach($danhmucloi as $loi)
                                            <option
                                                value="{{ $loi->ma_loi }}" {{ $item['ma_loi'] == $loi->ma_loi ? 'selected' : '' }}>{{ $loi->ten_loi }}</option>
                                            @endforeach
                                            </option>
                                    </select>
                                    @error('loivipham.'.$key_loi.'.ma_loi')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </td>
                            <td class="col-md-3">
                                <div class="group">
                                    <input
                                        id="phat_hanhchinh" step="1" name="loivipham[{{$key_loi}}][phat_hanhchinh]"
                                        type="number"
                                        class="form-control @error('loivipham.'.$key_loi.'.phat_hanhchinh') is-invalid @enderror"
                                        value="{{$item['phat_hanhchinh']}}">
                                </div>
                                @error('loivipham.'.$key_loi.'.phat_hanhchinh')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </td>
                            <td class="col-md-5">
                                <div class="group">
                                    <input
                                        id="mo_ta" name="loivipham[{{$key_loi}}][mo_ta]" type="text"
                                        class="form-control @error('loivipham.{{$key_loi}}.mo_ta') is-invalid @enderror"
                                        value="{{$item['mo_ta']}}">
                                    @error('loivipham.'.$key_loi.'.mo_ta')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </td>
                            <td class="col-md-1">
                                <div class="group">
                                    <button id="del_loi_{{$key_loi}}" type="button" class="btn btn-danger"
                                            onclick="deleteLoi(this.id)">
                                        Xóa
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <!-- Form actions -->
    <div class="form-group">
        <div class="text-center">
            <button type="submit" class="btn btn-edit btn-danger" id="btn_success" style="margin-bottom: 20px;">
                Hoàn Tất Hồ Sơ
            </button>
        </div>
    </div>
</form>
@section('script_form_tao_hoso')
    <script>
        function deleteLoi(btn_del_id) {
            let last_tr_loi = $('#res_loi tr').last();
            let last_tr_id = last_tr_loi.attr('id').split('_')[1];

            let first_tr_loi = $('#res_loi tr').first();
            let first_tr_id = first_tr_loi.attr('id').split('_')[1];

// check disable delete form
            if (last_tr_id == first_tr_id) return;

            let tr_id = btn_del_id.split('_')[2];

            $('#loi_' + tr_id).remove();
        }

        function deleteTangVat(btn_del_id) {
            let last_tr_loi = $('#res_tv tr').last();
            let last_tr_id = last_tr_loi.attr('id').split('_')[1];

            let first_tr_loi = $('#res_tv tr').first();
            let first_tr_id = first_tr_loi.attr('id').split('_')[1];

// check disable delete form
            if (last_tr_id == first_tr_id) return;

            let tr_id = btn_del_id.split('_')[2];

            $('#tv_' + tr_id).remove();
        }

        $(document).ready(function () {
            $('#btn_add_tv').click(function () {
                let last_tr_tv = $('#res_tv tr').last();
                let last_tr_id = parseInt(last_tr_tv.attr('id').split('_')[1]);
                let hmtl =
                    `
<tr id="tv_${last_tr_id + 1}" class="row">
<td class="col-md-2">
    <div class="group">
        <input id="ma_tangvat" name="tangvat[${last_tr_id + 1}][ma_tangvat]" type="text "
               class="form-control @error('tangvat.*.ma_tangvat') is-invalid @enderror">
    </div>
</td>
<td class="col-md-2">
    <div class="group">
        <input id="ten_tangvat" name="tangvat[${last_tr_id + 1}][ten_tangvat]" type="text"
               class="form-control @error('tangvat.*.ten_tangvat') is-invalid @enderror">
    </div>
</td>
<td class="col-md-2">
    <div class="group">
        <input id="ngay_tamgiu" name="tangvat[${last_tr_id + 1}][ngay_tamgiu]" type="date"
               class="form-control @error('tangvat.*.ngay_tamgiu') is-invalid @enderror">
    </div>
</td>
<td class="col-md-2">
    <div class="group">
        <input id="thoigian_tamgiu" name="tangvat[${last_tr_id + 1}][thoigian_tamgiu]" type="number"
               class="form-control @error('tangvat.*.thoigian_tamgiu') is-invalid @enderror">
    </div>
</td>
<td class="col-md-3">
    <div class="group">
        <input id="mota" name="tangvat[${last_tr_id + 1}][mota]" type="text"
               class="form-control @error('tangvat.*.mota') is-invalid @enderror">
    </div>
</td>
<td class="col-md-1">
    <div class="group">
        <button id="del_loi_${last_tr_id + 1}" type="button" class="btn btn-danger" onclick="deleteTangVat(this.id)">
            Xóa
        </button>
    </div>
</td>
</tr>
`;
                last_tr_tv.after(hmtl);
            });

            $('#btn_add_loi').click(function () {
                let last_tr_loi = $('#res_loi tr').last();
                let last_tr_id = parseInt(last_tr_loi.attr('id').split('_')[1]);
                let hmtl = `
<tr id="loi_${last_tr_id + 1}" class="row">
<td class="col-md-3">
    <div class="group">
        <select id="ma_loi" name="loivipham[${last_tr_id + 1}][ma_loi]" type="text"
                class="form-control @error('hinh_anh') is-invalid @enderror">
            <option value="">Lỗi vi phạm</option>
            @foreach($danhmucloi as $loi)
                <option value="{{ $loi->ma_loi }}">{{ $loi->ten_loi }}</option>
            @endforeach
                </option>
                </select>
                </div>
                </td>
                <td class="col-md-3">
                <div class="group">
                <input id="phat_hanhchinh" step="1" name="loivipham[${last_tr_id + 1}][phat_hanhchinh]" type="number"
               class="form-control @error('hinh_anh') is-invalid @enderror">
                        </div>
</td>
<td class="col-md-5">
    <div class="group">
        <input id="mo_ta" name="loivipham[${last_tr_id + 1}][mo_ta]" type="text"
               class="form-control @error('hinh_anh') is-invalid @enderror">
    </div>
</td>
<td class="col-md-1">
    <div class="group">
        <button id="del_loi_${last_tr_id + 1}" type="button" class="btn btn-danger" onclick="deleteLoi(this.id)">
            Xóa
        </button>
    </div>
</td>
</tr>
`;
                last_tr_loi.after(hmtl);
            });

        })
    </script>
@endsection

