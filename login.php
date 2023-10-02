<?php 
session_start(); 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="style.css">
    <title>Mybiz | Consulatation</title>
    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="bootstrap.min.css">
  <!--for icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" sizes="192x192" href="./assets/logo.jpeg" type="image/x-icon"/>
  </head>
  <body>
<!-- Navbar starts -->
   <?php include 'navbar.php' ?>
<div class="d-flex justify-content-evenly align-items-center mt-5">
<form method="post" action="#" class="col-md-4 mx-auto shadow px-5 py-3">
  <div class="my-3">
     <div class="d-flex justify-content-evenly">
          <img src="./assets/logo.png" class="w-75">
     </div>
  </div>  
  
 <div class="mb-3">
    <label for="name" class="fw-bold">Name:</label>
    <input type="name" name="uname" id="name" class="form-control mt-1" placeholder="Please Enter Your UserName!" required >
 </div>
  <div class="mb-3">
    <label for="password" class="fw-bold">Password:</label>
    <input type="password" name="password" id="password" class="form-control mt-1" placeholder="Enter your Password!" required>
  </div>
  <div class="mb-3 ">
     <input type="submit" value="Login" name="login" class="btn btn-success">
   </div>   
</form>
</div> 
<?php
include "connection.php";

if(isset($_POST["login"])){
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    
    $stmt = $link->prepare("SELECT uid FROM admin WHERE uname = ? AND password = ?");
    $stmt->bind_param("ss", $uname, $password);
    $stmt->execute();
    $stmt->bind_result($uid);
    
    if ($stmt->fetch()) {
        $_SESSION['hlo'] = $uid;
        echo $_SESSION['hlo'];
        echo "<script>window.location.href='admin.php';</script>";
    } else {
        ?>
        <script>alert('Wrong name or Password')</script><?php
    }
    
    $stmt->close();
}

?>
  <!-- footer starts -->
  <?php include "footer.php" ?>
<!-- footer ends -->
<script src="bootstrap.min.js"></script>
<script src="custom.js"></script>
<script src="jquery.min.js"></script>
<script src="script.js"></script>
  </body>
</html>