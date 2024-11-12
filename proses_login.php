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

// Query untuk memeriksa apakah username dan password cocok
$query = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

// Cek apakah ada hasil dari query
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    
    // Simpan data username ke dalam session
    $_SESSION['username'] = $user['username'];
    
    // Redirect ke halaman Home.php jika login berhasil
    header("Location: Home.php");
    exit();
} else {
    // Jika login gagal, kembalikan ke halaman login dengan pesan error
    header("Location: login.php?error=1");
    exit();
}
?>
