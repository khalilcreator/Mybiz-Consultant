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
    <style>
     /* Custom styles for the contact form */
.contact-container {
    background-color: #f5f5f5;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.label {
    font-weight: bold;
}

.form-control {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: #fff;
    padding: 10px 20px;
}

.btn-primary:hover {
    background-color: #0056b3;
}
.my-3 {
    margin-bottom: 1.5rem;
}

.my-2 {
    margin-bottom: 1rem;
}
.form-control:focus {
    border-color: #4CAF50; 
    outline: 0; 
    box-shadow: 0 0 5px #4CAF50; 
}

     </style>
   </head>
  <body> 
<!-- Navbar starts -->
   <?php include 'navbar.php' ?>
<!--navbar ends-  -->
<div  class="success-Message alert alert-success" style="display: none;"></div>
	<section class="container-fluid my-4">
       <div class="col-md-6 mx-auto shadow p-md-4 p-4 contact-container">
    <h3 class="mb-4 text-center">Contact Us</h3>
    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
        <div class="row my-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label" for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" >
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label" for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" >
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label" for="phone">Phone No</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone no" >
                </div>
            </div>
           
        </div>
        <div class="row my-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label" for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" ></textarea>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-12 text-center">
                <div class="form-group">
          <div id="error-message" class="alert alert-danger" style="display: none;" ></div>
          <div id='success-Message' class=" alert alert-success " style="display: none;"></div>

                    <input type="submit" value="Send Message" class="btn btn-success btn-lg">
                </div>
            </div>
        </div>
    </form>
</div>

				</div>
	</section>
<!-- footer starts -->
<?php include "footer.php" ?>
<!-- footer ends -->
<script src="bootstrap.min.js"></script>
<script src="custom.js"></script>
<script src="jquery.min.js"></script>
<script src="script.js"></script>
  </body>
</html>
