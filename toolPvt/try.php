<?php
    session_start();

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "itb";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $database);

    $ssid = $_SESSION['SSID'];
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert the support request into the database
    $sql = "INSERT INTO ssidholder (ssid) 
            VALUES (?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $ssid);
    if ($stmt->execute()) {
        // Support request with file uploads successfully stored in the database
        // header("Location: try.php");
        echo "Submitted $ssid. ITB support team will contact you via email and phone.";
    } else {
        // An error occurred while storing the support request
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
?>
