<?php
include 'db.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $username = mysqli_real_escape_string($connect,$_POST['username']);
      $password = mysqli_real_escape_string($connect,$_POST['password']); 

      $sql = "SELECT `username` , `password` FROM `login` WHERE username = '$username'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result);
      $pass=$row['password'];
      $count = mysqli_num_rows($result);
      $pass1=md5($password);

      if($count == 1) 
      {
       //  session_register("myusername");
          
              if($pass1==$pass)
              {
         
      // If result matched $myusername and $mypassword, table row must be 1 row
                    $_SESSION['login_user'] = $username;
                    if($username=="vtacsedept")
                    {
                          echo "<script type='text/javascript'>alert(\"login successfully!!!\")</script>";
          echo '<script type="text/javascript">';
      echo 'window.location="basic.php";';
      echo '</script>'; 
                      }             
                   
              }
            else {      
            
              echo '<script type="text/javascript">';
      echo 'window.location="index.html";';
      echo '</script>';
             }
     
     }
       else{

         echo "<script type='text/javascript'>alert(\" Invalid  Credentials!!!\")</script>";
          echo '<script type="text/javascript">';
      echo 'window.location="index.html";';
      echo '</script>'; 
  
       }  
  
  }
  ?>
 
