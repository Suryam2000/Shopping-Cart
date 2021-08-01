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
    <link rel="stylesheet" href="settings.css" type="text/css"/>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>

    <?php
       include 'includes/header.php';
    ?>

    <div class="container3">
        <h4>Change Password</h4>
        <br>
        <form method="POST" action="settings_script.php">
            <input type="password" class="form-control" name="old_pass" id="" placeholder="Old Password" required>
            <br>
            <input type="password" class="form-control" name="new_pass" id="new_pass" placeholder="New Password" required>
            <br>
            <input type="password" class="form-control" name="retype_pass" id="retype_pass" placeholder="Re-type New Password" required>
            <br>
            <button class="btn btn-primary text1">Change</button>
        </form>
    </div>


    <?php
       include 'includes/footer.php';
    ?>

</body>
</html>