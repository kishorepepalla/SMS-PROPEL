<?php 
include "db.php";
 include "session.php";
$ch = curl_init();
$user="vtaclgsrin";
$password="vtaclgsrin@9";
$senderID="VTASMS";
if (isset($_POST['submit'])) 
{
$sql="SELECT `phone_no`,`message` FROM student";
$result=mysqli_query($connect,$sql);
$num_row =mysqli_num_rows($result);
if( $num_row> 0)
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        $receipientno=$row["phone_no"];
        $msgtxt=$row["message"];
        curl_setopt($ch,CURLOPT_URL,  "http://mahaoffers.in/SMS_API/sendsms.php?");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, " username=$user&password=$password&mobile=$receipientno&message=$msgtxt&sendername=$senderID");
        $buffer = curl_exec($ch);
       if(empty ($buffer))      
       {           
        echo " buffer is empty ";
}
else
{ 
     list($status,$encrpt)=explode(";",$buffer);
    $no="Status:0";
    $yes="Status:1";
    
    if($status==$yes)
    {echo "<script>
alert('send message successfully');
window.location.href='sendmessage.php';
</script>";      
       
    }
    else
    {     
         
         echo "<script>
alert('message was not send,please check API connnection');
window.location.href='sendmessage.php';
</script>";
    }
    print_r($status);
    
    echo $buffer;
} 

    }
    curl_close($ch);
   
}
}

 mysqli_close($connect);
?>
<?php
include "db.php";
if(isset($_POST['delete']))
{
    
    if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
//$sql = "DELETE `student_name`,`roll_no`,`phone_no`,`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`total`,`message` FROM student WHERE ";
$sql="TRUNCATE TABLE student";
if (mysqli_query($connect, $sql)) {
    echo "<script>alert('data deleted successfully');
       window.location.href='dashboard.php';</script>";
} else {
     echo "<script>alert('data was not deleted');
       window.location.href='sendmessage.php';</script>";
    
}

}
mysqli_close($connect);

?>
<?php
include "db.php";
if(isset($_POST['format']))
{
    
    if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
//$sql = "DELETE `student_name`,`roll_no`,`phone_no`,`sub1`,`sub2`,`sub3`,`sub4`,`sub5`,`sub6`,`total`,`message` FROM student WHERE ";
$sql="TRUNCATE TABLE sub_names ";
if (mysqli_query($connect, $sql)) {
    echo "<script>alert('formated successfully');
       window.location.href='dashboard.php';</script>";
} else {
     echo "<script>alert('data was not formated');
       window.location.href='sendmessage.php';</script>";
    
}

}
mysqli_close($connect);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>send  message</title>

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
                    <a class="navbar-brand" href="sendmessage.php">send message</a>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="nav navbar-nav navbar-right">
                        
            <div>
                  
                <a href="updatemessage.php" class="btn btn-warning" role="button">back</a>
                 <a href="dashboard.php" class="btn btn-primary" role="button">START PAGE</a>
                <ul class="nav navbar-nav navbar-right">
                      <li>
                        <a href="logout.php" class="btn btn-danger " >LOGOUT</a>
                        <!-- <a href="logout.php">
                <i class="ti-infinite info"></i>
                <p>logout</p>
                            </a>  -->
                        </li>
                   </ul>

                        </div>
                        
                    </div>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                     <div class="col-lg-4 col-md-4">
                        <div class="card panel panel-warning">
                            <div class="header panel-heading">
                                <h4 class="title "><center>send message</center></h4>
                            </div>
                            <div class="content panel-body">
                                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                    <div class="row">
                                        
                                            <div class="form-group text-center">
                                                 <button type="submit" class="btn btn-info btn-fill btn-wd" name="submit">send message</button>                                                
                                            </div>
                                                           
                                </div>
                             </form>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-lg-4 col-md-4">
                        <div class="card panel panel-danger">
                            <div class="header panel-heading">
                                <h4 class="title "><center>delete data</center></h4>
                            </div>
                            <div class="content panel-body">
                                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                    <div class="row">
                                        
                                            <div class="form-group text-center">
                                                 <button type="submit" class="btn btn-info btn-fill btn-wd" name="delete">DELETE</button>                                                
                                            </div>
                                                           
                                </div>
                             </form>
                            </div>
                        </div>
                    </div>
                 <!--   <div class="col-lg-4 col-md-4">
                        <div class="card panel panel-warning">
                            <div class="header panel-heading">
                                <h4 class="title "><center>FORMAT DATA</center></h4>
                            </div>
                            <div class="content panel-body">
                                <form action="<?php/* echo $_SERVER['PHP_SELF']; */?>" method="post">
                                    <div class="row">
                                        
                                            <div class="form-group text-center">
                                                 <button type="submit" class="btn btn-info btn-fill btn-wd" name="format">format data</button>                                                
                                            </div>
                                                           
                                </div>
                             </form>
                            </div>
                        </div>
                    </div>  -->

                    



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
