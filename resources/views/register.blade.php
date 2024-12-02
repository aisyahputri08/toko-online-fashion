<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <!-- Link to Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #F9E1D6;
    }
    .register-form {
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
    .btn-register {
      background-color: #d74760;
      color: white;
      width: 100%;
    }
  </style>
</head>
<body>

  <div class="register-form">
    <h2 class="form-title">Daftar</h2>
    <form>
      <div class="mb-3">
        <label for="fullName" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="fullName" placeholder="Masukkan nama lengkap">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Masukkan email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Masukkan password">
      </div>
      <div class="mb-3">
        <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
        <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi password">
      </div>
      <button type="submit" class="btn btn-register">Daftar</button>
      <p class="text-center mt-3">Sudah punya akun? <a href="login">Login</a></p>
    </form>
  </div>

  <!-- Link to Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
