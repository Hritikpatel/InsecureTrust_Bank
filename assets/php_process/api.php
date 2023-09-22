<?php
    session_start();


    $method = $_SERVER["REQUEST_METHOD"];




    if ($method== "GET"){
        // Your data or processing logic here
        $responseData = ["message" => "Data from PHP"];
        
        // Set the Content-Type header to indicate JSON
        header("Content-Type: application/json");

        session_destroy();
        // Return the JSON-encoded data
        echo json_encode($responseData);
    }

?>