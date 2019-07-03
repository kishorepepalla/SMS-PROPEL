   <?php  
   include "db.php";
   include "session.php";
    if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $name = mysqli_real_escape_string($connect, $_POST["name"]);  
      $rollno = mysqli_real_escape_string($connect, $_POST["rollno"]);  
      $phoneno = mysqli_real_escape_string($connect, $_POST["phoneno"]);      
      if($_POST["rollno"] != '')  
      {  
           $query = "  
           UPDATE student_phone   
           SET name='$name',   
           rollno='$rollno',   
           phoneno='$phoneno'           
           WHERE rollno='".$_POST["rollno"]."'";  
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO student_phone(name,rollno,phoneno)  
           VALUES('$name', '$rollno', '$phoneno');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM student_phone ";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr> 
                         
                          <th width="30%">STUDENT NAME</th> 
                           <th width="25%">ROLL NO</th> 
                                   <th width="20%">PHONE NO</th> 
                                   <th width="20%">ACTIONS</th> 
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr> 
                          
                          <td>' . $row["name"] . '</td>  
                          <td>' . $row["rollno"] . '</td>
                          <td>' . $row["phoneno"] . '</td>
                          <td><input type="button" name="edit" value="Edit" id="'.$row["rollno"] .'" class="btn btn-info btn-xs edit_data" />  
                          <input type="button" name="delete" value="delete" id="' . $row["rollno"] . '" class="btn btn-danger btn-xs delete_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>
 
