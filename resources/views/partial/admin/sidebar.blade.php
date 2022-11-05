
<div id="sidebar-collapse" class="col col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="https://vcdn-giaitri.vnecdn.net/2019/05/07/lee-min-ho-5568-1557197339.jpg"
                    class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">AD ABC PC</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <!-- Start Menu -->
        <ul class="nav menu">

            <li><a href= "{{ route('admin.danhsach_hoso') }}"><em class="fa fa-address-book">&nbsp;</em> Danh Sách Hồ Sơ</a></li>
            <li><a href= "{{ route('admin.danhsach_canbo') }}"><em class="fa fa-user">&nbsp;</em> Cán Bộ </a></li>
            <li><a href= "{{ route('admin.danhmuc_loi') }}"><em class="fa fa-calendar">&nbsp;</em>Danh Mục Lỗi </a></li>
            <li><a href= "{{ route('admin.them_canbo') }}"><em class="fa fa-user-plus"></em>Thêm Cán Bộ </a></li>
            <li><a href= "{{ route('admin.index') }}"><em class="fa fa-user-secret">&nbsp;</em> Thông Tin Cá Nhân </a></li>
            <li><a href= "../login.php"><em class="fa fa-power-off">&nbsp;</em> Logout </a></li>
        </ul>
    </div>