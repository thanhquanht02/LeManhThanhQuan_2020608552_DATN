<div class="container">
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/trang-chu">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
        </ol>
    </nav>
    <br>

    <div class="table-responsive">
        <!-- table-hover -->
        <table class="table" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Tên giày</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Khuyến mãi</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($giohangs as $id => $giohang)
                    <tr>
                        <th>
                            <form id="thanh-toan" action="/thanh-toan" method="POST">
                                @csrf
                                <div class="form-check info">
                                    <input class="form-check-input check-select-product" data-id={{ $id }}
                                        data-count={{ $giohang['so_luong'] }}
                                        data-price="{{ sprintf('%d', $giohang['so_luong'] * $giohang['don_gia'] - $giohang['so_luong'] * $giohang['don_gia'] * $giohang['khuyen_mai'] * 0.01) }}"
                                        type="checkbox" value="{{ $id }}" name="check-gio-hang[]"
                                        form="thanh-toan" checked />
                                </div>
                            </form>
                        </th>
                        <td scope="row">
                            <img src="/images2/{{ $giohang['hinh_anh_1'] }}" alt="..."
                                class="img-fluid rounded-start" width="100px" />
                        </td>
                        <td>{{ $giohang['ten_giay'] }}</td>
                        <td>{{ number_format($giohang['don_gia']) }} VNĐ</td>
                        <td>{{ $giohang['khuyen_mai'] }}%</td>

                        <form action="/gio-hang/cap-nhat" method="POST">
                            @csrf
                            <input type="hidden" class="form-control" name="id" value="{{ $id }}" />

                            <td>
                                <div class="d-flex">
                                    <div class="btn btn-info px-3 mr-1"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                        style="margin-right:2px">
                                        <i class="fas fa-minus"></i>
                                    </div>

                                    <div class="form-outline" style="width:80px">
                                        <input id="form1" min="1" name="so_luong"
                                            value="{{ $giohang['so_luong'] }}" type="number" autocomplete="off"
                                            class="form-control" data-id={{ $id }} />
                                        <label class="form-label" for="form1">Số lượng</label>
                                    </div>&nbsp;

                                    <div class="btn btn-info px-3 mr-1"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </td>
                            <td><b>{{ number_format($km = sprintf('%d', $giohang['so_luong'] * $giohang['don_gia'] - $giohang['so_luong'] * $giohang['don_gia'] * $giohang['khuyen_mai'] * 0.01)) }}
                                    VNĐ<b>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-info">Cập nhật</button>

                                <a href="/gio-hang/xoa/id={{ $id }}"
                                    onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                    class="btn btn-danger">Xóa</a>
                            </td>
                        </form>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();

                $(document).on('change', '.check-select-product', function(event) {
                    event.preventDefault();

                    var total_price = 0;

                    $('.check-select-product').each(function() {
                        if ($(this).is(':checked')) {
                            total_price += parseInt($(this).data('price'));
                        }
                    });

                    total_price = total_price.toLocaleString('ja');

                    $('#show-total-product').html("Tổng tiền: " + total_price + " VNĐ");
                });
            });
        </script>
    </div>

    @php
        $tongtien = 0;
    @endphp

    @foreach ($giohangs as $id => $giohang)
        @php
            $tongtien += $giohang['so_luong'] * $giohang['don_gia'] * (1 - $giohang['khuyen_mai'] * 0.01);
        @endphp
    @endforeach
    <div class="card ">
        <form class="card-header">
            <div class="float-start">
                <h4 class="card-title text-success" id="show-total-product" style="margin-top: 20px">Tổng tiền:
                    {{ number_format($tongtien) }} VNĐ
                </h4>
            </div>
            <div class="float-end">
                <button type="submit" class="btn btn-success" style="margin: 15px" form="thanh-toan">Thanh
                    Toán</button>
            </div>
        </form>
    </div>
</div>
