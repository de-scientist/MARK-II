<?php  include "php/connection.php" ?>
<!DOCTYPE html>
<html>
<head>
<title>Admin page</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="images/maybach.jpg">
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

<style>
    body{
        /* padding:20px; */
    }
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
.header{
background-color:#f1f1f1;
margin:10px;
border-radius:10px;
padding:20px;
}
</style>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Admin <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Admin dashboard</h1>
          </div>
        </div>
      </div>
    </section>
<div style='margin:20px;'>
<?php

if($_SESSION['email'] !== 'gitaumark502@gmail.com'){
    header("Location: index.php");
   
}
?>
<div class='header'><h1>Admin</h1></div>

<!-- <div class='header'><h3>All bookings</h3></div> -->

<table>
  <tr>
  <th>Image</th>
  <th>Username</th>
  <th>Plate Number</th>
  <th>Mobile Number</th>
  <th>Payment</th>
  <th>Verify</th>
  <th>Delete transcation</th>
  </tr>
  <?php
   $query = "SELECT * FROM bookings_db";
   $select_user_cars = mysqli_query($connection,$query);
   while($row = mysqli_fetch_assoc($select_user_cars)){
    $id = $row['booking_id'];
      $mobile_no = $row['user_number'];
      $username = $row['username'];
      $vehicle = $row['vehicle'];
      $time  = $row['pickup_time'];
      $date_booked = $row['date_booked'];
      $status = $row['status'];
      ?>
  
  <tr>
  <td>
  <?php
$query = "SELECT * FROM cars_db WHERE plate_number = '$vehicle'";
$image_query = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($image_query)){
$car_image = $row['car_image'];
}

?>
  
  <img src="images/<?php echo $car_image ?>" width='70px' alt=""></td>
  <td><?php echo $username ?></td>
  <td> <?php echo $vehicle ?></td>
  <td><?php echo $mobile_no ?></td>
  <td><?php  echo $status ?></td>
  <td> <a href="dashboard.php?verify=<?php echo $id ?>">Verify</a></td>
  <td> <a href="dashboard.php?delete=<?php echo $id ?>">Delete</a></td>
  </tr>
  <?php
   }
?>
</table>
<?php   
if(isset($_GET['verify'])){
   $the_id =  $_GET['verify'];
    $query = "UPDATE bookings_db SET";
    $query .= " status = 'paid'";
    $query .= " WHERE booking_id = $the_id";
    $update_status = mysqli_query($connection,$query);
    if($update_status){
        header("Location: dashboard.php");
    }
    

}
if(isset($_GET['delete'])){
    $the_id =  $_GET['delete'];
     $query = "DELETE FROM bookings_db WHERE booking_id = $the_id";
     $delete_transcation = mysqli_query($connection,$query);
     if($delete_transcation){
         header("Location: dashboard.php");
     }
     
 
 }
?>
</div>


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
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKUfT_dsPyjzcAKtDk-ZYiRIC5rPNVxac&callback=initMap">
</script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
      
</body>
</html>


