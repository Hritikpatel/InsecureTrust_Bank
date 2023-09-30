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
    $database = "itb"; // Replace with your database name

    // Create a connection
    $conn = new mysqli($server, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // // TODO FIX FOR LOGIN BYPASS
    // $stmt = $conn->prepare("SELECT * FROM logininfo WHERE username = ? AND password_hash = ?");
    // $stmt->bind_param("ss", $entered_username, $entered_password);
    // $stmt->execute();
    // $result = $stmt->get_result();
    // $stmt->close();
    // $conn->close();

    // TODO remove this to fix it.
    $sql = "SELECT * FROM logininfo WHERE username = '$entered_username' AND password_hash = '$entered_password'"; // password = No' OR '1'='1 
    $result = mysqli_query($conn, $sql);


    if ($result->num_rows > 0) {
        // Authentication successful
        $_SESSION["authenticated"] = true;
        $_SESSION['user_id'] = $entered_username;

        header("Location: ../../public/dashboard.php");
    } else {
        // Authentication failed
        $_SESSION["error"] = "Invalid username or password.";
        header("Location: ../../public/login.php");
    }

} else {
    // Handle unauthorized access or other HTTP methods
    header("HTTP/1.1 401 Unauthorized");
    exit();
}
?>
