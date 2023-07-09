<?php
include_once 'database.connectSS.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link href="../Css/customer.css" rel="stylesheet" >
    <link href="../Css/cssfile.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="wallpaper">

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
          <li class="navbar__btn">
            <a href="login-reg.php" class="button">Login</a>
          </li>
        </ul>
      </div>
    </nav>

<div class="contact">
    <div class="log">
        <div class="registration">
          <form method="POST">

            <h1 class="heading">Sign Up As A Customer</h1>
            <label class="label_reg" >Username</label>
            <input class="input_reg" name="uname_buyer" type="text" placeholder="Enter your Username">

            <label class="label_reg" >First Name</label>
            <input class="input_reg"  name="fname" type="text" placeholder="Enter your First name">

            <label class="label_reg" >Last Name</label>
            <input class="input_reg" name="lname" type="text" placeholder="Enter your last name">

            <label class="label_reg" >Email </label>
            <input class="input_reg"  name="email" type="text" placeholder="Enter your email ">

            <label class="label_reg" >Password</label>
            <input name="pwd" class="input_reg" type="password" placeholder="Your password must have more than 8 characters">

            <label class="label_reg">Confirm Password</label>
            <input class="input_reg" name="cpwd" type="password" placeholder="Your password must have more than 8 characters">


            <button name="submit" type="submit" class="submit_btn">Sign Up</button>
            <p class="short-qn">Do you have an account? <a href="customerLogin.php">Log In</a></p>

            <?php
           
                       
 
            if(isset($_POST["submit"])){

                $uname_buyer = $_POST['uname_buyer'];  
                $fname = $_POST['fname'];           
                $lname = $_POST['lname'];           
                $email = $_POST['email'];           
                $pwd = md5($_POST['pwd']);           
                $cpwd = md5($_POST['cpwd']);

               

                $error = array();
                
                if(empty($uname_buyer)||empty($fname)||empty($lname)||empty($email)||empty($pwd)){
                    array_push($error, 'All fields are required!');
                }
                if($pwd !== $cpwd){
                    array_push($error, 'Password doesnot match!');
                }
                if(strlen($pwd)<8){
                    array_push($error, 'Your password must have more than 8 characters!');
                }
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    array_push($error,'Please enter your email correctly!');
                }
                else{
                    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                }

                $sql2 = "SELECT * FROM reg_buyer WHERE email = '$email';";
                $result2 = mysqli_query($conn , $sql2);
                $rowcount = mysqli_num_rows($result2);

                if ($rowcount>0){
                    array_push($error, 'E-mail already exists!');
                }

                if (count($error)>0){
                    foreach($error as $error){

                        echo "<div style= 'color:white; border:1px solid black; background:rgba(255, 0, 0, 0.5); display:flex align-item:center; justify-content:center; padding:10px; border-radius:4px;
                        margin:5px;' > $error </div>";

                    }
                }else {
                    $sql = "INSERT INTO reg_buyer(uname_buyer, fname, lname, email, pwd) VALUES ( ?, ?, ?, ?, ?);" ;
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);


                    if($prepareStmt){
                        mysqli_stmt_bind_param($stmt, "sssss", $uname_buyer, $fname, $lname, $email, $pwd);
                        
                        mysqli_stmt_execute($stmt);

                        session_start();
                        $_SESSION['permission2'] = $row["uname_buyer"];

                        header("location: payment2.php");
                        

                    }else{
                        die("Something went wrong");

                    }
                }

            }
            ?>

            </form>           
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
<!-- <script src="Homepage.js"></script> -->
</body>
</html>