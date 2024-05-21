$(document).ready(function(){
    $('.details1').click(function(){
        Details1()
    })
})
$(document).ready(function(){
    $('.details2').click(function(){
        Details2()
    })
})
$(document).ready(function(){
    $('.details3').click(function(){
        Details3()
    })
})
function Details1()
{
    var details = {
        main_details : "image/acernitro.jpg",
        img1 : "image/acernitro.jpg",
        img2 : "image/acernitro.jpg",
        img3 : "image/acernitro.jpg",
        img4 : "image/acernitro.jpg",
        Tieude : "Đánh giá Laptop Thinkpad T460s",
        tenmay : "Lenovo Thinkpad T460s",
        CauhinhChinh1 : " Core i5-6300U (i5-6200U) / RAM 8GB / SSD 128GB / Màn 14.0 inch FHD 1920x1080",
        gia1 : "11.090.000 đ",
        CauhinhChinh2 : " Core i5-6300U (i5-6200U) / RAM 8GB / SSD 256GB / Màn 14.0 inch FHD 1920x1080",
        gia2 : "11.500.000 đ",
        CauhinhChinh3 : " Core i7-6300U (i5-6200U) / RAM 8GB / SSD 256GB / Màn 14.0 inch FHD 1920x1080",
        gia3 : "15.500.000 đ",
        Danhgia : "Đánh giá Thinkpad T460S",
        ThongSo : "Thông số kĩ thuật Thinkpad T460S"
    }
    localStorage.setItem('details', JSON.stringify(details));
}

detailsList = JSON.parse(localStorage.getItem('details'));
function LoadDetails()
{
   
    $('#Tieude').text(detailsList.Tieude);
    document.getElementById("main-details").src=detailsList.main_details
    document.getElementById("img1").src = detailsList.img1
    document.getElementById("img2").src = detailsList.img2
    document.getElementById("img3").src = detailsList.img3
    document.getElementById("img4").src = detailsList.img4
    $('#contentF').text(detailsList.tenmay)
    $('.contentF').text(detailsList.tenmay)
    $('#CauHinhChinh1').text(detailsList.CauhinhChinh1)
    $('#CauHinhChinh2').text(detailsList.CauhinhChinh2)
    $('#CauHinhChinh3').text(detailsList.CauhinhChinh3)
    $('.CauHinhChinh1').text(detailsList.CauhinhChinh1)
    $('.CauHinhChinh2').text(detailsList.CauhinhChinh2)
    $('.CauHinhChinh3').text(detailsList.CauhinhChinh3)
    $('#Gia1').text(detailsList.gia1)
    $('#Gia2').text(detailsList.gia2)
    $('#Gia3').text(detailsList.gia3)
    $('.Gia1').text(detailsList.gia1)
    $('.Gia2').text(detailsList.gia2)
    $('.Gia3').text(detailsList.gia3)
    $('#DanhGiaLapTop').text(detailsList.Danhgia)
    $('.DanhGiaLapTop').text(detailsList.Danhgia)
    $('#ThongSo').text(detailsList.ThongSo)
}

LoadDetails();
$(document).ready(function(){
   LoadDetails();
})