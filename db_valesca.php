<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_valesca';
$port = 3308;

//Create conncetion to MySQL
$conn = new mysqli ($host, $username, $password, $dbname, $port);

//Ngecek koneksi
if($conn->connect_error){
    die("Failed to connect".$conn->connect_error);
}

?>