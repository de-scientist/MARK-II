<?php  include "php/connection.php" ?>
<!DOCTYPE html>
<html>
<head>
<title>Messages</title>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Messages <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Contact Messages</h1>
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
<div class='header'><h1>Messages</h1></div>

<!-- <div class='header'><h3>All bookings</h3></div> -->

<table>
  <tr>
  <th>Username</th>
  <th>Subject</th>
  <th>Messages</th>
  <th></th>
  <th></th>
  </tr>
  <?php
   $query = "SELECT * FROM messages ORDER BY msg_id DESC";
   $select_user_msg = mysqli_query($connection,$query);
   while($row = mysqli_fetch_assoc($select_user_msg)){
    $id = $row['msg_id'];
      $username = $row['username'];
      $email = $row['email'];
      $subject  = $row['subject'];
      $date_sent = $row['date_sent'];
      $msg = $row['msg'];
      ?>
  
  <tr>
  <td>
 
  
 <?php echo $username ?></td>
  <td><?php echo $subject ?></td>
  <td> <?php echo $msg ?></td>
 
  <td> <a href="mail_msg.php?open_mail=<?php echo $id ?>">Open</a></td>
  <td> <a onClick="javascript: return confirm('Are you sure you want to delete?');" href="messages.php?delete=<?php echo $id ?>">Delete</a></td>
  <td><?php  echo $date_sent ?></td>
  </tr>
  <?php
   }
?>
</table>
<?php   

if(isset($_GET['delete'])){
    $the_id =  $_GET['delete'];
     $query = "DELETE FROM messages WHERE msg_id = $the_id";
     $delete_msg = mysqli_query($connection,$query);
     if($delete_msg){
         header("Location: messages.php");
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
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
      
</body>
</html>


