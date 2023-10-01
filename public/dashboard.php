<!-- dashboard.php -->
<?php
    session_start();
    if (!$_SESSION["authenticated"]) {
        // Redirect the user to the login page if not authenticated
         header("Location: login.php");
         exit();
    } else{
        setcookie("loggedUser", $_SESSION["user_id"], time() + 30, "/");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITB-Dash</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../assets/js/dash.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            ITB
        </div>
        <ul class="list">
            <li class="item"><a href="">Home</a></li>
            <li class="item"><a href="">About Us</a></li>
            <li class="item"><a href="dashboard.php" class="active">Dashboard</a></li>
            <li class="item"><a href="support.php">Support</a></li>
            <li class="item"><a href="faq.php">FAQs</a></li>
        </ul>
        <a href="login.php" ><button type="button" class="btn">Logout</button></a>
    </nav>
    <div class="body">
        <div class="info"></div>
        <div class="main">
            <div class="saving">

            </div>
            <div class="record"></div>
            <div class="extra"></div>
        </div>
        <div class="side">
            <div class="transactions">
                <div class="header">
                    <div class="head">Transactions</div>
                    <div class="listing">
                        Monthly
                    </div>
                </div>
                <div class="trans-body">
                    <div class="trans-record">
                        <div class="icon">
                            <img src="../assets/images/deposit-s.png" alt="" srcset="">
                        </div>
                        <div class="data">
                            <div class="name">Hritik</div>
                            <div class="date">09:19:29 12/02/2023</div>
                        </div>
                        <div class="amt">$5,000</div>
                    </div>
                    <div class="trans-record">
                        <div class="icon">
                            <img src="../assets/images/deposit-s.png" alt="" srcset="">
                        </div>
                        <div class="data">
                            <div class="name">Hritik</div>
                            <div class="date">09:19:29 12/02/2023</div>
                        </div>
                        <div class="amt">$5,000</div>
                    </div>
                    <div class="trans-record">
                        <div class="icon">
                            <img src="../assets/images/deposit-s.png" alt="" srcset="">
                        </div>
                        <div class="data">
                            <div class="name">Hritik</div>
                            <div class="date">09:19:29 12/02/2023</div>
                        </div>
                        <div class="amt">$5,000</div>
                    </div>
                    <div class="trans-record">
                        <div class="icon">
                            <img src="../assets/images/deposit-s.png" alt="" srcset="">
                        </div>
                        <div class="data">
                            <div class="name">Hritik</div>
                            <div class="date">09:19:29 12/02/2023</div>
                        </div>
                        <div class="amt">$5,000</div>
                    </div>
                    <div class="trans-record">
                        <div class="icon">
                            <img src="../assets/images/deposit-s.png" alt="" srcset="">
                        </div>
                        <div class="data">
                            <div class="name">Hritik</div>
                            <div class="date">09:19:29 12/02/2023</div>
                        </div>
                        <div class="amt">$5,000</div>
                    </div>
                    <div class="trans-record">
                        <div class="icon">
                            <img src="../assets/images/deposit-s.png" alt="" srcset="">
                        </div>
                        <div class="data">
                            <div class="name">Hritik</div>
                            <div class="date">09:19:29 12/02/2023</div>
                        </div>
                        <div class="amt">$5,000</div>
                    </div>
                    <div class="trans-record">
                        <div class="icon">
                            <img src="../assets/images/deposit-s.png" alt="" srcset="">
                        </div>
                        <div class="data">
                            <div class="name">Hritik</div>
                            <div class="date">09:19:29 12/02/2023</div>
                        </div>
                        <div class="amt">$5,000</div>
                    </div>
                </div>
            </div>
            <div class="card">
            </div>
        </div>
    </div>
</body>
</html>
