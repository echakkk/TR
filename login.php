<?php include 'db_valesca.php'; ?> 
<?php include 'fungsidb.php'; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Valesca Cake & Bakery</title>
    <link href="/Logo.PNG" rel="shortcut icon">
    <!-- CSS Styling -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Heebo', sans-serif;
            background-color: #ffe2df;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .login-container {
            background-color: #5f1919;
            padding: 2rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            width: 100%;
            max-width: 350px;
            transition: transform 0.3s ease;
        }

        .login-container:hover {
            transform: translateY(-5px);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #ffe2df;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #a57b7b;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #ffe2df;
            color: #5f1919;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #f3a3a3;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #ffe2df;
            border: none;
            border-radius: 5px;
            color: #5f1919;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #f3a3a3;
        }

        .login-container p {
            text-align: center;
            color: #ffe2df;
        }

        .login-container a {
            color: #f3a3a3;
            text-decoration: none;
            font-weight: 600;
        }

        .login-container a:hover {
            color: #ffffff;
        }

        .error-message {
            color: #ff4d4d;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <?php 
        // Pesan error jika login gagal
        if (isset($_GET['error'])) {
            echo '<div class="error-message">Invalid username or password!</div>';
        }
        ?>

        <form action="proses_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>

        <div class="back-link">
            <p><a href="home.html">Back to Home</a></p>
        </div>
    </div>
</body>
</html>
