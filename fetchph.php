<?php  
 //fetch.php  
include "db.php";
include "session.php";
 if(isset($_POST["rollno"]))  
 {  
      $query = "SELECT * FROM student_phone WHERE rollno = '".$_POST["rollno"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>
 