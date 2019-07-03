<?php
   include('db.php');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($connect,"select `username`,`password` from `login` where `username` = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.html");
   } 
?>