<?php
   require 'includes/common.php'; 

   if(!isset($_SESSION['email'])){
    header('location: index.php');
}
else{
    $user_id = $_SESSION["id"];
    $email = $_SESSION["email"];

    $new_password = md5(md5(mysqli_real_escape_string($con, $_POST["new_pass"])));
    $retype_pass = md5(md5(mysqli_real_escape_string($con, $_POST["retype_pass"])));

    if($new_password != $retype_pass){
        echo "The passwords do not match. Try again.";
    }else{
        $query = "UPDATE users SET password = '$new_password' WHERE email = '$email' AND id = '$user_id'";

        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        header("location: settings.php");
    }
}
?>   