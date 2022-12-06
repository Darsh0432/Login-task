<?php 
require_once 'db.php';
session_start();
 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$error = 0;
if(isset($_POST['username'])){
  $uname = $_POST['username'];
  if(empty($uname)) { 
    $error++;
    $_SESSION['userError'] = "Please enter User_ID";
  }else {
    unset($_SESSION['userError']);
  }
  
  $pass = $_POST['password'];
  if(empty(trim($pass, ' '))) {
    $error++;
    $_SESSION['pass_Error'] = "Please enter Password";
  }else {
    unset($_SESSION['pass_Error']);
  }
  
  //check errors
  if($error > 0) {
    header('Location:login.php');
    exit;
  } else {
    //if errors not find then go to the database for cheak userid and pass
    $query = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
    
    $result=mysqli_query($conn,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);

      //If username and password are match then redirect page otherwise give errors
      if($rows == 1) {
            if ($uname == $_POST['username'] && $pass == $_POST['password']) {
                $_SESSION['user_Name'] = $_POST['username'];
                header('Location:welcome.php');
            } 
      } else {
        $_SESSION['pass_Error'] = "Incorrect Username or Password!";
        header('Location:login.php');
      } 
  } 
}
?>