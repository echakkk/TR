<<<<<<< HEAD
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
$sql = "SELECT * FROM menu10";
$result = $conn->query($sql);
?>

=======
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valesca Cake & Bakery</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/TR/valescaa.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="sticky-top navbar navbar-expand-lg d-flex custom-navbar">
<<<<<<< HEAD
        <img class="img-fluid" id="logo-collapse" src="http://localhost/TR/Logo.PNG">
=======
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
=======
                    <a class="btn btn-custom" href="./login.html">Login Member</a>
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
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
<<<<<<< HEAD
                    <img src="http://localhost/TR/navbar-toggler.png" width="30px">
=======
                    <img src="./navbar-toggler.png" width="30px">
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
                </button>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
<<<<<<< HEAD
            <img class="img-fluid" id="logo" src="http://localhost/TR/Logo.PNG">
=======
            <img class="img-fluid" id="logo" src="./Logo.PNG">
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
            <ul class="navbar-nav">
                <li class="nav-item pr-4"><a class="nav-link" href="http://localhost/TR/Home.php">Home</a></li>
                <li class="nav-item pr-4"><a class="nav-link" href="http://localhost/TR/AboutUs.php">About Us</a></li>
                <li class="nav-item dropdown pr-4">
<<<<<<< HEAD
                    <a class="nav-link" href="http://localhost/TR/Product.php">
                        Product
                    </a>
=======
                    <a class="nav-link" href="http://localhost/TR/Product.html">Product</a>
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
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
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Tart/Tart.php">Tart</a>
                        <a class="dropdown-item" href="http://localhost/TR/Produk/Tawar/Tawar.php">Tawar</a>
                    </div>
                </li>
                <li class="nav-item dropdown pr-4">
<<<<<<< HEAD
                    <a class="nav-link" href="http://localhost/TR/Promo.php">
                        Info
                    </a>
=======
                    <a class="nav-link" href="/Promo.html">Info</a>
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="http://localhost/TR/Promo.php">Promo</a>
                    </div>
                </li>
                <li class="nav-item dropdown pr-4">
<<<<<<< HEAD
                    <a class="nav-link" href="http://localhost/TR/Orders.php">
                        Order
                    </a>
=======
                    <a class="nav-link" href="/Orders.html">Order</a>
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="http://localhost/TR/Outlet.php">Outlet Valecia Bakery</a>
                    </div>
                </li>
<<<<<<< HEAD
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
                <li class="nav-item pr-4"><a class="nav-link" href="/hotline.html">Hotline</a></li>
                <li class="nav-item login" id="login">
                    <a class="btn btn-custom" href="/login.html">Login Member</a>
                </li>
            </ul>
            <img src="./halal.PNG" id="halal">
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
        </div>
    </nav>

    <!-- Content Section -->
    <section class="products py-5">
        <div class="container">
            <h2 class="text-center mb-4">Tawar</h2>
            <div class="d-flex justify-content-center flex-wrap">
                <?php
                include 'TawarModel.php'; // Menyertakan model
                foreach ($brownies as $brownie) {
                ?>
                    <div class="col-lg-4 mb-4 d-flex justify-content-center">
                        <div class="text-center">
                            <p class="text-black"><?php echo htmlspecialchars($brownie['title']); ?></p>
                            <img src="<?php echo htmlspecialchars($brownie['link']); ?>" alt="<?php echo htmlspecialchars($brownie['title']); ?>" class="img-fluid rounded product-img" style="height: 200px; margin-bottom: 15px;">
                            <p class="text-black">Rp <?php echo number_format($brownie['price'], 0, ',', '.'); ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>  
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="custom-footer d-flex justify-content-center flex-column">
        <h1 class="text-center mt-4">Contact Us</h1>
        <div class="d-flex align-items-center justify-content-center div-2">
            <div class="d-flex align-items-center cabang">
<<<<<<< HEAD
                <img src="http://localhost/TR//maps.webp">
=======
                <img src="./maps.webp">
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
                <div class="d-flex flex-column">
                    <h6>Ambarawa</h6>
                    <h6>(Sudirman)</h6>
                </div>
            </div>
            <div class="d-flex align-items-center flex-column contact">
                <div class="d-flex justify-content-start flex-column">
                    <div class="d-flex justify-content-start align-items-center py-1">
<<<<<<< HEAD
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
=======
                        <img src="./Facebook.webp" id="logo-fb">
                        <h5>@Valesca Valesca</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center py-1">
                        <img src="./Instagram.webp" id="logo-ig">
                        <h5>@valescabakery</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center py-1">
                        <img src="./Tiktok.webp" id="logo-tiktok">
                        <h5>@valescabakery01</h5>
                    </div>
                    <div class="d-flex justify-content-start align-items-center py-1">
                        <img src="./Whatsaap.webp" id="logo-wa">
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
                        <h5>08156799697</h5>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center cabang">
<<<<<<< HEAD
                <img src="http://localhost/TR//maps.webp">
=======
                <img src="./maps.webp">
>>>>>>> ae1354af515dee7c5bc7e6d83f79753924240462
                <div class="d-flex align-items-center justify-content-center flex-column">
                    <h6>Ambarawa</h6>
                    <h6>(Kartini)</h6>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center div-3">
            <div class="box"></div>
            <h6>2024 Valesca Bakery All Rights Reserved</h6>
            <div class="box"></div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
