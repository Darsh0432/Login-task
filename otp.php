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
    <h3>Enter update code</h3>
        <form method="POST" action="otp_action.php">
            <div class="mb-3 mt-2 col-6">
                <label class="form-label">Enter OTP</label>
                <input type="number" class="form-control" placeholder="0123456" name="otp" value = <?php echo $_SESSION['otp'];?> />
                <button type="submit" name="submit" class=" w-50 btn btn-primary mt-3">Send</button>

            </div>
        </form>
    </div>
    
</body>
</html>



<?php


?>