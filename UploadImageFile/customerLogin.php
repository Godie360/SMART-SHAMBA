<?php
include_once 'database.connectSS.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="../Css/customerStyle.css">
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
          <li class="navbar__item">
            <a href="about.php" class="navbar__links">About</a>
          </li>
          <!-- <li class="navbar__btn">
            <a href="login-reg.php" class="button">Login</a>
          </li> -->
        </ul>
      </div>
    </nav>
    <div class="loginbox">

   

        <img src="../images/images1.png" class="image1">

        <h1>Log In As A Customer</h1>

        <form action="" method="POST">
            <label for="Username">Username</label>
            <input name="uname_buyer" type="text" placeholder="Enter your username">

            <label for="Password">Password</label>
            <input name="pwd" type="password" placeholder="Enter your password">

            <button name="submit" type="submit" class="btn">Log In</button>

            <?php

        if(isset($_POST["submit"])){

                $uname_buyer = $_POST["uname_buyer"];
                 $pwd = md5($_POST["pwd"]);


                $select_data ="SELECT * FROM reg_buyer  WHERE uname_buyer = '{$uname_buyer}' and pwd= '{$pwd}';";

                $result = mysqli_query($conn,$select_data);

                $number = mysqli_num_rows($result);

                if($number > 0){

                    $row = mysqli_fetch_assoc($result);
                    if($row['uname_buyer'] === $uname_buyer && $row['pwd'] === $pwd){


                        echo "<script>alert('You have successfully logged in!')</script>";

                        session_start();

                        $_SESSION['permission2'] = $row ["uname_buyer"];

                        header("Location: payment2.php");
                        exit();
                    }else{

                        echo "<script>alert ('Your Username or Password is incorrect, please try again') </script>";
                       }
               }

         }

           ?> 
        </form>
        <p class="qn">Don't you have an account? <a href="customer.php">Registration </a></p>

       
    </div>
</body>
</html>