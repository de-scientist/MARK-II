<?php  include "php/connection.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard</title>
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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Bookings</h1>
          </div>
        </div>
      </div>
    </section>
<!--body-->

<div class='profile_main_card'>

<?php   
if(isset($_SESSION['email'])){
   $email =  $_SESSION['email'];
}else{
    header("Location:index.php");
}
?>
<?php
$query = "SELECT * FROM users WHERE email = '$email'";
$select_user = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_user)){
   $db_name = $row['name'];
 $db_email=  $row['email'] ;
  $db_number = $row['mobile_number'] ; 
   $db_pwd = $row['password'] ;

}

?>

  <form action="" method="POST">
  <?php
//update account
if(isset($_POST['update_acc'])){
 $db_name = $_POST['name'];
 $db_number =  $_POST['number'];
 $db_pwd =  $_POST['pwd'];

  $email =  $_SESSION['email'];
  $query = "UPDATE users SET ";
  $query .= " name = '$db_name', "; 
  $query .= "  mobile_number = '$db_number', "; 
  $query .= " password = '$db_pwd'"; 
  $query .= " WHERE email = '$email'"; 
  $update_user = mysqli_query($connection,$query);
  if($update_user){
   echo'<div class="">Profile updated successfully!!</div>';
  }else{
    echo'<div class="">Profile failed to update!!</div>';  
  }
}
if(isset($_POST['delete_acc'])){
  $email =  $_SESSION['email'];
  $query = "DELETE FROM users WHERE email = '$email'";
  $delete_account = mysqli_query($connection,$query);
  if($delete_account){
    //kill all session
    $_SESSION['email'] = null ;
    $_SESSION['password'] = null ;
    header("Location: index.php");
  }

}

?>
    <div style='display:block;'><i class='fas fa-user-alt'></i> <input class='input_field' type="text" name='name' value='<?php echo $db_name ?>'></div>
    <div style='display:block;'><i class="fa fa-envelope"></i> <input class='input_field' type="email" name='email' value='<?php echo $db_email ?>'disabled></div>
    <div style='display:block;'><i class='fas fa-phone'></i> <input class='input_field' type="text" name='number' value='<?php echo $db_number ?>' ></div>
    <div style='display:block;'><i class='fas fa-key'></i> <input class='input_field' type="password" name='pwd' value='<?php echo $db_pwd ?>'></div>
    <div class='btn_submits'>
<div><input  type="submit" value="Update Details" name='update_acc' class="btn btn-primary py-3 px-5"></div>
<div><input   type="submit" value="Delete Account" name='delete_acc' class="btn btn-primary py-3 px-5"></div>
</div>
</form>
</div>

<h1 style='margin:auto;width:200px;'>Car hired</h1>
<?php 
$query = "SELECT * FROM bookings_db WHERE user_email = '$email'";
$select_user_cars = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_user_cars)){
   $mobile_no = $row['user_number'];
   $username = $row['username'];
   $vehicle = $row['vehicle'];
   $time  = $row['pickup_time'];
   $status = $row['status'];
   ?>
   
   <div class='booking_repo'>

<div class='img_repo'>
    <?php
$query = "SELECT * FROM cars_db WHERE plate_number = '$vehicle'";
$image_query = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($image_query)){
$car_image = $row['car_image'];
}

?>
<img src="images/<?php echo $car_image ?>" width='150px' alt="">
</div>
<div class='username_repo'>
<?php echo $username ?>
</div>
<div class='time_repo'>Pickup time: 
  <span style='color:black;'><?php 
 
$date = substr($time, 0, 10);
$hr = substr($time, 11);
 echo $date .",  ". $hr ." hrs";
  ?>
</span>

</div>
<div class='status_repo'>Payment:
<?php
if($status === 'paid'){
  $color_status = 'paid';
}else{
  $color_status = 'pending';
}
?>
<span class='<?php echo $color_status  ?>'><?php echo $status  ?></span></div>

</div>
   <?php

}

?>

<?php
$count = mysqli_num_rows($select_user_cars);
if($count === 0){
    echo "
    <div class='no_bookings'>
    <h3>No bookings!!</h3>
    </div>
    ";


}
?>

<!--body-->
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