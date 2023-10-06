<!-- support.php -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITB-Support</title>
    <link rel="stylesheet" href="../assets/css/support.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../assets/js/support.js" defer></script>
</head>
<body class="viewport">
    <nav class="navbar">
        <div class="logo">
            ITB
        </div>
        <ul class="list">
            <li class="item"><a href="">Home</a></li>
            <li class="item"><a href="">About Us</a></li>
            <li class="item"><a href="dashboard.php">Dashboard</a></li>
            <li class="item"><a href="support.php" class="active">Support</a></li>
            <li class="item"><a href="faq.php">FAQs</a></li>
        </ul>
        <?php
            if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"]){
                echo '<a href="login.php"><button type="button" class="btn">Logout</button></a>';
            }else{
                echo '<a href="login.php"><button type="button" class="btn">Login</button></a>';
            }
        ?>
    </nav>
    <div class="body">
        <form id="support-form" action="../assets/php_process/support_request.php" enctype="multipart/form-data" method="post" >
            <h1>Register you query here</h1>
            <!-- Contact Information Section -->
            <div class="form-section">
                <h2>Contact Information</h2>
                <div class="form-group">
                    <label for="full-name">Full Name:</label>
                    <input type="text" id="full-name" name="full_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
            </div>

            <!-- Query or Complaint Section -->
            <div class="form-section">
                <h2>Query or Complaint</h2>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select id="category" name="category" required>
                        <option value="" disabled selected>Select Category</option>
                        <option value = 0>Account Issues</option>
                        <option value = 1>Technical Support</option>
                        <option value = 2>Billing Inquiries</option>
                        <!-- Add more categories as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="attachments">Attachments (if applicable):</label>
                    <input type="file" id="attachments" name="attachments[]" multiple>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit">Submit your query</button>
        </form>

    </div>
</body>
</html>
