<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>change total marks</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

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
                    <a href="changemarks.php">
                        <i class="ti-briefcase"></i>
                        <p> Total marks</p>
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
                    <a class="navbar-brand" href="changemarks.php"> marks</a>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="nav navbar-nav navbar-right">
                        
            <div>
                  
                <a href="dashboard.php" class="btn btn-success" role="button">back</a>
                <a href="logout.php" class="btn btn-danger" >LOGOUT</a>
                        </div>
                        
                    </div>

                </div>
            </div>
        </nav>
    
    <div class="content">
      <div class="container-fluid">
        <div class="row">                  
          <div class="col-lg-12 col-md-12">
            <div class="card panel panel-info">
                <div class="header panel-heading ">
                               <h4 class="title" ><center>CHANGE THE TOTAL MARKS</center> </h4>
                            </div>
                  <div class="content">
                      <div class="table-responsive"> 
                      <span id="result"></span> 
                     <div id="live_data"></div>
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

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
 
 <script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"mark.php",  
            method:"POST",  
            success:function(data){  
                $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    
        function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
                $('#result').html("<div class='alert alert-success'>"+data+"</div>");
                
            }
            
        });  
    }  
    $(document).on('blur', '.s1', function(){  
        var id = $(this).data("id1");  
        var s1 = $(this).text();  
        edit_data(id, s1, "s1");  
    });  
    $(document).on('blur', '.s2', function(){  
        var id = $(this).data("id2");  
        var s2 = $(this).text();  
        edit_data(id,s2, "s2");  
    }); 
    $(document).on('blur', '.s3', function(){  
        var id = $(this).data("id3");  
        var s3 = $(this).text();  
        edit_data(id,s3, "s3");  
    });
    $(document).on('blur', '.s4', function(){  
        var id = $(this).data("id4");  
        var s4 = $(this).text();  
        edit_data(id,s4, "s4");  
    });
    $(document).on('blur', '.s5', function(){  
        var id = $(this).data("id5");  
        var s5 = $(this).text();  
        edit_data(id,s5, "s5");  
    }); 
    $(document).on('blur', '.s6', function(){  
        var id = $(this).data("id6");  
        var s6 = $(this).text();  
        edit_data(id,s6, "s6");  
    });
    $(document).on('blur', '.total', function(){  
        var id = $(this).data("id7");  
        var total = $(this).text();  
        edit_data(id,total, "total");  
    });
 
 });  
</script>
