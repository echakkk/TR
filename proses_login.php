<?php

session_start();
include 'db_valesca.php';
include 'fungsidb.php';

// Tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Mencegah SQL Injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Hash password untuk mencocokkan dengan database
$password_hash = hash('sha256', $password);

// Query untuk memeriksa apakah username dan password cocok
$query = "SELECT * FROM user WHERE username = '$username' AND password_hash = '$password_hash'";
$result = mysqli_query($conn, $query);

// Cek apakah ada hasil dari query
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // Simpan data ke dalam session
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['id_role'];

    // Cek role user
    if ($user['id_role'] == 1) { // 1 adalah ID role untuk admin
        // Redirect ke halaman dashboard jika admin
        header("Location: upload.php");
    } else {
        // Redirect ke halaman Home.php jika bukan admin
        header("Location: Home.php");
    }
    exit();
} else {
    // Jika login gagal, kembalikan ke halaman login dengan pesan error
    header("Location: login.php?error=1");
    exit();
}

?>
