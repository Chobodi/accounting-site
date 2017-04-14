<?php
session_start();
require_once 'db/dbConnection.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accounting Site</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="#">Admin Panel</a>
                <div style="color: white; padding: 15px 50px 15px 950px; float: right; font-size: 16px;">  <a href="logout.php"><input type="button" class="btn btn-primary" value="Logout"></input></a> </div>
            </div>

        </nav>   
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <br><br>
                    <li>
                        <a href="admin.php" class="active-menu"><i class="fa fa-pagelines"></i>Question Papers</a>
                        <a href="news.php" class="active-menu"><i class="fa fa-globe"></i>News</a>
                        <a href="answer.php" class="active-menu"><i class="fa fa-question"></i>Provide Answers</a>
                        <a href="addNewStudent.php" class="active-menu"><i class="fa fa-sign-in"></i>Add Student</a>
                        <a href="viewStudents.php" class="active-menu"><i class="fa fa-list"></i>View Students</a>
                        <a href="forumAnswer.php" class="active-menu"><i class="fa fa-question-circle"></i>Forum Questions</a>
                        <a href="settings.php" class="active-menu"><i class="fa fa-circle-o"></i>Settings</a>
                        
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
		<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Select Category
                        </h1>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-5 col-md-offset-3">
		  <!-- login form starts -->
                    <form action="viewNames.php" class="form-horizontal" method="post">
                        <fieldset>
                        
                        
                        
                        <div class="form-group">
						      <label class="col-sm-4 control-label" for="examination">Examination Category</label>
						      <div class="col-sm-8">
                                                        <select  id="examination" name="examination" >
                                                                <option value="Ordinary Level">Ordinary Level</option>
                                                                <option value="Advanced Level">Advanced Level</option>
                                                                <option value="AAT Accounting">AAT Accounting</option>
                                                        </select>
						      </div>
						    </div>
                        
                          
						    
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" name="signup" class="btn btn-success">Get Student List</button>
                        </div>
                    </fieldset>
                </form> 
                </div>
            </div>
            </div>
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
<?php 
mysqli_close($conn);
?>   
</body>
</html>
