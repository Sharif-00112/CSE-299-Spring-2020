<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>



<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



<div class="header">
  <h2>User Details</h2>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Name: <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
      <p>Date of Birth: <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
      <p>Age: <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
      <p>Gender: <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
      <p>Blood Group: <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
      <p>Hight (cm): <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
      <p>Weight (kg): <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
      <p>BMI: <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
      <p>Disabilities (if any): <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
      

      
    <?php endif ?>
</div>
    
</body>
</html>