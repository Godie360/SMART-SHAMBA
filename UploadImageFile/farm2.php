<?php
include_once 'database.connectSS.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Market</title>
    <link rel="stylesheet" href="../Css/farm2.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,500;1,400&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar__container">
        <a href=" / " id="navbar__logo"
          ><i class="fa-solid fa-code"></i>SMART SHAMBA</a
        >
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="/" class="navbar__links">Home</a>
          </li>
          <li class="navbar__item">
            <a href="/" class="navbar__links">Username: <?php 
            session_start();
            if(isset($_SESSION['permission'])){
              echo $_SESSION['permission'];
            }else{
              header("location: login-reg.php");
            }
            ?></a>
          </li>
          <li class="navbar__item">
            <a href="logout.php" class="navbar__links">Logout</a>
          </li>

        </ul>
      </div>
    </nav>
    <div class="txt">
      <h1 class="txt2">
        Welcome Dear Farmer , Please Select Any Of Our Services
      </h1>
    </div>

    <div class="container">
      <div class="card">
        <img src="../images/Farmers-market-blog-19.webp" alt="First Image" />
        <div class="card-body">
          <h2 class="card-title">Markets</h2>
          <p class="card-text">
            Post your crops here so that customers from different countryside
            can be able to see and buy them.
          </p>
          <a href="sales.php" class="btn">Explore</a>
        </div>
      </div>

      <div class="card">
        <img src="../images/Chatbot.png" alt="First Image" />
        <div class="card-body">
          <h2 class="card-title">Shamba Bot</h2>
          <p class="card-text">
            Get information regarding existing and emerging pests and diseases
            which affect crops on your area, through Chatbot.
          </p>
          <a href="Chatbot.php" class="btn">Explore</a>
        </div>
      </div>

      <div class="card">
        <img src="../images/weather2jpg" alt="First Image" />
        <div class="card-body">
          <h2 class="card-title">Weather Notifier</h2>
          <p class="card-text">
            Get all the information regarding weather condition on your specific
            place, to help and guide in your cultivation activities
          </p>
          <a href="AYNA/weatherwebsite/index.html" class="btn">Explore</a>
        </div>
      </div>
    </div>
    <script src="../JavaScript/app.js"></script>
  </body>
</html>
