<?php include 'db_valesca.php'; ?> 
<?php include 'fungsidb.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Valesca Cake & Bakery</title>
    <link href="/Logo.PNG" rel="shortcut icon">
    <!-- Bootstrap CSS -->
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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .signup-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            width: 100%;
        }

        .signup-container h2 {
            color: #5f1919;
            text-align: center;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .signup-container .form-control {
            background-color: #f8f9fa;
            border: none;
            border-radius: 8px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .signup-container .form-control:focus {
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        .signup-container button {
            background-color: #5f1919;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.75rem;
            width: 100%;
            margin-top: 1rem;
            transition: background-color 0.3s ease;
        }

        .signup-container button:hover {
            background-color: #7a2b2b;
        }

        .signup-container .back-link {
            text-align: center;
            margin-top: 1rem;
        }

        .signup-container a {
            color: #ff4d4d;
            text-decoration: none;
            transition: color 0.3s;
        }

        .signup-container a:hover {
            color: #ff7777;
        }
    </style>
</head>

<body>
    <div class="signup-container">
        <h2>Create Your Account</h2>
        <form action="prosesdb.php" method="POST">
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="create">Sign Up</button>
        </form>
        <div class="back-link mt-3">
            <p>Already have an account? <a href="login.php">Login here</a></p>
            <p><a href="Home.php">Back to Home</a></p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
