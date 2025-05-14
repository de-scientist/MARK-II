<?php  include "php/connection.php" ?>
<?php

if($_SESSION['email'] !== 'admin@gmail.com'){
    header("Location: index.php");
   
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Mailer</title>
    <style>
    .container{
        margin:30px;
    }
    .container div{
        background-color:#f1f1f1;
     
        margin:10px;
    }
    .icons_body{
        padding:20px;
    }
    .icon_link{
        text-decoration:none;
        padding:10px;
        font-size:30px;
        color:green;
    }
    .msg{
        padding:20px 20px 80px 20px;
 font-size:20px;
 font-style:italic;
    }
    .user_body{
        padding:20px;
        font-size:18px;
    }
    .sub_body{
        padding:20px;
        font-weight:700;
        font-size:18px;
    }
    .end_body{
        padding:20px;
        font-size:18px;
    }

    </style>
</head>
<body>
    <h1 style='text-align:center;'>Contact Mail</h1>
  
    <?php
    if(isset($_GET['open_mail'])){
      $the_msg_id =   $_GET['open_mail'];
      $query = "SELECT * FROM messages WHERE msg_id = $the_msg_id";
      $select_user_msg = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($select_user_msg)){
       $id = $row['msg_id'];
         $username = $row['usrname'];
         $email = $row['email'];
         $subject  = $row['subject'];
         $date_sent = $row['date_sent'];
         $msg = $row['msg'];
    }
    }else{
        header("Location: messages.php");
    }
?>
    <div class='container'><!--container-->
    <a style='font-size:30px;cursor:point;margin:20px;'onclick='history.back()'><i class="fa fa-arrow-left"></i></a>
    <div class='icons_body'>
    <a class='icon_link' title='Return home'href="index.php"><i class="fas fa-car" ></i></a> 
    <a class='icon_link' title='Account' href="profile.php"><i class="fas fa-user-alt" ></i></a> 
   <a  class='icon_link'title='Return mails' href="messages.php"><i class="fa fa-envelope" ></i></a> 
   <a  class='icon_link' onClick="javascript: return confirm('Are you sure you want to delete?');" title='Delete message'href="mail_msg.php?delete=<?php echo $id;  ?>"><i class="fas fa-trash"></i></a>
    </div>
    <div class='user_body'>
   Username: <span style='font-weight:600;'><?php echo $username ?></span> 
    </div> 
    <div class='sub_body'>
     Subject: <?php echo $subject ?>
    </div>
    <div class='msg'>
   <?php echo $msg;  ?>
    </div>
    <div class='end_body'>
    All the best
    <br>
   <?php echo $date_sent ?>
    </div>
</div><!--container-->
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
</body>
</html>