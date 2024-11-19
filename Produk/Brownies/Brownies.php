<?php
// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_valesca";
$port = 3308; // Port MySQL Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil semua data dari tabel 'menu'
$sql = "SELECT * FROM menu1";
$result = $conn->query($sql);

if (!$result) {
    die("Query gagal: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valesca Cake & Bakery</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/TR/valescaa.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="sticky-top navbar navbar-expand-lg d-flex custom-navbar">
        <img class="img-fluid" id="logo-collapse" src="./Logo.PNG">
        <div class="d-flex justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item login-collapse">
                    <a class="btn btn-custom" href="./login.html">Login Member</a>
                </li>
            </ul>
            <button class="navbar-toggler" id="toggler" data-toggle="collapse" data-target="#navbarNav">
                <img src="./navbar-toggler.png" width="30px">
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <img class="img-fluid" id="logo" src="./Logo.PNG">
            <ul class="navbar-nav">
                <li class="nav-item pr-4"><a class="nav-link" href="./Home.html">Home</a></li>
                <li class="nav-item pr-4"><a class="nav-link" href="./AboutUs.html">About Us</a></li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link dropdown-toggle" href="#" id="productDropdown" data-toggle="dropdown">Product</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./Brownies.php">Brownies</a>
                        <a class="dropdown-item" href="./Cake.php">Cake</a>
                        <a class="dropdown-item" href="./Dessert.php">Dessert</a>
                        <!-- Tambahkan menu lain sesuai kebutuhan -->
                    </div>
                </li>
                <li class="nav-item pr-4"><a class="nav-link" href="./Orders.html">Order</a></li>
                <li class="nav-item pr-4"><a class="nav-link" href="./Hotline.html">Hotline</a></li>
                <li class="nav-item login"><a class="btn btn-custom" href="./login.php">Login Member</a></li>
            </ul>
            <img src="./halal.PNG" id="halal">
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
                                <img src="<?php echo htmlspecialchars($row['gambar']); ?>" 
                                     alt="<?php echo htmlspecialchars($row['nama_menu']); ?>" 
                                     class="img-fluid rounded product-img" 
                                     style="height: 200px; object-fit: cover; margin-bottom: 15px;">
                                <p class="text-black">Rp <?php echo number_format($row['harga_menu'], 0, ',', '.'); ?></p>
                                <p class="text-muted">Persediaan: <?php echo htmlspecialchars($row['persediaan']); ?></p>
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

    <!-- Footer -->
    <footer class="custom-footer d-flex justify-content-center flex-column">
        <h1 class="text-center mt-4">Contact Us</h1>
        <div class="d-flex align-items-center justify-content-center div-2">
            <div class="d-flex align-items-center cabang">
                <img src="./maps.webp">
                <div>
                    <h6>Ambarawa (Sudirman)</h6>
                </div>
            </div>
            <div class="d-flex align-items-center flex-column contact">
                <div>
                    <p><img src="./Facebook.webp"> @ValescaValesca</p>
                    <p><img src="./Instagram.webp"> @valescabakery</p>
                    <p><img src="./Tiktok.webp"> @valescabakery01</p>
                    <p><img src="./Whatsapp.webp"> 08156799697</p>
                </div>
            </div>
            <div class="d-flex align-items-center cabang">
                <img src="./maps.webp">
                <div>
                    <h6>Ambarawa (Kartini)</h6>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <p>2024 Valesca Bakery All Rights Reserved</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
