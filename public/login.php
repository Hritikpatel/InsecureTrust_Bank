<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="..\assets\php_process\login_process.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" required>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
