<!-- dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../assets/js/dash.js"></script>
</head>
<body>
<nav class="navbar">
        <div class="logo">
            ITB
        </div>
        <ul class="list">
            <li class="item"><a href="">Home</a></li>
            <li class="item"><a href="">About Us</a></li>
            <li class="item"><a href="dashboard.php">Dashboard</a></li>
            <li class="item"><a href="support.php">Support</a></li>
            <li class="item"><a href="faq.php" class="active">FAQs</a></li>
        </ul>
        <?php
        if (isset($_SESSION['user_id'])){
           echo '<a href="login.php" ><button type="button" class="btn">Login</button></a>';
        }else{
           echo '<a href="login.php" ><button type="button" class="btn">Logout</button></a>';
        }
        ?>
    </nav>
    <div class="body">
    
    </div>

    <?php
    session_start();

    // Check if the user ID is set in the session
    if (isset($_SESSION['user_id'])) {
        // Retrieve the user ID
        $user_id = $_SESSION['user_id'];
        setcookie('loggedUser:', $user_id, time() + 3600); // Set a cookie
    } else {
        // redirect to the login page
        header("Location: login.php");
    }
    ?>
</body>
</html>
