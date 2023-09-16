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
    <div class="container">
        <h1>dashboard</h1>
    </div>

    <?php
    session_start();

    // Check if the user ID is set in the session
    if (isset($_SESSION['user_id'])) {
        // Retrieve the user ID
        $user_id = $_SESSION['user_id'];
        echo $user_id;

        setcookie('loggedUser:', $user_id, time() + 3600); // Set a cookie
    } else {
        // redirect to the login page
        header("Location: login.php");
    }
    ?>


</body>
</html>
