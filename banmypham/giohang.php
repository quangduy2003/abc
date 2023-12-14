<!DOCTYPE html>
<html>
<head>
  <title>Giỏ hàng - Mun Shop </title>
  <meta charset="utf-8">


  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <style>
      

    #product-details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    
    .product {
      width: 30%;
      margin-bottom: 20px;
    }
    /* CSS cho giao diện giỏ hàng */
    #cart-items {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    
    h2 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
    }
    
    th, td {
      padding: 10px;
      text-align: left;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    td:first-child {
      width: 60%;
    }
    
    td:last-child {
      text-align: center;
    }
    
    
    
    
    #actions {
      text-align: right;
      margin-top: 20px;
    }
    
    #actions button {
      margin-left: 10px;
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
    }
  </style>
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
  
  <section id="cart-items">
    <h2>Giỏ hàng</h2>
    <table>
      <thead>
        <tr>
          <th>Sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Tổng</th>
          <th></th>
        </tr>
      </thead>
      <tbody id="cart-body">
        <!-- Các sản phẩm trong giỏ hàng sẽ được thêm vào đây -->
      </tbody>
    </table>
    
    <div id="total">
      <p>Tổng cộng: <span id="total-amount">$0</span></p>
    </div>
    
    <div id="actions">
      <button onclick="purchase()">Mua hàng</button>
    
    </div>
  </section>
  
  <footer>
    <p>&copy; 2023 Mun Shop . All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      displayCartItems();
      calculateTotal();
    });
    
    function displayCartItems() {
      var cartItems = localStorage.getItem("cartItems");
      
      if (cartItems) {
        cartItems = JSON.parse(cartItems);
        
        var cartBody = document.getElementById("cart-body");
        cartBody.innerHTML = ""; // Xóa nội dung cũ
        
        cartItems.forEach(function(item) {
          var row = document.createElement("tr");
          
          // Sản phẩm
          var productName = document.createElement("td");
          productName.textContent = item.name;
          
          // Giá
          var productPrice = document.createElement("td");
          productPrice.textContent = "$" + item.price;
          
          // Số lượng
          var quantityInput = document.createElement("input");
          quantityInput.type = "number";
          quantityInput.min = "1";
          quantityInput.value = item.quantity;
          quantityInput.onchange = function() {
            updateQuantity(item.name, quantityInput.value);
          };
          var quantityCell = document.createElement("td");
          quantityCell.appendChild(quantityInput);
          
          // Tổng
          var totalCell = document.createElement("td");
          var total = item.price * item.quantity;
          totalCell.textContent = "$" + total;
          
          // Xóa
          var removeButton = document.createElement("td");
          var removeLink = document.createElement("a");
          removeLink.href = "#";
          removeLink.textContent = "Xóa";
          removeLink.onclick = function() {
            removeFromCart(item.name);
          };
          removeButton.appendChild(removeLink);
          
          row.appendChild(productName);
          row.appendChild(productPrice);
          row.appendChild(quantityCell);
          row.appendChild(totalCell);
          row.appendChild(removeButton);
          
          cartBody.appendChild(row);
        });
      }
    }
    
    function calculateTotal() {
      var cartItems = localStorage.getItem("cartItems");
      var totalAmount = document.getElementById("total-amount");
      
      if (cartItems && totalAmount) {
        cartItems = JSON.parse(cartItems);
        
        var total = 0;
        cartItems.forEach(function(item) {
          total += item.price * item.quantity;
        });
        
        totalAmount.textContent = "$" + total;
      }
    }
    
    function updateQuantity(productName, quantity) {
      var cartItems = localStorage.getItem("cartItems");
      
      if (cartItems) {
        cartItems = JSON.parse(cartItems);
        
        cartItems.forEach(function(item) {
          if (item.name === productName) {
            item.quantity = parseInt(quantity);
          }
        });
        
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
        
        // Cập nhật giao diện
        displayCartItems();
        calculateTotal();
      }
    }
    
    function removeFromCart(productName) {
      var cartItems = localStorage.getItem("cartItems");
      
      if (cartItems) {
        cartItems = JSON.parse(cartItems);
        
        // Lọc các sản phẩm không trùng tên
        cartItems = cartItems.filter(function(item) {
          return item.name !== productName;
        });
        
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
        
        // Cập nhật giao diện
        displayCartItems();
        calculateTotal();
      }
    }
    
    function clearCart() {
      localStorage.removeItem("cartItems");
      
      // Cập nhật giao diện
      displayCartItems();
      calculateTotal();
    }
    
    function purchase() {
      // Thực hiện quá trình mua hàng (có thể là gửi dữ liệu lên máy chủ)
      alert("Cảm ơn bạn đã mua hàng tại Mun Shop !");
      
      // Xóa giỏ hàng sau khi mua hàng
      clearCart();

      // Chuyển hướng qua trang dathang.php
      window.location.href = "dathang.php";
    }
  </script>
</body>
</html>