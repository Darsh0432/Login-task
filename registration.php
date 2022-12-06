<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration_Form</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Login System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Sign_Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h3 class="text-center">Please Register Here</h3>
    <hr>

<form class="row g-3 mt-5" action="registration_action.php" method="post" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">First Name</label>
     <input type="text"  name="firstName" id="First_Name" >
        <?php
          if(isset($_SESSION['single_number'])) { 
        ?>
          <span class="text-danger"> <?php echo $_SESSION['single_number'] ?> </span>
        <?php
          unset($_SESSION['single_number']);
          }
        ?>
  </div>
  <div class="col-md-6">
    <label for="lastName" class="form-label">Last Name</label>
      <input type="text"  class="form-control" name="lastName" id="Last_Name">
        <?php
          if(isset($_SESSION['last_name_err'])) { 
        ?>
          <span class="text-danger"> <?php echo $_SESSION['last_name_err'] ?> </span>
        <?php
        unset($_SESSION['last_name_err']);
          }
        ?>
  </div>
  <div class="col-md-12 ">
    <label for="inputEmail4" class="form-label">Username</label>
      <input type="text"  class="form-control" name="username">
        <?php
          if(isset($_SESSION['unameError'])) { 
        ?>
            <span class="text-danger"> <?php echo $_SESSION['unameError'] ?></span>
        <?php
          unset($_SESSION['unameError']);
          }
        ?>
  </div>
  <div class="col-md-12 ">
    <label for="inputEmail4" class="form-label">Email</label>
      <input type="email"  class="form-control" name="email">
        <?php
          if(isset($_SESSION['emailError'])) { 
        ?>
          <span class="text-danger"> <?php echo $_SESSION['emailError'] ?></span>
        <?php
        unset($_SESSION['emailError']);
          }
        ?>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
        <?php
          if(isset($_SESSION['passError'])) { 
        ?>
          <span class="text-danger"> <?php echo $_SESSION['passError'] ?></span>
        <?php
        unset($_SESSION['passError']);
          }
        ?>
  </div>
  <div class="col-md-6">
    <label for="profile" class="form-label">Select Profile</label>
    <input type="file"  class="form-control" name="profile" id="profile" >
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" value="<?php echo $_SESSION['address'];?>" 
    class="form-control" id="inputAddress" placeholder="123, street, Area">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <select id="inputState" value="<?php echo $_SESSION['city'];?>" class="form-select" name="city">
      <option> Select City</option>
      <option>Surat</option>
      <option>Rajkot</option> 
      <option>Ahemedabad</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <input type="text" name='state' value="<?php echo $_SESSION['state'];?>" class="form-control" id="inputCity">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">PINCODE</label>
    <input type="text"  class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck"> Do you want to Final submit.. </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
    <input type="reset" class="btn btn-primary float-end" name='reset'></input>
  </div>
</form>
</div>
</body>
</html>