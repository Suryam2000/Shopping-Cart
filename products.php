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
    <link rel="stylesheet" href="products.css" type="text/css"/>
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>

    <?php
       include 'includes/header.php';
       include 'includes/check-if-added.php';
    ?>

    <div class="container4 py-5">
        <h1 class="display-5 fw-bold text-sm-center pad_4 text2">Welcome to our Lifestyle Store!</h1>
        <p class="text-sm-center pad_4 text1">We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
    </div>

    <br>

    <div class="container">
        <div class="row row-cols-sm-2 row-cols-lg-4 text-sm-center" id="cameras">
            <div class="box img-thumbnail">
                <img src="img/5.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">Cannon EOS</h3>
                    <p class="text1">Price: Rs. 36000.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(1)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=1"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
            <div class="box img-thumbnail">
                <img src="img/2.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">Nikon DSLR</h3>
                    <p class="text1">Price: Rs. 40000.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(2)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=2"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
            <div class="box img-thumbnail">
                <img src="img/3.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">Sony DSLR</h3>
                    <p class="text1">Price: Rs. 50000.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(3)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=3"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
            <div class="box img-thumbnail">
                <img src="img/4.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">Olympus DSLR</h3>
                    <p class="text1">Price: Rs. 80000.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(4)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=4"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
        </div>
        <br> <br>
        <div class="row row-cols-sm-2 row-cols-lg-4 text-sm-center co" id="watches">
            <div class="box img-thumbnail">
                <img src="img/9.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">Titan Model #301</h3>
                    <p class="text1">Price: Rs. 13000.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(5)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=5"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
            <div class="box img-thumbnail">
                <img src="img/10.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">Titan Model #201</h3>
                    <p class="text1">Price: Rs. 3000.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(6)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=6"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
            <div class="box img-thumbnail">
                <img src="img/11.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">HMT Milan</h3>
                    <p class="text1">Price: Rs. 8000.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(7)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=7"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
            <div class="box img-thumbnail">
                <img src="img/12.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">Faber Luba #111</h3>
                    <p class="text1">Price: Rs. 18000.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(8)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=8"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
        </div>
        <br> <br>
        <div class="row row-cols-sm-2 row-cols-lg-4 text-sm-center" id="shirts">
            <div class="box img-thumbnail">
                <img src="img/8.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">H&W</h3>
                    <p class="text1">Price: Rs. 800.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(9)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=9"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
            <div class="box img-thumbnail">
                <img src="img/6.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">Luis Phil</h3>
                    <p class="text1">Price: Rs. 1000.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(10)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=10"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
            <div class="box img-thumbnail">
                <img src="img/13.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">John Zok</h3>
                    <p class="text1">Price: Rs. 1500.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(11)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=11"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
            <div class="box img-thumbnail">
                <img src="img/14.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
                <caption>
                    <h3 class="text2">Jhalsani</h3>
                    <p class="text1">Price: Rs. 1300.00</p>
                    <?php 
                       if(!isset($_SESSION['email'])){
                    ?>
                        <a href="login.php"><button class="btn btn-primary text1" type="button">Buy Now</button></a>
                    <?php } else {
                        if(check_if_added_to_cart(12)){ ?>
                            <a href="#"><button class="btn btn-primary text1" type="button" disabled>Added to cart</button></a>
                        <?php } else { ?>
                        <a href="cart-add.php?id=12"><button name="add" value="add" class="btn btn-primary text1" type="button">Add to cart</button></a>
                        <?php 
                        }
                    }
                        ?>
                </caption>
            </div>
        </div>
    </div>

    <?php
       include 'includes/footer.php';
    ?>
    
</body>
</html>