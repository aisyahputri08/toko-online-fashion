<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff; /* Warna pastel */
        }
        .navbar {
            background-color: #ffb6c1; /* Warna pastel pink */
        }
        .navbar-brand {
            color: white;
        }
        .navbar-nav .nav-link {
            color: white;
        }
        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }
        .card-header {
            background-color: #ffb6c1; /* Warna pastel pink */
            color: white;
        }
        .btn-custom {
            background-color: #ff6f61; /* Warna pastel orange */
            color: white;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #ffe4e1; /* Warna pastel merah muda */
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-warning, .btn-danger {
            font-size: 12px;
        }
        .modal-content {
            background-color: #f8f9fa;
        }
        .modal-header {
            background-color: #ffb6c1;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Toko Fashion Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Container -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Produk Toko Fashion</h4>
                    </div>
                    <div class="card-body">
                        <!-- Add Product Button -->
                        <button class="btn btn-custom mb-3" data-toggle="modal" data-target="#addProductModal">Tambah Produk</button>
                        
                        <!-- Table of Products -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kaos Polos</td>
                                    <td>Kaos</td>
                                    <td>Rp 100.000</td>
                                    <td>20</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jaket Denim</td>
                                    <td>Jaket</td>
                                    <td>Rp 250.000</td>
                                    <td>15</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                </tr>
                                <!-- Add more products here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Add Product -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Tambah Produk Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="productName">Nama Produk</label>
                            <input type="text" class="form-control" id="productName" placeholder="Nama Produk" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <input type="text" class="form-control" id="category" placeholder="Kategori Produk" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input type="text" class="form-control" id="price" placeholder="Harga Produk" required>
                        </div>
                        <div class="form-group">
                            <label for="stock">Stok</label>
                            <input type="number" class="form-control" id="stock" placeholder="Stok Produk" required>
                        </div>
                        <button type="submit" class="btn btn-custom">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>