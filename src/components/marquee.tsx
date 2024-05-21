import React from 'react';
import './Marquee.css'; // Đảm bảo tạo file CSS này

function Marquee() {
  return (
    <div className="marquee-container">
      <p className="marquee-text">
        Hà Nội: 49 Thái Hà | 151 Lê Thanh Nghị và 63 Trần Thái Tông ● HCM: 158 - 160 Lý Thường Kiệt | 330-332 Võ Văn Tần | 84T/14 Trần Đình Xu ● Bắc Ninh: Số 4 Nguyễn Văn Cừ - Ninh Xá
      </p>
    </div>
  );
}

export default Marquee;
