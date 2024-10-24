<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> <!-- Tambahkan link CSS jika perlu -->
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Granped</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tentang.php">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="katalog.php">Katalog</a>
        </li>
        <a class="nav-link" href="halaman.php">Halaman</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="Search" placeholder="cari produk bro" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </header>

    <main>
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            margin: 20px 0;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .book {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 200px;
            text-align: center;
            background-color: white;
        }
        .book img {
            max-width: 100%;
            height: auto;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #f1f1f1;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Isi Halaman Utama -->
    <div class="container mt-4">
        <h1>Selamat Datang di Toko Buku Online</h1>
        <p>Temukan berbagai macam buku favorit Anda di sini dengan harga terbaik!</p>

        <!-- Katalog Buku Sederhana -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Buku 1">
                    <div class="card-body">
                        <h5 class="card-title">Buku 1</h5>
                        <p class="card-text">Deskripsi singkat tentang Buku 1.</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Buku 2">
                    <div class="card-body">
                        <h5 class="card-title">Buku 2</h5>
                        <p class="card-text">Deskripsi singkat tentang Buku 2.</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Buku 3">
                    <div class="card-body">
                        <h5 class="card-title">Buku 3</h5>
                        <p class="card-text">Deskripsi singkat tentang Buku 3.</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                    <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Buku 4">
                    <div class="card-body">
                        <h5 class="card-title">Buku 4</h5>
                        <p class="card-text">Deskripsi singkat tentang Buku 3.</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            © 2024 Toko Buku Online | All Rights Reserved
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
