import React from 'react';
// import Marquee from './marquee';

function Header() {
    const updateCart = () => {
        console.log('Cart updated');
    };
    return (


        <header className="header " >
            <section className="street"></section>
            <section className="header1">
                <div className="row title">
                    {/* <Marquee/> */}
                    <div className=" title-login">
                        <a href="/DA_Web/login.html" target="_bank"> <i className="fa-solid fa-circle-user"></i></a>
                    </div>
                    <div className="col-5 col-s-10 col-m-10 title-bottom">
                        <a href="#">Trang chủ</a>
                        <a href="#">Tin tức</a>
                        <a href="#">Video</a>
                        <a href="#">Giới thiệu</a>
                        <a href="#">Liên hệ</a>
                        <a className="Cartbutom" href="#"><i style={{ color: "white" }} className="fa-solid fa-cart-shopping"></i>&nbsp;<span className="OnCart"></span>  </a>
                    </div>
                    <div className="Cart">
                        <div className="Cart-content">
                            <div className="Cart-header">
                                <a>Giỏ hàng</a>
                                <a id="Soluong"></a>
                                <span id="HideCart"> &times;</span>
                                <a href="./Paying.html" className="Watchall-Cart">Xem tất cả</a>

                            </div>
                            <div className="Cart-body">
                                <div className="Cart-row">
                                    <span className="cart-item  cart-column">Sản Phẩm</span>
                                    <span className="cart-price  cart-column">Giá</span>
                                    <span className="cart-quantity  cart-column">Số Lượng</span>
                                </div>
                                <div className="over-cart overY">
                                </div>

                                <div className="cart-total">
                                    <strong className="cart-total-title">Tổng Cộng:</strong>
                                    <span className="cart-total-price"></span>
                                </div>
                            </div>
                            <div className="modal-footer">
                                <button onClick={updateCart} type="button" className="close-footer">Cập nhập giỏ hàng</button>
                                <a href="./Paying.html"><button type="button" className="order">Thanh Toán</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section >
                <div className="row style style1">
                    <div className="col-2 col-s-2 col-m-2 style-i">
                        <a href="#"> <img src="./image/logo_logo-web-t4.png" /></a>

                    </div>
                    <div className="col-3 col-s-9 col-m-9 style-center" >
                        <form style={{ display: 'flex' }}>
                            <input
                                style={{ padding: '10px', outline: 'none', height: '30px', width: '85%', borderRadius: '5px 0 0 5px', border: '1px solid rgb(154, 199, 169)' }}
                                type="text"
                                className="f"
                                placeholder="Tìm kiếm..."
                                name="search"
                            />
                            <button style={{ backgroundColor: 'rgb(229, 245, 234)', border: '1px solid rgb(188, 225, 200)', borderRadius: '0 5px 5px 0' }} type="submit">
                                <div style={{ fontSize: '18px' }}><i className="fa-solid fa-magnifying-glass"></i></div>
                            </button>
                        </form>
                    </div>
                    <div className="col-7 col-s-1 col-m-1 style-l">
                        <div id="menu-icon"><i className="fa-solid fa-bars"></i></div>
                        <ul id="main-menu">
                            <li className="style-l1"><a href="#" >
                                <div><img src="image/icon-lap.png" /></div>
                                <div>LAPOP MỚI</div> </a>
                                <i className="fa-solid fa-caret-down"></i>
                                <ul >
                                    <ul >
                                        <li className="style-li1"><a href="#" >Dell</a></li>
                                        <li><a href="#">Dell Inspiron</a></li>
                                        <li><a href="#">Dell Vostro</a></li>
                                        <li><a href="#">Dell XPS</a></li>
                                        <li><a href="#">Dell Gaming</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >HP</a></li>
                                        <li><a href="#">HP Pavilion</a></li>
                                        <li><a href="#">HP Zbook</a></li>
                                        <li><a href="#">HP Folio</a></li>
                                        <li><a href="#">HP Elite X2</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >Lenovo</a></li>
                                        <li><a href="#">Lenovo Thinkpad</a></li>
                                        <li><a href="#">Lenovo Yoga</a></li>
                                        <li><a href="#">Lenovo Ideapad</a></li>
                                        <li><a href="#">Lenovo Gaming</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >ASUS</a></li>
                                        <li><a href="#">ASUS Vivibook</a></li>
                                        <li><a href="#">ASUS Zenbook</a></li>
                                        <li><a href="#">ASUS Gaming</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#"  >Acer</a></li>
                                        <li><a href="#">Acer Gaming</a></li>
                                        <li className="style-li1"><a href="#"  >MSI</a></li>
                                        <li><a href="#">MSI Gaming</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >Gigabyte Gaming</a></li>
                                        <li><a href="#">Gigabyte Văn Phòng</a></li>
                                        <li className="style-li1"><a href="#" >LAPTOP Mới Khác</a></li>
                                        <li><a href="#">Samsung Galaxy Book</a></li>
                                    </ul>
                                </ul>
                            </li>
                            <li className="style-l2">
                                <a href="#"  >
                                    <div><img src="image/icon-lap.png" /></div>
                                    <div >LAPTOP CŨ</div> </a>
                                <i className="fa-solid fa-caret-down"></i>
                                <ul style={{ paddingLeft: "0px" }}>
                                    <ul >
                                        <li className="style-li1"><a href="#" >Dell</a></li>
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
                                        <li className="style-li1"><a href="#" >HP</a></li>
                                        <li><a href="#">HP Workstation (Máy Trạm)</a></li>
                                        <li><a href="#">HP Elitebook</a></li>
                                        <li><a href="#">HP Folio</a></li>
                                        <li><a href="#">HP Probook</a></li>
                                        <li><a href="#">HP Envy</a></li>
                                        <li><a href="#">HP Pavilion</a></li>
                                        <li><a href="#">HP Spectre</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >Lenovo Thinkpad</a></li>
                                        <li><a href="#">Thinkpad W & P Series (Máy Trạm)</a></li>
                                        <li><a href="#">Thinkpad Dòng T Series</a></li>
                                        <li><a href="#">Thinkpad Dòng X Series</a></li>
                                        <li><a href="#">Thinkpad X1 Cacbon & Yoga</a></li>
                                        <li><a href="#">Thinkpad Dòng E & L Series</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >Sản phẩm Apple</a></li>
                                        <li><a href="#">Macbook Air 11 inch</a></li>
                                        <li><a href="#">Macbook Air 13 inch</a></li>
                                        <li><a href="#">Macbook Pro</a></li>
                                        <li><a href="#">Macbook retina</a></li>
                                        <li><a href="#">Apple mac</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#"  >Sony Vaio</a></li>
                                        <li><a href="#">Sony Vaio Vpcea</a></li>
                                        <li><a href="#">Sony Vaio Utrabook SVD11</a></li>
                                        <li><a href="#">Sony Vaio SVF14</a></li>
                                        <li><a href="#">Sony Vaio SVF15</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >Laptop Cũ Khác</a></li>
                                        <li><a href="#">Laptop Toshiba</a></li>
                                        <li><a href="#">Laptop Acer</a></li>
                                    </ul>
                                </ul>

                            </li>
                            <li className="style-l3">
                                <a href="#"  >
                                    <img src="image/icon-case.png" />
                                    <div className="style-lw">CASE-PC</div></a>
                                <i className="fa-solid fa-caret-down"></i>
                                <ul style={{ paddingLeft: 0 }}>
                                    <ul style={{ paddingLeft: 0 }}>
                                        <li className="style-li1"><a href="#" >Dell</a></li>
                                        <li><a href="#">Máy Trạm Dell Workstation</a></li>
                                        <li><a href="#">Máy Tính đồng bộ Dell</a></li>
                                        <li><a href="#">Dell All In One</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >HP</a></li>
                                        <li><a href="#">Máy Trạm Hp Workstation</a></li>
                                        <li><a href="#">Máy Tính Đồng Bộ HP</a></li>
                                        <li><a href="#">HP All In One</a></li>
                                    </ul>
                                    <ul style={{ paddingLeft: "10px" }}>
                                        <li className="style-li1"><a href="#" >Lenovo</a></li>
                                        <li><a href="#">Máy Trạm Lenovo Workstation</a></li>
                                        <li><a href="#">Lenovo All In One</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >PC Đồ Họa-Workstation</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#"  >Acer</a></li>
                                        <li><a href="#">Acer Gaming</a></li>
                                        <li className="style-li1"><a href="#"  >MSI</a></li>
                                        <li><a href="#">MSI Gaming</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >PV Build Gaming Đồ Họa</a></li>
                                        <li><a href="#">PC AMD</a></li>
                                        <li><a href="#">PC INTEL</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >Màn Hình PC</a></li>
                                        <li><a href="#">Màn Hình HP</a></li>
                                        <li><a href="#">Màn Hình Dell</a></li>
                                        <li><a href="#">Màn Hình IO DATA</a></li>
                                    </ul>
                                </ul>

                            </li>
                            <li className="style-l4">
                                <a href="#" >
                                    <img src="image/icon-PL.png" />
                                    <div className="style-lw">LINH PHỤ KIỆN</div></a>
                                <i className="fa-solid fa-caret-down"></i>
                                <ul>
                                    <ul >
                                        <li className="style-li1"><a href="#" >Mainbroad-Bo Mạch Chủ</a></li>
                                        <li><a href="#">Main ASROCK</a></li>
                                        <li><a href="#">Main GIGABYTE</a></li>
                                        <li><a href="#">Main MSI</a></li>
                                        <li><a href="#">Main ASUS</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >PC-Bộ Vi Xử Lý</a></li>
                                        <li><a href="#">CPU INTEL</a></li>
                                        <li><a href="#">CPU AMD</a></li>
                                    </ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >Linh Kiện Laptop</a></li>
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
                            <li className="style-l5">
                                <a href="#"  >
                                    <img src="image/thu-thuat-cong-nghe.png" />
                                    <div className="style-lw">THỦ THUẬT</div>
                                    <i className="fa-solid fa-caret-down"></i>
                                </a>
                                <ul>
                                    <ul>
                                        <li className="style-li1"><a href="#" >Thủ Thuật công nghệ</a></li>
                                        <li><a href="#">Máy Tính</a></li>
                                    </ul>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </section>
        </header>
    )
}

export default Header;