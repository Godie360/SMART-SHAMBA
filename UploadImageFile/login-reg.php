<?php
include_once 'database.connectSS.php';

error_reporting( E_ERROR | E_PARSE);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Register</title>
    <link href="../Css/login-reg.css" type="text/css" rel="stylesheet">
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
        <a href=" htmlfile.php " id="navbar__logo"
          ><i class="fa-solid fa-code"></i>SMART SHAMBA</a
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
          <!-- <li class="navbar__item">
            <a href="service.php" class="navbar__links">Services</a>
          </li> -->
          <li class="navbar__btn">
            <a href="login-reg.php" class="button">Register</a>
          </li>
        </ul>
      </div>
    </nav>

    <section>
      <div class="container">
        <div class="user signinBx">
          <div class="imgBx">
            <img src="../images/ss.png" alt="" />
          </div>
          <div class="formBx">
            <form action=""  method="post">
              <h2>Sign In</h2>
              <input type="text" name="uname_farmer" placeholder="Username" />
              <input type="password" name="pwd" placeholder="Password" />
              <input type="submit" name="submit" value="Login" />
              <p class="signup">
                Don't have an account ?

                <a href="#" onclick="toggleForm();">Register.</a>
              </p>

             <!-- login php -->

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
                header("Location:farm2.php");
                exit();
            }
       }

 }

   ?> 

           </form>
          </div>
        </div>
        <div class="user signupBx">
          <div class="formBx">
            <form action=""  method="POST">
              <h2>Register As Farmer</h2>
              <input type="text" name="uname" placeholder="Username" />
              <input type="text" name="fname" placeholder="First Name" />
              <input type="text" name="lname" placeholder="Last Name" />
              <input type="email" name="email" placeholder="Email Address" />
              <input type="password" name="pwd" placeholder="Create Password" />
              <input type="password" name="cpwd" placeholder="Confirm Password" />
              <input type="submit" name="submit" value="Sign Up" />
              <p class="signup">
                Already have an account ?
                <a href="#" onclick="toggleForm();">Sign in.</a>
              </p>
               
              <!-- php codes -->

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
                       else{
                           $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                       }

                       $sql2 = "SELECT * FROM reg_farmer WHERE email = '$email';";
                       $result2 = mysqli_query($conn , $sql2);
                       $rowcount = mysqli_num_rows($result2);

                       if ($rowcount>0){
                           array_push($error, 'E-mail already exists!');
                       }

                       if(count($error)>0){

                        echo "<script>alert('Something went wrong in registration form, please check it')</script>";

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
                               echo "<script>alert('You have successfully registered')</script>";

                              //  header("location: login.php");
                               

                           }else{
                               die("Something went wrong");

                           }
                       }

                   }
                   ?>



            </form>
          </div>
          <div class="imgBx">
            <img
              src="../images/60d54fe7b682c1baee107a46ff9558a6074f7466-2000x1333.avif"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <script src="../JavaScript/login-reg.js"></script>
  </body>
</html>
