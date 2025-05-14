<?php 
 include "php/connection.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mark II Limited</title>
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
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
	            <p style="font-size: 18px;"> Looking for a convenient and reliable way to rent a car? Look no further than our car rental service! Our vehicles are well-maintained and equipped with all the features you need to make your trip comfortable and hassle-free. Whether you're traveling for business or pleasure, we have a wide range of cars to choose from, so you're sure to find one that suits your needs. Book your rental today and enjoy the freedom to explore your destination at your own pace!</p>
	            <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<span class="ion-ios-play"></span>
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span>Easy steps for renting a car</span>
	            	</div>
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  					
    </section>


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Featured Vehicles</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
     <?php
    	//select cars
      $query = "SELECT * FROM cars_db";
      $select_cars = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($select_cars)){
        $plate_number = $row['plate_number'];
        $car_name = $row['car_name'];
        $brand = $row['company_name'];
        $car_image  = $row['car_image'];
        $car_class = $row['car_class'];
        ?>

        			<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/<?php echo $car_image ?>);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#"><?php echo $car_name ?></a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat"><?php  echo $brand ?></span>

			    						<p class="price ml-auto">
                      <?php
								//check class and get average 
								
								$query = "SELECT * FROM car_classes_db WHERE car_class = '$car_class'";
								$select_classes = mysqli_query($connection,$query);
								while($row = mysqli_fetch_assoc($select_classes)){
								$price = $row['price'];
								}
								echo $price;

								
								?>

                         <span>/day</span></p>
		    						</div>
                    <p class="d-flex mb-0 d-block"><a href="payment.php?plate=<?php echo $plate_number; ?>" class="btn btn-primary py-2 mr-1" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php?plate=<?php echo $plate_number; ?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
        <?php
      }

     ?>

              
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">About us</span>
	            <h2 class="mb-4">Welcome to MARK II</h2>

	           <p>If you're looking for quality and affordable car hire , look no further than MARK II. Our company has earned a reputation as a renowned provider of reliable and comfortable transportation services. At MARK II, we put our customers first and are committed to providing the highest levels of service and satisfaction. Whether you need a car for business or pleasure, we have a wide range of vehicles to choose from, all of which are well-maintained and fully equipped to meet your needs. So why wait? Book your next ride with MARK II and experience the difference for yourself!</p>
	          </div>
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
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Wedding Ceremony</h3>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">City Transfer</h3>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Airport Transfer</h3>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Whole City Tour</h3>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
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
            <a href="contact.php" target="_blank" class="btn btn-primary btn-lg">Contact Us</a>
          </div>
				</div>
			</div>
		</section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url( images/timo.png)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4"> "Mark II Car Rental is my go-to for all of my rental needs. They make the process easy and stress-free, and their rates are unbeatable." - Timothy</p>
                    <p class="name">Timothy Karanja</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5"> 
                <div class="user-img mb-2" style="background-image: url( images/Osborn.png)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4"> "I've rented from several car rental companies in the past, but Mark II Car Rental is by far the best. Their vehicles are always clean and well-maintained, and their staff is friendly and professional." - Maja</p>
                    <p class="name">Osborn Maja</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url( images/Kenny1.png)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4"> "I had a small issue with my rental car and Mark II Car Rental went above and beyond to make it right. Their customer service is truly exceptional." - Kenny</p>
                    <p class="name">Kennedy Nyoike</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/siz.png )">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4"> "I rented a car from Mark II Car Rental for a weekend getaway and was blown away by the quality of the car and the service. I will definitely be using them again in the future." - Joan</p>
                    <p class="name">Joan Shii</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/jane.png)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4"> "Mark II Car Rental has the best rates and the friendliest staff. Their website is easy to use and the rental process is quick and painless." - Jane</p>
                    <p class="name">Jane Wanjiru</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  

    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="60">0</strong>
                <span>Year <br>Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <?php
                //total cars in database
                $query = "SELECT * FROM  cars_db";
                $select_cars_no = mysqli_query($connection,$query);
                $car_count = mysqli_num_rows($select_cars_no);

                ?>
                <strong class="number" data-number="<?php echo $car_count ?>">0</strong>
                <span>Total <br>Cars</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="2590">0</strong>
                <span>Happy <br>Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
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
  <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script  src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>