@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>LỊCH SỬ ĐƠN HÀNG</strong>&ensp;
            <i class="fas fa-cart-arrow-down"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <!-- table-hover -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên người nhận</th>
                        <th scope="col">Địa chỉ nhận</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Ngày đặt hàng</th>
                        <th scope="col">Ghi chú</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Thanh toán</th>
                        <th scope="col">Thay đổi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donhangs as $donhang)
                        @if ($donhang['trang_thai'] != "Chưa hoàn thành")
                            <tr>
                                <td scope="row">{{$donhang['id_don_hang']}}</td>
                                <td>{{$donhang['ten_nguoi_nhan']}}</td>
                                <td>{{$donhang['dia_chi_nhan']}}</td>
                                <td>{{$donhang['sdt']}}</td>
                                <td>{{$donhang['created_at']}}</td>
                                <td>{{$donhang['ghi_chu']}}</td>
                                <td>{{$donhang['trang_thai']}}</td>
                                <td>{{$donhang['tong_tien']}}</td>
                                <td>
                                    <a href="/admin/donhang/xem/id={{$donhang['id_don_hang']}}" type="button" class="btn btn-btn-primary btn-rounded">Chi tiết</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach


                </tbody>
            </table>

            <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
            </script>
        </div>
    </div>

</div>


<!-- <div class="card shadow">
    <div class="card-header">
        <h5 class="card-title" style="margin-top: 10px">Tùy chỉnh:</h5>
    </div>
    <div class="card-body">

        <a href="/admin/donhang/them" type="button" class="btn btn-info">Duyệt</a>

    </div>
</div> -->



<br>
@endsection