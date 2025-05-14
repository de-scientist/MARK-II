<?php  include "php/connection.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Services</title>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Our Services</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-3">Our Latest Services</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Wedding Ceremony</h3>
                <form method="post" action="process-wedding-request.php">
  <label for="date">Wedding Date:</label>
  <input type="date" id="date" name="date" required><br><br>
  
  <?php
// Define the function for car rental services for a wedding ceremony
//function wedding_car_rental_services($pickup_location, $dropoff_location, $vehicle_type, $pickup_date, $pickup_time, $return_date, $return_time) {
    // Add code to book the vehicle and schedule pickup and dropoff times
    //let booking = {
      //vehicle: "Luxury Sedan",
      //pickupTime: "2022-06-15 10:00 AM",
      //dropoffTime: "2022-06-16 11:00 PM"
    //};
    // Call function to book the vehicle with the given details
//bookVehicle(booking);
    // Add code to decorate the vehicle with flowers and ribbons
    //let decoration = {
      //type: "Wedding",
      //flowers: "Roses",
    //  ribbons: "White"
    //};
    // Call function to decorate the vehicle with the given details
//decorateVehicle(decoration);
    // Add code to provide shuttle services for guests
    //let shuttle = {
     // pickupLocation: "Hotel",
      //dropoffLocation: "Wedding Venue",
      //pickupTime: "2022-06-15 2:00 PM",
     // dropoffTime: "2022-06-15 3:00 PM"
    //};
    // Call function to provide shuttle services for the given details
//provideShuttle(shuttle);
    // Add code to create special wedding packages that include transportation services and decorations
   // let weddingPackage = {
// packageType: "Deluxe",
  //vehicle: "Luxury SUV",
  //decoration: {
  // type: "Wedding",
   // flowers: "Lilies",
   // ribbons: "Gold"
// }, 
 // shuttle: {
    //pickupLocation: "Airport",
   // dropoffLocation: "Hotel",
   // pickupTime: "2022-06-14 2:00 PM",
   // dropoffTime: "2022-06-14 3:00 PM"
//  }
//};
 //Call function to create special wedding packages with the given details
//createWeddingPackage(weddingPackage);
//}

// Example usage of the wedding_car_rental_services function
//wedding_car_rental_services("Wedding Venue", "Accommodation", "Luxury Sedan", "2022-09-01", "10:00 AM", "2022-09-02", "10:00 AM");
  //?>
         
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">City Transfer</h3>
            
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Airport Transfer</h3>
             
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Whole City Tour</h3>
           
              </div>
            </div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Do You Want To Earn With Us? So Don't Be Late.</h2>
            <a href="contact.php" class="btn btn-primary btn-lg">Contact Us</a>
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
    
  </body>
</html>