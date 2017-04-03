<?php
require_once './db/dbConnection.php';
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
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
		<div class="col-md-12">
                        <h1 class="page-header">
                            Answers for the Questions
                        </h1>
                </div> 
                <div class="row">
                    <div class="col-md-5 col-md-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Questions 
                            </div>
                            <div class="panel-body">
                                <?php
                                        $sql = "SELECT * FROM question WHERE answer IS NULL;";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                             echo '<li><a id="editItem" href="submitanswer.php?id=' . $row["question_id"] . '">' . $row["question"] . '</a></li><br>';
                                            }
                                        }
                                ?>
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
