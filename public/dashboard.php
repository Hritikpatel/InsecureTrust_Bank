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
            <li class="item"><a href="home.php">Home</a></li>
            <li class="item"><a href="about.php">About Us</a></li>
            <li class="item"><a href="dashboard.php" class="active">Dashboard</a></li>
            <li class="item"><a href="support.php">Support</a></li>
            <li class="item"><a href="faq.php">FAQs</a></li>
        </ul>
        <a href="login.php" ><button type="button" class="btn">Logout</button></a>
    </nav>
    <div class="body">
        <div class="info">
            <div class="pvt">
                <div class="head">Personal Info</div>
                <div class="avatar">
                    <img class="avatar__image" src="https://imgs.search.brave.com/S4Q092Ic9VDPZIPUc2EqH8Bvx0XVvLNErkxgHy8FpjA/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9idWZm/ZXIuY29tL2xpYnJh/cnkvY29udGVudC9p/bWFnZXMvMjAyMi8w/My9hbWluYS5wbmc" />
                </div>
                <table>
                    <tr>
                        <th>Name</th>
                        <td>: Hritik</td>
                    </tr>
                    <tr>
                        <th>D.O.B</th>
                        <td>: 26/11/09</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>: hritik@gmail.com</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>: +91 8084656751</td>
                    </tr>
                    <tr>
                        <th>Adhaar</th>
                        <td>: 2222 3235 7293</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>: Bhabua</td>
                    </tr>
                </table>
            </div>
            <div class="bankInfo">
                <div class="head">Banking Info</div>
                <table>
                    <tr>
                        <th>Account No.</th>
                        <td>: 5829 486 9992</td>
                    </tr>
                    <tr>
                        <th>IFSC Code</th>
                        <td>: ABCD1234567</td>
                    </tr>
                    <tr>
                        <th>Home Branch</th>
                        <td>: Bhabua City</td>
                    </tr>
                    <tr>
                        <th>Acc. Type</th>
                        <td>: Savings</td>
                    </tr>
                    <tr>
                        <th>CIBIL Score</th>
                        <td>: 750 (Good)</td>
                    </tr>
                    <tr>
                        <th>Acc. Status</th>
                        <td>: Active</td>
                    </tr>
                    <tr>
                        <th>Nominee</th>
                        <td>: Jane Doe</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>: +1 1234567890</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>: xyz@mail.com</td>
                    </tr>
                    <tr>
                        <th>RM</th>
                        <td>: John Doe</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>: +1 1234433247</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>: RM@ITB.com</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="main">
            <div class="saving-info">
                <div class="saving">
                    <div class="balance">
                        Your balance:  $500000000
                    </div>
                    <div class="accType">
                        Saving Account
                    </div>
                    <div class="accNo">
                        XXXX XXX XXXX
                    </div>
                </div>
                <div class="received">
                    <div class="I">Income/mo</div>
                    <div class="II">
                        <pre><i class="fa-solid fa-chevron-up fa-xl" style="color: rgb(0, 255, 0);"></i>  $2,225.22</pre>
                    </div>
                    <div class="III">
                        <button type="button" class="btn save">Deposit</button>
                    </div>
                </div>
                <div class="send">
                    <div class="I">Expanse/mo</div>
                    <div class="II">
                    <pre><i class="fa-solid fa-chevron-down fa-xl" style="color: rgb(255, 0, 0);"></i>  $2,225.22</pre>
                    </div>
                    <div class="III">
                        <button type="button" class="btn save">Withdraw</button>
                    </div>
                </div>
            </div>
            <div class="record">
                <div class="head">Quick Links</div>
                <div class="links">
                    <a href="" class="quklnk">
                        <button type="button" class="quklnk-btn" title="ACCOUNT">
                            <i class="fa-solid fa-building-columns fa-2xl"></i>
                        </button>
                    </a>
                    <a href="" class="quklnk">
                        <button type="button" class="quklnk-btn" title="CREDIT CARD">
                            <i class="fa-solid fa-credit-card fa-2xl"></i>
                        </button>
                    </a>
                    <a href="" class="quklnk">
                        <button type="button" class="quklnk-btn" title="LOCKER">
                            <i class="fa-solid fa-vault fa-2xl"></i>
                        </button>
                    </a>
                    <a href="" class="quklnk">
                        <button type="button" class="quklnk-btn" title="INSURANCE">
                            <i class="fa-solid fa-file-invoice fa-2xl"></i>
                        </button>
                    </a>
                    <a href="" class="quklnk">
                        <button type="button" class="quklnk-btn" title="SUPPORT">
                            <i class="fa-solid fa-headset fa-2xl"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="extra">
                <div class="SendTo">
                    <div class="head">
                        Send To
                    </div>
                    <div class="avatarList">
                        <div class="avatar">
                            <button class="btn avatar__image">
                                <i class="fa-solid fa-plus fa-2xl"></i>
                            </button>
                        </div>
                        <div class="avatar">
                            <!-- Avatar image -->
                            <img class="avatar__image" src="https://imgs.search.brave.com/S4Q092Ic9VDPZIPUc2EqH8Bvx0XVvLNErkxgHy8FpjA/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9idWZm/ZXIuY29tL2xpYnJh/cnkvY29udGVudC9p/bWFnZXMvMjAyMi8w/My9hbWluYS5wbmc" />
                        </div>
                        <div class="avatar">
                            <!-- Avatar image -->
                            <img class="avatar__image" src="https://imgs.search.brave.com/z-3_VMVbo5k1c4nYN-MGQSo7jUle-HYqNAS5ED1Soag/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9kMnFw/MHNpb3RsYTc0Ni5j/bG91ZGZyb250Lm5l/dC9pbWcvdXNlLWNh/c2VzL3Byb2ZpbGUt/cGljdHVyZS90ZW1w/bGF0ZV8wLmpwZw" />
                        </div>
                        <div class="avatar">
                            <!-- Avatar image -->
                            <img class="avatar__image" src="https://imgs.search.brave.com/syssE5L1Rg5E1pnbjYCd7XwnArNdLMZ-PHPig00siHg/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9idWZm/ZXIuY29tL2xpYnJh/cnkvY29udGVudC9p/bWFnZXMvMjAyMi8w/My9za2l0Y2gtLTct/LnBuZw" />
                        </div>
                    </div>
                </div>
                <div class="auto">
                    <div class="head">AutoPay</div>
                    <div class="avatarList">
                        <div class="avatar">
                            <button type="button" class="btn avatar__image">
                                <i class="fa-brands fa-discord fa-2xl"></i>
                            </button>
                        </div>
                        <div class="avatar">
                            <!-- Avatar image -->
                            <button class="btn avatar__image">
                                <i class="fa-solid fa-arrow-trend-up fa-2xl"></i>
                            </button>
                        </div>
                        <div class="avatar">
                            <button class="btn avatar__image">
                                <i class="fa-solid fa-newspaper fa-2xl"></i>
                            </button>
                        </div>
                        <div class="avatar">
                            <button class="btn avatar__image">
                                <i class="fa-solid fa-shield-halved fa-2xl"></i>
                            </button>
                        </div>
                        <div class="avatar">
                            <button class="btn avatar__image">
                                <i class="fa-brands fa-medium fa-2xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="cards">
                <div class="credit-card">
                    <div class="limit">$ 2,453</div>
                    <div class="provider"><i class="fab fa-cc-visa fa-2xl" style="color: #000000;"></i></div>
                    <div class="cardNO">Card Number</div>
                    <div class="cvv-text">CVV</div>
                    <div class="cvv">619</div>
                    <div class="number">xxxx xxxx xxxx Ax80</div>
                    <div class="cardType">Credit Card</div>
                    <div class="validity-text">Valid till</div>
                    <div class="validity">09/11</div>
                </div>
                <!-- <div class="card"></div> -->
            </div>
        </div>
    </div>
</body>
</html>
