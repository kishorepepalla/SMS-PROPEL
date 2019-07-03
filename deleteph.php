<?php  
    include "db.php";
    include "session.php";
    $output='';
	$sql = "DELETE FROM student_phone WHERE rollno = '".$_POST["rollno"]."'";      
     

 ?>