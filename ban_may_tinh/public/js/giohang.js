// // // Lấy dữ liệu từ Local Storage
// var cartData = localStorage.getItem('cart');

// // Kiểm tra nếu dữ liệu tồn tại
// if (cartData) {
//     // Chuyển dữ liệu từ chuỗi JSON thành đối tượng JavaScript
//     var cartItems = JSON.parse(cartData);

//     // Hiển thị thông tin từ đối tượng JavaScript trong phần tử HTML có class là "Infoder11"
//     var infoder11Element = document.querySelector('.Infoder11');
//     if (infoder11Element) {
//         // Xóa các nội dung hiện có trong phần tử "Infoder11"
//         infoder11Element.innerHTML = '';

//         // Tạo HTML để hiển thị thông tin sản phẩm từ dữ liệu trong Local Storage
//         cartItems.forEach(function(item) {
//             var productHTML = '<div class="product">';
//             productHTML += '<p>name: ' + item.name + '</p>';
//             productHTML += '<p>price: ' + item.price + '</p>';
//             productHTML += '<img src="' + item.image + '" alt="' + item.name + '">';
//             productHTML += '<p>quantity: ' + item.quantity + '</p>';
//             productHTML += '</div>';

//             // Thêm HTML vào phần tử "Infoder11"
//             infoder11Element.innerHTML += productHTML;
//         });
//     }
// } else {
//     // Nếu không có dữ liệu trong Local Storage, hiển thị thông báo
//     var infoder11Element = document.querySelector('.Infoder11');
//     if (infoder11Element) {
//         infoder11Element.innerHTML = '<p>No items in cart</p>';
//     }
// }
