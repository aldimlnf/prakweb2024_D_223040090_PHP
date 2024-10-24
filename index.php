<?php 

$hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname   = 'prakweb2024_d_223040090_pw';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung ke database');
    $result = mysqli_query($conn, "SELECT * FROM buku");
?>


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
        </li>
        <a class="nav-link" href="tambah.php">Tambah</a>
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

    <div class="container">
    <?php foreach ($result as $r): ?>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="img/<?= $r['gambar']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $r['judul']; ?></h5>
                <h5 class="card-title"><?= $r['harga']; ?></h5>
                <h5 class="card-title"><?= $r['penulis']; ?></h5>
              </div>
              <td>
                        <a href="edit.php?id=<?= $r['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus.php?id=<?= $r['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
            </div>
          </div>
        <?php endforeach; ?>   
        <!-- Tambahkan lebih banyak buku di sini -->
    </div>

</body>
</html>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
