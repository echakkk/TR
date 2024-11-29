<?php
session_start();
$login = isset($_SESSION['username']); // Periksa apakah pengguna sudah login
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Valesca Cake & Bakery</title>
    <link href="/Logo.PNG" rel="shortcut icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="valescaa.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&family=Paytone+One&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&family=Markazi+Text:wght@400..700&family=Paytone+One&display=swap"
        rel="stylesheet">
</head>

<body>
<!-- NAVBAR -->
<nav class="sticky-top navbar navbar-expand-lg d-flex custom-navbar">
        <img class="img-fluid" id="logo-collapse" src="http://localhost/TR/Logo.PNG">
        <div class="d-flex justify-content-center">
            <ul class="navbar-nav">
                <?php
                    if($login){
                ?>
                <li class="nav-item login-collapse">
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
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
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
        </div>
    </nav>

    <!-- SECTION -->
    <section class="hero utama align-items-center flex-column outlet-page">
        <h1 class="text-center py-4">Lokasi</h1>
        <div class="container-outlet">
            <div class="d-flex justify-content-center outlet">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.387562651764!2d110.40045069481812!3d-7.2582602339741555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708147e2901039%3A0xb9c301ec2484360b!2sValesca%20bakery!5e0!3m2!1sid!2sid!4v1727677459344!5m2!1sid!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="maps d-flex justify-content-start">
                    <div class="p-4">
                        <h4 class="font-weight-bold">Ambarawa ( Jendral Sudirman )</h4>
                        <h6 class="pt-3 font-weight-bold">ALAMAT</h6>
                        <p>Jl. Jend. Sudirman, Kupang Dalangan, Kupang, Kec. Ambarawa, Kabupaten Semarang, Jawa Tengah
                            50612</p>
                        <h6 class="pt-3 font-weight-bold">No. Telepon</h6>
                        <p>+62 898-9632-007</p>
                        <h6 class="pt-3 font-weight-bold">JAM BUKA</h6>
                        <p>Setiap Hari, 08.00 - 21.00</p>
                        <h6 class="pt-3 font-weight-bold">MAPS</h6>
                        <a href="https://maps.app.goo.gl/jEEP6rAybbiMjEoZ6">Dapatkan Lokasinya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-outlet">
            <div class="d-flex justify-content-center py-5 outlet">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.387562651764!2d110.40045069481812!3d-7.2582602339741555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70819be19cb21b%3A0x6766268172385167!2sValesca%20Bakery!5e0!3m2!1sid!2sid!4v1727677499074!5m2!1sid!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="maps d-flex justify-content-start">
                    <div class="p-4">
                        <h4 class="font-weight-bold">Ambarawa ( Kartini )</h4>
                        <h6 class="pt-3 font-weight-bold">ALAMAT</h6>
                        <p>Jl. Kartini, Warunglanang, Lodoyong, Kec. Ambarawa, Kabupaten Semarang, Jawa Tengah 50612</p>
                        <h6 class="pt-3 font-weight-bold">No. Telepon</h6>
                        <p>+62 898-9632-007</p>
                        <h6 class="pt-3 font-weight-bold">JAM BUKA</h6>
                        <p>Setiap Hari, 08.00 - 21.00</p>
                        <h6 class="pt-3 font-weight-bold">MAPS</h6>
                        <a href="https://maps.app.goo.gl/rw5G48hg4nkxZaYy8">Dapatkan Lokasinya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="custom-footer d-flex justify-content-center flex-column">
        <h1 class="text-center mt-4">Contact Us</h1>
        <div class="d-flex align-items-center justify-content-center div-2">
            <div class="d-flex align-items-center cabang">
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
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center div-3">
            <div class="box"></div>
            <h6>2024 Valesca Bakery All Right Resereved</h6>
            <div class="box"></div>
        </div>
    </footer>
</body>

</html>
