<!DOCTYPE html>
<html>

<head>
    <title>LapTop An Phát - Uy tín - Chât lượng</title>
    <link href="{{ asset('image/logo_logo-web-t4.png') }}" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Watchall.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product_details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Hurricane,Roboto/Roboto/Roboto-BlackItalic.ttf') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @include('FE.header')
    </section>
    <section style="margin-top: 160px;">
        <div class="option">
            <a style=" padding-left: 10px;" href="{{ route('FE.index') }}">Trang chủ </a>
            <span>&#160;/&#160;</span>
            <a href="#">Chi tiết sản phẩm:</a>

            <a id="contentF" href="#"></a>
        </div>
    </section>
    <!-- Product Details -->


    <section>

        <div class="row Details">
            @foreach ($products as $img)
                <div class="col-5 col-s-12 col-m-12 DetailImg">

                    <div class="DetailImg1">
                        @if ($img->More_img)
                            @php
                                $imageNames = explode(',', $img->More_img);
                                $defaultImage = $imageNames[0]; // Chọn ảnh đầu tiên làm ảnh mặc định
                            @endphp
                            <img id="main-details" src="{{ asset('image/' . $defaultImage) }}" width="100%">
                        @else
                            <img id="main-details" src="image/{{ $img->hinhanh }}" width="100%">
                            <!-- Sử dụng ảnh mặc định nếu danh sách ảnh trống -->
                        @endif
                        <div class="images22"></div>
                    </div>

                    <div class="product-image">
                        @foreach (explode(',', $img->More_img) as $imageName)
                            <img class="img-details" id="img1" onclick="ShowImgDetails(this)"
                                src="{{ asset('image/' . $imageName) }}" width="25%" style="opacity: 1;">
                        @endforeach
                    </div>

                    <div class="Vote">
                        <p id="Tieude">Đánh giá Lenovo Thinkpad E540</p>
                        <div class="Vote1" style="margin-bottom: 30px;">
                            <span>4.8</span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <span>169 đánh giá</span>
                        </div>
                        <div class="Vote2">
                            <span>5</span>
                            <i class="fa-solid fa-star"></i>
                            <div>
                                <a style="width: 70%;"></a>
                            </div>
                            <span class="vote2_percent">70%</span>
                        </div>
                        <div class="Vote2">
                            <span>4</span>
                            <i class="fa-solid fa-star"></i>
                            <div><a style="width: 20%;"></a></div>
                            <span class="vote2_percent">20%</span>
                        </div>
                        <div class="Vote2">
                            <span>3</span>
                            <i class="fa-solid fa-star"></i>
                            <div><a style="width: 5%;"></a></div>
                            <span class="vote2_percent">5%</span>
                        </div>
                        <div class="Vote2">
                            <span>2</span>
                            <i class="fa-solid fa-star"></i>
                            <div><a style="width: 4%;"></a></div>
                            <span class="vote2_percent">4%</span>
                        </div>
                        <div class="Vote2">
                            <span>1</span>
                            <i class="fa-solid fa-star"></i>
                            <div><a style="width: 2%;"></a></div>
                            <span class="vote2_percent">2%</span>
                        </div>

                        <div class="comment">
                            <p> <span>Nguyễn Phương Linh </span> <i class="fa-solid fa-circle-check"></i>
                                <span>Đã mua tại Minh Vũ</span>
                            </p>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <p><i class="fa-regular fa-thumbs-up"></i><span>Hữu ích</span>
                                <i class="fa-regular fa-comment"></i><span>Thảo luận</span>
                                <span>Đã dùng khoảng 4 tháng<i style="margin-left: 10px"
                                        class="fa-solid fa-circle-question"></i> ...</span>
                            </p>
                        </div>
                        <p>
                            <button><i class="fa-solid fa-bahai"></i> Viết đánh giá</button>
                            <button>Xem 169 đánh giá <i class="fa-solid fa-caret-right"></i></button>
                        </p>
                    </div>
                </div>
            @endforeach
            @foreach ($products as $sp)
                <div class="col-7 col-s-12 col-m-12 content-product">
                    <div class="display_content" style="display: block;">
                        <div class="Content1">
                            <span class="contentF">{{ $sp->tensanpham }}</span><br><br>
                            <span id="CauHinhChinh1" style="display:flex ;">{{ $sp->thongsomay }} </span>
                        </div>
                        <div class="Content2">
                            <div>
                                <a>Giá :</a>
                                <b id="Gia1"
                                    style="color: red;font-size: 18px;">{{ number_format($sp->giasanpham) }}₫
                                    đ</b>
                            </div>
                            <div>
                                <a>Bảo hành :</a>
                                <b>12 tháng</b>
                            </div>
                            <div>
                                <a>Kho hàng :</a>
                                <b>Có 2 cấu hình</b>
                            </div>
                            <div>
                                <a>Xem điểm còn hàng</a>
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-7 col-s-12 col-m-12 information">

                <div style="border-top: 1px solid rgb(227, 224, 224);" class="AB">THÔNG TIN MUA HÀNG</div>
                <div class="Fistif">
                    <i class="fa-solid fa-square-check" style="padding-right:10px"></i>
                    <b>Giảm từ 100K đến 500K cho khách mua lần 2, khách cũ giới thiệu khách mới.</b>
                    <a>Xem chi tiết tại đây</a>
                </div>
                <div class="Fistif">
                    <i class="fa-solid fa-square-check" style="padding-right:10px"></i>
                    <b>Có chương trình hỗ trợ trả góp linh hoạt hấp dẫn.</b>
                    <a>Xem chi tiết tại đây</a>
                </div>
                <div class="Fistif">
                    <i class="fa-solid fa-square-check" style="padding-right:10px"></i>
                    <b>Có hỗ trợ Free Ship. </b>
                    <a>Xem chi tiết tại đây</a>
                </div>
                <div class="Fistif">
                    <i class="fa-solid fa-square-check" style="padding-right:10px"></i>
                    <b>Bảo hành miễn phí cả cháy nổ IC (nhiều nơi từ chối bảo hành).</b>
                    <a>Xem chi tiết tại đây</a>
                </div>
                <div class="Fistif">
                    <i class="fa-solid fa-square-check" style="padding-right:10px"></i>
                    <b>Máy tính An Phát không cộng thêm tiền webcam, bảo mật vân tay, bàn phím sáng như các nơi
                        khác</b>
                </div>
                <div style="margin-top:10px; color: red; font-size: 15px; margin-bottom: 10px;">(*) Các option
                    như
                    Bluetooth, vân tay, bàn phím sáng,... tùy từng đợt hàng sẽ có máy có máy không, khi đặt hàng
                    quý
                    khách lưu ý hỏi tư vấn chi tiết để tránh những hiểu lầm không đáng có về sau. </div>
            </div>
            <div class="col-7 col-s-12 col-m-12 information-image">
                <img src={{ asset('image/banner-thong-tin-uu-dai.jpg') }} width="100%">
            </div>
            
            <form action="{{ URL::to('/save-cart') }}" method="POST">
                {{ @csrf_field() }}
                <div class="col-7 col-s-12 col-m-12 submitBT">
                    <button class="BT1" type="submit"
                        onclick="muangay({id:$sp->id_sanpham,image:$sp->hinhanh,name:$sp->tensanpham})">
                        <span>MUA NGAY</span>
                    </button>
                    <input type="hidden" name="id_sanpham" value="{{ $sp->id_sanpham }}" />
                    <button class="BT2" type="submit">
                        <span>THÊM GIỎ HÀNG </span>
                    </button>
                </div>
            </form>
        </div>
    </section>
    <section>
        <div class="row Information-product">
            <div class="col-12 col-s-12 col-m-12 product1">
                <div class="col-2 col-s-3 col-m-5 product11">
                    THÔNG TIN SẢN PHẨM
                </div>
            </div>
            @foreach ($products as $tt)
                <div class="col-12 col-s-12 col-m-12 product2">
                    <p id="DanhGiaLapTop"></p>
                    <p>{{ $tt->tomtat }}</p>
                    <p id="ThongSo"></p>
                </div>
            @endforeach
            <div class=" product3">
                <table>
                    <tr>
                        <th>CPU</th>
                        <td>Intel Core <span> i5-6300U (i5-6200U) / i7-6600U</span></td>
                    </tr>
                    <tr>
                        <th>Memory</th>
                        <td><span>8GB</span></td>
                    </tr>
                    <tr>
                        <th>Hardisk</th>
                        <td><span>SSD 256GB</span></td>
                    </tr>
                    <tr>
                        <th>VGA</th>
                        <td><span>Intel HD Graphics 520</span></td>
                    </tr>
                    <tr>
                        <th>Display</th>
                        <td><span>14.0 inch FHD 1920x1080</span></td>
                    </tr>
                    <tr>
                        <th>Wireless</th>
                        <td>Intel Wifi Link 6205 AGN<span></span></td>
                    </tr>
                    <tr>
                        <th>Optical</th>
                        <td>No<span></span></td>
                    </tr>
                    <tr>
                        <th>LAN</th>
                        <td>10/100 Mbps Ethernet LAN (RJ-45 connector)<span></span></td>
                    </tr>
                    <tr>
                        <th>Battery</th>
                        <td>6 Cells<span></span></td>
                    </tr>
                    <tr>
                        <th>OS</th>
                        <td>Windows® 7 / 8 Professional 64Bit<span></span></td>
                    </tr>
                    <tr>
                        <th>Weight</th>
                        <td><span>1.4 kg</span></td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td>Nhung đen<span></span></td>
                    </tr>
                    <tr>
                        <th>Warranty</th>
                        <td>12 Months<span></span></td>
                    </tr>
                    <tr>
                        <th>Option</th>
                        <td>3 x USB3.0 <br>
                            HDMI <br>
                            RJ-45 <br>
                            Mini Display</td>
                    </tr>
                </table>
            </div>
            <div class="col-12 col-s-12 col-m-12 product2">
                <p class="DanhGiaLapTop"></p>
            </div>
            <div class="VideoThinkpadT460s">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2NkeJu7uRA8"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>

        </div>
    </section>


    <section style="background-color: rgb(248, 243, 243); padding-top: 20px;padding-bottom: 20px;">
        <div class="LaptopT NextB">
            <div class="Next1">
                <i onclick="BackSP()" style="left: 5px;" class="fa-solid fa-angle-left"></i>
            </div>
            <div class="Next2">
                <i onclick="NextSP()" style="float: right;" class="fa-solid fa-angle-right"></i>
            </div>

            <div class="row Laptop1">
                <ul style="padding: 0;">
                    <li><a href="#"
                            style="background-color: rgb(39, 53, 239); border-radius: 5px 5px 0 0; color: white; font-weight: bold;"
                            class="col-2 col-s-3 col-m-9 ">SẢN PHẨM GỢI Ý</a></li>

                    <li style="float: right; width: 120px;"><a href="#">
                            <button>Xem tất cả</button>
                        </a></li>
                </ul>
            </div>
            <div style="height: 1px; background-color: black; margin-left:5px ;"></div>
            <div class="row PLLaptop SPWatched">
                <div class="Laptop1-1">

                    <div class="col-2 col-s-4 col-m-6 Laptop11 ">
                        <div class="LapBorder">
                            <div class="box">
                                <img src="{{ asset('image/acernitro.jpg') }}" width="100%" height="120%">
                                <div class="Cu">Cũ</div>
                                <div class="sale">-3%</div>
                            </div><br>
                            <div class="Laptop111">
                                <a href="#" class="Lap-a">Lenovo Thinkpad E540</a>
                                <br><br>
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style=" line-height: 20px"><b>Kho hàng: </b>Sẵn hàng</div><br><br>
                                <b style="font-size: 20px; color: red;">7.300.000 đ</b> <a href="#"
                                    class="Gio"><i class="fa-solid fa-cart-shopping"></i></a><br>
                                <del>7.500.000</del>
                            </div>

                        </div>
                    </div>
                    <div class="col-2 col-s-4 col-m-6 Laptop11 ">
                        <div class="LapBorder">
                            <div class="box">
                                <img src="{{ asset('image/acernitro.jpg') }}" width="100%" height="120%">
                                <div class="Cu">Cũ</div>
                                <div class="sale">-3%</div>
                            </div><br>
                            <div class="Laptop111">
                                <a href="#" class="Lap-a">Lenovo Thinkpad E540</a>
                                <br><br>
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style=" line-height: 20px"><b>Kho hàng: </b>Sẵn hàng</div><br><br>
                                <b style="font-size: 20px; color: red;">7.300.000 đ</b> <a href="#"
                                    class="Gio"><i class="fa-solid fa-cart-shopping"></i></a><br>
                                <del>7.500.000</del>
                            </div>

                        </div>
                    </div>
                    <div class="col-2 col-s-4 col-m-6 Laptop11 ">
                        <div class="LapBorder">
                            <div class="box">
                                <img src="{{ asset('image/acernitro.jpg') }}" width="100%" height="120%">
                                <div class="Cu">Cũ</div>
                                <div class="sale">-3%</div>
                            </div><br>
                            <div class="Laptop111">
                                <a href="#" class="Lap-a">Lenovo Thinkpad E540</a>
                                <br><br>
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style=" line-height: 20px"><b>Kho hàng: </b>Sẵn hàng</div><br><br>
                                <b style="font-size: 20px; color: red;">7.300.000 đ</b> <a href="#"
                                    class="Gio"><i class="fa-solid fa-cart-shopping"></i></a><br>
                                <del>7.500.000</del>
                            </div>

                        </div>
                    </div>
                    <div class="col-2 col-s-4 col-m-6 Laptop11 ">
                        <div class="LapBorder">
                            <div class="box">
                                <img src="{{ asset('image/acernitro.jpg') }}" width="100%" height="120%">
                                <div class="Cu">Cũ</div>
                                <div class="sale">-3%</div>
                            </div><br>
                            <div class="Laptop111">
                                <a href="#" class="Lap-a">Lenovo Thinkpad E540</a>
                                <br><br>
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style=" line-height: 20px"><b>Kho hàng: </b>Sẵn hàng</div><br><br>
                                <b style="font-size: 20px; color: red;">7.300.000 đ</b> <a href="#"
                                    class="Gio"><i class="fa-solid fa-cart-shopping"></i></a><br>
                                <del>7.500.000</del>
                            </div>

                        </div>
                    </div>
                    <div class="col-2 col-s-4 col-m-6 Laptop11 ">
                        <div class="LapBorder">
                            <div class="box">
                                <img src="{{ asset('image/acernitro.jpg') }}" width="100%" height="120%">
                                <div class="Cu">Cũ</div>
                                <div class="sale">-3%</div>
                            </div><br>
                            <div class="Laptop111">
                                <a href="#" class="Lap-a">Lenovo Thinkpad E540</a>
                                <br><br>
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style=" line-height: 20px"><b>Kho hàng: </b>Sẵn hàng</div><br><br>
                                <b style="font-size: 20px; color: red;">7.300.000 đ</b> <a href="#"
                                    class="Gio"><i class="fa-solid fa-cart-shopping"></i></a><br>
                                <del>7.500.000</del>
                            </div>

                        </div>
                    </div>
                    <div class="col-2 col-s-4 col-m-6 Laptop11 ">
                        <div class="LapBorder">
                            <div class="box">
                                <img src="{{ asset('image/acernitro.jpg') }}" width="100%" height="120%">
                                <div class="Cu">Cũ</div>
                                <div class="sale">-3%</div>
                            </div><br>
                            <div class="Laptop111">
                                <a href="#" class="Lap-a">Lenovo Thinkpad E540</a>
                                <br><br>
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style=" line-height: 20px"><b>Kho hàng: </b>Sẵn hàng</div><br><br>
                                <b style="font-size: 20px; color: red;">7.300.000 đ</b> <a href="#"
                                    class="Gio"><i class="fa-solid fa-cart-shopping"></i></a><br>
                                <del>7.500.000</del>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>


    @include('FE.footer')
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
    <section>
        <div class="updown upa">
            <i style="bottom: 95px; " class="fa-solid fa-chevron-up"></i>
        </div>

    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('/Js/general.js') }}"></script>
<script type="text/javascript" src="{{ asset('/Js/product_details.js') }}"></script>
<script type="text/javascript" src="{{ asset('/Js/giohang.js') }}"></script>
<script type="text/javascript" src="{{ asset('/Js/onclick.js') }}"></script>
{{-- <script type="text/javascript" src="{{ asset('/Js/details.js') }}"></script> --}}

</html>