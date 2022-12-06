<?php
require('db.php');

$id=$_REQUEST['id'];
$query = "SELECT * from users where Id='$id'"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Update Record</title>
</head>
<body>

<?php
if(isset($_POST['ID']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){  
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password =$_POST['confirm_password'];
    $id=$_POST['ID'];
    $query = "UPDATE users SET username ='$username',email ='$email',password='$password' WHERE Id = '$id'";
    $result   = mysqli_query($conn,$query);
    
    if($result){
        header("Location: welcome.php");
    }
}

?>
<div class="container mt-5">
    <h3>Update your page</h3>
    <form method="POST" action="">
    <div class="mb-3 col-6">
            <label for="exampleInputPassword1" class="form-label">Id</label>
            <input type="text" class="form-control" name= "ID" value="<?php echo $row['ID'];?>">
        </div>
        <div class="mb-3 mt-5 col-6">
            <label for="exampleInputEmail1" class="form-label">User_ID</label>
            <input type="text" class="form-control" name='username' value="<?php echo $row['username'];?>">
            <span class="error"><?php echo $username_err;?></span>

            <div id="emailHelp" class="form-text">We'll never share your userId and pwd with anyone else.</div>
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputPassword1" class="form-label">email</label>
            <input type="email" class="form-control" name= "email" value="<?php echo $row['email'];?>">
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name= "password" value="<?php echo $row['password'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

<?php 

?>
</div>
</div>
</body>
</html> 