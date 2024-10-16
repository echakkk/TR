<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_demo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = md5($_POST['password']); 

    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        echo "Login successful! Welcome, " . $user;
  
    } else {
        echo "Invalid username or password!";
    }
}

$conn->close();
?>
