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
$sql = "SELECT * FROM menu2";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valesca Cake & Bakery</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/TR/valescaa.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&family=Frank+Ruhl+Libre:wght@300..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="sticky-top navbar navbar-expand-lg custom-navbar">
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
                <li class="nav-item"><a class="nav-link" href="http://localhost/TR/Home.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost/TR/AboutUs.html">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="http://localhost/TR/Product.html">Product</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Brownies/Brownies.php">Brownies</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Cake/Cake.php">Cake</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Dessert/Dessert.php">Dessert</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="/Orders.html">Order</a></li>
                <li class="nav-item login"><a class="btn btn-custom" href="/login.html">Login Member</a></li>
            </ul>
        </div>
    </nav>

    <!-- Content Section -->
    <section class="products py-5">
        <div class="container">
            <h2 class="text-center mb-4">Cake</h2>
            <div class="d-flex justify-content-center flex-wrap">
                <?php if ($result && $result->num_rows > 0) : ?>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <div class="col-lg-4 mb-4 d-flex justify-content-center">
                            <div class="text-center">
                                <p><?php echo htmlspecialchars($row['nama_menu']); ?></p>
                                <img src="<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['nama_menu']); ?>" class="img-fluid rounded" style="height: 200px; object-fit: cover;">
                                <p>Rp <?php echo number_format($row['harga_menu'], 0, ',', '.'); ?></p>
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

    <!-- Footer -->
    <footer class="custom-footer">
        <h1>Contact Us</h1>
        <div class="d-flex justify-content-around">
            <div>Ambarawa Sudirman</div>
            <div>@valescabakery</div>
            <div>Ambarawa Kartini</div>
        </div>
        <p>2024 Valesca Bakery All Right Reserved</p>
    </footer>
</body>

</html>
