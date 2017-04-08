<?php
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
                
                <a class="navbar-brand" href="index.php">Admin Panel</a>
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
                        <a href="settings.php" class="active-menu"><i class="fa fa-circle-o"></i>Settings</a>
                        <a href="viewStudents.php" class="active-menu"><i class="fa fa-circle-o"></i>View Students</a>
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
                            Settings....<small>Make Changes</small>
                        </h1>
                    </div>
                </div> 
                <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Change Username & Password 
                        </div>
                        
                        <div class="panel-footer">
                            <div class="form-group">
                                <fieldset>
                                <form action="saveSettings.php" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="username">New User Name</label>
                                            <div class="col-sm-8">
						<input type="text"  placeholder="User Name" class="form-control" name="username" id="username">
                                            </div>
                                    </div>
                                    <div class="form-group">
					<label class="col-sm-4 control-label" for="password">Current Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" placeholder="Current Password" class="form-control" name="cpassword" id="cpassword">
                                            </div>
                                    </div>
                                    <div class="form-group">
					<label class="col-sm-4 control-label" for="password">New Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" placeholder="New Password" class="form-control" name="npassword" id="npassword">
                                            </div>
                                    </div>
                                    <div class="form-group">
					<label class="col-sm-4 control-label" for="email">Confirm Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" placeholder="ReEnter Password" class="form-control" name="cnpassword" id="cnpassword">
                                            </div>
                                    </div>
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" name="save changes" class="btn btn-success">Save Changes</button>
                                    </div>
                                </form>
                                </fieldset>
                            </div>
                        </div>
                    </div>
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
    
  
</body>
</html>
