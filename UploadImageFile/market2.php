<?php
include_once 'database.connectSS.php';

$sql5 = "SELECT * FROM sales2;";
$result = mysqli_query($conn, $sql5);

$resultCheck = mysqli_num_rows($result);

$picture ="";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market page</title>

<link rel="stylesheet" href="../Css/markt2.css">  
<link href="../Css/cssfile.css" type="text/css" rel="stylesheet">


</head>
<body>

<nav class="navbar">
      <div class="navbar__container">
        <a href="Homepage.php" id="navbar__logo"
          ><i class=></i>SMART SHAMBA</a
        >
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="Homepage.php" class="navbar__links">Home</a>
          </li>
          <li class="navbar__item">
            <a href="market2.php" class="navbar__links">Markets</a>
          </li>
          <li class="navbar__item">
            <a href="contact.php" class="navbar__links">Contacts</a>
          </li>
          <li class="navbar__btn">
          <li class="navbar__item">
            <a href="about.php" class="navbar__links">About</a>
          </li>
            <a href="login-reg.php" class="button">Login</a>
          </li>
        </ul>
      </div>
    </nav>

        <main>
            
            <div class="services">
                <h1>Different Crops Available</h1>
            </div>

        <div class="row4">
       
                    <?php

                while($row = mysqli_fetch_assoc($result)){ ?>

            <div class="crop">
                <form method="GET">
                    <div class="product">

                    <div class="main">
                    <div class="card">
                    <div class="title"><h1><?php echo $row ['product']?></h1></div>
                    <div class="image"><img class="photo" src="img/<?php echo $row["image"];?>" alt=""></div>
                    <div class="des">

                     
                       
                        <li>Farmer's Username : <?php echo $row ['uname_farmer'];?></li>
                        <li>City : <?php echo $row ['city'];?></li>
                        <li>Phone Number : <?php echo $row ['phone_number'];?></li>
                        <button class="buy"> 
                            <a href="customer.php">BUY</a>
                        </button>
                        <!-- <button>Read More...</button> -->
                    
                    </div>

                    </div>
                    </div>
                    </div>
                </form>
            </div>

                <?php }


                ?>
        </div> 
        
        </main>

        <!-- <div class="title">
          <h1>Write title Here</h1>
        </div>
        <div class="des">
          <p>You can Add Desccription Here...</p>
          <button>Read More...</button>
        </div>
      </div> -->
<!-- 
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

    <a id="arrowup" href="#">
        <img id="up" src="../images/arrowup.svg">
    </a>
    <script src="../JavaScript/card.js"></script> -->


</body>
</html>