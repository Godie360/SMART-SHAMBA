<?php
include_once 'database.connectSS.php';
if (isset($_GET['id'])){

    $id = $_GET['id'];

    $deleteFarmer = mysqli_query($conn ,"DELETE FROM 'reg_farmer' WHERE 'farmerid' = '$id'" );

}



$sql6 = "SELECT * FROM reg_farmer";

$result = mysqli_query($conn, $sql6);

$resultCheck = mysqli_num_rows($result);

$sql7 = "SELECT * FROM reg_buyer";
$result2 = mysqli_query($conn, $sql7);

$resultCheck2 = mysqli_num_rows($result2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/admin.css" type="css/text">
</head>
<body>

  <form action="" method="">
    <h3>Farmers</h3>
    <table class="table" border="1">


        <tr>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Operation</th>

        </tr>


        <?php 

        while ($row = mysqli_fetch_assoc($result)){ ?>
                
        <tr>
            <td><?php echo $row ["uname_farmer"] ?></td>
            <td><?php echo $row ["fname"] ?></td>
            <td><?php echo $row ["lname"] ?></td>
            <td><?php echo $row ["email"] ?></td>
            <td><?php echo $row ["pwd"] ?></td>
            <td> <a href='admin.php?id=<?php echo $row['farmerid'];?>' class="btn" >Delete</a></td>
        </tr>
        <?php } ?>
    </table>
  </form>

          
  <form action="" method="">
  <h3>Customers</h3> 
    <table border="1" cellpadding="0">

        <tr>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php 

        while ($row = mysqli_fetch_assoc($result2)){ ?>
        <tr>
            <td><?php echo $row ["uname_buyer"] ?></td>
            <td><?php echo $row ["fname"] ?></td>
            <td><?php echo $row ["lname"] ?></td>
            <td><?php echo $row ["email"] ?></td>
            <td><?php echo $row ["pwd"] ?></td>
        </tr>
        <?php } ?>
    </table>
  </form>
    
</body>
</html>