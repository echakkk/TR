<?php include 'db_valesca.php'?> 
<?php include 'fungsidb.php'?>

<html lang = "en">
<head>
    <title>Sign Up</title>
</head>
<body>
    <div class = "container">
    <h2>Sign Up</h2>
    <form action="prosesdb.php" method="POST">
        <div>
            <label for="Username">Username</label>
            <input type="text" name = "username" placeholder = "Username" required>
        </div>
        <div>
            <label for="name">Nama</label>
            <input type="text" name = "name" placeholder = "Name" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="text" name = "password" placeholder = "Password" required>
        </div>
        <button type = "submit" name = "create">Add Student</button>
    </form>
    </div>
</body>
</html>