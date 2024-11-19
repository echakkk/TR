<?php
include 'db_valesca.php';

$query = "SELECT nama_menu, harga_menu FROM menu";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $menus = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $menus = [];
}
$conn->close();
?>
