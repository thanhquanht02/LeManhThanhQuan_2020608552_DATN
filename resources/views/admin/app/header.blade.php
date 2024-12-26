<nav class="header-nav-admin">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <!-- Topbar Navbar -->
    <ul class="header-nav-list">
        <div class="topbar-divider d-none d-sm-block"></div>

        <li class="header-nav-item">
            <a class="header-nav-link" href="" title="Thống kê">
                <i class="fa fa-chart-line"></i>
            </a>
        </li>
        <li class="header-nav-item">
            <a class="header-nav-link" href="" title="Thông báo">
                <i class="fa fa-bell"></i>
                <span class="notification-badge">3</span>
            </a>
        </li>
        <li class="header-nav-item">
            <a class="header-nav-link" href="" title="Cài đặt">
                <i class="fa fa-cog"></i>
            </a>
        </li>

        <li class="header-nav-item">
            <a class="" type="button" id="userDropdown" data-mdb-toggle="dropdown"
                aria-expanded="false">
                <img class="img-profile" height="50" src="{{ URL('images1/admin.png') }}">
            </a>
            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="/trang-chu">Cửa hàng</a></li>
                <li><a class="dropdown-item" href="/auth/logoff">Đăng xuất</a></li>
            </ul>
        </li>
    </ul>
</nav>
