<?php
session_start();
session_unset(); // Hapus semua session
session_destroy(); // Hancurkan session
header("Location: Home1.php"); // Kembali ke Home
exit();
?>
