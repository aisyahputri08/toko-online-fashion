<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evoque</title>
  <!-- Link to Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Link to Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">

  <!-- Navbar -->
  <header class="navbar navbar-expand-lg navbar-custom shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand fs-2 fw-bold" href="#">Evoque</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#kategori">Kategori</a></li>
          <li class="nav-item"><a class="nav-link" href="#terlaris">Produk Terlaris</a></li>
          <li class="nav-item"><a class="nav-link" href="#promo">Promo</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
        </ul>
      </div>
      <a href="login" class="btn btn-pink">Login</a>
    </div>
  </header>

  <!-- Hero Banner -->
  <section class="hero-banner text-center">
    <h1 class="display-4 fw-bold mb-4">Temukan Gaya Terbaru Anda</h1>
    <p class="lead mb-5">Belanja fashion terbaru dengan diskon hingga 50%!</p>
    <a href="login" class="btn btn-light text-pink px-5 py-3 fs-5 fw-semibold">Belanja Sekarang</a>
  </section>

  <!-- Kategori -->
  <section id="kategori" class="section-light py-5">
    <div class="container text-center">
      <h2 class="text-3xl font-bold mb-4 text-pink">Kategori</h2>
      <div class="row g-4 justify-content-center">
        <div class="col-md-2 col-sm-4">
          <div class="category-circle">
            <img src="picture/cewe.jpg" alt="Pakaian Wanita" class="img-fluid rounded-circle">
          </div>
          <p class="mt-2 text-pink">Pakaian Wanita</p>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="category-circle">
            <img src="picture/cowo.jpg" alt="Pakaian Pria" class="img-fluid rounded-circle">
          </div>
          <p class="mt-2 text-pink">Pakaian Pria</p>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="category-circle">
            <img src="picture/aksesoris.jpg" alt="Aksesoris" class="img-fluid rounded-circle">
          </div>
          <p class="mt-2 text-pink">Aksesoris</p>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="category-circle">
            <img src="picture/sepatu.jpg" alt="Sepatu" class="img-fluid rounded-circle">
          </div>
          <p class="mt-2 text-pink">Sepatu</p>
        </div>
        <div class="col-md-2 col-sm-4">
          <div class="category-circle">
            <img src="picture/tas.jpg" alt="Tas" class="img-fluid rounded-circle">
          </div>
          <p class="mt-2 text-pink">Tas</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Produk Terlaris dan Populer -->
  <section id="terlaris" class="section-light py-5">
    <div class="container text-center">
      <h2 class="text-3xl font-bold mb-4 text-pink">Produk Terlaris dan Populer</h2>
      <div class="row g-4">
        <!-- Produk Terlaris -->
        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <img src="picture/pt1.jpg" class="card-img-top" alt="Produk 1">
            <div class="card-body">
              <h5 class="card-title text-pink">Outfit Preppy</h5>
              <p class="text-pink font-weight-bold">Rp 250.000</p>
              <a href="login" class="btn btn-pink">Beli Sekarang</a>
              <a href="login" class="btn btn-cart"><i class="bi bi-cart-plus"></i> Keranjang</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <img src="picture/pt2.jpg" class="card-img-top" alt="Produk 2">
            <div class="card-body">
              <h5 class="card-title text-pink">T-Shirt Pria</h5>
              <p class="text-pink font-weight-bold">Rp 150.000</p>
              <a href="login" class="btn btn-pink">Beli Sekarang</a>
              <a href="login" class="btn btn-cart"><i class="bi bi-cart-plus"></i> Keranjang</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <img src="picture/pt3.jpg" class="card-img-top" alt="Produk 3">
            <div class="card-body">
              <h5 class="card-title text-pink">Hooded Denim Dress</h5>
              <p class="text-pink font-weight-bold">Rp 400.000</p>
              <a href="login" class="btn btn-pink">Beli Sekarang</a>
              <a href="login" class="btn btn-cart"><i class="bi bi-cart-plus"></i> Keranjang</a>
            </div>
          </div>
        </div>
        <!-- Produk Populer -->
        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <img src="picture/pt4.jpg" class="card-img-top" alt="Produk 4">
            <div class="card-body">
              <h5 class="card-title text-pink">Shoulder Bag</h5>
              <p class="text-pink font-weight-bold">Rp 350.000</p>
              <a href="login" class="btn btn-pink">Beli Sekarang</a>
              <a href="login" class="btn btn-cart"><i class="bi bi-cart-plus"></i> Keranjang</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <img src="picture/pt5.jpg" class="card-img-top" alt="Produk 5">
            <div class="card-body">
              <h5 class="card-title text-pink">Overshirt</h5>
              <p class="text-pink font-weight-bold">Rp 400.000</p>
              <a href="login" class="btn btn-pink">Beli Sekarang</a>
              <a href="login" class="btn btn-cart"><i class="bi bi-cart-plus"></i> Keranjang</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm border-0">
            <img src="picture/pt6.jpg" class="card-img-top" alt="Produk 6">
            <div class="card-body">
              <h5 class="card-title text-pink">Slingback Heels</h5>
              <p class="text-pink font-weight-bold">Rp 120.000</p>
              <a href="login" class="btn btn-pink">Beli Sekarang</a>
              <a href="login" class="btn btn-cart"><i class="bi bi-cart-plus"></i> Keranjang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Promo -->
  <section id="promo" class="section-promo py-5">
    <div class="container text-center">
      <h2 class="text-3xl font-bold mb-4 text-white">Promo Eksklusif</h2>
      <p class="lead text-white mb-5">Dapatkan promo menarik hanya di Evoque!</p>
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="picture/diskon.png" class="card-img-top" alt="Promo Diskon">
            <div class="card-body text-center">
              <h5 class="card-title text-pink">Diskon 30%</h5>
              <p class="text-muted">Belanja produk pilihan dengan diskon spesial.</p>
              <a href="login" class="btn btn-light btn-pink px-4">Belanja Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="picture/gratisongkir.png" class="card-img-top" alt="Promo Gratis Ongkir">
            <div class="card-body text-center">
              <h5 class="card-title text-pink">Gratis Ongkir</h5>
              <p class="text-muted">Nikmati gratis ongkir untuk semua belanjaan.</p>
              <a href="login" class="btn btn-light btn-pink px-4">Belanja Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="picture/cashback.png" class="card-img-top" alt="Promo Cashback">
            <div class="card-body text-center">
              <h5 class="card-title text-pink">Cashback hingga 50%</h5>
              <p class="text-muted">Belanja hemat dengan cashback menarik.</p>
              <a href="login" class="btn btn-light btn-pink px-4">Belanja Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimoni -->
  <section id="testimoni" class="section-light py-5">
    <div class="container text-center">
      <h2 class="text-3xl font-bold mb-4 text-pink">Testimoni Pelanggan</h2>
      <p class="lead text-muted mb-5">Apa kata pelanggan kami?</p>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card shadow-sm border-0 p-4 text-center">
            <img src="picture/ts1.jpg" alt="User 1" class="rounded-circle mx-auto mb-3" style="width: 80px; height: 80px;">
            <blockquote class="blockquote">
              <p>"Produk sangat bagus! Kualitasnya sesuai ekspektasi."</p>
            </blockquote>
            <footer class="blockquote-footer">Rhezza, Pekanbaru</footer>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm border-0 p-4 text-center">
            <img src="picture/ts2.jpg" alt="User 2" class="rounded-circle mx-auto mb-3" style="width: 80px; height: 80px;">
            <blockquote class="blockquote">
              <p>"Pelayanan cepat dan ramah, saya pasti belanja lagi."</p>
            </blockquote>
            <footer class="blockquote-footer">Aisyah, Pekanbaru</footer>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm border-0 p-4 text-center">
            <img src="picture/ts3.jpg" alt="User 3" class="rounded-circle mx-auto mb-3" style="width: 80px; height: 80px;">
            <blockquote class="blockquote">
              <p>"Barang sampai dengan aman, sesuai gambar di website."</p>
            </blockquote>
            <footer class="blockquote-footer">Ali, Surabaya</footer>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row text-center text-md-start align-items-center">
      <div class="col-md-6 mb-4">
        <h5 class="text-uppercase">Ikuti Kami</h5>
        <ul class="list-unstyled d-flex justify-content-center justify-content-md-start mb-0">
          <li class="me-3">
            <a href="https://www.facebook.com/icaaaaeeee?mibextid=ZbWKwL" class="text-white"><i class="bi bi-facebook"></i></a>
          </li>
          <li class="me-3">
            <a href="https://www.instagram.com/hi.aaisyah" class="text-white"><i class="bi bi-instagram"></i></a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/aisyahputrirmd?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="text-white"><i class="bi bi-linkedin"></i></a>
          </li>
        </ul>
      </div>
      <div class="col-md-6 mb-4">
        <h5 class="text-uppercase">Pembayaran Bisa Melalui</h5>
        <ul class="list-unstyled mb-0">
          <li><i class="bi bi-credit-card"></i> <a href="#" class="text-white"> Kartu Kredit</a></li>
          <li><i class="bi bi-bank"></i> <a href="#" class="text-white"> Transfer Bank</a></li>
          <li><i class="bi bi-paypal"></i> <a href="#" class="text-white"> PayPal</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center mt-3">
      <p class="mb-0">&copy; 2024 AisyahPutriRamadhani.</p>
    </div>
  </div>
</footer>

  <!-- Link to Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>