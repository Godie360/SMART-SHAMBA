<?php
include_once 'database.connectSS.php';

?>
 <?php

if(isset($_POST["submit"])){
$uname_farmer = $_POST['uname_farmer'];
$product = $_POST['product'];
$price = $_POST['price'];
$phone_number = $_POST['phone_number'];
$city = $_POST['city'];
$date = $_POST['date'];
// $image = $_FILES['image']['name'];



if( $_FILES["image"]["error"] === 4){

    echo "<script>alert('Image Doesnot exist')</script>";

}else{

$fileName = $_FILES["image"]["name"];
$fileSize = $_FILES["image"]["size"];
$tmpName = $_FILES["image"]["tmp_name"];

$validImageExtension = ['jpg', 'jpeg', 'png'];
$imageExtension = explode('.', $fileName);
$imageExtension = strtolower(end($imageExtension));




if(!in_array($imageExtension, $validImageExtension)){
   echo "<script>alert('Invalid image Extension')</script>";
}else{
   $newImageName = uniqid();
   $newImageName .= '.' . $imageExtension;

   move_uploaded_file($tmpName, 'img/' . $newImageName);

}
}

// you deleted image in the database and $image in values

$sales_data = "INSERT INTO sales2 (uname_farmer, product, price, phone_number, city, date, image) 
VALUES ('$uname_farmer','$product','$price','$phone_number','$city','$date', '$newImageName');";

if(mysqli_query($conn, $sales_data)){

    echo "<script>alert('Your details have been submit')</script>";

    // move_uploaded_file($_FILES['image']['name'],"$image" );

} else{

    echo "<script>alert('Your details HAVENOT been submitted')</script>";   
// echo "Unsuccessful data entry, please try again";
}

}
?>    


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sales</title>
    <link rel="stylesheet" href="../Css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,500;1,400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../Css/sales2.css" >
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
                    if(isset ($_SESSION['permission'] )){

                        echo $_SESSION['permission'];
                    }else{

                        header("location: login-reg.php");
                    }
    
                         ?></a>
          </li>
          <li class="navbar__btn">
            <a href="logout.php" class="button">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Contact section -->
    <section class="contact" id="contact">
      <h2>Welcome <?php 
            // session_start();
            if(isset($_SESSION['permission'])){
              echo $_SESSION['permission'];
            }else{
              header("location: login-reg.php");
            }
            ?> </h2>
      <div class="contact-form-container">
        <div class="contact-form">
          <form action="" method="POST"enctype="multipart/form-data" >
            <div class="form-control">
              <label for="name">Username</label>
              <input
                type="text"
                id="name"
                name="uname_farmer"
                placeholder="Enter Your Username"
                class="input-field"
                required
              />

              <label for="name">Product Name</label>
              <input
                type="text"
                id="name"
                name="product"
                placeholder="Enter Your Product Name"
                class="input-field"
                required
              />

              <label for="name">Price</label>
              <input
                type="number"
                id="name"
                name="price"
                placeholder="Enter Your Price"
                class="input-field"
                required
              />

              <label for="name">Phone Number</label>
              <input
                type="number"
                id="name"
                name="phone_number"
                placeholder="+255"
                class="input-field"
                required
              />

              <label for="name">City</label>
              <input
                type="text"
                id="name"
                name="city"
                placeholder="Enter Your City"
                class="input-field"
                required
              />

              <label for="name">Upload Date</label>
              <input
                type="date"
                id="name"
                name="date"
                placeholder=""
                class="input-field"
                required
              />
            </div>


            <?php 
                  $row = mysqli_query($conn, " SELECT * FROM sales2 ORDER BY salesid DESC ");
                            
                  foreach($row as $row ) 
            ?>
            <div class="drop-zone">
              <span class="drop-zone__prompt">Upload Your Product Image</span>
              <input type="file" name="image" class="drop-zone__input"accept=".jpg, .jpeg, .png"  />
            </div>
            <input
              type="submit"
              value="Submit"
              id="submit-btn"
              name="submit"
              class="submit-btn"
            />
          </form>
        </div>
      </div>
    </section>

    <div class="socials">
      <a href="#" target="_blank"
        ><img
          src="../images/icons8-twitter-circled.gif"
          alt="Twitter"
          loading="lazy"
          class="socicon"
      /></a>
      <a href="#" target="_blank"
        ><img
          src="../images/icons8-instagram.gif"
          alt="Instagram"
          loading="lazy"
          class="socicon"
      /></a>
      <a href="#" target="_blank"
        ><img
          src="../images/icons8-linkedin-circled.gif"
          alt="Linkedin"
          loading="lazy"
          class="socicon"
      /></a>
      <a href="#" target="_blank"
        ><img src="../images/icons8-github.gif" alt="Github" class="socicon"
      /></a>
    </div>

    <!-- Scroll to top -->
    <i class="scroll-up" id="scroll-up"
      ><img
        src="../images/icons8-upward-arrow.gif"
        class="socicon up-arrow"
        alt=""
    /></i>
    <script src="../JavaScript/app1.js"></script>
  </body>
</html>
