<?php
$connection = mysqli_connect("localhost", "root", "", "car_hire_db");
	// Check connection
    if($connection === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
   
    ob_start();
    session_start();  
    // error_reporting(0); 
    
?>