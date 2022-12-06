<?php

session_start();

require('db.php');
$pass = $_POST['password'];
$confirm_pass = $_POST['confirm_password'];

    if(empty($pass)) {
      $error++;
      $_SESSION['pass_error'] = "Please enter password";
    } else {
      unset($_SESSION['pass_error']);
      $_SESSION['pass'] = ' ';
    }

    if(empty(trim($confirm_pass, ' '))) {
        $error++;
        $_SESSION['confirm_password'] = "Please enter confirm Password";
    } else {
      unset($_SESSION['confirm_password']);
      $_SESSION['confirm_pass'] = ' ';
    }


if($pass == $confirm_pass){
    $sql = "UPDATE `users` SET `password`= '$pass' WHERE email = '$_SESSION[email]'";
    $result  = mysqli_query($conn, $sql);
} else {
    $_SESSION['pass_error'] = "Both password not same";
    header("Location:newpassword.php");
}
 
if($result === true){
    $_SESSION['success'] = 'Record successfully  update..!';
    header('location:login.php');
}


?>