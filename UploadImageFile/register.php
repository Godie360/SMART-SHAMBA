<?php
include_once 'database.connectSS.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../Css/register.css" type="text/css">
</head>

<body>
    <div class="wallpaper">

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
                    <li><a href="" class="active">Registration</a></li>
                    <li><a href="market2.php">Market</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="about.php">About</a></li>

                </ul>
            </div>
        </header>

        <div class="contact">
            <div class="log">
                <div class="registration">
                  <form method="POST">

                    <h1 class="heading">Sign Up As Farmer</h1>
                    <label class="label_reg" >Username</label>
                    <input class="input_reg" name="uname" type="text" placeholder="Enter your Username">

                    <label class="label_reg" >First Name</label>
                    <input class="input_reg"  name="fname" type="text" placeholder="Enter your First name">

                    <label class="label_reg" >Last Name</label>
                    <input class="input_reg" name="lname" type="text" placeholder="Enter your last name">

                    <label class="label_reg" >Email </label>
                    <input class="input_reg"  name="email" type="text" placeholder="Enter your email ">

                    <label class="label_reg" >Password</label>
                    <input name="pwd" class="input_reg" type="password" placeholder="Your password must contain more than 8 characters">

                    <label class="label_reg">Confirm Password</label>
                    <input class="input_reg" name="cpwd" type="password" placeholder="Your password must contain more than 8 characters">


                    <button name="submit" type="submit" class="submit_btn">Sign Up</button>
                    <p class="short-qn">Do you have an account? <a href="login.php">Log In</a></p>

                    <?php
                   
                               
         
                    if(isset($_POST["submit"])){

                        $uname = $_POST['uname'];  
                        $fname = $_POST['fname'];           
                        $lname = $_POST['lname'];           
                        $email = $_POST['email'];           
                        $pwd = md5($_POST['pwd']);           
                        $cpwd = md5($_POST['cpwd']);

                       

                        $error = array();
                        
                        if(empty($uname)||empty($fname)||empty($lname)||empty($email)||empty($pwd)){
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
                        // not sure
                        else{
                            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                        }

                        $sql2 = "SELECT * FROM reg_farmer WHERE email = '$email';";
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
                            $sql = "INSERT INTO reg_farmer(uname_farmer, fname, lname, email, pwd) VALUES ( ?, ?, ?, ?, ?);" ;
                            $stmt = mysqli_stmt_init($conn);
                            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);


                            if($prepareStmt){
                                mysqli_stmt_bind_param($stmt, "sssss", $uname, $fname, $lname, $email, $pwd);
                                
                                mysqli_stmt_execute($stmt);

                                echo "<script>alert('You have successfully registered !')</script>";

                                header("location: login.php");
                                

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