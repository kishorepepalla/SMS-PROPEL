<?php  
  include "db.php";
   include "session.php";
 $output ='';  
 $sql = "SELECT `sem`,`year_name`,`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`year_id`,`sub7`,`sub8` FROM sub_names_ext";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">YEAR NAME</th>  
                     <th width="10%">SEM</th>                     
                     <th width="10%">SUB1</th>  
                     <th width="10%">SUB2</th>
                     <th width="10%">SUB3</th>  
                     <th width="10%">SUB4</th> 
                     <th width="10%">SUB5</th> 
                     <th width="10%">SUB6</th> 
                     <th width="10%">SUB7</th>
                     <th width="10%">SUB8</th>                   
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td  >'.$row["year_name"].'</td>  
                     <td class="sem" data-id1="'.$row["year_id"].'" contenteditable>'.$row["sem"].'</td> 
                     <td class="sub1" data-id2="'.$row["year_id"].'" contenteditable>'.$row["sub1"].'</td> 
                     <td class="sub2" data-id3="'.$row["year_id"].'" contenteditable>'.$row["sub2"].'</td> 
                     <td class="sub3" data-id4="'.$row["year_id"].'" contenteditable>'.$row["sub3"].'</td> 
                     <td class="sub4" data-id5="'.$row["year_id"].'" contenteditable>'.$row["sub4"].'</td> 
                     <td class="sub5" data-id6="'.$row["year_id"].'" contenteditable>'.$row["sub5"].'</td> 
                     <td class="sub6" data-id7="'.$row["year_id"].'" contenteditable>'.$row["sub6"].'</td> 
                     <td class="sub6" data-id7="'.$row["year_id"].'" contenteditable>'.$row["sub7"].'</td>
                     <td class="sub6" data-id7="'.$row["year_id"].'" contenteditable>'.$row["sub8"].'</td>
               </tr>  
           ';  
      }  
      
 }  
 
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>