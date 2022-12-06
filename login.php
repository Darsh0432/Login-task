<?php 
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL); 

// if(isset($_SESSION['Login-page/login.php'])) {
//   header("Location: welcome.php");
// }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login_page</title>
<!-- <script>
  
    function showHint(str) {
      if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "login_action.php?q=" + str, true);
        xmlhttp.send();
      }
    }
</script> -->
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
          <a class="nav-link active" aria-current="page" href="registration.php">Registration_form</a>
        </li>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h3>Login your page</h3>
      <form method="POST" action="login_action.php">
        <div class="mb-3 mt-5 col-6">
          <label for="exampleInputEmail1" class="form-label">User_ID</label>
            <input type="text" id='username' class="form-control mb-3" name='username' onkeyup="showHint(this.value)">
              <p><b><span id="txtHint"></span></b></p>
                <?php
                  if(isset($_SESSION['userError']) ) { 
                ?>
                    <span class="text-danger"><?php echo $_SESSION['userError']?></span>
                <?php
                  unset($_SESSION['userError']);
                  }
                ?>
          <div id="emailHelp" class="form-text">We'll never share your userId and pwd with anyone else.</div>
        </div>
      <div class="mb-3 col-6">
        <label for="password" class="form-label" onkeyup="showHint(this.value)">Password</label>
          <input type="password" class="form-control" name= "password" id="password">
            <?php
              if(isset($_SESSION['pass_Error'])) { 
            ?>
                <span class="text-danger"> <?php echo $_SESSION['pass_Error']?></span>
            <?php
             unset($_SESSION['pass_Error']);
              }
            ?>
      </div>
      <div>
        <a href='updatepass.php'> Forgot Password</a>
      </div>
       <button type="submit" name="submit" class="btn btn-primary mt-2" onclick="submitForm()">Submit</button>
       <div class="text-success">
            <?php
              if(isset($_SESSION['success'])) { 
              ?>
                    <h3 class="text-success mt-4"><?php echo $_SESSION['success']?></h3>
              <?php
                    unset($_SESSION['success']);
              }
              ?>
          </div>
    </form>
</div>

<!-- <script type="text/javascript">

  function submitForm() {
    document.getElementById("txtHint").innerHTML = "";
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    //var check = this.responseText;

    //Create xhr object
     var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if(this.responseText == "success") {
          window.location.href = "welcome.php";
      } else {
        //document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
  };

  // open the object
  xmlhttp.open("GET", "login_action.php?username=" + username + "&password=" + password, true);

  //send request to the server
  xmlhttp.send();
}
</script> -->
</body>
</html>