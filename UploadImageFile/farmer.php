<?php
include_once 'database.connectSS.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer page</title>
    <link rel="stylesheet" href="../Css/farmer.css">
</head>

<body>
    <div class="all">
    <div class="socials">
            <a href=""><img src="../images/facebook.svg"></a>
            <a href=""><img src="../images/linkedin.svg"></a>
            <a href=""><img src="../images/twitter.svg"></a>
            <a href=""><img src="../images/whatsapp.svg"></a>

        </div>
        <header>

            <div class="navbar">
                <div class="logo">
                    <h1 class="t1">SMART SHAMBA</h1>
                </div>
                <ul>
                    <li><a href="#" >Home</a></li>
                    <li><a href="#" class="active" >Username: <?php 
                    session_start();
                    if(isset ($_SESSION['permission'] )){

                        echo $_SESSION['permission'];
                    }else{

                        header("location: login.php");
                    }
    
                         ?>
                         </a></li>

                    <li><a href="logout.php">Logout</a></li>
                    
                </ul>
            </div>
        </header>
        
        <div class="general">
            <h1>Welcome Farmer, please select any service</h1>
            <div class="services">
                <div class="weather">
                    <img class="image" src="../images/nice.jpg" alt="">
                    <h2 class="heading">Weather Notification</h2>
                    <p class="explanation" >Get all the information regarding weather condition on your specific place, to help  and guide your decision on which kind of crops to plant in that particular season and when to plant.
                    </p>
                    <div class="btn3"><a class="btn-click" href="AYNA/weatherwebsite/index.html">Click Here</a></div>
                </div>

                <div class="pests">
                    <img src="images/crop6.jpg" alt="" class="image">
                    <h2 class="heading">Pests And Diseases</h2>
                    <p class="explanation">Get information regarding existing and emerging pests and diseases which affect crops on your area, through Chatbot.
                    </p><div class="btn3">
                    <a class="btn-click" href="Chatbot.php" >Click Here</a></div>
                </div>

                <div class="market">
                    <img src="images/market.jpg" alt="" class="image">
                    <h2 class="heading">Market</h2>
                    <p class="explanation" >Post your crops here so that customers from different countryside can be able to see and buy them.
                    </p><div class="btn3">
                    <a class="btn-click" href="sales2.php">Click Here</a></div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="last">
            <div class="location">
            <h3>Location</h3>
                <p>Dar es salaam, Tanzania</p>
                <p>+255 689 737 839</p>
                <p>info@smartshambatz.com</p>
            </div>
            <div class="link">
                <h3>Popular Links</h3>
                <p>About us</p>
                <p>Contact us</p>
                <p>Latest blog</p>
            </div>
            <div class="useful">
                <h3>Useful Links</h3>
                <p>Term of use</p>
                <p>Privacy policy</p>
                <p>Cookies</p>
                <p>Help</p>
                <p>FQAs</p>
            </div>
            <div class="search">
                <h3>Search for something</h3>
                <input class="footersearch" type="text" placeholder="search">
                <button id="b3">search</button>
            </div>
        </div>
        <div class="linearrangement">
            <hr id="line">
            <p class="l1">Copyright © Smart Shamba 2023. All Rights Reserved</p>
        </div>


    </footer>

</body>

</html>