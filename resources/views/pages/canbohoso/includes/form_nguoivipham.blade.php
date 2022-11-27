@if(!empty($nguoivipham))
    <form class="form-horizontal"
          action="{{ route('cb_hoso.post_chinhsua_nguoivipham', $nguoivipham->cmnd ) }}" method="post">
        @csrf
        <fieldset>
            <!-- Mã Lỗi -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ho_ten">Họ Tên</label>
                <div class="col-md-10">
                    <input id="ho_ten" name="ho_ten" type="text" placeholder="Nhập Họ Tên"
                           value="{{old('ho_ten', $nguoivipham->ho_ten)}}"
                           class="form-control @error('ho_ten') is-invalid @enderror">
                    @error('ho_ten')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Tên Lỗi-->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ten_loi">Email</label>
                <div class="col-md-10">
                    <input id="ten_loi" name="email" type="text" placeholder="Nhập Email"
                           value="{{old('ten_loi', $nguoivipham->email)}}"
                           class="form-control @error('ten_loi') is-invalid @enderror">
                    @error('email')
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
                        <option value="0" {{ old('gioi_tinh', $nguoivipham->gioi_tinh) == 0 ? 'selected' : '' }}>Nữ</option>
                        <option value="1" {{ old('gioi_tinh', $nguoivipham->gioi_tinh) == 1 ? 'selected' : '' }}>Nam</option>
                    </select>
                    @error('gioi_tinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Nghị Định -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="nghi_dinh">Ngày Sinh</label>
                <div class="col-md-10">
                    <input id="ngay_sinh" name="ngay_sinh" type="date"
                           value="{{old('ngay_sinh', $nguoivipham->ngay_sinh)}}"
                           class="form-control @error('nghi_dinh') is-invalid @enderror">
                    @error('ngay_sinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Phương tiện -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="dia_chi">Địa Chỉ</label>
                <div class="col-md-10">
                    <input id="dia_chi" name="dia_chi" type="text" placeholder="Nhập địa chỉ"
                           value="{{old('dia_chi', $nguoivipham->dia_chi)}}"
                           class="form-control @error('dia_chi') is-invalid @enderror">
                    @error('dia_chi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Mức phạt -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="sdt">Số Điện Thoại</label>
                <div class="col-md-10">
                    <input id="sdt" name="sdt" type="text" placeholder="Nhập số điện thoại"
                           value="{{old('sdt', $nguoivipham->sdt)}}"
                           class="form-control @error('sdt') is-invalid @enderror">
                    @error('sdt')
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
@endif
