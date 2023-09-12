<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace these with your actual authentication logic

    $entered_username = $_POST["username"];
    $entered_password = $_POST["password"];

    // Database connection (replace with your database details)
    $server = "localhost";
    $username = "root"; // Default username for XAMPP MySQL
    $password = "";     // Default password for XAMPP MySQL (empty by default)
    $database = "your_database_name"; // Replace with your database name

    // Create a connection
    $conn = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare a SQL statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $entered_username, $entered_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
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

    $stmt->close();
    $conn->close();
} else {
    // Handle unauthorized access or other HTTP methods
    header("HTTP/1.1 401 Unauthorized");
    exit();
}
?>
