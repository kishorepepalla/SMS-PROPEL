
<?php
include "db.php";
include "session.php";
/*here declare the variables */
//fetching the subject names
 $sql1="SELECT `sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`sub7`,`sub8`,`s1`,`s2`,`s3`,`s4`,`s5`,`s6`,`s7`,`s8`,`total`,`year_name`,`SEM` FROM sub_names_ext WHERE year_id ='".$y."' ";
$result1 = mysqli_query($connect,$sql1);
while($row = mysqli_fetch_array($result1)) {
$s1=$row["sub1"];
$s2=$row["sub2"];
$s3=$row["sub3"];
$s4=$row["sub4"];
$s5=$row["sub5"];
$s6=$row["sub6"];
$s7=$row["sub7"];
$s8=$row["sub8"];
$year=$row["year_name"];
$t1=$row["s1"];
$t2=$row["s2"];
$t3=$row["s3"];
$t4=$row["s4"];
$t5=$row["s5"];
$t6=$row["s6"];
$t7=$row["s7"];
$t8=$row["s8"];
$t9=$row["total"];
$sem=$row["SEM"];

}


//the current year value



?>
