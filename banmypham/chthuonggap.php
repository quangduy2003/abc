<!DOCTYPE html>
<html>
<head>
  <title>Câu hỏi thường gặp</title>
  <style>
    h1 {
      text-align: center;
    }

    .faq-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }

    .faq-form label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .faq-form input[type="text"],
    .faq-form textarea {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }

    .faq-form button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Câu hỏi thường gặp</h1>

  <div class="faq-container">
    <form class="faq-form">
      <label for="name">Họ và tên:</label>
      <input type="text" id="name" name="name" required>

      <form class="faq-form">
      <label for="name">Số điện thoại:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="question">Câu hỏi:</label>
      <textarea id="question" name="question" required></textarea>

      <button type="submit">Gửi câu hỏi</button>
    </form>
  </div>
</body>
</html>
