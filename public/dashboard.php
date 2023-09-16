<!-- dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="php" href="../dash">
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
        // Now you can use $user_id as the user's ID in the dashboard page

        


    } else {
        // User is not authenticated; you can redirect them to the login page or handle it accordingly
        header("Location: login.php");

    }
    ?>


</body>
</html>
