<!DOCTYPE html>
<html>

<head>
    <title>LapTop An Phát - Uy tín - Chât lượng</title>
    <link href="./image/logo_logo-web-t4.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="Hurricane,Roboto/Roboto/Roboto-BlackItalic.ttf">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" src=" {{ asset('/Js/anphat.js') }}"></script>
    <script language="javascript" src=" {{ asset('/Js/PLlaptop.js') }}"></script>
</head>

<body>
    @include('FE.header')
    </section>
    <section style="margin-top: 160px">
        <div class="row background">
            <div class="col-8 col-s-8 col-m-12 background-1">
                <div class="myslide">
                    <img class="myslide1 active" src="image/banner 1.jpg" width="100%" height="100%">
                    <img class="myslide1 " src="image/banner 2.jpg" width="100%" height="100%">
                    <img class="myslide1 " src="image/banner 3.jpg" width="100%" height="100%">
                    <img class="myslide1 " src="image/banner 4.jpg" width="100%" height="100%">
                    <img class="myslide1 " src="image/banner 5.jpg" width="100%" height="100%">
                    <img class="myslide1 " src="image/banner6.jpg" width="100%" height="100%">
                    <img class="myslide1 " src="image/banner7.jpg" width="100%" height="100%">
                </div>
                <div class="Nodeslide">
                    <!-- <div class="Nodebt">
                        <div  class="prevButton" ><i class="fa-solid fa-arrow-left"></i></div>
                        <div class ="nextButton" ><i   class="fa-solid fa-arrow-right"></i></div>
                    </div> -->
                    <ul>
                        <li class="active_nut"> &nbsp</li>
                        <li> &nbsp</li>
                        <li> &nbsp</li>
                        <li> &nbsp</li>
                        <li> &nbsp</li>
                        <li> &nbsp</li>
                        <li> &nbsp</li>
                    </ul>
                </div>
            </div>
            <div class="col-4 col-s-4 col-m-6 background-21">
                <img src="image/rightbanner 1.png" width="100%" height="100%">
            </div>
            <div class="col-4 col-s-4 col-m-6 background-22">
                <img src="image/right banner 2.png" width="100%" height="100%">
            </div>
        </div>


    </section>
    <section>
        <div class="LaptopT">
            <div class="row Laptop1">
                <ul style="padding: 0;cursor: pointer;">
                    <li class="ac active2"><a class="col-3 col-s-6 col-m-12 ">SẢN PHẨM BÁN CHẠY</a></li>
                    <li class="ac "><a class="col-3 col-s-6 col-m-6">MÁY TÍNH MACBOOK</a></li>
                    <li class="ac "><a class="col-2 col-s-6 col-m-6 ">MÁY TÍNH ACER</a></li>
                    <li class="ac "><a class="col-2 col-s-6 col-m-6 ">MÁY TÍNH DELL</a></li>

                </ul>
            </div>
            <div style="height: 1px; background-color: black; margin-left:5px ;"></div>
            <div class="col-12 col-s-12 col-m-12"></div>
            <div class="PLLaptop">
                {{-- Hiển thị sản phẩm PL1 --}}
                <div class="row PLLaptop1 Laptop1-1 PL1">
                    @foreach ($Hot_products as $sp)
                        <div class="col-2 col-s-4 col-m-6 Laptop11">
                            <div class="LapBorder">
                                <div class="box">
                                    <a class="details3" href="{{ route('FE.detail', $sp->id_sanpham) }}"><img
                                            id="imagehover" src="image/{{ $sp->hinhanh }}" /></a>
                                    <div class="Cu">Mới</div>
                                    <div class="sale">-3%</div>
                                </div><br>
                                <div class="Laptop111">
                                    <a href="{{ route('FE.detail', $sp->id_sanpham) }}"
                                        class="Lap-a details3">{{ \Illuminate\Support\Str::limit($sp->tensanpham, 20) }}</a>
                                    <br><br>
                                    <div class="thongsomay">{{ \Illuminate\Support\Str::limit($sp->thongsomay, 30) }}
                                    </div>
                                    <div style="line-height: 20px;"></div><br><br>
                                    <b style="font-size: 20px; color: red;">{{ number_format($sp->giasanpham) }}₫</b>

                                    <del>4.590.000 ₫</del>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="LaptopT">
            <div class="row Laptop1">
                <ul style="padding: 0;cursor: pointer;">
                    <li class="ac active2"><a class="col-3 col-s-6 col-m-12 ">MÁY TÍNH ASUS</a></li>
                    <li class="ac "><a class="col-3 col-s-6 col-m-6">MÁY TÍNH MACBOOK</a></li>
                    <li class="ac "><a class="col-2 col-s-6 col-m-6 ">MÁY TÍNH ACER</a></li>
                    <li class="ac "><a class="col-2 col-s-6 col-m-6 ">MÁY TÍNH DELL</a></li>
                    <li><a href="{{ route('FE.watchall') }}" class="col-2 col-s-2 col-m-12 ">
                            <button>Xem tất cả</button>
                        </a></li>
                </ul>
            </div>

            <div style="height: 1px; background-color: black; margin-left:5px ;"></div>
            {{-- Hiển thị sản phẩm PL2 --}}
            <div class="row PLLaptop">
                <div class="Laptop1-1" style="display: flex; flex-wrap: wrap;">
                    @foreach ($products_1_to_6 as $sp)
                        <div class="col-2 col-s-4 col-m-6 Laptop11" style="flex: 1; margin-right: 10px;">
                            <div class="LapBorder">
                                <div class="box">
                                    <a class="details3" href="{{ route('FE.detail', $sp->id_sanpham) }}"><img
                                            id="imagehover" src="image/{{ $sp->hinhanh }}" /></a>
                                    <div class="Cu">Mới</div>
                                    <div class="sale">-3%</div>
                                </div><br>
                                <div class="Laptop111">
                                    <a href="{{ route('FE.detail', $sp->id_sanpham) }}"
                                        class="Lap-a details3">{{ \Illuminate\Support\Str::limit($sp->tensanpham, 30) }}</a>
                                    <br><br>
                                    <div class="thongsomay">{{ $sp->thongsomay }}</div>
                                    <div style="line-height: 20px;"></div><br><br>
                                    <b style="font-size: 20px; color: red;">{{ number_format($sp->giasanpham) }}₫</b>
                                    <br>
                                    <del>4.590.000 ₫</del>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="row PLLaptop">
                <div class="Laptop1-1" style="display: flex; flex-wrap: wrap;">
                    @foreach ($products_6_to_12 as $sp)
                        <div class="col-2 col-s-4 col-m-6 Laptop11" style="flex: 1; margin-right: 10px;">
                            <div class="LapBorder">
                                <div class="box">
                                    <a class="details3" href="{{ route('FE.detail', $sp->id_sanpham) }}"><img
                                            id="imagehover" src="image/{{ $sp->hinhanh }}" /></a>
                                    <div class="Cu">Mới</div>
                                    <div class="sale">-3%</div>
                                </div><br>
                                <div class="Laptop111">
                                    <a href="{{ route('FE.detail', $sp->id_sanpham) }}"
                                        class="Lap-a details3">{{ \Illuminate\Support\Str::limit($sp->tensanpham, 30) }}</a>
                                    <br><br>
                                    <div class="thongsomay">{{ $sp->thongsomay }}</div>
                                    <div style="line-height: 20px;"></div><br><br>
                                    <b style="font-size: 20px; color: red;">{{ number_format($sp->giasanpham) }}₫</b>
                                    <br>
                                    <del>4.590.000 ₫</del>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

    </section>


    <div class="row justify-content-center" style="max-width:1200px; margin:auto;">
        <div class="" style="margin-left:32px;margin-top:15px">
            <p style="font-size:25px; text-align:center;">BLOG</p>
            @foreach ($blog as $bl)
                <div class="col-4">
                    <a href="{{ route('FE.BlogDetail', $bl->id) }}" style="text-decoration: none;color:#000  ">
                        <div class="">
                            <img src="image/{{ $bl->img }}" alt="Image 1" class="img-fluid"
                                style="max-width: 350px; height:200px">
                        </div>
                        <div class="text-center">
                            <p>{{ $bl->title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>


    @include('FE.service')
    @include('FE.footer')
    {{-- <section>
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
                <span>Liên hệ FB </span>
                <i style="background-color: blue;" class="fa-solid fa-comment-dots"></i>
            </div>
            <div style="display: flex;bottom: 20px; right: 180px;" class="open31">
                <span>Liên hệ Zalo </span>
                <img src="image/logo-zalo-vector.png">
            </div>
            <div onclick="ClickK()" class="open32">
                <i class="fa-solid fa-x"></i>
            </div>
        </div>
    </section> --}}
    <section>
        <div class="updown upa">
            <i style="bottom: 95px; " class="fa-solid fa-chevron-up"></i>
        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/Js/PLlaptop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/Js/anphat.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/Js/general.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/Js/giohang.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/Js/onclick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/Js/details.js') }}"></script>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="Bot-Chat" agent-id="051f625e-5908-49c2-9585-eeb014746d8d"
        language-code="vi"></df-messenger>
</body>

</html>
