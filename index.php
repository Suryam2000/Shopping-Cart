<?php
   if(isset($_SESSION['email'])){
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
    <link rel="stylesheet" href="index.css" type="text/css"/>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>

    <?php
       include 'includes/header.php';
    ?>

    <div id="banner_image">
        <div class="container">
            <div id="banner_content">
                <h1>We sell lifestyle.</h1>
                <h6>Flat 40% OFF on premium brands</h6>
                <a href="products.php" class="btn btn-danger btn-lg active text4 mt-3">Shop Now</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center" id="item_list">
            <div class="col-sm-4">
                <a href="products.php#cameras" class="decor">
                    <div>
                        <img src="img/1.jpg" class="size img-thumbnail img-fluid" alt="">
                        <div class="caption">
                            <h3>Cameras</h3>
                            <p>Choose among the best available in the world.</p>
                        </div>
                    </div> 
                </a>
            </div>

            <div class="col-sm-4">
                <a href="products.php#watches" class="decor">
                    <div>
                        <img src="img/10.jpg" class="size img-thumbnail img-fluid" alt="">
                        <div class="caption">
                            <h3>Watches</h3>
                            <p>Original watches from the best brands.</p>
                        </div>
                    </div> 
                </a>
            </div>

            <div class="col-sm-4">
                <a href="products.php#shirts" class="decor">
                    <div>
                        <img src="img/13.jpg" class="size img-thumbnail img-fluid" alt="">
                        <div class="caption">
                            <h3>Shirts</h3>
                            <p>Our exquisite collection of shirts.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php
       include 'includes/footer.php';
    ?>
    
</body>
</html>