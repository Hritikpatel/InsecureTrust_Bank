<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITB-FAQ</title>
    <link rel="stylesheet" href="../assets/css/faq.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../assets/js/faq.js" defer></script>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            ITB
        </div>
        <ul class="list">
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
            <li class="item"><a href="dashboard.php">Dashboard</a></li>
            <li class="item"><a href="support.php">Support</a></li>
            <li class="item"><a href="faq.php" class="active">FAQs</a></li>
        </ul>
        <?php
            if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"]){
                echo '<a href="login.php" ><button type="button" class="btn">Logout</button></a>';
            }else{
                echo '<a href="login.php" ><button type="button" class="btn">Login</button></a>';
            }
        ?>
    </nav>
    <div class="body">
        <section class="top">
            <span class="sub">FAQ</span>
            <span class="heading">Have any questions?</span>
            <form class="searchBarForm" id="form" method="GET" action = "#">
                <input type="text" name="search" id="searchbar" placeholder="Search your question..." title="Enter your question..." required>
                <button type="submit" id="searchBtn"><i class="fa-solid fa-magnifying-glass fa-xl" style="color: #191919;"></i></button>
            </form>
            <span id="searchTerm" class="searchTerm">
                <?php
                    if( array_key_exists( "search", $_GET ) && $_GET[ 'search' ] != NULL ) {

                        // TODO Problem 
                        $searchQuery = $_GET[ 'search' ];

                        // Output
                        $out = '<pre> Looking for ' . $searchQuery . '</pre>';
                        echo $out;
                    }
                ?>
            </span>
        </section>
        <ul class="categories", id="categories">
            <li class="tags activeTag" id="account">Account</li>
            <li class="tags" id="banking">Online Banking</li>
            <li class="tags" id="trans">Transactions</li>
            <li class="tags" id="credit">Credit and Loans</li>
            <li class="tags" id="other">Others</li>
        </ul>
        <section class="faqs" id="faqs">
            <div class="questionCont" id="mainContainer">
            </div>
        </section>
        <section class="footer">
            <Span>Not able to solve issue? </Span>
            <a href="support.php"><button class="Supbtn">Get Support</button></a>
        </section>
    </div>
</body>

</html>