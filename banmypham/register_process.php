<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mypham";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Kết nối không thành công: " . mysqli_connect_error());
}

// Lấy dữ liệu từ form đăng ký
$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra tài khoản đã tồn tại trong cơ sở dữ liệu chưa
$query = "SELECT * FROM tbl_users WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

if ($count > 0) {
  // Tài khoản đã tồn tại
  echo "Tài khoản đã tồn tại. Vui lòng chọn tên đăng nhập khác.";
} else {
  // Thêm tài khoản vào cơ sở dữ liệu
  $query = "INSERT INTO tbl_users (username, password) VALUES ('$username', '$password')";
  if (mysqli_query($conn, $query)) {
    // Đăng ký thành công
    echo "Đăng ký thành công!";
  } else {
    // Đăng ký thất bại
    echo "Đăng ký không thành công. Vui lòng thử lại.";
  }
}

mysqli_close($conn);
?>
