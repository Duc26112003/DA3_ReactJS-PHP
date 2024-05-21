<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/introduce.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/fontawesome-free-6.1.1-web/css/all.min.css">
</head>

<body>
    @include('FE.header')
    <section>
        <div class="gioithieu">
            <div class="gioithieu1">
                <i style="font-size: 25px" class="fa-brands fa-asymmetrik"></i>
                Giới thiệu
            </div>
        </div>
    </section>
    <section>
        <div class="content">
            <span>Giới Thiệu Công Ty An Phát </span>
        </div>
        <div class="row content1">
            <div style="padding: 10px;" class=" col-6 col-s-12 col-m-12">
                <span>Giới thiệu về công ty An Phát </span>
                <p>Tên Công ty: CÔNG TY TNHH THƯƠNG MẠI An Phát </p>
                <p>Tên giao dịch tiếng Anh: AN PHAT TRADING AND INVESTMENT COMPANY LIMITED</p>
                <p>Giấy CNĐKKD và Mã số doanh nghiệp số: 0102494904 do Sở Kế hoạch & Đầu tư Thành phố Hà Nội cấp</p>
                <p>Đại diện theo pháp luật của doanh nghiệp: Ông Vũ Ngọc Toàn</p>
                <p>Địa điểm kinh doanh:</p>
                <p>- Cơ Sở 1 - Laptop An Phát : 244 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</p>
                <p>- Cơ Sở 2 - Công Nghệ Số An Phát : 76 Đường Trần Hưng Đạo, Đại Phúc, Bắc Ninh</p>
                <p>Trung tâm bảo hành: Tầng 2, số 224 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</p>
                <p>Website: https://www.anphatpc.com.vn/</p>
                <p>Điện thoại liên hệ:</p>
                <p>- Hotline: 0898.747.888 (Hà Nội)</p>
                <p>- Hotline: 0898.747.999 (Hà Nội)</p>
                <p>- Hotline: 0788.474.999 (Bắc Ninh)</p>
                <p>- Phản hồi chất lượng dịch vụ, khiếu nại: 0988.880.934</p>
            </div>
            <div style="text-align:center;margin-top: 60px;" class=" col-6 col-s-12 col-m-12">
                <iframe width="90%"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7678093447335!2d105.84073361427657!3d21.00194259407063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac70cf7618c9%3A0x95cf6fa666f861d4!2zMjI0IFAuIEzDqiBUaGFuaCBOZ2jhu4ssIMSQ4buTbmcgVMOibSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1654854724824!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </section>
    <section>
        <div class="content2">
            <span>Video Công Ty An Phát </span>
            <div class="video">
                <iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/xOEiHYR1WBg"
                    width="560"></iframe>

            </div>
        </div> <br>
        <br><br>
    </section>
    @include('FE.footer')
    <section>
        <div class="fix_tel">
            <div class="ring-alo-phone ring-alo ring-alo-show" id="ring-alo-phoneIcon"
                style="right: 150px; bottom: -12px;">
                <div class="ring-alo-ph-circle"></div>
                <div class="ring-alo-ph-circle-fill"></div>
                <div class="ring-alo-ph-img-circle">
                    <a onclick="Hien()" ondblclick="An()" href="#Lienhe"><img class="lazy"
                            src="https://khomaythegioi.com/icon/goi.png" alt="G"></a>
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
            <i style="bottom: 308px; " class="fa-solid fa-chevron-up"></i>
        </div>


    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script type="text/javascript" src="Js/Js/general.js"></script>
<script type="text/javascript" src="Js/Js/giohang.js"></script>
<script type="text/javascript" src="Js/Js/onclick.js"></script>

</html>
