<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Link to Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #F9E1D6;
    }
    .login-form {
      background-color: white;
      border-radius: 8px;
      padding: 40px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      margin: 100px auto;
    }
    .form-title {
      font-size: 24px;
      font-weight: bold;
      color: #d74760;
      text-align: center;
      margin-bottom: 30px;
    }
    .btn-login {
      background-color: #d74760;
      color: white;
      width: 100%;
    }
  </style>
</head>
<body>

  <div class="login-form">
    <h2 class="form-title">Login</h2>
    <form>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Masukkan username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Masukkan password">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Ingat saya</label>
      </div>
      <button type="submit" class="btn btn-login">Login</button>
      <p class="text-center mt-3">Belum punya akun? <a href="register">Daftar</a></p>
    </form>
  </div>

  <!-- Link to Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
