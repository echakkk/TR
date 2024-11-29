<?php
session_start();
$login = isset($_SESSION['username']); // Periksa apakah pengguna sudah login
?>
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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .product img {
            width: 200px;
            height: auto;
        }

        .btn-dark-red {
            background-color: #8B0000;
            color: white;
        }

        .btn-dark-red:hover {
            background-color: #A52A2A;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="sticky top-0 navbar navbar-expand-lg flex custom-navbar bg-white shadow-md">
        <img class="img-fluid" id="logo-collapse" src="http://localhost/TR/Logo.PNG">
        <div class="flex justify-center">
            <ul class="navbar-nav flex">
                <?php
                if ($login) {
                ?>
                    <li class="nav-item login-collapse">
                        <a class="btn btn-custom" href="http://localhost/TR/logout.php">Logout</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item login-collapse">
                        <a class="btn btn-custom" href="http://localhost/TR/login.php">Login Member</a>
                    </li>
                <?php
                }
                ?>
            </ul>
            <ul class="navbar-nav flex">
                <button class="navbar-toggler" id="toggler" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="http://localhost/TR/navbar-toggler.png" width="30px">
                </button>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <img class="img-fluid" id="logo" src="http://localhost/TR/Logo.PNG">
            <ul class="navbar-nav flex">
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

    <main>
        <div class="container mx-auto p-4">
            <?php
            $categories = ['brownies', 'cake', 'dessert', 'pastry', 'pizza', 'rotimanis', 'rotimanisbox', 'snack', 'tart', 'tawar'];
            $conn = new mysqli('localhost', 'root', '', 'db_valesca');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            foreach ($categories as $category) {
                $sql = "SELECT title, link FROM $category LIMIT 5";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class='category-section mb-8 text-center'>";
                    echo "<div class='flex justify-center mb-4'>";
                    echo "<h2 class='text-2xl font-bold border-4 border-black p-1'>" . ucfirst($category) . "</h2>";
                    echo "</div>";
                    echo "<div class='flex flex-wrap justify-center gap-4'>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='product'>";
                        echo "<img src='http://localhost/TR/Produk/$category/" . $row['link'] . "' alt='" . $row['title'] . "' class='mx-auto'>";
                        echo "<h3 class='text-lg mt-2'>" . $row['title'] . "</h3>";
                        echo "</div>";
                    }
                    echo "</div>";
                    echo "<a href='http://localhost/TR/Produk/" . ucfirst($category) . "/" . ucfirst($category) . ".php' class='btn btn-dark-red mt-4'>View More</a>";
                    echo "<hr>";
                    echo "</div>";
                }
            }

            $conn->close();
            ?>
        </div>
    </main>

    <footer class="custom-footer flex flex-col justify-center items-center bg-gray-800 text-white py-8">
        <h1 class="text-center text-3xl mt-4">Contact Us</h1>
        <div class="flex items-center justify-center mt-4">
            <div class="flex items-center mx-4">
                <img src="http://localhost/TR//maps.webp" class="w-12 h-12">
                <div class="flex flex-col ml-2">
                    <h6>Ambarawa</h6>
                    <h6>(Sudirman)</h6>
                </div>
            </div>
            <div class="flex flex-col items-center mx-4">
                <div class="flex items-center py-1">
                    <img src="http://localhost/TR//Facebook.webp" class="w-6 h-6">
                    <h5 class="ml-2">@Valesca Valesca</h5>
                </div>
                <div class="flex items-center py-1">
                    <img src="http://localhost/TR//Instagram.webp" class="w-6 h-6">
                    <h5 class="ml-2">@valescabakery</h5>
                </div>
                <div class="flex items-center py-1">
                    <img src="http://localhost/TR//Tiktok.webp" class="w-6 h-6">
                    <h5 class="ml-2">@valescabakery01</h5>
                </div>
                <div class="flex items-center py-1">
                    <img src="http://localhost/TR//Whatsaap.webp" class="w-6 h-6">
                    <h5 class="ml-2">08156799697</h5>
                </div>
            </div>
            <div class="flex items-center mx-4">
                <img src="http://localhost/TR//maps.webp" class="w-12 h-12">
                <div class="flex flex-col ml-2">
                    <h6>Ambarawa</h6>
                    <h6>(Kartini)</h6>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center mt-4">
            <div class="w-1/4 h-px bg-white"></div>
            <h6 class="mx-4">2024 Valesca Bakery All Right Reserved</h6>
            <div class="w-1/4 h-px bg-white"></div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>