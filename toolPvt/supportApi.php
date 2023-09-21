<?php
session_start();


$method = $_SERVER["REQUEST_METHOD"];
// Check if the form is submitted
if ($method === "POST") {
    if (isset($_POST["action"])){
        $action = $_POST["action"];
    }else{
        $action = "none";
    }
    if($action === "supportLogin" && $action !== "none"){
        // Replace these with your actual authentication logic
        $valid_username = "user123";
        $valid_password = "password123";
        
        $entered_username = $_POST["username"];
        $entered_password = $_POST["password"];
        
        // Check if the entered credentials are valid
        if ($entered_username === $valid_username && $entered_password === $valid_password) {
            // Authentication successful
            $_SESSION["authenticated"] = true;
            $_SESSION["SSID"] = session_id();
            header("Location: supportDashboard.php"); // Redirect to the dashboard or another authenticated page
            exit();
        } else {
            // Authentication failed
            $_SESSION["error"] = "Invalid username or password.";
            header("Location: login.php"); // Redirect back to the login page with an error message
            exit();
        }
    }else {
        echo "$ action==none or invalid action";
    }
} elseif($method === "GET"){

    // Database connection parameters
    $host = 'localhost';
    $dbname = 'itb';
    $username = 'root';
    $password = '';

    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


    $for = $_GET['for'];
    if($for === "allData"){
        try {
            // Prepare and execute the SQL query
            $stmt = $pdo->prepare("SELECT full_name, email, description, category, attachments, phone, tkt_no FROM support WHERE isActive IS TRUE");
            $stmt->execute();
        
            // Fetch data from the database
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            // Encode the data as JSON
            $response = json_encode($data);
        } catch (PDOException $e) {
            // Handle database connection errors
            echo "Connection failed: " . $e->getMessage();
        }

        
    }elseif ($for === "accData") {
        $number = $_GET["number"];
        try {
            // Prepare and execute the SQL query
            $stmt = $pdo->prepare("SELECT * FROM accounts WHERE number == $number");
            $stmt->execute();
        
            // Fetch data from the database
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Encode the data as JSON
            $response = json_encode($data);
        } catch (PDOException $e) {
            // Handle database connection errors
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // Send the response as JSON
    header('Content-Type: application/json');
    echo $response;

}else{
    // Handle unauthorized access or other HTTP methods
    header("HTTP/1.1 401 Unauthorized");
    exit();
}
?>
