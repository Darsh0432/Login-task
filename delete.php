<?php
session_start();

require('db.php');

// if user not logged in 
   // location login


$id = $_REQUEST['id'];
if($id) {
    $query = "DELETE FROM users WHERE ID='$id'"; 
    $result = mysqli_query($conn,$query) or die ( mysqli_error());
    header('Location:welcome.php');
}

// set error message user not found!
$_SESSION['delete'] = "User Delete Successfully";
header('Location:welcome.php');

?>