<?php 
   if(isset($_SESSION['id'])){
       header('location: products.php');
   }

   require 'includes/common.php';
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
    <link rel="stylesheet" href="signup.css" type="text/css"/>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>

    <?php
       include 'includes/header.php';
    ?>

    <div class="container3">
        <h3 class="text5">SIGN UP</h3>
        <form method="POST" action="signup_script.php">
            <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
            <input type="text" class="form-control" placeholder="Contact" id="phone" name="phone" required>
            <input type="text" class="form-control" placeholder="City" id="city" name="city" required>
            <input type="text" class="form-control" placeholder="Address" id="address" name="address" required>
            <button type="submit" class="btn btn-primary form_button">Submit</button>
        </form>
    </div>

    <?php
       include 'includes/footer.php';
    ?>
    
</body>
</html>