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

session_start();
$login = isset($_SESSION['username']); // Periksa apakah pengguna sudah login


// Query untuk mengambil semua data dari tabel 'menu'
$sql = "SELECT * FROM menu3"; // Ubah sesuai kebutuhan
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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
<<<<<<< HEAD
<nav class="sticky-top navbar navbar-expand-lg d-flex custom-navbar">
        <img class="img-fluid" id="logo-collapse" src="http://localhost/TR/Logo.PNG">
=======
    <!-- NAVBAR -->
    <nav class="sticky-top navbar navbar-expand-lg d-flex custom-navbar">
        <img class="img-fluid" id="logo-collapse" src="./Logo.PNG">
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
        <div class="d-flex justify-content-center">
            <ul class="navbar-nav">
                <?php
                    if($login){
                ?>
                <li class="nav-item login-collapse">
<<<<<<< HEAD
                    <a class="btn btn-custom" href="http://localhost/TR/logout.php">Logout</a>
                </li>
                <?php
                    }else {
                ?>
                <li class="nav-item login-collapse">
                    <a class="btn btn-custom" href="http://localhost/TR/login.php">Login Member</a>
                </li>
                <?php
                    }
                ?>
                
            </ul>
            <ul class="navbar-nav">
                <button class="navbar-toggler" id="toggler" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="http://localhost/TR/navbar-toggler.png" width="30px">
                </button>
=======
                    <a class="btn btn-custom" href="./login.html">Login Member</a>
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
                </li>
            </ul>
            <button class="navbar-toggler" id="toggler" data-toggle="collapse" data-target="#navbarNav">
                <img src="./navbar-toggler.png" width="30px">
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
<<<<<<< HEAD
            <img class="img-fluid" id="logo" src="http://localhost/TR/Logo.PNG">
            <ul class="navbar-nav">
                <li class="nav-item pr-4"><a class="nav-link" href="http://localhost/TR/Home.php">Home</a></li>
                <li class="nav-item pr-4"><a class="nav-link" href="http://localhost/TR/AboutUs.php">About Us</a></li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link" href="http://localhost/TR/Product.php">
                        Product
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Brownies/Brownies.php">Brownies</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Cake/Cake.php">Cake</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Dessert/Dessert.php">Dessert</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Pastry/Pastry.php">Pastry</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Pizza/Pizza.php">Pizza</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/RotiManis/RotiManis.php">Roti
                            Manis</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/RotiManisBox/RotiManisBox.php">Roti
                            Manis Box</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Snack/Snack.php">Snack</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Tart/Tart.php">Tar</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Tawar/Tawar.php">Tawar</a>
                    </div>
                </li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link" href="http://localhost/TR/Promo.php">
                        Info
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="http://localhost/TR/Promo.php">Promo</a>
                    </div>
                </li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link" href="http://localhost/TR/Orders.php">
                        Order
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="http://localhost/TR/Outlet.php">Outlet Valecia Bakery</a>
                    </div>
                </li>
                <li class="nav-item pr-4"><a class="nav-link" href="http://localhost/TR/hotline.php">Hotline</a></li>
                <?php
                if ($login) {
                    ?>
                    <li class="nav-item login" id="login">
                        <a class="btn btn-custom" href="http://localhost/TR/logout.php">Log Out</a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item login" id="logout">
                        <a class="btn btn-custom" href="http://localhost/TR/login.php">Login Member</a>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <img src="http://localhost/TR/halal.PNG" id="halal">
=======
            <img class="img-fluid" id="logo" src="./Logo.PNG">
            <ul class="navbar-nav">
                <li class="nav-item pr-4"><a class="nav-link" href="./Home.html">Home</a></li>
                <li class="nav-item pr-4"><a class="nav-link" href="./AboutUs.html">About Us</a></li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link" href="./Product.html">Product</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./Brownies.php">Brownies</a>
                        <a class="dropdown-item" href="./Cake.php">Cake</a>
                        <a class="dropdown-item" href="./Dessert.php">Dessert</a>
                        <a class="dropdown-item" href="./Pastry.php">Pastry</a>
                        <a class="dropdown-item" href="./Pizza.php">Pizza</a>
                    </div>
                </li>
                <li class="nav-item pr-4"><a class="nav-link" href="./Hotline.html">Hotline</a></li>
            </ul>
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
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
                                <img src="<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['nama_menu']); ?>" class="img-fluid rounded product-img" style="height: 200px; object-fit: cover;">
                                <p class="text-black">Rp <?php echo number_format($row['harga_menu'], 0, ',', '.'); ?></p>
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
        <div class="d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center cabang">
<<<<<<< HEAD
                <img src="http://localhost/TR//maps.webp">
                <div class="d-flex flex-column">
                    <h6>Ambarawa</h6>
                    <h6>(Sudirman)</h6>
                </div>
            </div>
            <div class="d-flex align-items-center flex-column contact">
                <div class="d-flex justify-content-start flex-column">
                    <div class="d-flex justify-content-start align-items-center py-1">
                        <img src="http://localhost/TR//Facebook.webp" id="logo-fb">
                        <h5>@Valesca Valesca</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center py-1">
                        <img src="http://localhost/TR//Instagram.webp" id="logo-ig">
                        <h5>@valescabakery</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center py-1">
                        <img src="http://localhost/TR//Tiktok.webp" id="logo-tiktok">
                        <h5>@valescabakery01</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center py-1">
                        <img src="http://localhost/TR//Whatsaap.webp" id="logo-wa">
                        <h5>08156799697</h5>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center cabang">
                <img src="http://localhost/TR//maps.webp">
                <div class="d-flex align-items-center justify-content-center flex-column">
                    <h6>Ambarawa</h6>
                    <h6>(Kartini)</h6>
                </div>
=======
                <img src="./maps.webp">
                <h6>Ambarawa (Sudirman)</h6>
            </div>
            <div class="d-flex align-items-center cabang">
                <img src="./maps.webp">
                <h6>Ambarawa (Kartini)</h6>
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
            </div>
        </div>
        <div class="text-center py-3">
            <h6>&copy; 2024 Valesca Bakery All Rights Reserved</h6>
        </div>
    </footer>
<<<<<<< HEAD
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
=======
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
</body>

</html>
