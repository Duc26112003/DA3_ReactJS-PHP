import React, { useState, useEffect } from 'react';
import axios from 'axios';

function SanPhamList() {
  const [sanPham, setSanPham] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState("");

  useEffect(() => {
    axios.get('http://localhost:8000/api/sanpham')
      .then(response => {
        // console.log(response.data)
        setSanPham(response.data);
        setLoading(false);
      })
      .catch(error => {
        setError('Có lỗi xảy ra khi lấy dữ liệu!');
        setLoading(false);
      });
  }, []);

  if (loading) return <div>Đang tải dữ liệu...</div>
  if (error) return <div>{error}</div>
  return (
    <>
      {sanPham.map(sp => (
        <div key={sp.id} className="col-2 col-s-4 col-m-6 Laptop11">
          <div className="LapBorder">
            <div className="box">
              <a className="details3" href="./product_details.html">
                <img id="imagehover" src="./image/a14.jpg" alt={sp.tensanpham} />
              </a>
              <div className="Cu">Cũ</div>
              <div className="sale">-3%</div>
            </div>
            <br />
            <div className="Laptop111">
              <a href="./product_details.html" className="Lap-a details3">{sp.tensanpham}</a>
              <br /><br />
              <div><b>Bảo hành: </b>12 tháng</div>
              <div style={{ lineHeight: '20px' }}><b>Kho hàng: </b>Sẵn hàng</div>
              <br /><br />
              <b style={{ fontSize: '20px', color: 'red' }}>7.300.000 đ</b>
              
              <br />
              <del>7.500.000</del>
            </div>
          </div>
        </div>
      ))}
    </>

    /* // <div>
    //   {sanPham.map(sp => (
    //     <div className="product_info">
    //       <div className="product_img">
    //         <img src={`image/${sp.hinhanh}`} style={{width:'25%'}}/>
    //       </div>
    //       <h4 style={{ textAlign: 'center', paddingTop: '25px' }}>{sp.tensanpham}</h4>
    //       <h4 style={{ textAlign: 'center', paddingTop: '30px', color: 'rgb(219, 66, 112)' }}>
    //         {sp.giasanpham}
    //       </h4>
    //       <div/>

    //     </div>
        
    //   ))}
    // </div> */
  )
}
export default SanPhamList;