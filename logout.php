<?php
session_start();

 $_SESSION['email'] = null ;
 $_SESSION['password'] = null ;
 header("Location: login.php");
?>