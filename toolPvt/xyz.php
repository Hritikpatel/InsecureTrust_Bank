<?php
// Database connection parameters
    $host = 'localhost';
    $dbname = 'itb';
    $username = 'root';
    $password = '';

    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    try {
        // Prepare and execute the SQL query
        $stmt = $pdo->prepare("SELECT full_name, email, description, category, attachments, phone, tkt_no FROM support WHERE isActive IS TRUE");
        $stmt->execute();
    
        // Fetch data from the database
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        for ($i=0; $i < sizeof($data); $i++) { 
            $data[$i]['attachments'] = unserialize($data[$i]['attachments']);
        }
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