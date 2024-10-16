<?php
// Start the session
session_start();

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = md5($_POST['password']); // Encrypt the password using MD5 (this is simple, for better security use password_hash())

    // Query the database for the user
    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    // Check if user exists
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        echo "Login successful! Welcome, " . $user;
        // You can redirect to another page using:
        // header('Location: welcome.php');
    } else {
        echo "Invalid username or password!";
    }
}

$conn->close();
?>
