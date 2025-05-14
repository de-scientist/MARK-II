<?php  include "php/connection.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Registration <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Account Registration</h1>
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
			            <p><span>Address:</span> Muranga Town</p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Phone:</span> <a href="tel://1234567920">+254 721 456 789</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:info@yoursite.com">carbook@master.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
            <?php  
            if(isset($_POST['add_user'])){
            $name  =  $_POST['name'];
            $email =  $_POST['email'];
            $password = $_POST['password'];
            $number = $_POST['number'];
            $fav = $_POST['fav'];
            
           $fav = strtolower($fav);
   
           
            $query = "INSERT INTO users(email,name,mobile_number,password,favourite)VALUES('$email','$name','$number','$password','$fav')";
            $insert_user = mysqli_query($connection,$query);
            if($insert_user){
           echo "<div style='background-color:#f8f9fa;padding:10px;'><div  class='response_form'>User registered succesfully</div></div>";
            }
                
                
            }
            ?>
            <h3>Account registration form</h3>
         <div id='response_pwd' style='background-color:#f8f9fa;padding:10px;'><div >Passwords do not match</div></div>
           <br>
           <form action="#" onsubmit='return validate()'  id='target'  method='post' class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" id='name' name="name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email" id='email' name="email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your phone number" id='number' name="number" required >
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" id="pwd" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm password" id="pwd_repeat" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your favourite pet(Security Question)" id='name' name="fav" required>
              </div>
              <!-- <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div> -->
              <div class="form-group">
                <input type="submit" value="Account Registration" name='add_user'id='add_user' class="btn btn-primary py-3 px-5">
              </div>
               <a href="login.php">Already have account?</a>
            </form>
          
            <script>
             function  validate(){
        
              var pwd =  document.getElementById("pwd").value;
              var pwd_repeat  = document.getElementById("pwd_repeat").value ;
          
      

              if(pwd !== pwd_repeat){
             document.getElementById("response_pwd").style.display = "block";
                return false;
   
   

              }

              }

            </script>

          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-md-12">
        		<div id="map" class="bg-white"></div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
<script>
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>
  </body>
</html>