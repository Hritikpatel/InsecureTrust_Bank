<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace these with your actual authentication logic
    $valid_username = "user123";
    $valid_password = "password123";

    $entered_username = $_POST["username"];
    $entered_password = $_POST["password"];

    // Check if the entered credentials are valid
    if ($entered_username === $valid_username && $entered_password === $valid_password) {
        // Authentication successful
        $_SESSION["authenticated"] = true;
        header("Location: dashboard.php"); 
        exit();
    } else {
        // Authentication failed
        $_SESSION["error"] = "Invalid username or password.";
        header("Location: login.php"); 
        exit();
    }
} else {
    // Handle unauthorized access or other HTTP methods
    header("HTTP/1.1 401 Unauthorized");
    exit();
}
?>
