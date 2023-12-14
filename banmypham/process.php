<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Lấy dữ liệu từ biểu mẫu
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $message = $_POST["message"];

  // Xử lý dữ liệu và thực hiện các hoạt động khác, ví dụ: gửi email, lưu vào cơ sở dữ liệu, v.v.
  
  // Ví dụ: Hiển thị thông báo thành công và gửi phản hồi về trình duyệt
  $response = "Cảm ơn bạn, $name, đã liên hệ với Shop. Shop sẽ phản hồi sớm nhất có thể.";

  echo $response;
}
?>
