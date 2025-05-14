<?php  include "php/connection.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="images/maybach.jpg">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <!--navbar-->
    <?php include "includes/navbar.php";  ?>
        <!--navbar-->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Address:</span> Muranga Town opposite NHIF</p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Phone:</span> <a href="tel://1234567920">+254 729 934 671</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:info@yoursite.com">infor@markIImaster.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
          
            <form action=""  method='POST'class="bg-light p-5 contact-form">
              <?php
              if(isset($_POST['send_msg'])){
                $usrname =$_POST['usrname'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $msg = $_POST['msg'];
                $date_sent = date('l jS \of F Y h:i:s A');

                $usrname = mysqli_real_escape_string($connection,$usrname);
                $email = mysqli_real_escape_string($connection,$email);
                $subject = mysqli_real_escape_string($connection,$subject);
                $msg = mysqli_real_escape_string($connection,$msg);

                $query = "INSERT INTO messages(usrname,email,subject,msg,date_sent)VALUES('$usrname','$email','$subject','$msg','$date_sent')";
                $insert_msg = mysqli_query($connection,$query);
                if($insert_msg){
                echo "<div style='background-color:#f8f9fa;padding:10px;'><div  class=:response_form'>Message sent successfully</div></div>" ;
                }else{
                  echo  "<div style='background-color:#f8f9fa;padding:10px;'><div  class='response_form'>Message failed</div></div>";
                }
              }

              ?>
           
              
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name='usrname' required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email" name='email' required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name='subject' required>
              </div>
              <div class="form-group">
                <textarea  id="" cols="30" rows="7" class="form-control" placeholder="Message" name='msg' required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" name='send_msg' class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
         
      </div>
    </section>
    <?php include 'includes/footer.php'; ?>


  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
   <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>-->
  

<div id="map"></div>
<script>
  initMap();
</script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
  </body>
</html>