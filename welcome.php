<?php
session_start();

//redirect page if user is not login and try to go direct on welcomedashboard.
if(!isset($_SESSION['user_Name'])) {
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Welcome_page</title>
</head>

<style>
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
        padding:10px;
        text-align:center;
    }
    </style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Login System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log_Out</a>
        </li>
    </div>
  </div>
</nav>

<div class="form text-center">
    <?php

    if(isset($_SESSION['delete'])) { 
    ?>
    <span class="text-danger"> <?php echo $_SESSION['delete'] ?> </span>
    <?php
    }
    unset($_SESSION['delete']);
    ?>
</div>

<div class="form text-center">
        <h4>Hey,
             <?php echo $_SESSION['user_Name']; ?>
        </h4>
        <p>You are now user's Welcome page..</p>
</div>


<?php
require('db.php');
$select = "SELECT* FROM users";
$result1   = mysqli_query($conn, $select);


if (mysqli_num_rows($result1) > 0) {
    echo "<table class='m-auto'>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>E-Mail</th>
                <th>Password</th>
                <th>state</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>";
              
              // output data of each row
              while($row = mysqli_fetch_assoc($result1)) {
            
                  echo "<tr>
                          <td>". $row["ID"]. "</td>
                          <td>". $row["firstName"] . "</td>
                          <td>". $row["lastName"] . "</td>
                          <td>". $row["username"] . "</td>
                          <td>". $row["email"]."</td>
                          <td>". $row['password']."</td>
                          <td>". $row['state']."</td>
                          
                          <td><a href='edit.php?id=".$row['ID']."'>Edit</a></td>
                          <td><a href='delete.php?id=".$row['ID']."'>Delete</a></td>
                        </tr>";
              }
    echo "</table>";
  } else {
    echo "0 results";
    }
?>

</body>
</html>