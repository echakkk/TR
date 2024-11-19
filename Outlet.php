<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_valesca';
$port = 3308;

// Create connection to MySQL
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outlet | Valesca Cake & Bakery</title>
    <link href="/Logo.PNG" rel="shortcut icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&display=swap">
    <link rel="stylesheet" href="valescaa.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="sticky-top navbar navbar-expand-lg d-flex custom-navbar">
        <img class="img-fluid" id="logo-collapse" src="./Logo.PNG">
        <div class="d-flex justify-content-center">
            <ul class="navbar-nav">
                <button class="navbar-toggler" id="toggler" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="./navbar-toggler.png" width="30px">
                </button>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
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
                        <a class="dropdown-item" href="./RotiManis.php">Roti Manis</a>
                        <a class="dropdown-item" href="./RotiManisBox.php">Roti Manis Box</a>
                        <a class="dropdown-item" href="./Snack.php">Snack</a>
                        <a class="dropdown-item" href="./Tart.php">Tart</a>
                        <a class="dropdown-item" href="./Tawar.php">Tawar</a>
                    </div>
                </li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link" href="./Promo.php">Info</a>
                </li>
                <li class="nav-item dropdown pr-4">
                    <a class="nav-link" href="./Orders.php">Order</a>
                </li>
                <li class="nav-item pr-4"><a class="nav-link" href="./Hotline.php">Hotline</a></li>
                <li class="nav-item login" id="login">
                    <a class="btn btn-custom" href="./logout.php">Log out</a>
                </li>
            </ul>
            <img src="./halal.PNG" id="halal">
        </div>
    </nav>

    <!-- SECTION -->
    <section class="hero utama align-items-center flex-column">
        <h1 class="text-center py-4">Lokasi</h1>
        <div class="container-outlet">
            <div class="d-flex justify-content-center outlet">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18..." style="border:0;" allowfullscreen=""></iframe>
                <div class="maps d-flex justify-content-start">
                    <div class="p-4">
                        <h4 class="font-weight-bold">Ambarawa ( Jendral Sudirman )</h4>
                        <h6 class="pt-3 font-weight-bold">ALAMAT</h6>
                        <p>Jl. Jend. Sudirman...</p>
                        <h6 class="pt-3 font-weight-bold">No. Telepon</h6>
                        <p>+62 898-9632-007</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="custom-footer d-flex justify-content-center flex-column">
        <h1 class="text-center mt-4">Contact Us</h1>
        <div class="d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center cabang">
                <img src="./maps.webp">
                <div class="d-flex flex-column">
                    <h6>Ambarawa</h6>
                    <h6>(Sudirman)</h6>
                </div>
            </div>
            <div class="contact">
                <div>
                    <h5>@valescabakery</h5>
                </div>
            </div>
        </div>
        <h6>2024 Valesca Bakery All Right Reserved</h6>
    </footer>
</body>

</html>
