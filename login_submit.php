<?php 
   require 'includes/common.php';

   $email = mysqli_real_escape_string($con, $_POST['email']);
   $password = mysqli_real_escape_string($con, $_POST['password']);
   $secure_pass = md5(md5($password));

   $query = "SELECT * FROM users WHERE email = '$email' AND password = '$secure_pass'";
   $query_result = mysqli_query($con, $query) or die (mysqli_error($con));

   if(mysqli_num_rows($query_result) == 0){
       echo "Invalid user id.";
   }
   else{
       $row = mysqli_fetch_array($query_result);
       $_SESSION['email']=$email;
       $_SESSION['id']=$row['id'];

       header('location: products.php');
   }
?>