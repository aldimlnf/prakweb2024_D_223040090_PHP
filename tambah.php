<?php
function tambah($data)
{

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'prakweb2024_d_223040090_pw';
    $conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$judul = htmlspecialchars($data['judul']);
$harga = htmlspecialchars($data['harga']);
$penulis = htmlspecialchars($data['penulis']);
$gambar = htmlspecialchars($data['gambar']);


$query = "INSERT INTO buku
            VALUES
          (NULL, '$judul', '$harga', '$penulis', '$gambar');
        ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
      echo "
          <script>
              alert('Data berhasil ditambahkan');
              document.location.href = 'index.php';
          </script> ";
    } else {
      echo "
          <script>
              alert('Data gagal ditambahkan');
              document.location.href = 'add.php';
          </script> ";
    }
  }

?>

<head>
    <title>Technology Information</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Technology</span> Informasi</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.php">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2.6rem; font-weight: 850; margin-bottom: 20px">Tambah buku</p>
            <div class="input-group">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="input-group">
                <label for="harga" class="form-label">Harga Buku</label>
                <input type="text" class="form-control" id="harga" name="harga" required>
            </div>
            <div class="input-group">
                <label for="penulis" class="form-label">Penulis Buku</label>
                <input type="text" class="form-control" id="penulis" name="penulis" required>
            </div>
            <div class="input-group">
                <label for="gambar" class="form-label">Gambar Buku</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
            </div>
            <div class="input-group"><button name="submit" class="badge bg-primary">Simpan</button></div>
        </form>
    </div>
</body>