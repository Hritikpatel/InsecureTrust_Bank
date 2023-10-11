<!-- dashboard.php -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITB-Home</title>
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            ITB
        </div>
        <ul class="list">
            <li class="item"><a href="index.php" class="active">Home</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
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
        <div class="head">
            <h1>Welcome to ITB: Insecure Trust Bank</h1>
            <h3>
                At ITB, we're more than just a bank; we're your financial partner on the journey to your dreams. With a legacy of excellence spanning over half a century, we've been at the forefront of financial innovation, helping individuals and businesses achieve their goals.
                <br><br>
                Our commitment to you is unwavering, rooted in trust, transparency, and personalized service. Whether you're looking to save, invest, or borrow, we have a wide range of solutions designed to meet your unique needs.
                <br><br>
                Explore our website to discover our comprehensive banking services, meet our dedicated team, and find out how we can help you reach new financial heights. Your aspirations are our priorities, and together, we can build a brighter financial future.
                <br><br>
                Welcome to ITB, where your financial journey begins.
            </h3>
            <!-- <button type="button" class="btn">Sign Up</button> -->
        </div>
    </div>
</body>
</html>
