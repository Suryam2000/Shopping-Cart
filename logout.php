<?php
	require 'includes/common.php';
	
	if(!isset($_SESSION["email"])){
		header("location: index.php");
	}else{
		session_unset();
		session_destroy();
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
    <link rel="stylesheet" href="index.css" type="text/css"/>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>
    <?php
		require 'includes/header.php';
	?>

    <br><br><br><br>

    <div class="container panel-margin">
        <div class="alert alert-success">
             You have successfully logged out. Click <a href="index.php">here</a> to go back to home page.
        </div>
    </div>
    
	<?php
		require 'includes/footer.php';
	?>
</body>
</html>