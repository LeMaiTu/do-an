@if(!empty($loi))
    <form class="form-horizontal"
          action="{{ route('admin.post_chinhsua_loi', $loi->ma_loi ) }}" method="post">
        @csrf
        <fieldset>
            <!-- Mã Lỗi -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ma_loi">Mã Lỗi</label>
                <div class="col-md-10">
                    <input id="ma_loi" name="ma_loi" type="text" placeholder="Nhập Mã Lỗi"
                           value="{{old('ma_loi', $loi->ma_loi)}}"
                           class="form-control @error('ma_loi') is-invalid @enderror" disabled>
                    @error('ma_loi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Tên Lỗi-->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ten_loi">Tên Lỗi</label>
                <div class="col-md-10">
                    <input id="ten_loi" name="ten_loi" type="text" placeholder="Nhập Tên Lỗi"
                           value="{{old('ten_loi', $loi->ten_loi)}}"
                           class="form-control @error('ten_loi') is-invalid @enderror">
                    @error('ten_loi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Nghị Định -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="nghi_dinh">Nghị Định</label>
                <div class="col-md-10">
                    <input id="nghi_dinh" name="nghi_dinh" type="text" placeholder="Nhập Nghị Định"
                           value="{{old('nghi_dinh', $loi->nghi_dinh)}}"
                           class="form-control @error('nghi_dinh') is-invalid @enderror">
                    @error('nghi_dinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Chi tiết Nghị Định -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="chitiet_nghidinh">Chi Tiết Nghị Định</label>
                <div class="col-md-10">
                    <textarea rows="4" cols="50" id="chitiet_nghidinh" name="chitiet_nghidinh" placeholder="Nhập Chi Tiết Nghị Định"
                              class="form-control @error('chitiet_nghidinh') is-invalid @enderror">{{ old('chitiet_nghidinh', $loi->chitiet_nghidinh) }}</textarea>
                    @error('chitiet_nghidinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Phương tiện -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="loai_phuongtien">Phương Tiện</label>
                <div class="col-md-10">
                    <input id="loai_phuongtien" name="loai_phuongtien" type="text" placeholder="Nhập Phương Tiện"
                           value="{{old('loai_phuongtien', $loi->loai_phuongtien)}}"
                           class="form-control @error('loai_phuongtien') is-invalid @enderror">
                    @error('loai_phuongtien')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Mức phạt -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="muc_phat">Mức Phạt</label>
                <div class="col-md-10">
                    <input id="muc_phat" name="muc_phat" type="text" placeholder="Nhập Mức Phạt(100.000 - 500.000VND)"
                           value="{{old('muc_phat', $loi->muc_phat)}}"
                           class="form-control @error('muc_phat') is-invalid @enderror">
                    @error('muc_phat')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="mo_ta">Mô tả</label>
                <div class="col-md-10">
                    <textarea id="mo_ta" rows="4" cols="50" id="mo_ta" name="mo_ta" placeholder="Nhập Mô tả"
                              class="form-control @error('mo_ta') is-invalid @enderror">{{ old('mo_ta', $loi->mo_ta) }}</textarea>
                    @error('mo_ta')
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
    <form class="form-horizontal"
          action="{{ route('admin.post_them_loi') }}" method="post">
        @csrf
        <fieldset>
            <!-- Mã Lỗi -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ma_loi">Mã Lỗi</label>
                <div class="col-md-10">
                    <input id="ma_loi" name="ma_loi" type="text" placeholder="Nhập Mã Lỗi"
                           value="{{old('ma_loi')}}"
                           class="form-control @error('ma_loi') is-invalid @enderror">
                    @error('ma_loi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Tên Lỗi-->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ten_loi">Tên Lỗi</label>
                <div class="col-md-10">
                    <input id="ten_loi" name="ten_loi" type="text" placeholder="Nhập Tên Lỗi"
                           value="{{old('ten_loi')}}"
                           class="form-control @error('ten_loi') is-invalid @enderror">
                    @error('ten_loi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Nghị Định -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="nghi_dinh">Nghị Định</label>
                <div class="col-md-10">
                    <input id="nghi_dinh" name="nghi_dinh" type="text" placeholder="Nhập Nghị Định"
                           value="{{old('nghi_dinh')}}"
                           class="form-control @error('nghi_dinh') is-invalid @enderror">
                    @error('nghi_dinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Chi tiết Nghị Định -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="chitiet_nghidinh">Chi Tiết Nghị Định</label>
                <div class="col-md-10">
                    <textarea rows="4" cols="50" id="chitiet_nghidinh" name="chitiet_nghidinh" placeholder="Nhập Chi Tiết Nghị Định"
                              class="form-control @error('chitiet_nghidinh') is-invalid @enderror">{{ old('chitiet_nghidinh') }}</textarea>
                    @error('chitiet_nghidinh')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Phương tiện -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="loai_phuongtien">Phương Tiện</label>
                <div class="col-md-10">
                    <input id="loai_phuongtien" name="loai_phuongtien" type="text" placeholder="Nhập Phương Tiện"
                           value="{{old('loai_phuongtien')}}"
                           class="form-control @error('loai_phuongtien') is-invalid @enderror">
                    @error('loai_phuongtien')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Mức phạt -->
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="muc_phat">Mức Phạt</label>
                <div class="col-md-10">
                    <input id="muc_phat" name="muc_phat" type="text" placeholder="Nhập Mức Phạt(100.000 - 500.000VND)"
                           value="{{old('muc_phat')}}"
                           class="form-control @error('muc_phat') is-invalid @enderror">
                    @error('muc_phat')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="mo_ta">Mô tả</label>
                <div class="col-md-10">
                    <textarea rows="4" cols="50" id="mo_ta" name="mo_ta" placeholder="Nhập Mô tả " class="form-control @error('mo_ta') is-invalid @enderror">{{ old('mo_ta') }}</textarea>
                    @error('mo_ta')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- Form actions -->
            <div class="form-group">
                <div class="col-md-12 widget-left">
                    <button type="submit" class="btn btn-danger btn-md pull-left">Thêm mới</button>
                </div>
            </div>
        </fieldset>
    </form>
@endif
