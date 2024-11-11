<?php include 'db_valesca.php'; ?> 
<?php include 'fungsidb.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Valesca Cake & Bakery</title>
    <link href="/Logo.PNG" rel="shortcut icon">
    <!-- Responsive CSS Styling -->
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

        .container {
            background-color: #5f1919;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #ffe2df;
        }

        form div {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
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
            background-color: #ffe2df;
            color: #5f1919;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #f3a3a3;
        }

        button:active {
            transform: scale(0.98);
        }

        .container div a {
            display: block;
            text-align: center;
            margin-top: 1rem;
            color: #f3a3a3;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: bold;
            transition: color 0.3s;
        }

        .container div a:hover {
            color: #ffffff;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .container {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1.2rem;
            }

            h2 {
                font-size: 1.6rem;
            }

            button {
                font-size: 0.9rem;
            }

            input[type="text"],
            input[type="password"] {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="prosesdb.php" method="POST">
            <div>
                <label for="Username">Username</label>
                <input type="text" name="username" placeholder="Enter your username" required>
            </div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="create">Add Member</button>
        </form>
        <div>
            <a href="login.php">Already have an account? Login here</a>
        </div>
    </div>
</body>
</html>
