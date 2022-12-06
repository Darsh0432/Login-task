<?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require('db.php');
session_start();

//set value of username, password amd email
if(isset($_POST['submit'])){  
 // declare variables
    // $id = $_POST['ID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    
    //give condition if data is blank 
    $errors = 0;
    
    // First name validation
    if(empty(trim($firstName, ' '))) {
        $errors++;
        $_SESSION['first_name_err'] = "Please enter First Name";
    } else {
        unset($_SESSION['first_name_err']);
        $_SESSION['firstName'] = $firstName;
    } 
    
        // last name validation
        if(empty(trim($lastName, ' '))) {
            $errors++;
            $_SESSION['last_name_err'] = "Please enter Last Name";
        } else {
            unset($_SESSION['last_name_err']);
            $_SESSION['lastName'] = $lastName;
        }

        // username validation
        if(empty(trim($uname, ' '))) {
            $errors++;
            $_SESSION['unameError'] = "Please enter Username";
        } else {
            unset($_SESSION['unameError']);
            $_SESSION['username'] = $uname;
        }

        // Email validation
        if(empty(trim($email, ' '))) {
            $errors++;
            $_SESSION['emailError'] = "Please enter Email";
        } else {
            unset($_SESSION['emailError']);
            $_SESSION['email'] = $email;
        }

        // Password validation
        if(empty(trim($pass, ' '))) {
            $errors++;
            $_SESSION['passError'] = "Please enter Password!";
        } else {
            unset($_SESSION['emailError']);
            $_SESSION['passError'] = '';
        }
        
        if($errors > 0) {
            header('Location:registration.php');
            exit;
        } else {
            //$pass = password_hash($pass, PASSWORD_DEFAULT);
            //if data is not blank then give output condition throw the select database 
            //hear $sql is query
            
            $sql = "select* from users where username = '$uname'";
            $result = mysqli_query($conn,$sql);

            //if conn and queary accepet then insert data throw the insert queary

            if(!mysqli_num_rows($result) > 0){
                $query    = "INSERT INTO `users` (`firstName`,`lastName`,`username`, `email`, `password`, `city`, `state`) VALUES ('$firstName','$lastName','$uname', '$email', '$pass','$city','$state');";
                $result   = mysqli_query($conn, $query);
                $conn->close();
                
                //use of header : It is used to redirect a from one web page to another web page in PHP
                //In  this task all data redirect a from registration_action.php to login.php
                header('Location:login.php');
            } else {
                //If we enter same data second time then give error like as below
              $_SESSION['unameError'] = "Username exists";
              header('Location:registration.php');
            }
        }        
} else {
    echo 'somthing went wrong';
}


?>