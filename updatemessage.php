<?php
include "db.php";
include "session.php";

if (isset($_POST['submit'])) 
{
   
   $x=$_POST["yearofeducation"];
   $y=$_POST["examname"];
   $yredu=$_POST["yearofeducation"];
   $exam=$_POST["examname"];


    if($x=='0')
    {       
    	echo "<script>
alert('please fill the form fields');
window.location.href='updatemessage.php';
</script>";
        
    }
    else if($x=='2'){
           include "declare.php";
        $sql="SELECT `student_name`,`roll_no`,`phone_no`,`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`total` FROM student";
        $result=mysqli_query($connect,$sql);
        $num_row =mysqli_num_rows($result);

  
/*  
  if($num_row1>0)
  {
    while($row=mysqli_fetch_assoc($result1))
    {
      
    }
  } */

      if( $num_row> 0)
      {
 
    while($row = mysqli_fetch_assoc($result)) {
        $roll=$row["roll_no"];
        $sb1=$row["sub1"];
        $sb2=$row["sub2"];
        $sb3=$row["sub3"];
        $sb4=$row["sub4"];
        $sb5=$row["sub5"];
        $sb6=$row["sub6"];
        $tot=$row["total"];
        $sql1="SELECT `rollno`,`phoneno` FROM student_phone WHERE rollno='$roll'";
        $result1=mysqli_query($connect,$sql1);
        $num_row1=mysqli_num_rows($result1);
        if($num_row1==1)
        {
          while($row=mysqli_fetch_assoc($result1))
           {
            $phone_no=$row["phoneno"];
            $query1 = "UPDATE `student` SET `phone_no` = '$phone_no' WHERE roll_no='$roll'";
             mysqli_query($connect,$query1);
      
            }
         }
         else
         {
          echo "<script>alert('please check phone numbers')</script>";
         }
      
    $message="dear parent your ward " . $row["student_name"]."  studying  ".$year. " BTECH bearing   rollno: ".$roll."   got  ".$exam."   marks  " .$s1.":" .($sb1!="AB" ? $row["sub1"]."/".$t1 : ' AB ')."   ". $s2.":" .($sb2!="AB" ? $row["sub2"]."/".$t2 : ' AB ') ."  ".$s3.":" .($sb2!="AB" ? $row["sub3"]."/".$t3 : ' AB ') ."  ".$s4 .":" . ($sb4!="AB" ? $row["sub4"]."/".$t4 : ' AB ') ."   ".$s5. " :" . ($sb5!="AB" ? $row["sub5"]."/".$t5 : ' AB ')."  ".$s6 .":" .($sb6!="AB" ? $row["sub6"]."/".$t6 : ' AB ') ."  total:".$row["total"]."/".$t7."    YOURS VTA CSE. ";
   $query = "UPDATE `student` SET message = '$message' WHERE roll_no='$roll'";
        mysqli_query($connect,$query);
 }
    echo "<script>alert('updated')</script>";
}
else {
    echo "0 results".mysqli_error($connect);
}
     
      
 
   }else if($x=='3'){
        include "declare.php";
    $sql="SELECT `student_name`,`roll_no`,`phone_no`,`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`total` FROM student";
        $result=mysqli_query($connect,$sql);
        $num_row =mysqli_num_rows($result);

      if( $num_row> 0)
      {
 
    while($row = mysqli_fetch_assoc($result)) {
        $roll=$row["roll_no"];
        $sb1=$row["sub1"];
        $sb2=$row["sub2"];
        $sb3=$row["sub3"];
        $sb4=$row["sub4"];
        $sb5=$row["sub5"];
        $sb6=$row["sub6"];
        $tot=$row["total"];
        $sql1="SELECT `rollno`,`phoneno` FROM student_phone WHERE rollno='$roll'";
        $result1=mysqli_query($connect,$sql1);
        $num_row1=mysqli_num_rows($result1);
        if($num_row1==1)
        {
          while($row=mysqli_fetch_assoc($result1))
           {
            $phone_no=$row["phoneno"];
            $query1 = "UPDATE `student` SET `phone_no` = '$phone_no' WHERE roll_no='$roll'";
             mysqli_query($connect,$query1);
      
            }
         }
         else
         {
          echo "<script>alert('please check phone numbers')</script>";
         }       
      $message="dear parent your ward " . $row["student_name"]."  studying  ".$year. " BTECH bearing   rollno: ".$roll."   got  ".$exam."   marks  " .$s1.":" .($sb1!="AB" ? $row["sub1"]."/".$t1 : ' AB ')."   ". $s2.":" .($sb2!="AB" ? $row["sub2"]."/".$t2 : ' AB ') ."  ".$s3.":" .($sb2!="AB" ? $row["sub3"]."/".$t3 : ' AB ') ."  ".$s4 .":" . ($sb4!="AB" ? $row["sub4"]."/".$t4 : ' AB ') ."   ".$s5. " :" . ($sb5!="AB" ? $row["sub5"]."/".$t5 : ' AB ')."  ".$s6 .":" .($sb6!="AB" ? $row["sub6"]."/".$t6 : ' AB ') ."  total:".$row["total"]."/".$t7."    YOURS VTA CSE. ";
   $query = "UPDATE `student` SET message = '$message' WHERE roll_no='$roll'";
        mysqli_query($connect,$query);
 }
    echo "<script>alert('updated')</script>";
}
else {
    echo "0 results".mysqli_error($connect);
}
   }else if($x=='4')
   { 
       include "declare.php";
    $sql="SELECT `student_name`,`roll_no`,`phone_no`,`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`total` FROM student";
        $result=mysqli_query($connect,$sql);
        $num_row =mysqli_num_rows($result);

      if( $num_row> 0)
      {
 
    while($row = mysqli_fetch_assoc($result)) 
    {
        $roll=$row["roll_no"];
        $sb1=$row["sub1"];
        $sb2=$row["sub2"];
        $sb3=$row["sub3"];
        $sb4=$row["sub4"];
        $sb5=$row["sub5"];
        $sb6=$row["sub6"];
        $tot=$row["total"];
        $sql1="SELECT `rollno`,`phoneno` FROM student_phone WHERE rollno='$roll'";
        $result1=mysqli_query($connect,$sql1);
        $num_row1=mysqli_num_rows($result1);
        if($num_row1==1)
        {
          while($row=mysqli_fetch_assoc($result1))
           {
            $phone_no=$row["phoneno"];
            $query1 = "UPDATE `student` SET `phone_no` = '$phone_no' WHERE roll_no='$roll'";
             mysqli_query($connect,$query1);
      
            }
         }
         else
         {
          echo "<script>alert('please check phone numbers')</script>";
         }
    
     $message="dear parent your ward " . $row["student_name"]."  studying  ".$year. " BTECH bearing   rollno: ".$roll."   got  ".$exam."   marks  " .$s1.":" .($sb1!="AB" ? $row["sub1"]."/".$t1 : ' AB ')."   ". $s2.":" .($sb2!="AB" ? $row["sub2"]."/".$t2 : ' AB ') ."  ".$s3.":" .($sb2!="AB" ? $row["sub3"]."/".$t3 : ' AB ') ."  ".$s4 .":" . ($sb4!="AB" ? $row["sub4"]."/".$t4 : ' AB ') ."   ".$s5. " :" . ($sb5!="AB" ? $row["sub5"]."/".$t5 : ' AB ')."  ".$s6 .":" .($sb6!="AB" ? $row["sub6"]."/".$t6 : ' AB ') ."  total:".$row["total"]."/".$t7."    YOURS VTA CSE. ";
   $query = "UPDATE `student` SET message = '$message' WHERE roll_no='$roll'";
        mysqli_query($connect,$query);
 }
    echo "<script>alert('updated')</script>";
}
else {
    echo "0 results".mysqli_error($connect);
}
   }
    else
    {

    }

}   
mysqli_close($connect);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>update message</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

   	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    VTA SMS 
                </a>
            </div>
        <ul class="nav">
                
                <li class="active">
                    <a href="updatemessage.php">
                        <i class="ti-text"></i>
                        <p>update message</p>
                    </a>
                </li>
                <li>
                    <a href="previewmessage.php">
                        <i class="ti-eye"></i>
                        <p>preview message</p>
                    </a>
                </li>
                <li>
                    <a href="sendmessage.php">
                        <i class="ti-email"></i>
                        <p>send message</p>
                    </a>
                </li>
            </ul>

            
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="updatemessage.php">update message</a>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="nav navbar-nav navbar-right">
                        
            <div>
                  
                <a href="dashboard.php" class="btn btn-warning" role="button">back</a>
                <a href="previewmessage.php" class="btn btn-primary" role="button">next</a>
                        </div>
                        
                    </div>

                </div>
            </div>
        </nav>
    
    <div class="content">
      <div class="container-fluid">
        <div class="row">                  
          <div class="col-lg-8 col-md-7">
            <div class="card panel panel-default">
                <div class="header panel-heading text-white">
                               <h4 class="title" ><center>changing subject names</center> </h4>
                            </div>
                  <div class="content">
                                <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                    <div class="row">
                                      <div class="col-md-4">
                                           <div class="form-group">
                                  <label>select year of EDUCATION:</label>
                                               <select class="form-control" name="yearofeducation" required>
                                                <option value="0"><bold>select year</bold></option>
                                                <option value="2">II YEAR</option>
                                                <option value="3">III YEAR</option>
                                                <option value="4">IV YEAR</option></select>
                                          </div>
                                        </div>
                                    
                                      <div class="col-md-4">
                                           <div class="form-group">
                                  <label>name of EXAMINATION:</label>
                                               <select class="form-control" name="examname" required>
                                                <option value="0"><bold>select exam</bold></option>
                                                <option >MID TERM-I</option>
                                                <option >MID TERM-II</option>
                                                <option >UNIT TEST-I</option>
                                                    <option >UNIT TEST-II</option>
                                                    <option >UNIT TEST-III</option>
                                                    <option >UNIT TEST-IV</option>
                                                    <option >GRAND TEST</option>
                                               </select>
                                          </div>
                                        </div>
                                 <!--       <div class="col-md-4">
                                           <div class="form-group">
                                  <label>semester No:</label>
                                               <select class="form-control" name="semesterno" required>
                                                <option value="0"><bold>select exam</bold></option>
                                                <option value="1">1st sem</option>
                                                <option value="2">2nd sem</option>
                                                
                                               </select>
                                          </div>
                                        </div>
                                    </div>-->
                                    </div>
                                    
                                    
                                               
                                     <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="submit">Update message</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
