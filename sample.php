<?php  
 if(isset($_POST["roll_no"]))  
 {  
     
      $output = '';  
      include "db.php";
      $query = "SELECT `student_name`,`message` FROM student WHERE roll_no='".$_POST["roll_no"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["student_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%" height="100" ><label>message</label></td>  
                     <td width="70%"height="100" >'.$row["message"].'</td>  
                </tr>';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>
