<?php
   require 'includes/common.php'; 

   if(!isset($_SESSION["email"])){
    header("location: login.php");
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
    <title>My Cart</title>
    <link rel="stylesheet" href="cart.css" type="text/css"/>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>

    <?php
       include 'includes/header.php';

       $user_id = $_SESSION["id"];
       $query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_items ui ON ui.item_id = p.id WHERE ui.user_id = '$user_id' AND ui.status = 'Added to cart'";

       $result = mysqli_query($con, $query) or die(mysqli_error($con));

       if(mysqli_num_rows($result) == 0){ ?>
        <div class="container2">
            <h4 class="container panel-margin text-sm-center">Add items to the cart first. Visit <a href="products.php">Products</a> page.</h4>
            <?php } else {
               $total = 0;
            ?>

            <div class="container">
               <div class="col-md-6 col-md-offset-3">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                      </tr>
                   </thead>
                   <tbody>
                      <?php while($row = mysqli_fetch_array($result)){ ?>
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php $total += $row['price']; echo $row['price']; ?></td>
                        <td><a href="cart-remove.php?id=<?php echo $row['id']; ?>">Remove</a></td>
                      </tr>
                      <?php
                        }
                      ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Total: <?php echo $total; ?></td>
                        <td><a href='success.php' class='btn btn-primary text3'>Confirm Order</a></td>
                      </tr>
                   </tbody>
                  </table>  
               </div>
           </div>
       </div>
   <?php } ?>




    <?php
       include 'includes/footer.php';
    ?>

</body>
</html>