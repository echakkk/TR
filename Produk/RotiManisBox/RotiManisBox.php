<?php
// Konfigurasi koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_valesca';
$port = 3308; // Port MySQL Anda

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil semua data dari tabel 'menu7'
$sql = "SELECT * FROM menu7";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valesca Cake & Bakery</title>
    <link href="/Logo.PNG" rel="shortcut icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/TR/valescaa.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="sticky-top navbar navbar-expand-lg d-flex custom-navbar">
        <img class="img-fluid" id="logo-collapse" src="/Logo.PNG">
        <div class="d-flex justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item login-collapse">
                    <a class="btn btn-custom" href="http://localhost/TR/login.html">Login Member</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <button class="navbar-toggler" id="toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="/navbar-toggler.png" width="30px">
                </button>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <img class="img-fluid" id="logo" src="/Logo.PNG">
            <ul class="navbar-nav">
                <li class="nav-item pr-4"><a class="nav-link" href="http://localhost/TR/Home.php">Home</a></li>
                <li class="nav-item pr-4"><a class="nav-link" href="http://localhost/TR/AboutUs.html">About Us</a></li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link" href="http://localhost/TR/Product.html">Product</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Brownies/Brownies.php">Brownies</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Cake/Cake.php">Cake</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/RotiManis/RotiManis.php">Roti Manis</a>
                    </div>
                </li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link" href="/Promo.html">Info</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/Promo.html">Promo</a>
                    </div>
                </li>
                <li class="nav-item pr-4"><a class="nav-link" href="/hotline.html">Hotline</a></li>
            </ul>
        </div>
    </nav>

    <!-- Content Section -->
    <section class="products py-5">
        <div class="container">
            <h2 class="text-center mb-4">Semua Produk</h2>
            <div class="d-flex justify-content-center flex-wrap">
                <?php if ($result && $result->num_rows > 0) : ?>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <div class="col-lg-4 mb-4 d-flex justify-content-center">
                            <div class="text-center">
                                <p class="text-black"><?php echo htmlspecialchars($row['nama_menu']); ?></p>
                                <img src="<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['nama_menu']); ?>" class="img-fluid rounded product-img" style="height: 200px; object-fit: cover; margin-bottom: 15px;">
                                <p class="text-black">Rp <?php echo number_format($row['harga_menu'], 0, ',', '.'); ?></p>
                                <p class="text-muted">Persediaan: <?php echo $row['persediaan']; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p class="text-center">Menu tidak tersedia</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php $conn->close(); ?>
</body>

</html>
