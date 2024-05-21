<header class="header ">
    <section class="street"></section>
    <section class="header1">
        <div class="row title">
            <p>
                <marquee class="col-3 col-s-12 col-m-12 title-w"
                    style="padding-top: 5px; width: 740px; margin-left: 50px;">
                    Hà Nội: 49 Thái Hà | 151 Lê Thanh Nghị và 63 Trần Thái Tông ● HCM: 158 - 160 Lý Thường Kiệt |
                    330-332 Võ Văn Tần | 84T/14 Trần Đình Xu ● Bắc Ninh: Số 4 Nguyễn Văn Cừ - Ninh Xá
                </marquee>
            </p>

            @if (auth()->check())
                <div class="title-login">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-circle-user"></i>
                    </a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <div class="title-login">
                    <a href="{{ route('login') }}" target="_bank"> <i class="fa-solid fa-circle-user"></i></a>
                </div>
            @endif

            <div class="col-5 col-s-10 col-m-10 title-bottom">
                <a href="{{ route('FE.index') }}">Trang chủ</a>
                <a href="#">Tin tức</a>
                <a href="#">Video</a>
                <a href="{{ route('FE.introduce') }}">Giới thiệu</a>
                <a href="#">Liên hệ</a>
                <a class="Cartbutom" href="{{ route('FE.show_cart') }}"><i style="color: white;"
                        class="fa-solid fa-cart-shopping"></i>&nbsp; </a>
            </div>
            {{-- <div class="Cart">
                <div class="Cart-content">
                    <div class="Cart-header">
                        <a>Giỏ hàng</a>
                        <a id="Soluong"></a>
                        <span id="HideCart"> &times;</span>
                        <a href="Paying.html" class="Watchall-Cart">Xem tất cả</a>

                    </div>
                    <div class="Cart-body">
                        <div class="Cart-row">
                            <span class="cart-item  cart-column">Sản Phẩm</span>
                            <span class="cart-price  cart-column">Giá</span>
                            <span class="cart-quantity  cart-column">Số Lượng</span>
                        </div>
                        <div class="over-cart overY">
                        </div>

                        <div class="cart-total">
                            <strong class="cart-total-title">Tổng Cộng:</strong>
                            <span class="cart-total-price"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button onclick="UpdateCart()" type="button" class="close-footer">Cập nhập giỏ
                            hàng</button>
                        <a href="Paying.html"><button type="button" class="order">Thanh Toán</button></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    <section>
        <div class="row style style1">
            <div class="col-2 col-s-2 col-m-2 style-i">
                <a style="padding-left: 20px" href="{{ route('FE.index') }}"> <img
                        src={{ asset('image/logo_logo-web-t4.png') }}></a>
            </div>
            <div class="col-3 col-s-9 col-m-9 style-center">
                <form style="display: flex;">
                    <input
                        style="padding: 10px; height: 30px;width: 85%;border-radius: 5px 0 0 5px ; border: 1px solid rgb(154, 199, 169);outline: none;"
                        type="text" class="f" placeholder="Tìm kiếm..." name="search">
                    <button
                        style="background-color:rgb(229, 245, 234) ;border: 1px solid rgb(188, 225, 200);border-radius: 0 5px 5px 0;"
                        type="submit">
                        <div style="font-size: 18px;"><i class="fa-solid fa-magnifying-glass"></i></div>
                    </button>
                </form>
            </div>
            <div class="col-7 col-s-1 col-m-1 style-l">
                <div id="menu-icon"><i class="fa-solid fa-bars"></i></div>
                <ul id="main-menu">
                    <li class="style-l1"><a href="#">
                            <div><img src="{{ asset('image/icon-lap.png') }}"></div>
                            <div>LAPOP MỚI</div>
                        </a>
                        <i class="fa-solid fa-caret-down"></i>
                        <ul>
                            <ul>
                                <li class="style-li1"><a href="#">Dell</a></li>
                                <li><a href="#">Dell Inspiron</a></li>
                                <li><a href="#">Dell Vostro</a></li>
                                <li><a href="#">Dell XPS</a></li>
                                <li><a href="#">Dell Gaming</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">HP</a></li>
                                <li><a href="#">HP Pavilion</a></li>
                                <li><a href="#">HP Zbook</a></li>
                                <li><a href="#">HP Folio</a></li>
                                <li><a href="#">HP Elite X2</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">Lenovo</a></li>
                                <li><a href="#">Lenovo Thinkpad</a></li>
                                <li><a href="#">Lenovo Yoga</a></li>
                                <li><a href="#">Lenovo Ideapad</a></li>
                                <li><a href="#">Lenovo Gaming</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">ASUS</a></li>
                                <li><a href="#">ASUS Vivibook</a></li>
                                <li><a href="#">ASUS Zenbook</a></li>
                                <li><a href="#">ASUS Gaming</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">Acer</a></li>
                                <li><a href="#">Acer Gaming</a></li>
                                <li class="style-li1"><a href="#">MSI</a></li>
                                <li><a href="#">MSI Gaming</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">Gigabyte Gaming</a></li>
                                <li><a href="#">Gigabyte Văn Phòng</a></li>
                                <li class="style-li1"><a href="#">LAPTOP Mới Khác</a></li>
                                <li><a href="#">Samsung Galaxy Book</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li class="style-l2">
                        <a href="#">
                            <div><img src="{{ asset('image/icon-lap.png') }}"></div>
                            <div>LAPTOP CŨ</div>
                        </a>
                        <i class="fa-solid fa-caret-down"></i>
                        <ul style="padding-left: 0px;">
                            <ul>
                                <li class="style-li1"><a href="#">Dell</a></li>
                                <li><a href="#">Dell Precision (Máy Trạm)</a></li>
                                <li><a href="#">Dell Insiron</a></li>
                                <li><a href="#">Dell Latitude</a></li>
                                <li><a href="#">Dell Gaming</a></li>
                                <li><a href="#">Dell Xps</a></li>
                                <li><a href="#">Dell Alienware</a></li>
                                <li><a href="#">Dell Venue</a></li>
                                <li><a href="#">Dell Vostro</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">HP</a></li>
                                <li><a href="#">HP Workstation (Máy Trạm)</a></li>
                                <li><a href="#">HP Elitebook</a></li>
                                <li><a href="#">HP Folio</a></li>
                                <li><a href="#">HP Probook</a></li>
                                <li><a href="#">HP Envy</a></li>
                                <li><a href="#">HP Pavilion</a></li>
                                <li><a href="#">HP Spectre</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">Lenovo Thinkpad</a></li>
                                <li><a href="#">Thinkpad W & P Series (Máy Trạm)</a></li>
                                <li><a href="#">Thinkpad Dòng T Series</a></li>
                                <li><a href="#">Thinkpad Dòng X Series</a></li>
                                <li><a href="#">Thinkpad X1 Cacbon & Yoga</a></li>
                                <li><a href="#">Thinkpad Dòng E & L Series</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">Sản phẩm Apple</a></li>
                                <li><a href="#">Macbook Air 11 inch</a></li>
                                <li><a href="#">Macbook Air 13 inch</a></li>
                                <li><a href="#">Macbook Pro</a></li>
                                <li><a href="#">Macbook retina</a></li>
                                <li><a href="#">Apple mac</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">Sony Vaio</a></li>
                                <li><a href="#">Sony Vaio Vpcea</a></li>
                                <li><a href="#">Sony Vaio Utrabook SVD11</a></li>
                                <li><a href="#">Sony Vaio SVF14</a></li>
                                <li><a href="#">Sony Vaio SVF15</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">Laptop Cũ Khác</a></li>
                                <li><a href="#">Laptop Toshiba</a></li>
                                <li><a href="#">Laptop Acer</a></li>
                            </ul>
                        </ul>

                    </li>
                    <li class="style-l3">
                        <a href="#">
                            <img src={{ asset('image/icon-lap.png') }}>
                            <div class="style-lw">CASE-PC</div>
                        </a>
                        <i class="fa-solid fa-caret-down"></i>
                        <ul style="padding-left: 0px;">
                            <ul style="padding-left: 0px;">
                                <li class="style-li1"><a href="#">Dell</a></li>
                                <li><a href="#">Máy Trạm Dell Workstation</a></li>
                                <li><a href="#">Máy Tính đồng bộ Dell</a></li>
                                <li><a href="#">Dell All In One</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">HP</a></li>
                                <li><a href="#">Máy Trạm Hp Workstation</a></li>
                                <li><a href="#">Máy Tính Đồng Bộ HP</a></li>
                                <li><a href="#">HP All In One</a></li>
                            </ul>
                            <ul style="padding-left: 10px;">
                                <li class="style-li1"><a href="#">Lenovo</a></li>
                                <li><a href="#">Máy Trạm Lenovo Workstation</a></li>
                                <li><a href="#">Lenovo All In One</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">PC Đồ Họa-Workstation</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">Acer</a></li>
                                <li><a href="#">Acer Gaming</a></li>
                                <li class="style-li1"><a href="#">MSI</a></li>
                                <li><a href="#">MSI Gaming</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">PV Build Gaming Đồ Họa</a></li>
                                <li><a href="#">PC AMD</a></li>
                                <li><a href="#">PC INTEL</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">Màn Hình PC</a></li>
                                <li><a href="#">Màn Hình HP</a></li>
                                <li><a href="#">Màn Hình Dell</a></li>
                                <li><a href="#">Màn Hình IO DATA</a></li>
                            </ul>
                        </ul>

                    </li>
                    <li class="style-l4">
                        <a href="#">
                            <img src={{ asset('image/icon-PL.png') }}>
                            <div class="style-lw">LINH PHỤ KIỆN</div>
                        </a>
                        <i class="fa-solid fa-caret-down"></i>
                        <ul>
                            <ul>
                                <li class="style-li1"><a href="#">Mainbroad-Bo Mạch Chủ</a></li>
                                <li><a href="#">Main ASROCK</a></li>
                                <li><a href="#">Main GIGABYTE</a></li>
                                <li><a href="#">Main MSI</a></li>
                                <li><a href="#">Main ASUS</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">PC-Bộ Vi Xử Lý</a></li>
                                <li><a href="#">CPU INTEL</a></li>
                                <li><a href="#">CPU AMD</a></li>
                            </ul>
                            <ul>
                                <li class="style-li1"><a href="#">Linh Kiện Laptop</a></li>
                                <li><a href="#">Ổ cứng SSD</a></li>
                                <li><a href="#">Ổ cứng HDD</a></li>
                                <li><a href="#">Ram (Bộ nhớ trong)</a></li>
                                <li><a href="#">Sạc Laptop</a></li>
                                <li><a href="#">Pin Laptop</a></li>
                                <li><a href="#">Bàn Phím Laptop</a></li>
                                <li><a href="#">Màn Hình Laptop</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li class="style-l5">
                        <a href="#">
                            <img src={{ asset('image/thu-thuat-cong-nghe.png') }}>
                            <div class="style-lw">THỦ THUẬT</div>
                            <i class="fa-solid fa-caret-down"></i>
                        </a>
                        <ul>
                            <ul>
                                <li class="style-li1"><a href="#">Thủ Thuật công nghệ</a></li>
                                <li><a href="#">Máy Tính</a></li>
                            </ul>
                        </ul>
                    </li>
                </ul>
            </div>
            @if (session('success'))
                <div class="alert alert-success" id="success-alert">
                    {{ session('success') }}
                </div>
            @endif
            <script>
                // Chờ 3 giây sau khi trang đã tải
                setTimeout(function() {
                    // Ẩn thông báo bằng cách thêm lớp "hidden"
                    document.getElementById('success-alert').classList.add('hidden');
                }, 1500); // 3000 miligiây = 3 giây
                setTimeout(function() {
                    // Ẩn thông báo bằng cách thêm lớp "hidden"
                    document.getElementById('error-alert').classList.add('hidden');
                }, 1500); // 3000 miligiây = 3 giây
            </script>
            <style>
                .alert {
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: rgba(0, 0, 0, 0.7); 
                    color: white;
                    padding: 40px;
                    border-radius: 10px; 
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
                    z-index: 1000;
                    opacity: 1;
                    transition: opacity 0.5s ease;
                    display: flex;
                    align-items: center;
                }
            
                .alert i {
                    font-size: 40px;
                    margin-right: 15px;
                }
            
                .alert span {
                    font-family: Arial, sans-serif;
                    font-size: 25px;
                }
            
                .hidden {
                    opacity: 0;
                    pointer-events: none;
                }
            </style>

        </div>

    </section>
</header>
