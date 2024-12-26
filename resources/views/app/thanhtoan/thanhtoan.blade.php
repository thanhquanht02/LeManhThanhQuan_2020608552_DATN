<div class="container">
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/trang-chu">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
        </ol>
    </nav>

    @php
        $tongtien = 0;
    @endphp

    @foreach ($giohangs as $giohang)
        @php
            $tongtien +=
                $giohang['so_luong'] * $giohang['don_gia'] -
                $giohang['so_luong'] * $giohang['don_gia'] * $giohang['khuyen_mai'] * 0.01;
        @endphp
    @endforeach

    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-3">
                <form action="/thanh-toan/hoadon" method="POST">
                    @csrf
                    <div class="card-header">
                        <h5 class="card-title" style="margin-top: 10px">Thông tin nhận hàng:</h5>
                    </div>

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label for="bank_code">Hình thức thanh toán:</label>
                            <select name="hinh_thuc_thanh_toan" id="hinh_thuc_thanh_toan" class="form-control">
                                <option value="Sau khi nhận hàng">Thanh toán khi nhận hàng</option>
                                <option value="Thanh toán qua MoMo">Thanh toán qua MoMo</option>
                                <option value="NCB">Ngân hàng NCB</option>
                                <option value="AGRIBANK">Ngân hàng Agribank</option>
                                <option value="SCB">Ngân hàng SCB</option>
                                <option value="SACOMBANK">Ngân hàng SacomBank</option>
                                <option value="EXIMBANK">Ngân hàng EximBank</option>
                                <option value="MSBANK">Ngân hàng MSBANK</option>
                                <option value="NAMABANK">Ngân hàng NamABank</option>
                                <option value="VIETINBANK">Ngân hàng Vietinbank</option>
                                <option value="VIETCOMBANK">Ngân hàng VCB</option>
                                <option value="HDBANK">Ngân hàng HDBank</option>
                                <option value="DONGABANK">Ngân hàng Dong A</option>
                                <option value="TPBANK">Ngân hàng TPBank</option>
                                <option value="OJB">Ngân hàng OceanBank</option>
                                <option value="BIDV">Ngân hàng BIDV</option>
                                <option value="TECHCOMBANK">Ngân hàng Techcombank</option>
                                <option value="VPBANK">Ngân hàng VPBank</option>
                                <option value="MBBANK">Ngân hàng MBBank</option>
                                <option value="ACB">Ngân hàng ACB</option>
                                <option value="OCB">Ngân hàng OCB</option>
                                <option value="IVB">Ngân hàng IVB</option>
                            </select>
                        </div>
                        <br>

                        <div class="form-outline">
                            <input type="text" class="form-control" name="ten_nguoi_nhan"
                                value="{{ $data['ten_nguoi_dung'] }}" required />
                            <label class="form-label">Tên người nhận</label>
                        </div>
                        <br>
                        <div class="form-outline">
                            <input type="text" class="form-control" name="sdt" value="{{ $data['sdt'] }}"
                                required />
                            <label class="form-label">Số điện thoại</label>
                        </div>
                        <br>

                        <div class="form-outline">
                            <input type="text" class="form-control" name="dia_chi_nhan" required />
                            <label class="form-label">Địa chỉ nhận</label>
                        </div>
                        <br>

                        <div class="form-outline">
                            <textarea type="text" class="form-control" name="ghi_chu"></textarea>
                            <label class="form-label">Ghi chú</label>
                        </div>

                        <input type="hidden" class="form-control" name="tong_tien"
                            value="{{ number_format($tongtien) }} VNĐ" />

                        <input type="hidden" name="thanh_toans" value="{{ serialize($giohangs) }}" />

                        <br>
                        <button type="submit" class="btn btn-success btn-block">Thanh Toán</button>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title" style="margin-top: 10px">HÓA ĐƠN:</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($giohangs as $giohang)
                                <tr>
                                    <td scope="row">{{ $giohang['ten_giay'] }}</td>
                                    <td>{{ number_format($km = sprintf('%d', $giohang['so_luong'] * $giohang['don_gia'] - $giohang['so_luong'] * $giohang['don_gia'] * $giohang['khuyen_mai'] * 0.01)) }}
                                        VNĐ</td>
                                </tr>
                            @endforeach

                            <tr>
                                <th scope="row">Phí vận chuyển</th>
                                <th>0 VNĐ</th>
                            </tr>

                            <tr class="text-success  ">
                                <th scope="row">Tổng </th>
                                <th>{{ number_format($tongtien) }} VNĐ</th>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="cart-footer">
                    <div class="qr-code" id="image-qr-code">@if (! empty($qrCode))
                            <img src="data:image/svg+xml;base64,{{ $qrCode }}" alt="QR Code"/>
                        @endif</div>
                    <button class="btn btn-success" id="btn-generate-new-qr">Tạo mới</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .cart-footer {
            display: flex;
            flex-flow: column;
            align-items: center;
            justify-content: center;

            >.qr-code {
                padding: 10px;
                background: #fff !important;
                width: 250px;
                height: 250px;
                margin: 20px 0;

                > img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            }
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.cart-footer').hide();
            $(document).on('change', '#hinh_thuc_thanh_toan', function(event) {
                event.preventDefault();
                if ($(this).val() == 'Thanh toán qua MoMo') {
                    const qrCodeHtml = $('#image-qr-code').html();
                    if (qrCodeHtml == '') {
                        $('#image-qr-code').html('');
                        generateQrCode();
                    }
                    $('.cart-footer').show();
                } else {
                    $('.cart-footer').hide();
                }
            });

            function generateQrCode() {
                const url = "{{ route('get-qr') }}";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(data) {
                        const qrCode = data.qrCode;
                        if (qrCode == '') {
                            alert('Có lỗi xảy ra, vui lòng thử lại sau');
                            return;
                        }
                        $('#image-qr-code').html(`<img src="data:image/svg+xml;base64,${qrCode}" alt="QR Code"/>`);
                    },
                    error: function(data) {
                        alert(data.error);
                    }
                });
            }

            $('#btn-generate-new-qr').click(function(event) {
                event.preventDefault();
                generateQrCode();
            });
        });
    </script>
</div>
