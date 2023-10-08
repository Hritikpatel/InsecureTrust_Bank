<!-- login.php -->
<?php
    session_unset();
    session_start();
    $_SESSION["authenticated"] = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITB-LOG IN</title>
    <link rel="stylesheet" href="supportLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="viewport">
    <nav class="navbar">
        <div class="logo">
            ITB
        </div>
        <ul class="list">
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
            <li class="item"><a href="login.php" class="active">Log In</a></li>
            <li class="item"><a href="support.php">Support</a></li>
            <li class="item"><a href="faq.php">FAQs</a></li>
        </ul>
        <a href="login.php"><button type="button" class="btn">Sign up</button></a>
    </nav>
    <div class="body">
        <form id="support-form" action="supportApi.php" method="POST">
            <input type="hidden" name="action" value="supportLogin" >
            <!-- Contact Information Section -->
            <h1>LOG IN</h1>
            <div class="form-section">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password" required>
                </div>
            </div>
            <!-- Submit Button -->
            <button type="submit">LOG IN</button>
        </form>
    </div>
</body>
</html>
