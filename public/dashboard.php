<!-- dashboard.php -->
<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITB-Dash</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../assets/js/dash.js"></script>
</head>
<body>
    <?php
        if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
            // Redirect the user to the login page if not authenticated
            header("Location: login.php");
            exit();
         } 
         else {
            // Retrieve the user ID
            $user_id = $_SESSION['user_id'];
            // echo $user_id;
            setcookie('loggedUser:', $user_id, time() + 3600); // Set a cookie
        }
    ?>
    <nav class="navbar">
        <div class="logo">
            ITB
        </div>
        <ul class="list">
            <li class="item"><a href="">Home</a></li>
            <li class="item"><a href="">About Us</a></li>
            <li class="item"><a href="dashboard.php" class="active">Dashboard</a></li>
            <li class="item"><a href="support.php">Support</a></li>
            <li class="item"><a href="faq.php">FAQs</a></li>
        </ul>
        <?php
        if (isset($_SESSION['user_id'])){
            echo '<a href="login.php" ><button type="button" class="btn">Logout</button></a>';
        }else{
            echo '<a href="login.php" ><button type="button" class="btn">Login</button></a>';
        }
        ?>
    </nav>
    <div class="body">
    
    </div>
</body>
</html>
