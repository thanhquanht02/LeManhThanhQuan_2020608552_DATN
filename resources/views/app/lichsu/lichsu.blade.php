<div class="container">
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/trang-chu">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lịch sử đặt hàng</li>
        </ol>
    </nav>
    <br>

    @isset($donhangs)

        <div class="table-responsive">
            <!-- table-hover -->
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Ngày cập nhật</th>
                        <th scope="col">Hình thức thanh toán</th>
                        <th scope="col">Ghi chú</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donhangs as $donhang)
                        <tr>
                            <td scope="row">{{ $donhang['id_don_hang'] }}</td>
                            <td>{{ $donhang['ten_nguoi_nhan'] }}</td>
                            <td>{{ $donhang['dia_chi_nhan'] }}</td>
                            <td>{{ $donhang['sdt'] }}</td>
                            <td>{{ $donhang['updated_at'] }}</td>
                            <td>{{ $donhang['hinh_thuc_thanh_toan'] }}</td>
                            <td>{{ $donhang['ghi_chu'] }}</td>
                            <td>{{ $donhang['trang_thai'] }}</td>
                            <td>{{ $donhang['tong_tien'] }}</td>
                            <td>
                                <a href="/lich-su/{{ $donhang['id_don_hang'] }}" type="button"
                                    class="btn btn-success btn-rounded">Xem chi tiết</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @else
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Tên giày</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $donhangs = unserialize($donhang['hoa_don']);
                        @endphp

                        @foreach ($donhangs as $donhang)
                        <tr>
                            <td scope="row">{{$donhang['ten_giay']}}</td>
                            <td>{{number_format($donhang['don_gia'])}} VNĐ</td>
                            <td>{{$donhang['so_luong']}}</td>
                            <td>{{number_format($donhang['don_gia'] * $donhang['so_luong'])}} VNĐ</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        @endisset

        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>
        <br>
        <br>
    </div>
</div>
