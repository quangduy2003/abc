<!DOCTYPE html>
<html>
<head>
  <title>Trang Liên Hệ</title>
  <link rel="stylesheet" type="text/css" href="stylei.css">
  <script>
    function submitForm() {
      // Lấy các giá trị từ các trường nhập liệu
      var name = document.getElementById("name").value;
      var phone = document.getElementById("phone").value;
      var email = document.getElementById("email").value;
      var address = document.getElementById("address").value;
      var message = document.getElementById("message").value;

      // Tạo một đối tượng FormData để chứa dữ liệu
      var formData = new FormData();
      formData.append("name", name);
      formData.append("phone", phone);
      formData.append("email", email);
      formData.append("address", address);
      formData.append("message", message);

      // Tạo một yêu cầu AJAX
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "process.php", true);

      // Xử lý kết quả khi yêu cầu hoàn thành
      xhr.onload = function() {
        if (xhr.status === 200) {
          // Xử lý phản hồi từ tệp xử lý
          var response = xhr.responseText;
          alert(response); // Hiển thị thông báo thành công hoặc lỗi
          // Đặt lại giá trị của các trường nhập liệu
          document.getElementById("name").value = "";
          document.getElementById("phone").value = "";
          document.getElementById("email").value = "";
          document.getElementById("address").value = "";
          document.getElementById("message").value = "";
        } else {
          alert("Đã xảy ra lỗi. Vui lòng thử lại sau.");
        }
      };

      // Gửi yêu cầu AJAX với dữ liệu của biểu mẫu
      xhr.send(formData);
    }
  </script>
</head>
<body>
<header>
<head>
  <title>Trang chủ - Mun Shop </title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
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
  <section class="contact-section">
    <div class="container">
      <h2>Liên hệ</h2>

      <form class="contact-form">
        <div class="form-group">
          <label for="name">Họ và tên:</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
          <label for="phone">Số điện thoại:</label>
          <input type="text" id="phone" name="phone" required>
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
          <label for="address">Địa chỉ:</label>
          <input type="text" id="address" name="address" required>
        </div>

        <div class="form-group">
          <label for="message">Nội dung:</label>
          <textarea id="message" name="message" required></textarea>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Định vị cho bạn </label>
        </div>
      </form>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8856263620164!2d105.7761331!3d21.0372619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b607440ec9%3A0xf7c81ff7b9fbe961!2zMTI4IEEgxJAuIEjhu5MgVMO5bmcgTeG6rXUsIE1haSBE4buLY2gsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpIDEyMzAwMA!5e0!3m2!1svi!2s!4v1673235759509!5m2!1svi!2s" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <button type="submit" onclick="submitForm()">Gửi</button><p>
    </div>
  </section>
  <footer >
    <p>&copy; 2023 Mun Shop . All rights reserved.</p>
  </footer>
</body>
</html>