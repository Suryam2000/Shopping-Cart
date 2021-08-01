<?php
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
    <link rel="stylesheet" href="login.css" type="text/css"/>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>

    <?php
       include 'includes/header.php';
    ?>
    
    <div class="container2">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <header>
                    <h3 class="bg-primary panel_head">LOGIN</h3>
                </header>
                <div class="panel_body">
                    <p class="text-warning">Login to make a purchase</p>
                    <form method="POST" action="login_submit.php">
                        <input type="email" placeholder="Email" class="form-control" id="email" name="email" required>
                        <input type="password" placeholder="Password" class="form-control" id="password" name="password" required>
                        <button type="submit" class="btn btn-primary login_button">Login</button>
                    </form>
                </div>
                <br> <br>
                <div class="panel_foot">
                    <p class="foot_text text1">Don't have a account? <a href="signup.php">Register</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php
       include 'includes/footer.php';
    ?>

</body>
</html>