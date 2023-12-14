<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <!-- Link CSS Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Link thư viện jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Link JS Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<head>
  <title>Trang chủ - Mun Shop </title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
      <div class="container">
        <a class="navbar-brand" href="#">Mun Shop </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          </ul>
        </div>
      </div>
    </nav>
  </header>
<body>
  <div class="container">
    <h2>Đăng nhập</h2>
    <link rel="stylesheet" type="text/css" href="styleii.css">
    <form action="login_process.php" method="POST">
      <div class="form-group">
        <label for="username">Tên người dùng:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
    <p>Chưa có tài khoản? <a href="register.php">Đăng ký ngay</a></p>
  </div>
</body>

</html>
