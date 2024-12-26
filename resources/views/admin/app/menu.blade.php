<!-- Sidebar -->
<ul class="navbar-nav sidebar" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand" href="/admin">
        <div class="sidebar-brand-text mx-3">Storm Shop</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item" id="thongke">
        <a class="nav-link" href="/admin">
            <i class="fas fa-home"></i>
            <span>Thống kê</span>
        </a>
    </li>

    <li class="nav-item" id="quanlytaikhoan">
        <a class="nav-link" href="/admin/taikhoan">
            <i class="fas fa-user"></i>
            <span>Quản lý tài khoản</span>
        </a>
    </li>

    <li class="nav-item" id="quanlythuonghieu">
        <a class="nav-link" href="/admin/thuonghieu">
            <i class="fas fa-trademark"></i>
            <span>Quản lý thương hiệu</span>
        </a>
    </li>

    <li class="nav-item" id="quanlyloaigiay">
        <a class="nav-link" href="/admin/loaigiay">
            <i class="fas fa-shoe-prints"></i>
            <span>Quản lý loại giày</span>
        </a>
    </li>

    <li class="nav-item" id="quanlygiay">
        <a class="nav-link" href="/admin/giay">
            <i class="fas fa-list"></i>
            <span>Quản lý giày</span>
        </a>
    </li>

    <li class="nav-item" id="xetduyetdonhang">
        <a class="nav-link" href="/admin/donhang">
            <i class="fas fa-cart-arrow-down"></i>
            <span>Xét duyệt đơn hàng</span>
        </a>
    </li>
    <li class="nav-item" id="lichsudonhang">
        <a class="nav-link" href="/admin/donhang/lichsu">
            <i class="fas fa-clock"></i>
            <span>Lịch sử đơn hàng</span>
        </a>
    </li>
    <li class="nav-item" id="quanlykhuyenmai">
        <a class="nav-link" href="/admin/khuyenmai">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Quản lý khuyến mãi</span>
        </a>
    </li>

    <li class="nav-item" id="quanlyphanquyen">
        <a class="nav-link" href="/admin/phanquyen">
            <i class="fas fa-users"></i>
            <span>Quản lý phân quyền</span>
        </a>
    </li>

    <br>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
<script>
    // Lấy tất cả các mục sidebar
    const sidebarItems = document.querySelectorAll('#accordionSidebar .nav-item');
    // Lấy trạng thái active từ Local Storage
    const activeItemId = localStorage.getItem('activeSidebarItem');
    // Nếu có ID của item đang active trong Local Storage, đặt lại trạng thái active
    if (activeItemId) {
        const activeItem = document.getElementById(activeItemId);
        if (activeItem) {
            activeItem.classList.add('active');
        }
    }
    // Lặp qua từng item và thêm sự kiện click
    sidebarItems.forEach(item => {
        item.addEventListener('click', function() {
            // Loại bỏ class 'active' từ tất cả các item
            sidebarItems.forEach(i => i.classList.remove('active'));
            // Thêm class 'active' vào item vừa được click
            item.classList.add('active');
            // Lưu ID của item vào Local Storage
            localStorage.setItem('activeSidebarItem', item.id);
        });
    });
</script>
