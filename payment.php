<?php  include "php/connection.php" ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Payment for Services</title>
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

<div class='payment_navbar'></div>
<?php 
if(!isset($_SESSION['email'])){
header("Location: login.php");
}
?>
<?php
	if(isset($_GET['plate'])){
		$the_plate = $_GET['plate'];
				
		$query = "SELECT * FROM cars_db WHERE plate_number = '$the_plate'";
		$select_cars = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($select_cars)){
			$plate_number = $row['plate_number'];
			$car_name = $row['car_name'];
			$brand = $row['company_name'];
			$car_image  = $row['car_image'];
			$car_class = $row['car_class'];
		}
	
	}
	?>
<div class='container_card'>
<div class='bank_card'>
  <h3>Verify and submit form to book this car</h3>
  <h4 style='color:red;'>Note: All payment should be done via mpesa </h4>
  <form action="" method="post">
  <div class='card_car_img'><img   src="images/<?php echo $car_image ?>" alt=""></div>
  <div class='car_info'>PLATE NO: <span class='car_details'><?php echo $plate_number ?></span> </div>
  <div class='car_info'>VEHICLE REF: <span class='car_details'><?php echo $car_name?></span> </div>
  <div class='car_info'>BOOKED BY: <span class='car_details'><?php
     $user_email = $_SESSION['email'];
     $query =  "SELECT * FROM users WHERE email = '$user_email'";
     $get_username = mysqli_query($connection,$query);
     while($row = mysqli_fetch_assoc($get_username)){
        $username = $row['name'];
        $mobile_no = $row['mobile_number'];

     
     }
  
   echo $username; ?></span> </div>
  <div class='car_info'>MOBILE NUMBER: <span class='car_details'><?php echo $mobile_no ?></span> </div>
  <div style='color:red;font-size:14px;margin:10px;'>Note: Full payment will be done on pick station please observe time.</div>
  <div class='car_info'>PRICE: <span class='car_details'>KSH <?php  
  	//check class and get price
								
    $query = "SELECT * FROM car_classes_db WHERE car_class = '$car_class'";
    $select_classes = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_classes)){
    $price = $row['price'];
    }
    $new_price = $price / 2;
    echo $new_price;

  ?></span> </div>
  <label class='card_label' for="">Specify time and date of pick up</label>
  <input  class='card_dt' type="datetime-local" name="pickup_time" id="" required>
    <input class='bank_submit_btn' type="submit" name='book_car' value="Book Now">
  </form>
</div>
</div>

<?php
if(isset($_POST['book_car'])){
  $time = $_POST['pickup_time'];
  $date_booked = date('l jS \of F Y h:i:s A');
  $query = "INSERT bookings_db(user_number,user_email,username,vehicle,pickup_time,status,date_booked)VALUES('$mobile_no','$user_email','$username','$plate_number','$time','pending','$date_booked')";
 $book_query = mysqli_query($connection,$query);
 if($book_query){
  echo '<div class="booking_modal">
<div class="feedback_info">
  Thank you for hiring with us we kindly ask you to complete this payment via mpesa.
   <div class="mpesa_info">
 
   Mpesa info
  <br>
  Paybill No: 888880
  <br>
  Account No: #YourIDno
  </div>
  <div class="ownership">
  Note: You are required to finish this transaction in the next 2 hours else you lose ownership of this vehicle.
  </div>
  </div>
  </div>';
 }
}  

?>


  
<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">Mark<span>II</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="images/twitter.png.png"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="images/FB.png.png"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="images/IG.png.png"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="images/map.png.png"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="images/phone.png.png"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="images/envelope.png.png"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  
          </div>
        </div>
      </div>
    </footer>
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
  
