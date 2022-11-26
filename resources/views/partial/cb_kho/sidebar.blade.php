
<div id="sidebar-collapse" class="col col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
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
{{--        <form role="search">--}}
{{--            <div class="form-group">--}}
{{--                <input type="text" class="form-control" placeholder="Search">--}}
{{--            </div>--}}
{{--        </form>--}}
        <!-- Start Menu -->
        <ul class="nav menu">
            <li><a href="{{ route('cb_kho.index') }}">Thông Tin Cá Nhân</a></li>
            <li><a href="{{ route('cb_kho.danhsach_tangvat') }}">Danh Sách Tang Vật</a></li>
            <li><a href="{{ route('cb_kho.nhan_tangvat') }}">Nhận Tang Vật</a></li>
            <li><a href="{{ route('cb_kho.danhsach_hoso') }}">Thông Tin Hồ Sơ</a></li>
            <li><a href= "{{ route('admins.logout') }}">Đăng xuất</a></li>
        </ul>
    </div>
