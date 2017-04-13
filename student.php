<?php
session_start();
require_once 'db/dbConnection.php';

$sql = "SELECT * FROM users WHERE id='" . $_SESSION['id'] . "';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $userid = $row["id"];
        $name = $row["name"];
        $school= $row["school"];
        $examination = $row["examination"];
        $district = $row["district"];
        
    }
}
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
                
                <a class="navbar-brand" href="logout.php"><?php echo "$name";?></a>
            </div>

        </nav>   
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <br><br>
                    <li>
                      <a href="student.php" class="active-menu"><i class="fa fa-pagelines"></i>Question Papers</a>
                      <a href="question.php" class="active-menu"><i class="fa fa-question"></i>Ask Questions from the teacher</a>  
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
                            Uploaded Question Papers and Answers
                        </h1>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <table>
                            <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Paper</th>
                            </tr>
                            <?php
                                require_once 'db/dbConnection.php';

                                $sql = "SELECT * FROM papers WHERE category='" . $examination . "';";
                                $result = $conn->query($sql);
                               
                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while ($row = $result->fetch_assoc()) { 
                                       echo'<tr>';
                                            echo'<td>' . $row["name"] . '</td>';
                                            echo'<td>' . $row["description"] . '</td>';
                                            echo'<td><a href="uploads/papers/'.$row["url"].'">Download</a></td>';
                                    }
                                }
                            ?>
                            
                            </tr>
                        </table>
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
    
<?php mysqli_close($conn);?>   
</body>
</html>
