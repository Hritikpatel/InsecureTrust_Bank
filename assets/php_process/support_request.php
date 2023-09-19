<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "itb";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $category = $_POST["category"];
    $description = $_POST["description"];

    // File upload handling
    $uploadDirectory = "../uploads/"; // Specify the directory where uploaded files will be stored

    // Ensure the directory exists; create it if not
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }

    $uploadedFiles = [];
    foreach ($_FILES["attachments"]["error"] as $key => $error) {
        if ($error != UPLOAD_ERR_OK) {
            echo "File upload error: " . $error . "<br>";
        }
    }
    

    // Prepare and execute the SQL query to insert the support request into the database
    $sql = "INSERT INTO support (full_name, email, phone, category, description, attachments) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $full_name, $email, $phone, $category, $description, serialize($uploadedFiles));

    if ($stmt->execute()) {
        // Support request with file uploads successfully stored in the database
        echo "Support request submitted successfully.";
    } else {
        // An error occurred while storing the support request
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
} else {
    // If the form was not submitted via POST, redirect or display an error message
    echo "Form submission error.";
}
?>
