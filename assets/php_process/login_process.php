<?php
    session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    $entered_username = $_POST["username"];
    $entered_password = $_POST["password"];

    
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "itb";

    // Create a connection
    $conn = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    // TODO remove this to fix it LOGIN BYPASS. + Add "AND failed_try < 5" to prevent brute force.
    $sql = "SELECT * FROM logininfo WHERE username = '$entered_username' AND password = '$entered_password'"; 
    $result = mysqli_query($conn, $sql);


    if ($result->num_rows > 0) {
        // Authentication successful
        $_SESSION["authenticated"] = true;
        $_SESSION['user_id'] = $entered_username;
        header("Location: ../../public/dashboard.php");

    } else {
        // Authentication failed
        $_SESSION["authenticated"] = false;
        $_SESSION["error"] = "Invalid username or password.";
        // TODO Open for brute force
        header("Location: ../../public/login.php");
    }
    $conn->close();
}else {
    // Handle unauthorized access or other HTTP methods
    header("HTTP/1.1 401 Unauthorized");
    exit();
}
?>
