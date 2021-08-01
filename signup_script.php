<?php
    require 'includes/common.php'; 

    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $phone = mysqli_real_escape_string($con, $_POST["phone"]);
    $city = mysqli_real_escape_string($con, $_POST["city"]);
    $address = mysqli_real_escape_string($con, $_POST["address"]);

    $secure_pass = md5(md5($password));
    $query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$secure_pass'";
    $insert_query = "INSERT INTO users (name, email, password, phone, city, address) VALUES ('$name','$email','$secure_pass','$phone','$city','$address')";
    
    $result = mysqli_query($con, $query1) or die (mysqli_error($con));
    if(mysqli_num_rows($result) > 0){
        echo "Email ID already exists.";
    }
    else{
        $result = mysqli_query($con, $insert_query);
        $_SESSION['email']=$email;
        $_SESSION['id']=mysqli_insert_id($con);

        header("location: products.php");
    }
?>