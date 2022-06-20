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
  <h2>Home Page</h2>
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
      <p>Welcome Mr. <strong><?php echo $_SESSION['username']; ?></strong></p>
      <br>
      <p class="button-custom order-lg-last mb-0"><a href="http://localhost:8080/CSE299/doctor_registration/prescription.php" class="btn btn-secondary py-2 px-3">Create Prescription</a></p><br>

     

      <p class="button-custom order-lg-last mb-0"><a href="http://localhost:8080/CSE299/doctor_registration/community.php" class="btn btn-secondary py-2 px-3">Community</a></p><br>
       <p class="button-custom order-lg-last mb-0"><a href="http://localhost:8080/CSE299/doctor_registration/blog.php" class="btn btn-secondary py-2 px-3">Blog</a></p><br>

       <p class="button-custom order-lg-last mb-0"><a href="http://localhost:8080/CSE299/doctor_registration/research.php" class="btn btn-secondary py-2 px-3">Research and Colabaration</a></p><br>

      <br>

      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
    
</body>
</html>