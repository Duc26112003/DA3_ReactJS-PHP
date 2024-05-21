<!DOCTYPE html>
<html>

<head>
    <title>Lenovo Thinkpad T460s</title>
    <link href="./image/logo_logo-web-t4.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Watchall.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product_details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Hurricane,Roboto/Roboto/Roboto-BlackItalic.ttf') }}">
    <link rel="stylesheet" href="{{ asset('css/Paying.css') }}">
    <link rel="stylesheet" href="{{ asset('css/IFoder.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @include('FE.header')
    </section>
    <section style="margin-top:160px">
        <div class="option">
            <a style="margin-left: 10px" href="{{ route('FE.index') }}">Trang chủ </a>
            <span>&#160;/&#160;</span>
            <a href="#">Blog</a>
        </div>
    </section>
    <section>
        <div class="row CartCT ">
            <div class="col-s-12 col-m-12">

                <div class=" Paying">
                    @foreach ($blog_detail as $bl)
                        <div class="infomationpay">
                            <div class="col-12 col-s-12 col-m-12 pay1">
                                <img src="/image/{{ $bl->img }}" alt="" style="height:400px" />
                            </div>
                            <div class="col-12 col-s-12 col-m-12 pay1">
                                @php
                                    // Tách nội dung thành các câu bằng dấu chấm (.)
                                    $sentences = explode('.', $bl->content);
                                @endphp
                                @foreach ($sentences as $sentence)
                                    <p>{{ $sentence }}</p>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                </div>
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


</html>
