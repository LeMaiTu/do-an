@if(!empty($canbo))
    <form class="form-horizontal" enctype="multipart/form-data"
          action="{{ route('admin.post_chinhsua_canbo', $canbo->ma_canbo ) }}" method="post">
        @csrf
        <fieldset>
            <!-- Mã Người Vi Phạm-->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ma_canbo">Mã Cán Bộ</label>
                <div class="col-md-10">
                    <input id="ma_canbo" name="ma_canbo" type="text" placeholder="Nhập Mã Cán Bộ"
                           value="{{old('ma_canbo', $canbo->ma_canbo)}}"
                           class="form-control @error('ma_canbo') is-invalid @enderror" disabled>
                    @error('ma_canbo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Tên Người Vi Phạm-->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ten_canbo">Tên Cán Bộ</label>
                <div class="col-md-10">
                    <input id="ten_canbo" name="ten_canbo" type="text" placeholder="Nhập Tên Cán Bộ"
                           value="{{old('ten_canbo', $canbo->ten_canbo)}}"
                           class="form-control @error('ten_canbo') is-invalid @enderror">
                    @error('ten_canbo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- Role -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="role">Loại cán bộ</label>
                <div class="col-md-10">
                    <select id="role" name="role" class="form-control @error('role') is-invalid @enderror">
                        <option value="">Chọn loại cán bộ</option>
                        @foreach(config('constants.loaicanbo') as $role)
                            <option
                                value="{{$role}}" {{ old('role', $canbo->role) === $role ? 'selected' : '' }}>{{ config('constants.roles.'.$role) }}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- Role -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ngay_sinh">Ngày sinh</label>
                <div class="col-md-10">
                    <input id="ngay_sinh" name="ngay_sinh" value="{{ old('ngay_sinh', $canbo->ngay_sinh) }}"
                           type="date" placeholder="Loại Cán Bộ"
                           class="form-control @error('ngay_sinh') is-invalid @enderror">
                    @error('ngay_sinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Giới Tính -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="gioi_tinh">Giới Tính</label>
                <div class="col-md-10">
                    <select id="gioi_tinh" name="gioi_tinh"
                            class="form-control @error('role') is-invalid @enderror">
                        <option value="">Chọn giới tính</option>
                        <option value="0" {{ old('gioi_tinh', $canbo->gioi_tinh) === 0 ? 'selected' : '' }}>
                            Nữ
                        </option>
                        <option value="1" {{ old('gioi_tinh', $canbo->gioi_tinh) === 1 ? 'selected' : '' }}>
                            Nam
                        </option>
                    </select>
                    @error('gioi_tinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Địa Chỉ -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="cmnd">Chứng Minh Thư</label>
                <div class="col-md-10">
                    <input id="cmnd" name="cmnd" type="text" value="{{ old('cmnd', $canbo->cmnd) }}"
                           placeholder="Nhập Chứng Minh Thư"
                           class="form-control @error('cmnd') is-invalid @enderror">
                    @error('cmnd')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- Số Điện Thoại -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="chuc_vu">Chức Vụ</label>
                <div class="col-md-10">
                    <input id="chuc_vu" name="chuc_vu" value="{{ old('chuc_vu', $canbo->chuc_vu) }}"
                           type="text" placeholder="Nhập Chức Vụ"
                           class="form-control @error('chuc_vu') is-invalid @enderror">
                    @error('chuc_vu')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label">Địa Chỉ</label>
                <div class="col-md-10">
                    <input id="dia_chi" name="dia_chi" value="{{ old('dia_chi', $canbo->dia_chi) }}"
                           type="text" placeholder="Nhập Địa Chỉ "
                           class="form-control @error('dia_chi') is-invalid @enderror">
                    @error('dia_chi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label">Số Điện Thoại</label>
                <div class="col-md-10">
                    <input id="sdt" name="sdt" value="{{ old('sdt', $canbo->sdt) }}" type="text"
                           placeholder="Nhập Số Điện Thoại "
                           class="form-control @error('sdt') is-invalid @enderror">
                    @error('sdt')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label">Đơn Vị</label>
                <div class="col-md-10">
                    <input id="don_vi" name="don_vi" value="{{ old('don_vi', $canbo->don_vi) }}" type="text"
                           placeholder="Nhập Đơn Vị "
                           class="form-control @error('don_vi') is-invalid @enderror">
                    @error('don_vi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="email">Email</label>
                <div class="col-md-10">
                    <input id="email" name="email" value="{{ old('email', $canbo->email) }}" type="email"
                           placeholder="Nhập Email "
                           class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label">Account</label>
                <div class="col-md-10">
                    <input id="account" name="account" value="{{ old('account', $canbo->account) }}"
                           type="text" placeholder="Nhập Account "
                           class="form-control @error('account') is-invalid @enderror">
                    @error('account')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="password">Password</label>
                <div class="col-md-10">
                    <input id="password" name="password" value="{{ old('password') }}" type="password"
                           placeholder="Nhập Password "
                           class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label">Mô tả</label>
                <div class="col-md-10">
                                <textarea rows="4" cols="50" id="mo_ta" name="mo_ta" placeholder="Nhập Mô tả "
                                          class="form-control @error('mo_ta') is-invalid @enderror">{{ old('mo_ta', $canbo->mo_ta) }}</textarea>
                    @error('mo_ta')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="hinh_anh">Hình ảnh</label>
                <div class="col-md-10">
                    <input id="hinh_anh" name="hinh_anh" value="{{ old('hinh_anh') }}" accept="image/*"
                           type="file" placeholder=""
                           class="form-control @error('hinh_anh') is-invalid @enderror">
                    @error('hinh_anh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- Form actions -->
            <div class="form-group">
                <div class="col-md-12 widget-left">
                    <button type="submit" class="btn btn-danger btn-md pull-left">Cập nhật</button>
                </div>
            </div>
        </fieldset>
    </form>
@else
    <form class="form-horizontal" enctype="multipart/form-data"
          action="{{ route('admin.post_them_canbo') }}" method="post">
        @csrf
        <fieldset>
            <!-- Mã Cán Bộ-->
            <div class="form-group">
                <label class="col-md-2 text-left text-left control-label" for="ma_canbo">Mã Cán
                    Bộ</label>
                <div class="col-md-10">
                    <input id="ma_canbo" name="ma_canbo" type="text" placeholder="Nhập Mã Cán Bộ"
                           value="{{ old('ma_canbo') }}"
                           class="form-control @error('ma_canbo') is-invalid @enderror">
                    @error('ma_canbo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Tên Người Vi Phạm-->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ten_canbo">Tên Cán Bộ</label>
                <div class="col-md-10">
                    <input id="ten_canbo" name="ten_canbo" type="text" placeholder="Nhập Tên Cán Bộ"
                           value="{{ old('ten_canbo') }}"
                           class="form-control @error('ten_canbo') is-invalid @enderror">
                    @error('ten_canbo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- Role -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="role">Loại cán bộ</label>
                <div class="col-md-10">
                    <select id="role" name="role"
                            class="form-control @error('role') is-invalid @enderror">
                        <option value="">Chọn loại cán bộ</option>
                        @foreach(config('constants.loaicanbo') as $role)
                            <option
                                value="{{$role}}" {{ old('role') === $role ? 'selected' : '' }}>{{ config('constants.roles.'.$role) }}</option>
                        @endforeach
                    </select>
                    @error('role')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- Role -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ngay_sinh">Ngày sinh</label>
                <div class="col-md-10">
                    <input id="ngay_sinh" name="ngay_sinh" value="{{ old('ngay_sinh') }}" type="date"
                           placeholder="Loại Cán Bộ"
                           class="form-control @error('ngay_sinh') is-invalid @enderror">
                    @error('ngay_sinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Giới Tính -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="gioi_tinh">Giới Tính</label>
                <div class="col-md-10">
                    <select id="gioi_tinh" name="gioi_tinh"
                            class="form-control @error('role') is-invalid @enderror">
                        <option value="">Chọn giới tính</option>
                        <option value="0" {{ old('gioi_tinh') === 0 ? 'selected' : '' }}>Nữ</option>
                        <option value="1" {{ old('gioi_tinh') === 1 ? 'selected' : '' }}>Nam</option>
                    </select>
                    @error('gioi_tinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Địa Chỉ -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="cmnd">Chứng Minh Thư</label>
                <div class="col-md-10">
                    <input id="cmnd" name="cmnd" type="text" value="{{ old('cmnd') }}"
                           placeholder="Nhập Chứng Minh Thư"
                           class="form-control @error('cmnd') is-invalid @enderror">
                    @error('cmnd')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- Số Điện Thoại -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="chuc_vu">Chức Vụ</label>
                <div class="col-md-10">
                    <input id="chuc_vu" name="chuc_vu" value="{{ old('chuc_vu') }}" type="text"
                           placeholder="Nhập Chức Vụ"
                           class="form-control @error('chuc_vu') is-invalid @enderror">
                    @error('chuc_vu')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label">Địa Chỉ</label>
                <div class="col-md-10">
                    <input id="dia_chi" name="dia_chi" value="{{ old('dia_chi') }}" type="text"
                           placeholder="Nhập Địa Chỉ "
                           class="form-control @error('dia_chi') is-invalid @enderror">
                    @error('dia_chi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label">Số Điện Thoại</label>
                <div class="col-md-10">
                    <input id="sdt" name="sdt" value="{{ old('sdt') }}" type="text"
                           placeholder="Nhập Số Điện Thoại "
                           class="form-control @error('sdt') is-invalid @enderror">
                    @error('sdt')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label">Đơn Vị</label>
                <div class="col-md-10">
                    <input id="don_vi" name="don_vi" value="{{ old('don_vi') }}" type="text"
                           placeholder="Nhập Đơn Vị "
                           class="form-control @error('don_vi') is-invalid @enderror">
                    @error('don_vi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="email">Email</label>
                <div class="col-md-10">
                    <input id="email" name="email" value="{{ old('email') }}" type="email"
                           placeholder="Nhập Email "
                           class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label">Account</label>
                <div class="col-md-10">
                    <input id="account" name="account" value="{{ old('account') }}" type="text"
                           placeholder="Nhập Account "
                           class="form-control @error('account') is-invalid @enderror">
                    @error('account')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="password">Password</label>
                <div class="col-md-10">
                    <input id="password" name="password" value="{{ old('password') }}" type="password"
                           placeholder="Nhập Password "
                           class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label">Mô tả</label>
                <div class="col-md-10">
                                    <textarea rows="4" cols="50" id="mo_ta" name="mo_ta" placeholder="Nhập Mô tả "
                                              class="form-control @error('mo_ta') is-invalid @enderror">{{ old('mo_ta') }} </textarea>
                    @error('mo_ta')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="hinh_anh">Hình ảnh</label>
                <div class="col-md-10">
                    <input id="hinh_anh" name="hinh_anh" value="{{ old('hinh_anh') }}" accept="image/*"
                           type="file" placeholder=""
                           class="form-control @error('hinh_anh') is-invalid @enderror">
                    @error('hinh_anh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
@endif
