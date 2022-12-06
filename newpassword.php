<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update password</title>
</head>
<body>

<div class="container mt-5">
    <h3>Enter Your new password</h3>
     <form method="POST" action="newpass_action.php">
        <div class="mb-3 mt-2 col-6">
            <label class="form-label">Enter Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="mb-3 mt-2 col-6">
            <label class="form-label">confirm Password</label>
            <input type="password" class="form-control" name="confirm_password">
            <?php
                if(isset($_SESSION['pass_error'] )){
            ?>
                <span class="text-danger"><?php echo $_SESSION['pass_error']; ?></span>
            <?php 
                  unset($_SESSION['pass_error']);
            } 
            ?>
        </div>
        <button type="submit" name="submit" class=" w-50 btn btn-primary mt-3">Send</button>
    </form>
</div>
    
</body>
</html>



<?php


?>