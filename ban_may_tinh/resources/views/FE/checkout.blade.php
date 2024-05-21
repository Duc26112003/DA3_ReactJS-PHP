<!DOCTYPE html>
<html>

<head>
    <title>Lenovo Thinkpad T460s</title>
    <link href="./image/logo_logo-web-t4.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/Watchall.css">
    <link rel="stylesheet" href="css/product_details.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="Hurricane,Roboto/Roboto/Roboto-BlackItalic.ttf">
    <link rel="stylesheet" href="css/Paying.css">
    <link rel="stylesheet" href="css/IFoder.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @include('FE.header')
    </section>
    <section style="margin-top:160px">
        <div class="option">
            <a style="margin-left: 10px" onclick="{{ asset('FE.index') }}">Trang chủ </a>
            <span>&#160;/&#160;</span>
            <a onclick="giohang()">Thanh Toán</a>
        </div>
    </section>
    <section>
        <div class="row CartCT">
            <form class="col-12 col-s-12 col-m-12" method="post" action="{{ route('check-out') }}">
                {{ csrf_field() }}
                <div class="Paying">
                    <div class="col-12 col-s-12 col-m-12 payhead">
                        THÔNG TIN NGƯỜI NHẬN
                    </div>
                    <div class="infomationpay">
                        <div class="col-12 col-s-12 col-m-12 pay1">
                            <label for="txt_hdem">Họ tên <span id="s_hdem" style="color: red;">*</span>: </label>
                            <input type="text" id="txt_hdem" placeholder="Nhập họ và tên" name="ho_ten" required>
                        </div>
                        <div class="col-12 col-s-12 col-m-12 pay1">
                            <label for="txt_tinh">Tỉnh <span id="s_tinh" style="color: red;">*</span>: </label>
                            <select id="txt_tinh" name="tinh">
                                @foreach ($provinces as $province)
                                    <option value="{{ $province }}">{{ $province }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-s-12 col-m-12 pay1">
                            <label for="txt_diachi">Địa chỉ <span id="s_diachi" style="color: red;">*</span>: </label>
                            <input type="text" id="txt_diachi" placeholder="Địa chỉ của bạn" name="dia_chi" required>
                        </div>
                        <div class="col-12 col-s-12 col-m-12 pay1">
                            <label for="txt_sdt">Điện thoại <span id="s_sdt" style="color: red;">*</span>: </label>
                            <input type="text" id="txt_sdt" placeholder="Số điện thoại của bạn" name="dienthoai"
                                required>
                        </div>
                        <div class="col-12 col-s-12 col-m-12 pay1">
                            <label for="txt_email">Email <span id="s_email" style="color: red;">*</span>: </label>
                            <input type="text" id="txt_email" placeholder="Email của bạn (nếu có)" name="email"
                                required>
                        </div>
                        <div class="col-12 col-s-12 col-m-12 pay1">
                            <label for="txt_tt">Thông tin : </label>
                            <textarea id="thongtin" placeholder="Laptop An Phát sẽ gọi lại ngay khi bạn gửi đơn hàng" name="thongtin" required></textarea>
                        </div>

                        <div class="col-6 col-s-12 col-m-12 Infoder">
                            <div>Thông tin đơn hàng</div>
                            @foreach ($detail_cart as $in)
                                @if ($in->product)
                                    <div class="Infoder11">
                                        <div class="Infoder1">
                                            <img name="hinhanh" src="image/{{ $in->product->hinhanh }}" width="100%">
                                            <div>
                                                <span>{{ $in->product->tensanpham }}</span><br>
                                                <span>Số lượng: {{ $in->quantity }}</span>
                                                <input type="hidden" name="product_name" value="{{ $in->product->tensanpham }}">
                                                <input type="hidden" name="product_quantity" value="{{ $in->quantity }}">
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="Infoder11">
                                        <div class="Infoder1">
                                            <img name="hinhanh" src="image/a2.jpg" width="100%">
                                            <!-- Đường dẫn đến ảnh mặc định -->
                                            <div>
                                                <span>Product not found for cart item with ID:
                                                    {{ $in->id }}</span><br>
                                                <span>Số lượng: {{ $in->quantity }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            {{-- @foreach ($detail_cart as $in)
                                <div class="Infoder11">
                                    <div class="Infoder1">
                                        <img  name="hinhanh" src="image/{{ $in->product->hinhanh }}" width="100%">
                                        <div>
                                            <span >{{ $in->product->tensanpham }}</span><br>
                                            <span >Số lượng : {{ $in->quantity }}</span>
                                            <input type="hidden" name="product_name" value="{{ $in->product->tensanpham }}">
                                            <input type="hidden" name="product_quantity" value="{{ $in->quantity }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach --}}
                            {{-- <div class="Infoder11">
                                    <div class="Infoder1">
                                        <img  name="hinhanh" src="image/a2.jpg" width="100%">
                                        <div>
                                            <span >Máy tính cá nhân</span><br>
                                            <span >Số lượng : 10</span>
                                            {{-- <input type="hidden" name="product_name" value="{{ $in->product->tensanpham }}">
                                            <input type="hidden" name="product_quantity" value="{{ $in->quantity }}"> 
                                        </div>
                                    </div>
                                </div> --}}
                            <div class="Totalpay">
                                <div>Tổng tiền</div>
                                <div>
                                    <span name="product_price">Tạm tính: {{ number_format($totalPrice) }} VND</span>
                                    <input type="hidden" name="product_price" value="{{ $totalPrice }}">
                                    <span class="cart-total-price"></span>
                                </div>

                            </div>

                        </div>
                        <div style="margin-bottom: 10px" class="col-12 col-s-12 col-m-12 pay1">
                            <button type="submit"
                                style="height: 50px;width:100%;background:#f49209;color:#fff;cursor: pointer;border-outline:none"
                                name="send_order" class="btn btn-warning btn-sm ">Gửi Đơn Hàng</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>


    {{-- @include('FE.footer') --}}
    <section>
        <div class="fix_tel">
            <div class="ring-alo-phone ring-alo ring-alo-show" id="ring-alo-phoneIcon"
                style="right: 150px; bottom: -12px;">
                <div class="ring-alo-ph-circle"></div>
                <div class="ring-alo-ph-circle-fill"></div>

            </div>
        </div>
        <div class="Lienhe">
            <div class="lienhe1">Tư vấn + Kĩ Thuật BH</div>

            <div class="lienhe3">
                <div class="lienhe2">NV tư vấn (Hà Nội)</div>
                <i class="fa-solid fa-square-phone"></i><span>098677876</span>
            </div>

            <div class="lienhe3">
                <div class="lienhe2">NV tư vấn (Hà Nội)</div>
                <i class="fa-solid fa-square-phone"></i><span>0898747999</span>
            </div>

            <div class="lienhe3">
                <div class="lienhe2">NV tư vấn (Bắc Ninh)</div>
                <i class="fa-solid fa-square-phone"></i><span>0788474999</span>
            </div>

            <div class="lienhe3">
                <div class="lienhe2">Kỹ thuật + BH</div>
                <i class="fa-solid fa-square-phone"></i><span>02462536141</span>
            </div><br>
        </div>
    </section>
    <section>
        <div class="open">
            <div onclick="ClickH()" class="open1">
                <i style="padding-top: 5px; padding-left: 30px ;" class="fa-solid fa-phone"></i><br>
                <i style="padding-left: 8px;" class="fa-solid fa-comment-dots"></i><br>
                <i style="padding-left: 30px; " class="fa-solid fa-location-dot"></i>
            </div>
            <div class="open2"></div>
        </div>
        <div class="open3">
            <div class="open31" style="bottom: 170px; right: 20px;">
                <span>Tìm cửa hàng</span>
                <i style="background-color: rgb(20, 155, 49);" class="fa-solid fa-location-dot"></i>
            </div>
            <div class="open31" style="bottom: 120px; right: 130px;">
                <span>Gọi Hotline</span>
                <i style="background-color: red;" class="fa-solid fa-phone"></i>
            </div>
            <div class="open31" style="bottom: 70px; right: 165px;">
                <span>Chát FB ngay</span>
                <i style="background-color: blue;" class="fa-solid fa-comment-dots"></i>
            </div>
            <div style="display: flex;bottom: 20px; right: 180px;" class="open31">
                <span>Chát Zalo ngay</span>
                <img src="image/logo-zalo-vector.png">
            </div>
            <div onclick="ClickK()" class="open32">
                <i class="fa-solid fa-x"></i>
            </div>
        </div>
    </section>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('/Js/giohang.js') }}"></script>

</html>
