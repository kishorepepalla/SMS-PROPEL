

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>change subjects</title>
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
                    <a href="changesubject.php">
                        <i class="ti-pencil-alt"></i>
                        <p> subjects</p>
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
                    <a class="navbar-brand" href="changesubject.php"> subjects</a>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="nav navbar-nav navbar-right">
                        
            <div>
                  
                <a href="dashboard.php" class="btn btn-success" role="button">back</a>
                <a href="logout.php" class="btn btn-danger " >LOGOUT</a>
                        </div>
                        
                    </div>

                </div>
            </div>
        </nav>
    
    <div class="content">
      <div class="container-fluid">
        <div class="row">                  
          <div class="col-lg-12 col-md-12">
            <div class="card panel panel-warning">
                <div class="header panel-heading text-white">
                               <h4 class="title" ><center>CHANGE THE SUBJECTS</center> </h4>
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
            url:"select.php",  
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
    $(document).on('blur', '.sem', function(){  
        var id = $(this).data("id1");  
        var sem = $(this).text();  
        edit_data(id, sem, "sem");  
    });  
    $(document).on('blur', '.sub1', function(){  
        var id = $(this).data("id2");  
        var sub1 = $(this).text();  
        edit_data(id,sub1, "sub1");  
    }); 
    $(document).on('blur', '.sub2', function(){  
        var id = $(this).data("id3");  
        var sub2 = $(this).text();  
        edit_data(id,sub2, "sub2");  
    });
    $(document).on('blur', '.sub3', function(){  
        var id = $(this).data("id4");  
        var sub3 = $(this).text();  
        edit_data(id,sub3, "sub3");  
    });
    $(document).on('blur', '.sub4', function(){  
        var id = $(this).data("id5");  
        var sub4 = $(this).text();  
        edit_data(id,sub4, "sub4");  
    }); 
    $(document).on('blur', '.sub5', function(){  
        var id = $(this).data("id6");  
        var sub5 = $(this).text();  
        edit_data(id,sub5, "sub5");  
    });
    $(document).on('blur', '.sub6', function(){  
        var id = $(this).data("id7");  
        var sub6 = $(this).text();  
        edit_data(id,sub6, "sub6");  
    });
 
 });  
</script>
