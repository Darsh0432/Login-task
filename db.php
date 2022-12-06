<?php

$servername = "localhost";
$uname = "root";
$password = "";
$dbname = "Login_data";

// Try to connecting to dataBase
$conn = mysqli_connect($servername, $uname, $password, $dbname);

// Check the connection 

if($conn == false){
    die('Error:unable to connect DataBase');
}
?>
