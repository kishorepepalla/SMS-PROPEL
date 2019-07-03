<?php
include "db.php";
include "session.php";
$message = '';
if(isset($_POST['upload']))
{
 if($_FILES['data_file']['name'])
 {
  $filename = explode(".", $_FILES['data_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['data_file']['tmp_name'], "r");
   $x=$_POST["data"];
   switch ($x) {
     case '0':{
      echo "<script>alert('please select file type');
       window.location.href='dashboard.php';</script>";
     }
       break;
      case '1':
        {
          while($data = fgetcsv($handle))
   {
   $roll_no = mysqli_real_escape_string($connect, $data[0]);
   $student_name=mysqli_real_escape_string($connect,$data[1]);
  // $phone_no=mysqli_real_escape_string($connect,$data[2]);
   $sub1=mysqli_real_escape_string($connect,$data[2]);
   $sub2=mysqli_real_escape_string($connect,$data[3]);
   $sub3=mysqli_real_escape_string($connect,$data[4]);
   $sub4=mysqli_real_escape_string($connect,$data[5]);
   $sub5=mysqli_real_escape_string($connect,$data[6]);
   $sub6=mysqli_real_escape_string($connect,$data[7]);
   $total=mysqli_real_escape_string($connect,$data[8]);
   $query=mysqli_query($connect,"INSERT INTO `student` (`student_name`,`roll_no`,`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`total`) VALUES ('$student_name','$roll_no','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$total')");
   
    }
    if($query)
   {
       echo "<script>alert('data inserted successfully');
       window.location.href='dashboard.php';</script>";
   }
    else
       {
           echo "<script>
alert('data was not inserted');
window.location.href='dashboard.php';
</script>";
        
       }
   fclose($handle);
    
        }
     case '2':
     {
      while($data = fgetcsv($handle))
   {
   $sem = mysqli_real_escape_string($connect, $data[0]);
   $yearno=mysqli_real_escape_string($connect,$data[1]);
   $yearname=mysqli_real_escape_string($connect,$data[2]);
   $sub1=mysqli_real_escape_string($connect,$data[3]);
   $sub2=mysqli_real_escape_string($connect,$data[4]);
   $sub3=mysqli_real_escape_string($connect,$data[5]);
   $sub4=mysqli_real_escape_string($connect,$data[6]);
   $sub5=mysqli_real_escape_string($connect,$data[7]);
   $sub6=mysqli_real_escape_string($connect,$data[8]);
   $query=mysqli_query($connect,"INSERT INTO `sub_names` (`sem`,`year_id`,`year_name`,`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`) VALUES ('$sem','$yearno','$yearname','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6')");
   
    }
    if(!$query)
   {
       echo "<script>alert(' subject data was not inserted');
       window.location.href='dashboard.php';</script>";
   }
    else
       {
           echo "<script>
alert(' subject data inserted successfully');
window.location.href='dashboard.php';
</script>";
        
       }
   fclose($handle);
    
     }

     
     default:
       # code...
       break;
   }

  }
  else
  {
     echo "<script>alert('please select CSV File only');</script>";
    
    
  }
 }
 else
 {
     echo "<script>alert('please select File');</script>";

 }
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>VTA SMS </title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
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
                <a href="dashboard.php" class="simple-text">VTA SMS 
                </a>
      </div>
            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>fileuploading</p>
                    </a>
                </li>
                
                <li>
                    <a href="updatemessage.php">
                        <i class="ti-text"></i>
                        <p>update message</p>
                    </a>
                </li>
                <li>
                    <a href="changesubject.php">
                        <i class="ti-pencil-alt"></i>
                        <p>change subjects</p>
                    </a>
                </li>
                <li>
                    <a href="changemarks.php">
                        <i class="ti-briefcase"></i>
                        <p>change total marks</p>
                    </a>
                </li>
              
                
            </ul>
    	</div>
      
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-primary ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand " href="dashboard.php">Dashboard</a>
                </div>
                         <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                      <li>
                            <a href="basic.php" class="btn btn-success " >HOME</a>
                          </li>

                      <li>

                          <a href="logout.php" class="btn btn-danger " >LOGOUT</a>
                        </li>
                   </ul>
                </div>
            </div>
        </nav>

<div class="content">
 <div class="container-fluid">
  <div class="row">
     <div class="col-lg-12 col-md-12">
       <div class="card  panel panel-info">
           <div class="header panel-heading"> 
                   <h4 class="title" align="center" ><bold>UPLOAD DATA FILE</bold> </h4>
             </div>
             <div class="content panel-body">  
                 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype='multipart/form-data' >
                     <div class="row">
                    <div class="col-md-12">            
                    <div class="form-group ">
                         <marquee behavior="alternate" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                 <div class="alert alert-warning">
		       
		                <strong>please select file</strong> (only in CSV formate)
		             <br> 
                    <strong> The csv file must contain the data in two format<br>1.student data:...rollno|studentname|subjects|total
                      <br>2.subject data:.. semno|year no|year name|six subjects names...</strong>
		           </div>  
                        </marquee>                               
                      
                        </div>              
                      </div> 
                     </div>
                         <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                
                                                <input type="file" name="data_file"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                
                                                <select class="form-control" name="data" required>
                                                <option value="0"><bold>select file type</bold></option>
                                                <option value="1">student data</option>
                                                <option value="2">subject data</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group"><center>
                                                <button type="submit"  name="upload" class="btn btn-info btn-fill btn-wd">upload</button></center>
                                            </div>
                                        </div>
                                    </div>
                  
                            
           
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

	<script src="assets/js/paper-dashboard.js"></script>

	
	<script src="assets/js/demo.js"></script>

	
</html>
