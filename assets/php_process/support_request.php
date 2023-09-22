<?php
    // Function to generate a random ticket number
    function generateRandomTicketNumber($length = 8) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $ticketNumber = '';
        $maxIndex = strlen($characters) - 1;

        // Generate a random character from the pool for each position in the ticket number
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, $maxIndex);
            $ticketNumber .= $characters[$randomIndex];
        }

        return $ticketNumber;
    }

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
        $ticketNumber = generateRandomTicketNumber();


        // TODO part FIX
        $allowedFormats = array(
            "image/jpeg", "image/png", "image/gif",
            "video/mp4", "video/webm", "video/ogg",
            "application/pdf",
            "application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
            "application/vnd.ms-excel", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
            "application/vnd.ms-powerpoint", "application/vnd.openxmlformats-officedocument.presentationml.presentation",
            "text/plain", "application/rtf"
        );
        


        // File upload handling
        $uploadDirectory = "../uploads/"; // Specify the directory where uploaded files will be stored

        // Ensure the directory exists; create it if not
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0755, true);
        }

        $uploadedFiles = [];

        // Check if at least one file was uploaded
        if (!empty($_FILES["attachments"]["name"][0])) {
            foreach ($_FILES["attachments"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tempName = $_FILES["attachments"]["tmp_name"][$key];
                    $fileName = basename($_FILES["attachments"]["name"][$key]);
                    $targetPath = $uploadDirectory . $fileName ;
                    
                    // TODO Problem
                    // Move the uploaded file to the target directory
                    if (move_uploaded_file($tempName, $targetPath)) {
                        $uploadedFiles[] = $targetPath;
                    }


                    // TODO FIX
                    // Check if the file format is in the list of allowed formats
                    $fileType = $_FILES["attachments"]["type"][$key];
                    if (in_array($fileType, $allowedFormats)) {
                        // Move the uploaded file to the target directory
                        if (move_uploaded_file($tempName, $targetPath)) {
                            $uploadedFiles[] = $targetPath;
                        }
                    } else {
                        // File format is not allowed
                        echo "File format not allowed for file: " . $fileName;
                    }

                }
            }
        }


        // Prepare and execute the SQL query to insert the support request into the database
        $sql = "INSERT INTO support (full_name, email, phone, category, description, attachments, tkt_no) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $serializedFiles = serialize($uploadedFiles); // Serialize the uploaded file paths
        $stmt->bind_param("sssssss", $full_name, $email, $phone, $category, $description, $serializedFiles, $ticketNumber);

        if ($stmt->execute()) {
            // Support request with file uploads successfully stored in the database
            header("Location: ../../public/support.php");
            echo "Submitted. ITB support team will contact you via email and phone.";
        } else {
            // An error occurred while storing the support request
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $stmt->close();
        $conn->close();
    }
?>
