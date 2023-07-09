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
    <link rel="stylesheet" type="text/css" href="../Css/loginStyle.css">

</head>
<body>
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
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="#" class="active">Registration</a></li>
                <li><a href="market2.php">Market</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li><a href="about.php">About</a></li>

            </ul>
        </div>
    </header>
    <div class="loginbox">

   

        <img src="../images/images1.png" class="image1">

        <h1>Log In As A Farmer</h1>

        <form action="" method="POST">
            <label for="Username">Username</label>
            <input name="uname_farmer" type="text" placeholder="Enter your username">

            <label for="Password">Password</label>
            <input name="pwd" type="password" placeholder="Enter your password">

            <button name="submit" type="submit" class="btn">Log In</button>

            <?php

        if(isset($_POST["submit"])){

                $uname_farmer = $_POST["uname_farmer"];
                 $pwd = md5($_POST["pwd"]);


                $select_data ="SELECT * FROM reg_farmer  WHERE uname_farmer = '{$uname_farmer}' and pwd= '{$pwd}';";

                $result = mysqli_query($conn,$select_data);

                $number = mysqli_num_rows($result);

                if($number > 0){

                    $row = mysqli_fetch_assoc($result);
                    if($row['uname_farmer'] === $uname_farmer && $row['pwd'] === $pwd){

                        session_start();
                        
                        $_SESSION['permission'] = $row ["uname_farmer"];
                        header("Location: farmer.php");
                        exit();
                    }
               }

         }

           ?> 
        </form>
        <p class="qn">Don't you have an account? <a href="register.php">Registration </a></p>

       
    </div>
</body>
</html>