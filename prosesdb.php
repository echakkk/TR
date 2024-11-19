<?php
// Include file fungsi untuk menghubungkan database
include 'fungsidb.php';

if (isset($_POST['create'])) {
    // Panggil fungsi untuk membuat member baru
    createUser($conn, $_POST['username'], $_POST['name'], $_POST['password']);
}

// Tutup koneksi setelah selesai
$conn->close();
?>
