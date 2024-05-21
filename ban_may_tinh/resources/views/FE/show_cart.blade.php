a
<!DOCTYPE html>
<html>

<head>
    <title>Giỏ hàng</title>
    <link href="./image/logo_logo-web-t4.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Watchall.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product_details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="Hurricane,Roboto/Roboto/Roboto-BlackItalic.ttf">
    <link rel="stylesheet" href="{{ asset('css/Paying.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @include('FE.header')
    </section>
    <section style="margin-top:160px">
        <div class="option" style="cursor: pointer;">
            <a style="margin-left: 10px" href="{{ route('FE.index') }}">Trang chủ </a>
            <span>&#160;/&#160;</span>
            <a href="">Giỏ hàng</a>
        </div>
    </section>


    <section>
        <div class="row CartCT">
            <div class="col-6 col-s-12 col-m-12 Cart-contentF">
                <div class="Cart-header">
                    <a>Giỏ hàng</a>
                    <a id="Soluong"></a>
                </div>
                <div class="Cart-body">
                    <div class="Cart-row">
                        <span class="cart-item  cart-column">Sản Phẩm</span>
                        <span class="cart-price  cart-column">Giá</span>
                        <span class="cart-quantity  cart-column">Số Lượng</span>
                    </div>
                    @if ($items->isEmpty())
                        <div class="over-cart2">
                            <p style="text-align: center;">
                                <img src="/image/cart.png" style="height: 100px;"><br>
                                Giỏ hàng của bạn trống !<br>
                                <a href="{{ route('FE.index') }}">
                                    <button
                                        style="margin-top: 10px; background-color: orange; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                                        Mua Ngay
                                    </button>
                                </a>
                            </p>
                        </div>
                    @else
                        @foreach ($items as $item)
                            <div class="over-cart2">
                                <div class="Cart-product">
                                    <div class="cart-item cart-column">
                                        <img class="Cart-img" src="/image/{{ $item->hinhanh }}">
                                        <span class="Cart-infor">{{ $item->tensanpham }}</span>
                                    </div>
                                    <span
                                        class="cart-price price-product cart-column">{{ number_format($item->giasanpham) }}₫</span>
                                    <div class="cart-quantity cart-quantity-ca cart-column">
                                        <form action="{{ URL::to('/update-cart') }}" method="post" id="update-cart-form">
                                            {{ csrf_field() }}
                                            <input
                                                style="width: 50%; text-align: center; line-height: 30px; border-radius: 5px; border: 1px solid #56CCF2; background-color: #eee; color: #333; padding-left: 5px;"
                                                id="cart_quantity" name="cart_quantity" type="number"
                                                value="{{ $item->quantity }}">
                                            <input type="hidden" value="{{ $item->id_sanpham }}" name="product_id" class="form-control">
                                            <input type="submit" value="Cập nhật" name="quantity" class="btn btn-default btn-sm">
                                        </form>
                                        <form action="{{ route('delete_to_cart', ['product_id' => $item->product_id]) }}" method="post" onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng không?')">
                                            {{ csrf_field() }}
                                            <button type="submit" class="Cart-xoa">Xoá</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-6 col-s-12 col-m-12 cart-TC">
                <div class="Cart-total2">
                    <div>Tổng tiền</div>
                    <div>
                        <span>Tạm tính: </span>
                        <span class="cart-total-price">{{ number_format($subtotal) }}₫</span>
                    </div>
                    <div>
                        <span>Thuế VAT</span>
                        <span class="cart-total-price2">{{ number_format($vat) }}₫</span>
                    </div>
                    <div>
                        <span>Vận chuyển: </span>
                        <span>Miễn phí vận chuyển</span>
                    </div>
                    <div>
                        <span>Thành tiền </span>
                        <span class="cart-total-price4">{{ number_format($total) }}₫</span>
                    </div>
                    <a href="{{ route('FE.checkout') }}">
                        <button class="DAtHANG">TIẾN HÀNH ĐẶT HÀNG</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: rgb(249, 246, 246); padding-top: 20px;padding-bottom: 20px;">
        <div class="LaptopT NextB">
            <div class="Next1">
                <i onclick="BackSP()" style="left: 5px;" class="fa-solid fa-angle-left"></i>
            </div>
            <div class="Next2">
                <i onclick="NextSP()" style="float: right;" class="fa-solid fa-angle-right"></i>
            </div>



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
    <section>
        <div class="updown upa">
            <i style="bottom: 100px; " class="fa-solid fa-chevron-up"></i>
        </div>

    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('/Js/general.js') }}"></script>
<script type="text/javascript" src="{{ asset('/Js/product_details.js') }}"></script>
<script type="text/javascript" src="{{ asset('/Js/giohang.js') }}"></script>
<script type="text/javascript" src="{{ asset('/Js/onclick.js') }}"></script>
<script>
    function UpdateCart() {
        // Lặp qua từng ô nhập số
        var quantities = document.querySelectorAll('.cart-quantity-input');
        var formData = new FormData();

        quantities.forEach(function(quantity) {
            // Lấy giá trị số lượng từ mỗi ô nhập số
            var qty = quantity.value;
            // Lấy rowId từ thuộc tính data-rowId của ô nhập số
            var rowId = quantity.getAttribute('data-rowId');

            // Thêm dữ liệu vào formData
            formData.append('cart_quantity[' + rowId + ']', qty);
        });

        // Gửi dữ liệu biểu mẫu bằng phương thức POST đến đường dẫn cập nhật giỏ hàng
        fetch("{{ URL::to('/update-cart') }}", {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}' // Thêm token CSRF vào header
            }
        }).then(function(response) {
            // Xử lý phản hồi ở đây
        }).catch(function(error) {
            // Xử lý lỗi ở đây
        });
    }
</script>

</html>
