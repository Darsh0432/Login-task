<?php
session_start();
session_regenerate_id(); 

if($_SESSION['otp'] == $_POST['otp']){
    header('Location: newpassword.php');
} else {
    echo 'some error';
    header('Location: otp.php');
}

?>