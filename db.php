<?php
  
   $connect=mysqli_connect("localhost","root","","vtasms");//Connecting to database
 if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
   } 
  
?>