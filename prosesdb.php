<?php
include 'fungsidb.php';

if(isset($_POST['create'])){
    createMember($conn, $_POST['username'], $_POST['name'], $_POST['password']);
}

$conn->close();
?>