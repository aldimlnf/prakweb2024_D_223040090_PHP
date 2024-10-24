<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'prakweb2024_d_223040090_pw';

$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung ke database');

// Mendapatkan ID dari query string (GET)
$data = $_GET["id"] ?? null;

if ($data) {
    $sql = "SELECT * FROM buku WHERE id = $data";
    $result = $conn->query($sql);
    $book = $result->fetch_assoc();

    if (!$book) {
        echo "Data buku tidak ditemukan!";
        exit;
    }
} else {
    echo "ID tidak ditemukan!";
    exit;
}

// Fungsi untuk mengubah data
function ubah($data, $conn)
{
    // Ambil nilai dari form POST
    $id = htmlspecialchars($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $harga = htmlspecialchars($data['harga']);
    $penulis = htmlspecialchars($data['penulis']);
    $gambar = htmlspecialchars($data['gambar']);
  
    // Update query
    $sql = "UPDATE buku SET 
            judul = '$judul',
            harga = '$harga',
            penulis = '$penulis',
            gambar = '$gambar'
            WHERE id = $id";

    // Eksekusi query
    mysqli_query($conn, $sql);
    
    // Kembalikan jumlah baris yang terpengaruh
    return mysqli_affected_rows($conn);
}

// Proses ketika form di-submit
if (isset($_POST["submit"])) {
    // Panggil fungsi ubah dengan data POST
    if (ubah($_POST, $conn) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            document.location.href = 'index.php';
        </script>";
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
            <input type="hidden" name="id" value="<?= $book['id'] ?>">
            <p style="font-size: 2.6rem; font-weight: 850; margin-bottom: 20px">Edit buku</p>
            <div class="input-group"><input type="text" name="judul" value="<?= $book['judul'] ?>"></div>
            <div class="input-group"><input type="text" name="gambar" value="<?= $book['gambar'] ?>"></div>
            <div class="input-group"><input type="text" name="penulis" value="<?= $book['penulis'] ?>"></div>
            <div class="input-group"><input type="text" name="harga" value="<?= $book['harga'] ?>"></div>
            <div class="input-group"><button name="submit" class="badge bg-primary">Ubah</button></div>
        </form>
    </div>
</body>