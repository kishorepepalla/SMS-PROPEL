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
    while($data = fgetcsv($handle))
   {
   $roll_no = mysqli_real_escape_string($connect, $data[0]);
   $student_name=mysqli_real_escape_string($connect,$data[1]);
   $phone_no=mysqli_real_escape_string($connect,$data[2]);
    $query=mysqli_query($connect,"INSERT INTO `student_phone` (`name`,`rollno`,`phoneno`) VALUES ('$student_name','$roll_no','$phone_no')");
   
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
                    <a href="ph_upload.php">
                        <i class="ti-panel"></i>
                        <p>PHONENO UPLOAD</p>
                    </a>
                </li>
                
                <li>
                    <a href="ph_no.php">
                        <i class="ti-mobile"></i>
                        <p>PHONE NUMBERS</p>
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
                    <a class="navbar-brand " href="ph_upload.php">phoneno upload</a>
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
                    <strong> The csv file must contain the data in format<br>1.phoneno data:...rollno|studentname|phoneno
                      </strong>
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
