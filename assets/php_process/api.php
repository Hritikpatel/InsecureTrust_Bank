<?php
    session_start();

    $method = $_SERVER["REQUEST_METHOD"];

    if ($method == "GET") {
        // Get the user ID from the query string
        $user = str_replace("%20" , " ", $_GET["userID"]);

        // Database connection parameters
        $host = 'localhost';
        $dbname = 'itb';
        $username = 'root';
        $password = '';

        // Create a new PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        try {
            // Prepare and execute the SQL query with a parameter placeholder
            $stmt = $pdo->prepare("SELECT * FROM account WHERE Name = :user");
            $stmt->bindParam(':user', $user, PDO::PARAM_STR); // Bind the parameter
            $stmt->execute();

            // Fetch data from the database
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $response = json_encode($data);
            $codedResponse = base64_encode($response);

            $jsonResponse = array(
                "response" => $codedResponse
            );

            $jdd = json_encode($jsonResponse);

        } catch (PDOException $e) {
            // Handle database connection errors
            echo "Connection failed: " . $e->getMessage();
        }

        // Return the JSON-encoded data
        header("Content-Type: application/json");
        echo $jdd;
    }
?>
