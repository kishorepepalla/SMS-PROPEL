<?php  
  include "db.php";
   include "session.php";
 $output = '';  
 $sql = "SELECT `sem`,`year_name`,`s1`,`s2`,`s3`,`s4`,`s5`,`s6`,`total`,`year_id` FROM sub_names";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="20%">YEAR NAME</th>  
                     <th width="10%">SEM</th>                     
                     <th width="10%">SUB1</th>  
                     <th width="10%">SUB2</th>
                     <th width="10%">SUB3</th>  
                     <th width="10%">SUB4</th> 
                     <th width="10%">SUB5</th> 
                     <th width="10%">SUB6</th> 
                     <th width="10%">TOTAL</th> 
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td  >'.$row["year_name"].'</td>  
                     <td  >'.$row["sem"].'</td> 
                     <td class="s1" data-id1="'.$row["year_id"].'" contenteditable>'.$row["s1"].'</td> 
                     <td class="s2" data-id2="'.$row["year_id"].'" contenteditable>'.$row["s2"].'</td> 
                     <td class="s3" data-id3="'.$row["year_id"].'" contenteditable>'.$row["s3"].'</td> 
                     <td class="s4" data-id4="'.$row["year_id"].'" contenteditable>'.$row["s4"].'</td> 
                     <td class="s5" data-id5="'.$row["year_id"].'" contenteditable>'.$row["s5"].'</td> 
                     <td class="s6" data-id6="'.$row["year_id"].'" contenteditable>'.$row["s6"].'</td> 
                     <td class="total" data-id7="'.$row["year_id"].'" contenteditable>'.$row["total"].'</td> 
                     
               </tr>  
           ';  
      }  
      
 }  
 
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>