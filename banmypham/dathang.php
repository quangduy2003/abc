
<!DOCTYPE html>
<html>
<head>
  <title>Đặt hàng - Mun Shop </title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
   <style>/* style.css */

   /* CSS cho trang đặt hàng */
    #order-form {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    
    h2 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    
    input[type="text"],
    input[type="tel"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    #shipping-method {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    
    #shipping-method label {
      margin-right: 10px;
    }
    
    #actions {
      text-align: center;
    }
    
    #actions button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      border-radius: 4px;
    }
    
    #actions button:hover {
      background-color: #45a049;
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
            <li class="nav-item">
              <a class="nav-link" href="login.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"></a>
            </li>
            <form class="form-inline mt-2 mt-md-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
               </form>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <section id="checkout-form">
    <section id="order-form">
    <h2>Đặt hàng</h2>
    <form id="checkout-form">
      <label for="full-name">Họ và tên:</label>
      <input type="text" id="full-name" name="full-name" required>
      
      <label for="address">Địa chỉ:</label>
      <input type="text" id="address" name="address" required>
      
      <label for="phone">Số điện thoại:</label>
      <input type="tel" id="phone" name="phone" required>
      
      <label for="shipping-method">Phương thức giao hàng:</label>
      <div id="shipping-method">
        <label for="standard-shipping">
          <input type="radio" id="standard-shipping" name="shipping-method" value="standard" required>
          Giao hàng nhanh (24k)
        </label>
        
        <label for="express-shipping">
          <input type="radio" id="express-shipping" name="shipping-method" value="express" required>
          Giao hàng hỏa tốc (30k)
        </label>
      </div>
      
      <div id="actions">
        <button type="submit">Đặt hàng</button>
      </div>
    </form>
  </section>
  
  <footer>
    <p>&copy; 2023 Mun Shop . All rights reserved.</p>
  </footer>

  <script>
    // JavaScript code
  document.addEventListener("DOMContentLoaded", function() {
  var checkoutForm = document.getElementById("checkout-form");
  checkoutForm.addEventListener("submit", function(event) {
    event.preventDefault();

    // Lấy thông tin đơn hàng từ các trường input trong form
    var fullName = document.getElementById("full-name").value;
    var address = document.getElementById("address").value;
    var phone = document.getElementById("phone").value;
    var shippingMethod = document.querySelector('input[name="shipping-method"]:checked').value;

    // Tạo đối tượng đơn hàng
    var order = {
      fullName: fullName,
      address: address,
      phone: phone,
      shippingMethod: shippingMethod
    };

    // Lưu thông tin đơn hàng vào localStorage
    localStorage.setItem("order", JSON.stringify(order));

    // Chuyển hướng đến trang trạng thái đơn hàng
    window.location.href = "trangthai.php";
  });
});
    
    function checkLoginStatus() {
      // Kiểm tra trạng thái đăng nhập của người dùng
      // Đây chỉ là một ví dụ đơn giản, bạn cần cung cấp phương thức xác thực đăng nhập thực tế
      
      // Giả sử người dùng đã đăng nhập
      return true;
    }
  </script>
</body>
</html>