<?php
// Database connection parameters
    $host = 'localhost';
    $dbname = 'itb';
    $username = 'root';
    $password = '';

    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    try {
       $stmt = $pdo->prepare("SELECT * FROM account WHERE Phone == $number");
       $stmt->execute();
   
       // Fetch data from the database
       $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
        // Encode the data as JSON
        $response = json_encode($data);
    } catch (PDOException $e) {
        // Handle database connection errors
        echo "Connection failed: " . $e->getMessage();
    }

    // Send the response as JSON
    header('Content-Type: application/json');
    echo $response;

?>