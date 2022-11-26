
<div id="sidebar-collapse" class="col col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar  d-flex justify-content-center">
            <div class="profile-userpic">
                @if(file_exists(public_path() . '/storage/' . auth('admin')->user()->hinh_anh))
                    <img src="{{ asset('storage/' . auth('admin')->user()->hinh_anh ) }}"
                         class="img-responsive" alt="">
                @else
                    <img src="{{ asset('/storage/images/canbo/default.png') }}"
                         class="img-thumbnail" alt="">
                @endif
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">{{ auth('admin')->user()->account }}</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <ul class="nav menu">
            <li><a href= "{{ route('admin.index') }}">Thông Tin Cá Nhân</a></li>
            <li><a href= "{{ route('admin.danhsach_hoso') }}">Danh Sách Hồ Sơ</a></li>
            <li><a href= "{{ route('admin.danhsach_canbo') }}">Danh Sách Cán Bộ</a></li>
            <li><a href= "{{ route('admin.danhmuc_loi') }}">Danh Mục Lỗi</a></li>
            <li><a href= "{{ route('admin.them_canbo') }}">Thêm Cán Bộ</a></li>
            <li><a href= "{{ route('admins.logout') }}">Đăng xuất</a></li>
        </ul>
    </div>
