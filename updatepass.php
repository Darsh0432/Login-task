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

<div class="container mt-5 mx-auto">
    <h3 class='mb-5'>Enter your Mail address</h3>
        <form method="POST" action="updatepass_code.php">
            <div class="mb-3 mt-2 col-6">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="darshan@gmail.com" name="email" value="<?php echo $_SESSION['email'];?>">
                    <?php
                    if(isset($_SESSION['email_error'])) { 
                    ?>
                        <span class="text-danger"><?php echo $_SESSION['email_error']?></span>
                    <?php
                        unset($_SESSION['email_error']);
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