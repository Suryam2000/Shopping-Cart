<?php
   require 'includes/common.php'; 

   if(!isset($_SESSION['email'])){
       header('location: index.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <title>Lifestyle Store</title>
    <link rel="stylesheet" href="success.css" type="text/css"/>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>

    <?php
       include 'includes/header.php';

       $user_id = $_SESSION["id"];
       $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
       $result = mysqli_query($con, $query) or die(mysqli_error($con));

       while($row = mysqli_fetch_array($result)){
        $item_id = $row["item_id"];
        $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
        
        $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
    }
    ?>

    <div class="box">
        <div class="container container2">
            <center><h4 class="text2">Your order is confirmed. Thank You for shopping with us.</h4></center>
            <hr>
            <center><h5 class="text1">Click <a href="products.php">here</a> to purchase any other item.</h5></center>
        </div>
    </div>

    <?php
       include 'includes/footer.php';
    ?>
    
</body>
</html>