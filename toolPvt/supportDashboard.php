<?php
    session_start();
    if (!$_SESSION["authenticated"]) {
        header("Location: supportLogin.php"); // Redirect back to the login page with an error message
        exit();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITB-Support_Dashboard</title>
    <link rel="stylesheet" href="supportDashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="supportScript.js" defer></script>
</head>
<body class="viewport" onload="getAll()">
    <nav class="navbar">
        <div class="logo">
            ITB
        </div>
        <ul class="list">
            <h1>
                Support Dashboard
            </h1>
        </ul>
        <a href="supportLogin.php"><button type="button" class="btn">Logout</button></a>
    </nav>
    <div class="body">
        <div class="container">
            <div class="cardholder" id="cardholder">
            </div>
            <div class="detail-area">
                <div class="detail"  id="detail">
                    <div class="form-section">
                        <div class="form-group">
                            <label for="getInfo"><h2>User Query</h2></label>
                            <select name="getInfo" id="getInfo">
                                <option value="" disabled>Get info</option>
                                <option value="accountInfo">Account Info</option>
                                <option value="transactionInfo">Transaction Info</option>
                                <option value="*">All Info</option>
                            </select>
                        </div>
                    </div>
                    <div class="card">
                        <div class="category">
                            <div class="tag orange">
                                Account Issues
                            </div>
                        </div>
                        <div class="tktno">
                            LEX6BQWI
                        </div>
                        <div class="info">
                            Name: Hritik Patel<br>
                            Email: hritik@em.team.lucidgrowth.com<br>
                            Description: jdv<br>
                            Attachment: undefined Files attached<br>
                        </div>
                        <div class="open">
                            <button class="btn click">
                                View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>