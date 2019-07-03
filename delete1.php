<?php  
    include "db.php";
    include "session.php";
	$sql = "DELETE FROM student WHERE roll_no = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>