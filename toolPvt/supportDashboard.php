<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITB-Support_Dashboard</title>
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
            <h1>
                Support Dashboard
            </h1>
        </ul>
        <?php
            if ("login" == "lgin"){
                echo '<a href="login.php"><button type="button" class="btn">Login</button></a>';
            }else{
                echo '<a href="login.php"><button type="button" class="btn">Logout</button></a>';
            }
        ?>
    </nav>
    <div class="body">
        
    </div>
</body>
</html>