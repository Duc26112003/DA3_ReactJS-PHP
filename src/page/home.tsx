import React from 'react';

function Home() {
    return (
        <div className="LaptopT">
            <div className="row Laptop1">
                <ul style={{ padding: 0 }}>
                    <li>
                        <a
                            href="#"
                            style={{
                                backgroundColor: 'rgb(40, 45, 193)',
                                borderRadius: '5px 5px 0 0',
                                color: 'white',
                                fontWeight: 'bold'
                            }}
                            className="col-1 col-s-2 col-m-4"
                        >
                            Laptop Mới
                        </a>
                    </li>
                    <li><a href="#" className="col-1 col-s-2 col-m-4">Dell</a></li>
                    <li><a href="#" className="col-1 col-s-2 col-m-4">HP</a></li>
                    <li><a href="#" className="col-1 col-s-2 col-m-4">Lenovo</a></li>
                    <li><a href="#" className="col-1 col-s-2 col-m-4">ASUS</a></li>
                    <li><a href="#" className="col-1 col-s-2 col-m-4">Acer</a></li>
                    <li><a href="#" className="col-1 col-s-2 col-m-4">Gigabyte</a></li>
                    <li><a href="#" className="col-1 col-s-2 col-m-4">MSI</a></li>
                    <li><a href="#" className="col-2 col-s-3 col-m-4">Laptop Mới Khác</a></li>
                    <li>
                        <a href="#" className="col-2 col-s-2 col-m-12">
                            <button>Xem tất cả</button>
                        </a>
                    </li>
                </ul>
            </div>
            <div style={{ height: '1px', backgroundColor: 'black', marginLeft: '5px' }}></div>
            <div className="row PLLaptop">
                <div className="Laptop1-1">
                    <div className="col-2 col-s-4 col-m-6 Laptop11">
                        <div className="LapBorder">
                            <div className="box">
                                <img src="image/msipulsegl66cdhbfhc_200_150.jpg" width="100%" height="120%" alt="MSI Pulse GL66" />
                                <div className="Moi">Mới</div>
                                <div className="sale">-3%</div>
                            </div>
                            <br />
                            <div className="Laptop111">
                                <a href="#" className="Lap-a">Lenovo Thinkpad E540</a>
                                <br /><br />
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style={{ lineHeight: '20px' }}><b>Kho hàng: </b>Sẵn hàng</div>
                                <br /><br />
                                <b style={{ fontSize: '20px', color: 'red' }}>7.300.000 đ</b> <a href="#" className="Gio"><i className="fa-solid fa-cart-shopping"></i></a>
                                <br />
                                <del>7.500.000</del>
                            </div>
                        </div>
                    </div>
                    <div className="col-2 col-s-4 col-m-6 Laptop11">
                        <div className="LapBorder">
                            <div className="box">
                                <img src="image/acernitro5202115bcdhub_200_150.jpg" alt="Acer Nitro 5" />
                                <div className="Moi">Mới</div>
                                <div className="sale">-3%</div>
                            </div>
                            <br />
                            <div className="Laptop111">
                                <a href="#" className="Lap-a">HP Elitebook 725 G3</a>
                                <br /><br />
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style={{ lineHeight: '20px' }}><b>Kho hàng: </b>Sẵn hàng</div>
                                <br /><br />
                                <b style={{ fontSize: '20px', color: 'red' }}>6.800.000 đ</b> <a href="#" className="Gio"><i className="fa-solid fa-cart-shopping"></i></a>
                                <br />
                                <del>7.000.000</del>
                            </div>
                        </div>
                    </div>
                    <div className="col-2 col-s-4 col-m-6 Laptop11">
                        <div className="LapBorder">
                            <div className="box">
                                <img src="image/lenovothinkpadt14sgen2chbfhc_200_150.jpg" alt="Lenovo Thinkpad T14s Gen 2" />
                                <div className="Moi">Mới</div>
                                <div className="sale">-3%</div>
                            </div>
                            <br />
                            <div className="Laptop111">
                                <a href="#" className="Lap-a">Lenovo Thinkpad T460S</a><br /><br />
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style={{ lineHeight: '20px' }}><b>Kho hàng: </b>Có 2 cấu hình</div>
                                <br /><br />
                                <b style={{ fontSize: '20px', color: 'red' }}>11.090.000 đ</b> <a href="#" className="Gio"><i className="fa-solid fa-cart-shopping"></i></a>
                                <br />
                                <del>11.990.000</del>
                            </div>
                        </div>
                    </div>
                    <div className="col-2 col-s-4 col-m-6 Laptop11">
                        <div className="LapBorder">
                            <div className="box">
                                <img src="image/asuszenbookq408ugcdhbfjhbc_200_150.jpg" alt="Asus Zenbook Q408UG" />
                                <div className="Moi">Mới</div>
                            </div>
                            <br />
                            <div className="Laptop111">
                                <a href="#" className="Lap-a">HP Probook 650 G1</a><br /><br />
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style={{ lineHeight: '20px' }}><b>Kho hàng: </b>Có 2 cấu hình</div>
                                <br /><br />
                                <b style={{ fontSize: '20px', color: 'red' }}>7.500.000 đ</b> <a href="#" className="Gio"><i className="fa-solid fa-cart-shopping"></i></a>
                                <br /><br />
                            </div>
                        </div>
                    </div>
                    <div className="col-2 col-s-4 col-m-6 Laptop11">
                        <div className="LapBorder">
                            <div className="box">
                                <img src="image/gigabyteaorus15pkd72s1223gocdhccd_200_150.jpg" alt="Gigabyte Aorus 15P" />
                                <div className="Moi">Mới</div>
                                <div className="sale">-3%</div>
                            </div>
                            <br />
                            <div className="Laptop111">
                                <a href="#" className="Lap-a">Lenovo Thinkpad L540</a>
                                <br /><br />
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style={{ lineHeight: '20px' }}><b>Kho hàng: </b>Sẵn hàng</div>
                                <br /><br />
                                <b style={{ fontSize: '20px', color: 'red' }}>7.400.000 đ</b> <a href="#" className="Gio"><i className="fa-solid fa-cart-shopping"></i></a>
                                <br />
                                <del>8.000.000</del>
                            </div>
                        </div>
                    </div>
                    <div className="col-2 col-s-4 col-m-6 Laptop11">
                        <div className="LapBorder">
                            <div className="box">
                                <img src="image/gigabyteaorus15pkd72s1223gocdhccd_200_150.jpg" alt="Gigabyte Aorus 15P" />
                                <div className="Moi">Mới</div>
                                <div className="sale">-3%</div>
                            </div>
                            <br />
                            <div className="Laptop111">
                                <a href="#" className="Lap-a">Lenovo Thinkpad L540</a>
                                <br /><br />
                                <div><b>Bảo hàng: </b>12 tháng</div>
                                <div style={{ lineHeight: '20px' }}><b>Kho hàng: </b>Sẵn hàng</div>
                                <br /><br />
                                <b style={{ fontSize: '20px', color: 'red' }}>7.400.000 đ</b> <a href="#" className="Gio"><i className="fa-solid fa-cart-shopping"></i></a>
                                <br />
                                <del>8.000.000</del>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    )
}
export default Home;

