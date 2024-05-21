<!DOCTYPE html>
<html>

<head>
    <title>LapTop Dùng cho học tập và làm việc online</title>
    <link href="./image/logo_logo-web-t4.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Watchall.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="Hurricane,Roboto/Roboto/Roboto-BlackItalic.ttf">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" src=" {{ asset('/Js/anphat.js') }}"></script>
    <script language="javascript" src=" {{ asset('/Js/PLlaptop.js') }}"></script>
</head>

<body>
    @include('FE.header')
    </section>
    <section style="margin-top:160px;">
        <div class="option">
            <a style="padding-left:10px" href={{ route('FE.index') }}>Trang chủ </a>
            <span>&#160;/&#160;</span>
            <a href="">WatchAll</a>
        </div>
    </section>
    <section>
        <div class="LaptopT">
            <div class=" PLLaptop PLLaptopP PLP1">
                <div class="row PLLaptop1 Laptop1-1 PL1">
                    @foreach ($products as $sp)
                        <div class="col-2 col-s-4 col-m-6 Laptop11 ">
                            <div class="LapBorder">
                                <div class="box">
                                    <a class="details3" href="{{ route('FE.detail', $sp->id_sanpham) }}"><img
                                        id="imagehover" src="image/{{ $sp->hinhanh }}" /></a>
                                    <div class="Cu">Cũ</div>
                                    <div class="sale">-3%</div>
                                </div><br>
                                <div class="Laptop111">
                                    <a href="{{ route('FE.detail', $sp->id_sanpham) }}"
                                        class="Lap-a">{{ \Illuminate\Support\Str::limit($sp->tensanpham, 18) }}</a>
                                    <br><br>
                                    <div class="thongsomay">{{ \Illuminate\Support\Str::limit($sp->thongsomay, 25) }}
                                    </div>
                                    <b style="font-size: 20px; color: red;">{{ number_format($sp->giasanpham) }}₫</b>
                                    <del>7.500.000</del>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div>
            <div class="page">
                <ul>
                    <li class="pageg"><a href="{{ $products->url(1) }}">Đầu</a></li>
                    <li class="pageg"><a href="{{ $products->previousPageUrl() }}"><i class="fa-solid fa-backward"></i></a></li>
    
                    <!-- Lặp qua các trang -->
                    @for ($i = 1; $i <= $products->lastPage(); $i++)
                        <li class="pageg"><a href="{{ $products->url($i) }}">{{ $i }}</a></li>
                    @endfor
    
                    <li class="pageg"><a href="{{ $products->nextPageUrl() }}"><i class="fa-solid fa-forward"></i></a></li>
                    <li class="pageg"><a href="{{ $products->url($products->lastPage()) }}">Cuối</a></li>
                </ul>
            </div>
        </div>
    </section>
    
    <section style="background-color: rgb(245, 242, 242); padding-top: 20px;padding-bottom: 20px;">
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
                            style="background-color: rgb(8, 88, 8); border-radius: 5px 5px 0 0; color: white; font-weight: bold;"
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
                                <img src="image/lenovothinkpade540c_200_150 (1).jpg" width="100%" height="120%">
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
                                <img src="image/hpelitebook725g3cdhdkyjc_200_150.jpg">
                                <div class="Cu">Cũ</div>
                                <div class="sale">-3%</div>
                            </div><br>
                            <div class="Laptop111">
                                <a href="#" class="Lap-a">HP Elitebook 725 G3</a>
                                <br><br>
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style=" line-height: 20px"><b>Kho hàng: </b>Sẵn hàng</div><br><br>
                                <b style="font-size: 20px; color: red;">6.800.000 đ</b> <a href="#"
                                    class="Gio"><i class="fa-solid fa-cart-shopping"></i></a><br>
                                <del>7.000.000</del>
                            </div>

                        </div>
                    </div>
                    <div class="col-2 col-s-4 col-m-6 Laptop11 ">
                        <div class="LapBorder">
                            <div class="box">
                                <img src="image/lenovothinkpadt460sc_200_150.jpg">
                                <div class="Cu">Cũ</div>
                                <div class="sale">-3%</div>
                            </div><br>
                            <div class="Laptop111">
                                <a href="#" class="Lap-a">Lenovo Thinkpad T460S</a>
                                <br><br>
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style=" line-height: 20px"><b>Kho hàng: </b>Có 2 cấu hình</div><br>
                                <b style="font-size: 20px; color: red;">11.090.000 đ</b> <a href="#"
                                    class="Gio"><i class="fa-solid fa-cart-shopping"></i></a><br>
                                <del>11.990.000</del>
                            </div>

                        </div>
                    </div>
                    <div class="col-2 col-s-4 col-m-6 Laptop11 ">
                        <div class="LapBorder">
                            <div class="box">
                                <img src="image/hpprobook650g1_200_150.jpg">
                                <div class="Cu">Cũ</div>
                            </div><br>
                            <div class="Laptop111">
                                <a href="#" class="Lap-a">HP Probook 650 G1</a>
                                <br><br>
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style=" line-height: 20px"><b>Kho hàng: </b>Có 2 cấu hình</div><br>
                                <b style="font-size: 20px; color: red;">7.500.000 đ</b> <a href="#"
                                    class="Gio"><i class="fa-solid fa-cart-shopping"></i></a><br><br>
                            </div>

                        </div>
                    </div>
                    <div class="col-2 col-s-4 col-m-6 Laptop11 ">
                        <div class="LapBorder">
                            <div class="box">
                                <img src="image/lenovothinkpadl540_200_150.jpg">
                                <div class="Cu">Cũ</div>
                                <div class="sale">-3%</div>
                            </div><br>
                            <div class="Laptop111">
                                <a href="#" class="Lap-a">Lenovo Thinkpad L540</a>
                                <br><br>
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style=" line-height: 20px"><b>Kho hàng: </b>Sẵn hàng</div><br><br>
                                <b style="font-size: 20px; color: red;">7.400.000 đ</b> <a href="#"
                                    class="Gio"><i class="fa-solid fa-cart-shopping"></i></a><br>
                                <del>8.000.000</del>
                            </div>

                        </div>
                    </div>
                    <div class="col-2 col-s-4 col-m-6 Laptop11 ">
                        <div class="LapBorder">
                            <div class="box">
                                <img src="image/hpprobook430g3_200_150.jpg">
                                <div class="Cu">Cũ</div>
                                <div class="sale">-2%</div>
                            </div><br>
                            <div class="Laptop111">
                                <a href="#" class="Lap-a">HP Probook 430 G3</a>
                                <br><br>
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style="line-height: 20px"><b>Kho hàng: </b>Sẵn hàng</div><br><br>
                                <b style="font-size: 20px; color: red;">7.900.000 đ</b> <a href="#"
                                    class="Gio"><i class="fa-solid fa-cart-shopping"></i></a><br>
                                <del>8.100.000</del>
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
        <script>
            var sa = document.getElementsByClassName("Lienhe");

            function Hien() {
                sa[0].style.display = 'block';

            }

            function An() {
                sa[0].style.display = 'none';
                document.getElementById("UD").style.display = 'block';
                document.getElementById("Call").style.display = 'block'
            }
        </script>
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
        <script>
            var y = document.getElementsByClassName("open3");

            function ClickH() {
                y[0].style.display = 'block'
            }

            function ClickK() {
                y[0].style.display = 'none'
            }
        </script>
    </section>
    <section>
        <div class="updown upa">
            <i style="bottom: 95px; " class="fa-solid fa-chevron-up"></i>
        </div>

    </section>
</body>
<script type="text/javascript" src="{{ asset('/Js/Watchall.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('/Js/general.js') }}"></script>
{{-- <script type="text/javascript" src="{{ asset('/Js/onclick.js') }}"></script> --}}

</html>
