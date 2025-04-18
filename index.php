<?php
session_start();

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Parkir</title>
  <link rel="icon" href="assets/js/image/logo.jpeg" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #1f1c2c, #928dab);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
    }
    .login-card {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.1);
      border-radius: 16px;
      padding: 40px;
      color: white;
      width: 100%; 
      max-width: 400px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
    }
    .login-card h3 {
      font-weight: 600;
      margin-bottom: 30px;
    }
    .form-control::placeholder {
      color: #ccc;
    }
    .form-control, .btn {
      border-radius: 12px;
    }
    .btn-login {
      background-color: #00c6ff;
      background-image: linear-gradient(to right, #0072ff, #00c6ff);
      border: none;
      color: white;
      font-weight: bold;
      transition: 0.3s;
    }
    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 198, 255, 0.6);
    }
    .login-header {
      text-align: center;
      margin-bottom: 20px;
    }
    .login-header img {
      height: 50px;
    }
  </style>
</head>

<body>

  <div class="login-card">
    <div class="login-header">
      <img src="assets/js/image/dpm.png" alt="Logo Parkir">
      <h3 class="mt-2">Sistem Parkir</h3>
      <p class="text-light small">Silakan login untuk mengelola data parkir</p>
    </div>
    <form method="POST" action="login_proses.php">
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
  </div>
  <button type="submit" class="btn btn-login w-100 mt-3">Login</button>
  <br>
  <br>
  <?php if (isset($_SESSION['login_error'])) : ?>
  <div class="alert alert-danger mt-3 text-center py-2" id="loginAlert">
    Email atau Password salah!
  </div>
  <?php unset($_SESSION['login_error']); ?>
<?php endif; ?>

</form>

  </div>



  <script>
      setTimeout(function () {
    const alertBox = document.getElementById('loginAlert');
    if (alertBox) {
      alertBox.style.display = 'none';
    }
  }, 15000);
  </script>

</body>
</html>





