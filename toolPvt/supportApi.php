<?php
session_start();


$method = $_SERVER["REQUEST_METHOD"];
// Check if the form is submitted
if ($method === "POST") {
    // Replace these with your actual authentication logic
    $valid_username = "user123";
    $valid_password = "password123";

    $entered_username = $_POST["username"];
    $entered_password = $_POST["password"];

    // Check if the entered credentials are valid
    if ($entered_username === $valid_username && $entered_password === $valid_password) {
        // Authentication successful
        $_SESSION["authenticated"] = true;
        header("Location: supportDashboard.php"); // Redirect to the dashboard or another authenticated page
        exit();
    } else {
        // Authentication failed
        $_SESSION["error"] = "Invalid username or password.";
        header("Location: login.php"); // Redirect back to the login page with an error message
        exit();
    }
} else if($method === "GET"){
    
}else{
    // Handle unauthorized access or other HTTP methods
    header("HTTP/1.1 401 Unauthorized");
    exit();
}
?>
