import React from 'react';


function Footer(){
  const clickH = () => {
    console.log('ClickH function called');
    // Add your functionality here
  };

  const clickK = () => {
    console.log('ClickK function called');
    // Add your functionality here
  };

  return (
    <section>
      <div className="Inf">
        <div className="row inf">
          <div className="col-6 col-s-12 col-m-12 inf1">
            <div className="col-8 col-s-12 col-m-12 inf11">
              <div className="inf111">CÔNG TY TNHH THƯƠNG MẠI & ĐẦU TƯ AN PHÁT</div>
              <div className="inf112"></div>
              <div className="inf113">
                <div className="inf1131">TƯ VẤN MUA HÀNG 24/7</div>
                Hotline: 0898.747.888 (Hà Nội)
                <br />
                Hotline: 0898.747.999 (Hà Nội)
                <br />
                Hotline: 0788.474.999 (Bắc Ninh)
              </div>
              <div className="inf113">
                <div className="inf1131">KỸ THUẬT + BẢO HÀNH ( 8H30-18H30 )</div>
                SĐT: 024.6253.6141
              </div>
              <div className="inf113">
                <div className="inf1131">ĐỊA CHỈ KINH DOANH</div>
                <div style={{ fontSize: '11px' }}>
                  Cơ Sở 1: 244 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội
                  <br />
                  Cơ Sở 2: 76 Phố Vũ, Đường Trần Hưng Đạo, Bắc Ninh
                </div>
                <div style={{ color: 'rgb(219, 219, 8)' }}>
                  Website:{' '}
                  <a href="https://www.anphatpc.com.vn/" style={{ color: 'white' }}>
                    https://www.anphatpc.com.vn/
                  </a>
                </div>
                <div style={{ color: 'rgb(219, 219, 8)' }}>
                  Youtube:{' '}
                  <a href="https://youtube.com/@AnPhatComputerpc" style={{ color: 'white' }}>
                    https://youtube.com/@AnPhatComputerpc
                  </a>
                </div>
              </div>
              <div className="inf113">
                <div style={{ fontSize: '13px' }} className="inf1131">
                  HOTLINE BÁN BUÔN + PHẢN HỒI, KHIẾU NẠI
                </div>
                Ms.Nhi : 0832297222
              </div>
              <br />
            </div>
            <div className="col-4 col-s-12 col-m-12 inf12">
              <div className="inf121">VỀ CÔNG TY</div>
              <div className="inf122"></div>
              <div className="inf123">
                Giới Thiệu Về Công Ty
                <br />
                Trung Tâm Bảo Hành
                <br />
                Tin Tức
                <br />
                Tuyển Dụng
                <br />
                Liên Hệ
                <br />
                <img src="image/dangkyBCT.png" alt="dangkyBCT" width="100%" height="100%" />
                <img src="image/dmca_protected_sml_120b.png" alt="dmca" width="100%" height="100%" />
              </div>
            </div>
          </div>
          <div className="col-6 col-s-12 col-m-12 inf2">
            <div className="col-6 col-s-12 col-m-12 inf21">
              <div className="inf211">TÀI KHOẢN NGÂN HÀNG</div>
              <div className="inf212"></div>
              <div className="inf213">
                <img src="image/logo_V.png" alt="logo_V" />
                <div>
                  <div>
                    <a>Tên tài khoản: </a>
                    <span>Nguyễn Minh Đức</span>
                  </div>
                  <div>
                    <a>Số tài khoản: </a>
                    <span>098765432</span>
                  </div>
                  <div>
                    <a>Chi nhánh: </a>
                    <span>Hưng Yên - TP-Hưng Yên</span>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-6 col-s-12 col-m-12 inf22">
              <div className="inf221">PANPAGE CỦA CHÚNG TÔI</div>
              <div className="inf222"></div>
              <div className="inf223">
                <img className="inf2232" src="image/logo_logo-web-t4.png" alt="logo_web" />
                <div>
                  <a href="#">anphat Laptop-C...</a>
                  <div className="inf2233">anphat Laptop-Chuyên Laptop HP, Dell, Thinkpad</div>
                </div>
                <div className="inf2234">
                  <i
                    style={{ fontSize: '18px', paddingTop: '3px', paddingLeft: '5px', color: 'blue', width: '20%', float: 'left' }}
                    className="fa fa-facebook-square"
                  ></i>
                  <span>
                    <a
                      href="https://www.facebook.com/anphatcomputer"
                      target="_blank"
                      rel="noopener noreferrer"
                      style={{ fontSize: '11px', top: '25%', left: '30%', color: 'black' }}
                    >
                      Thích trang
                    </a>
                  </span>
                </div>
                <div className="inf2235">3,3K lượt thích</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="open">
        <div onClick={clickH} className="open1">
          <i style={{ paddingTop: '5px', paddingLeft: '30px' }} className="fa fa-phone"></i>
          <br />
          <i style={{ paddingLeft: '8px' }} className="fa fa-comment-dots"></i>
          <br />
          <i style={{ paddingLeft: '30px' }} className="fa fa-location-dot"></i>
        </div>
        <div className="open2"></div>
      </div>
      <div className="open3">
        <div className="open31" style={{ bottom: '170px', right: '20px' }}>
          <span>Tìm cửa hàng</span>
          <i style={{ backgroundColor: 'rgb(20, 155, 49)' }} className="fa fa-location-dot"></i>
        </div>
        <div className="open31" style={{ bottom: '120px', right: '130px' }}>
          <span>Gọi Hotline</span>
          <i style={{ backgroundColor: 'red' }} className="fa fa-phone"></i>
        </div>
        <div className="open31" style={{ bottom: '70px', right: '165px' }}>
          <span>Liên hệ FB</span>
          <i style={{ backgroundColor: 'blue' }} className="fa fa-comment-dots"></i>
        </div>
        <div style={{ display: 'flex', bottom: '20px', right: '180px' }} className="open31">
          <span>Liên hệ Zalo</span>
          <img src="image/logo-zalo-vector.png" alt="logo_zalo" />
        </div>
        <div onClick={clickK} className="open32">
          <i className="fa fa-times"></i>
        </div>
      </div>
      <div className="updown upa">
        <i style={{ bottom: '100px' }} className="fa fa-chevron-up"></i>
      </div>
    </section>
  );
};

export default Footer;
