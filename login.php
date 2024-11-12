<?php include 'db_valesca.php'; ?> 
<?php include 'fungsidb.php'; ?> 
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Valesca Cake & Bakery</title>
    <link href="/Logo.PNG" rel="shortcut icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Heebo', sans-serif;
            background: linear-gradient(to right, #ffe2df, #ffabab);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-container h2 {
            color: #5f1919;
            text-align: center;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .login-container .form-control {
            background-color: #f8f9fa;
            border: none;
            border-radius: 8px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .login-container .form-control:focus {
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        .login-container button {
            background-color: #5f1919;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.5rem;
            width: 100%;
            margin-top: 1rem;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #7a2b2b;
        }

        .login-container a {
            color: #ff4d4d;
            text-decoration: none;
        }

        .login-container .back-link {
            text-align: center;
            margin-top: 1rem;
        }

        .error-message {
            color: #dc3545;
            background-color: #f8d7da;
            border: 1px solid #f5c2c7;
            padding: 0.5rem;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Welcome Back!</h2>
        <?php 
        if (isset($_GET['error'])) {
            echo '<div class="error-message">Invalid username or password!</div>';
        }
        ?>
        <form action="proses_login.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="text-center mt-3">
            <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            <div class="back-link">
                <a href="Home.html">Back to Home</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
