<?php
session_start(); 
require('db.php');

$email = $_POST['email'];
$sql = "SELECT email from users where email = '$email'";
$result = mysqli_query($conn, $sql);

$rows = mysqli_num_rows($result);


if($rows == 1){
    $otp = rand(1000,9999);
    $_SESSION ['otp'] = $otp;
    $_SESSION ['email'] = $email;
    header('location: otp.php');
} else {
    $_SESSION ['email_error'] = 'Enter valid mail Id';
    header('location: updatepass.php');

}

?>