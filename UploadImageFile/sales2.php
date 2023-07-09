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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sell page</title>
    <link rel="stylesheet" href="../Css/sales.css">
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
                    <!-- <li><a href="farmer.php">Back</a></li> -->

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

                    <!-- <li><a href="#" class="active">Home</a></li>
                    <li><a href="register.php">Registration</a></li>
                    <li><a href="market2.php">Market</a></li>
                    <li><a href="contact.php">Contacts</a></li>
                    <li><a href="about.php">About</a></li> -->

                </ul>
            </div>
        </header>
       
                <div class="head">
                    <h1>Product details</h1>
                </div>
                
            <div class="details">
                <div class="name">

                    <form method="POST" enctype="multipart/form-data">

                        <table>
                             <?php 
                            // $i = 1; 
                            ?> 
                            <tr>
                                <td><label for="uname_farmer">Username:</label></td>
                                <td><input class="data" name="uname_farmer" type="text" required ></td>
                            </tr>
    
                            <tr>
                                <td><label for="product">Product name:</label></td>
                                <td><input class="data" name="product" type="text" required ></td>
                            </tr>
    
                            <tr>
                                <td><label for="price">Price:</label></td>
                                <td><input class="data" name="price" type="text" required ></td>
                            </tr>

                              <tr>
                                <td><label for="phone_number">Phone Number:</label></td>
                                <td><input class="data" name="phone_number" type="text" required ></td>
                            </tr> 
    
                            <tr>
                                <td><label for="city">City:</label></td>
                                <td><input class="data" name="city" type="text" required ></td>
                            </tr>
    
                            <tr>
                                <td><label for="date">Upload date:</label></td>
                                <td><input class="data" name="date" type="date" required ></td>
                            </tr>

                            <?php 
                            $row = mysqli_query($conn, " SELECT * FROM sales2 ORDER BY salesid DESC ");
                            
                            foreach($row as $row ) ?>
                            <tr>                       
                            <td><label for="image">Image</label></td>
                            <td><input class="file" name= "image" type="file" accept=".jpg, .jpeg, .png" required ></td>
                            </tr>
                            
                            
                        </table>
                            <button class="send" type="submit" name="submit">Submit</button>
                          
                    </form>

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