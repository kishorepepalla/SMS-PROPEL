<?php 
include "db.php";
include "session.php";
 $query = "SELECT `name`,`rollno`,`phoneno` FROM student_phone";  
 $result = mysqli_query($connect, $query);  
 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>phone numbers</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>  

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
                <a href="ph_no.php" class="simple-text">
                    VTA SMS 
                </a>
            </div>
                <ul class="nav">
                   <li class="">
                    <a href="ph_upload.php">
                        <i class="ti-mobile"></i>
                        <p>phoneno upload</p>
                    </a>
                </li>
                 <li class="active">
                    <a href="ph_no.php">
                        <i class="ti-mobile"></i>
                        <p>phone numbers</p>
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
                    <a class="navbar-brand" href="ph_no.php">phone numbers</a>
                </div>
                <div class="collapse navbar-collapse">
                    <div class="nav navbar-nav navbar-right">
                        
            <div>
                  
                <a href="basic.php" class="btn btn-warning" role="button">back</a>
                
                        </div>
                        
                    </div>

                </div>
            </div>
        </nav>
    
    <div class="content">
      <div class="container-fluid">
        <div class="row">                  
          <div class="col-lg-12 col-md-12">
            <div class="card panel panel-success">
                <div class="header panel-heading text-white">
                               <h4 class="title" ><center>ALL STUDENTS PHONE NUMBERS</center> </h4>
                            </div>
                  <div class="content">
                      <div class="table-responsive"> 

                     <div align="right">  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-success">Add</button>  
                     </div>  
                     <br />  
                     <div id="phoneno_table">  
                          <table class="table table-bordered">  
                               <tr> 
                               
                                    <th width="35%">STUDENT NAME</th> 
                                    <th width="25%">ROLL NO</th> 
                                   <th width="20%">PHONE NO</th> 
                                   <th width="20%">ACTIONS</th>  
                                      
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>
                                    <td><?php echo $row["name"]; ?></td>  
                                    <td><?php echo $row["rollno"]; ?></td>
                                    <td><?php echo $row["phoneno"]; ?></td>  
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["rollno"]; ?>" class="btn btn-info btn-xs edit_data" />  
                                    <input type="button" name="delete" value="delete" id="<?php echo $row["rollno"]; ?>" class="btn btn-danger btn-xs delete_data" /></td>  
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
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

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">student Details</h4>  
                </div>  
                <div class="modal-body" id="student_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  

 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">EDIT THE STUDENT DATA</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Enter student Name</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>Enter student rollno</label>  
                          <input name="rollno" id="rollno" class="form-control"/>
                          <br />  
                          <label>Enter phone number</label>  
                           <input type="text" name="phoneno" id="phoneno" class="form-control" />    <br />  
                           
                          
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  

 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var rollno = $(this).attr("id");  
           $.ajax({  
                url:"fetchph.php",  
                method:"POST",  
                data:{rollno:rollno},  
                dataType:"json",  
                success:function(data){  
                     $('#name').val(data.name);  
                     $('#rollno').val(data.rollno);  
                     $('#phoneno').val(data.phoneno);                      
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#name').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#rollno').val() == '')  
           {  
                alert("rollno is required");  
           }  
           else if($('#phoneno').val() == '')  
           {  
                alert("phoneno is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insertph.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#phoneno_table').html(data);  
                     }  
                });  
           }  
      }); 
      $(document).on('click', '.delete_data', function(){  
        var rollno=$(this).attr("id");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"deleteph.php",  
                method:"POST",  
                data:{rollno:rollno},  
               success:function(data){  
                    alert(data); 

                     $('#phoneno_table').html(data);
                     
                }  
            });  
        }  
    });  
        
 });  
 </script>
