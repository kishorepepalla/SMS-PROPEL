<?php  
 include "db.php"; 
  include "session.php"; 
 $output = '';  
  $query = "SELECT `student_name`,`message`,`roll_no`,`phone_no` FROM student";    
 $result = mysqli_query($connect, $query);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="40%">student Name</th>  
                               <th width="30%">phone no</th>  
                               <th width="30%">message</th> 
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	 
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     
                     <td>'. $row["student_name"].'</td> 
                     <td>'.$row["phone_no"].'</td> 
                     <td>
                     <input type="button" name="view" value="view" id="'. $row["roll_no"].'" class="btn btn-info btn-xs view_data" />
                     <button type="button" name="delete_btn" data-id3="'.$row["roll_no"].'" class="btn btn-xs btn-danger btn_delete">delete</button></td>  
                </tr>  
           ';  
      }  
      
 }  
  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>
 <script>
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var roll_no = $(this).attr("id");  
           $.ajax({  
                url:"sample.php",  
                method:"post",  
                data:{roll_no:roll_no},  
                success:function(data){  
                     $('#student_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });
</script>