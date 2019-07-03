<?php
include "db.php";
include "session.php";

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
                <li class="active ">
                    <a href="dashboard.php " >
                        <i class="ti-import"></i>
                        <p class="btn btn-warning">Internal exams</p>
                    </a>
                </li>
                <li class="active ">
                    <a href="dashboard1.php " >
                        <i class="ti-export"></i>
                        <p class="btn btn-success">External exams</p>
                    </a>
                </li>
                <li class="active ">
                    <a href="ph_no.php " >
                        <i class="ti-mobile"></i>
                        <p class="btn btn-primary">Phone Numbers</p>
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
                    <a class="navbar-brand " href="">Dashboard</a>
                </div>
                         <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
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
    
    <div class="col-md-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"></h4>
        </div>
        <div class="card-body collapse in">
          <div class="card-block">
            <div id="carousel-pause" class="carousel slide" data-ride="carousel" data-pause="hover">
              <ol class="carousel-indicators">
                <li data-target="#carousel-pause" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-pause" data-slide-to="1"></li>
                <li data-target="#carousel-pause" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img src="assets\img\background\VEC.jpg" alt="First slide">
                </div>
                
              </div>
              <a class="left carousel-control" href="#carousel-pause" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-pause" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
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

  <script type="text/javascript">
      $(document).ready(function(){

          demo.initChartist();

          $.notify({
              icon: 'ti-gift',
              message: "Welcome to <b>VTA SMS PROPEL</b> - complete your work very fast from here."

            },{
                type: 'success',
                timer: 100
            });

      });
  </script>

</html>
