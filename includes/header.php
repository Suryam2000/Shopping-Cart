<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container"> 
               <a href="index.php" class="brand">Lifestyle Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>       
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if(isset($_SESSION['email'])) { ?>
                <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="cart.php"> <i class="fas fa-shopping-cart"></i> Cart</a></li>
                        <li class="nav-item"><a class="nav-link" href="settings.php"> <i class="fas fa-user"></i> Settings</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php"> <i class="fas fa-sign-in-alt"></i> Logout</a></li>
                </ul>        
                    <?php } else { ?>
                    <ul class="navbar-nav ms-auto">
                       <li class="nav-item"><a class="nav-link" href="signup.php"> <i class="fas fa-user"></i> Sign Up</a></li>
                       <li class="nav-item"><a class="nav-link" href="login.php"> <i class="fas fa-sign-in-alt"></i> Login</a></li>
                    </ul>    
            <?php } ?>
            </div>
        </div>
</nav>