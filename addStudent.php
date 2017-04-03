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
   
   <style>
       table{
           font-family: arial,sans-serif;
           border-collapse: collapse;
           width: 100%;
       }
       td,th{
           border: 1px solid #dddddd;
           text-align: left;
           padding: 8px;
       }
       tr:nth-child(even){
           background-color: #dddddd;
       }
   </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.php">Admin Panel</a>
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
                        <a href="addStudent.php" class="active-menu"><i class="fa fa-question"></i>Add Student</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
		<div class="row">
                    <div class="col-md-12">
                      <!-- Sign Up -->
    <div id="signup" class="signup">
      <div class="container">
          <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Sign Up</h2>
            <hr>
          </div>
        <div class="col-md-5 col-md-offset-3">
      <!-- login form starts -->
            <form action="signup.php" class="form-horizontal" method="post">
                <fieldset>
                    <div class="form-group">
      <label class="col-sm-4 control-label" for="name">Name</label>
                            <div class="col-sm-8">
        <input type="text"  placeholder="Enter name" class="form-control" name="name" id="name">
                            </div>
                    </div>
                    <div class="form-group">
      <label class="col-sm-4 control-label" for="school">School</label>
                            <div class="col-sm-8">
        <input type="text"  placeholder="School" class="form-control" name="school" id="school">
                            </div>
                    </div>
                    <div class="form-group">
      <label class="col-sm-4 control-label" for="district">District</label>
                            <div class="col-sm-8">
        <input type="text"  placeholder="Your District" class="form-control" name="district" id="district">
                            </div>
                    </div>
                    <div class="form-group">
      <label class="col-sm-4 control-label" for="year">Year of A/l</label>
                            <div class="col-sm-8">
        <input type="text"  placeholder="Year of A/l" class="form-control" name="year" id="year">
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="username">User Name</label>
                            <div class="col-sm-8">
        <input type="text"  placeholder="Enter User Name" class="form-control" name="username" id="username">
                            </div>
                    </div>
                    
                    <div class="form-group">
      <label class="col-sm-4 control-label" for="password">Password</label>
                            <div class="col-sm-8">
                                <input type="password" placeholder="Password" class="form-control" name="password" id="password">
                            </div>
                    </div>
                    <div class="form-group">
      <label class="col-sm-4 control-label" for="password">Confirm Password</label>
                            <div class="col-sm-8">
                                <input type="password" placeholder="Confirm Password" class="form-control" name="cpassword" id="cpassword">
                            </div>
                    </div>    
                
              <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" name="signup" class="btn btn-success">Save</button>
                        
                    </div>
    </fieldset>
            </form> 
                  </div>
        </div>
        </div>
    </div>
    <!-- /Sign Up -->
                        
                    </div>
                </div> 
                
                
                
            </div>
         <!-- /. PAGE WRAPPER  -->
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
