<!-- dashboard.php -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITB-About Us</title>
    <link rel="stylesheet" href="../assets/css/about.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            ITB
        </div>
        <ul class="list">
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="about.php" class="active">About Us</a></li>
            <li class="item"><a href="dashboard.php">Dashboard</a></li>
            <li class="item"><a href="support.php">Support</a></li>
            <li class="item"><a href="faq.php">FAQs</a></li>
        </ul>
        <?php
            if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"]){
                echo '<a href="login.php" ><button type="button" class="btn">Logout</button></a>';
            }else{
                echo '<a href="login.php" ><button type="button" class="btn">Login</button></a>';
            }
        ?>
    </nav>
    <div class="body">
        <h1>Discover Our Bank's Rich History and Commitment to Excellence</h1>
        <h3>Your Trusted Partner for Over 50 Years in Financial Services</h3>
    </div>
</body>
</html>
