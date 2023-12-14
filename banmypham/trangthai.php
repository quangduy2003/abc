

<!DOCTYPE html>
<html>
<head>
  <title>Trạng thái đơn hàng - Mun Shop </title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
    <style>/* style.css */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

header h1 {
  margin: 0;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline;
  margin-right: 10px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
}

section#banner {
  background-image: url("banner.jpg");
  background-size: cover;
  text-align: center;
  padding: 100px;
  color: #fff;
}

section#banner h2 {
  font-size: 32px;
  margin-bottom: 20px;
}

section#banner p {
  font-size: 18px;
  margin-bottom: 30px;
}

.btn {
  display: inline-block;
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 4px;
}

section#featured-products {
  padding: 20px;
}

section#featured-products h3 {
  font-size: 24px;
  margin-bottom: 20px;
}

.product {
  display: inline-block;
  margin-right: 20px;
  text-align: center;
}

.product img {
  width: 200px;
  height: auto;
}

.product h4 {
  margin-top: 10px;
  margin-bottom: 5px;
}

.product p.price {
  font-weight: bold;
}

footer {
    
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px;
}</style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Mun Shop </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="trangchu.php">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gioithieu.php">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tintuc.php">Tin tức</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sanpham.php">Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="giohang.php">Giỏ hàng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lienhe.php">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Đăng nhập</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div style="  text-align: center;">
  <section id="order-status">

    
    <div id="order-details">
      <h3>Thông tin đơn hàng</h3>
      <p><strong>Họ và tên:</strong> <span id="full-name"></span></p>
      <p><strong>Địa chỉ:</strong> <span id="address"></span></p>
      <p><strong>Số điện thoại:</strong> <span id="phone"></span></p>
      <p><strong>Phương thức giao hàng:</strong> <span id="shipping-method"></span></p>
    </div>
    
    <div id="order-status">
      <h3>Trạng thái đơn hàng</h3>
      <p><strong>Trạng thái:</strong> <span id="status"></span></p>
    </div>
  </section>
  </div>
  <footer>
    <p>&copy; 2023 Mun Shop . All rights reserved.</p>
  </footer>

  <script>
    // JavaScript code
    document.addEventListener("DOMContentLoaded", function() {
      // Lấy thông tin đơn hàng từ localStorage (hoặc từ nguồn dữ liệu khác)
      var order = JSON.parse(localStorage.getItem("order"));
      
      // Hiển thị thông tin đơn hàng trên trang
      if (order) {
        document.getElementById("full-name").textContent = order.fullName;
        document.getElementById("address").textContent = order.address;
        document.getElementById("phone").textContent = order.phone;
        document.getElementById("shipping-method").textContent = order.shippingMethod;
        
        // Giả sử trạng thái đơn hàng đã vận chuyển
        var statusElement = document.getElementById("status");
        statusElement.textContent = "Đang vận chuyển";
        statusElement.classList.add("shipping");
      }
    });
  </script>
</body>
</html>
