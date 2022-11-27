@if(!empty($tangvat))
    <form class="form-horizontal"
          action="{{ route('cb_kho.post_chinhsua_tangvat', $tangvat->ma_tangvat ) }}" method="post">
        @csrf
        <fieldset>
            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ten_tangvat">Tên Tang Vật</label>
                <div class="col-md-10">
                    <input id="ten_tangvat" name="ten_tangvat" type="text" placeholder="Nhập Họ Tên"
                           value="{{old('ten_tangvat', $tangvat->ten_tangvat)}}"
                           class="form-control @error('ten_tangvat') is-invalid @enderror">
                    @error('ten_tangvat')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="ngay_tam_giu">Ngày Giữ</label>
                <div class="col-md-10">
                    <input id="ngay_tam_giu" name="ngay_tam_giu" type="date"
                           value="{{old('ngay_tam_giu', $tangvat->ngay_tam_giu)}}"
                           class="form-control @error('ngay_tam_giu') is-invalid @enderror" disabled>
                    @error('ngay_tam_giu')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="thoigian_tamgiu">Thời Gian Giữ</label>
                <div class="col-md-10">
                    <input id="thoigian_tamgiu" name="thoigian_tamgiu" type="text" placeholder="Nhập thời gian tạm giữ"
                           value="{{old('dia_chi', $tangvat->thoigian_tamgiu)}}"
                           class="form-control @error('thoigian_tamgiu') is-invalid @enderror" disabled>
                    @error('thoigian_tamgiu')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 text-left control-label" for="trang_thai">Trạng Thái</label>
                <div class="col-md-10">
                    <select id="trang_thai" name="trang_thai"
                            class="form-control @error('trang_thai') is-invalid @enderror" disabled>
                        <option value="">Trạng thái</option>
                        @foreach(config('constants.tang_vat.trang_thai') as $key=>$trangthai)
                            <option value="{{ $key }}" {{ old('trang_thai', $tangvat->trang_thai) == $key ? 'selected' : '' }}>{{ $trangthai }}</option>
                        @endforeach
                    </select>
                    @error('trang_thai')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="mota">Mô tả</label>
                <div class="col-md-10">
                    <textarea id="mota" name="mota" type="text" placeholder="Nhập Mô tả" rows="4"
                              cols="50"
                              class="form-control @error('mota') is-invalid @enderror"
                    >{{ old('mota', $tangvat->mota) }}</textarea>
                    @error('mota')
                    <div class="alert alert-danger d-none">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 widget-left">
                    <button type="submit" class="btn btn-danger btn-md pull-left">Cập nhật</button>
                </div>
            </div>
        </fieldset>
    </form>
@else
@endif
