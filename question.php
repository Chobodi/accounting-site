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
        $year = $row["year"];
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
                
                <a class="navbar-brand" href="index.php"><?php echo "$name";?></a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
		<div class="col-md-12">
                        <h1 class="page-header">
                            Ask Question
                        </h1>
                </div> 
                <div class="row">
                    <div class="col-md-5 col-md-offset-3">
                       <form class="form-horizontal" >
                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="question">Question</label>
                                    <div class="col-sm-8">
                                        <textarea id="question" type="text"  placeholder="Place your question here" class="form-control" name="question" id="question" rows="4"></textarea>
                                    </div>
                            </div>
                            
                        </fieldset>
                       </form>
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" name="question" class="btn btn-success" onclick="submitQuestion()">Submit</button>
                            </div>        
                                <script>
                                    function submitQuestion() {


                                        var form = document.createElement("form");
                                        form.setAttribute("method", "post");
                                        form.setAttribute("hidden", "true");
                                        form.setAttribute("action", "submitquestion.php");




                                        var cid = document.createElement("input");
                                        cid.setAttribute("type", "hidden");
                                        cid.setAttribute("name", "userid");
                                        cid.setAttribute("value", <?php echo $userid ?>);


                                        form.appendChild(cid);
                                        
                                        form.appendChild(document.getElementById("question"));
                                        document.body.appendChild(form);
                                        form.submit();
                                    }


                                </script>
                            
                         
                    </div>
                </div>
                <div class="row">
                  <h4>
                    Questions and Answers
                  </h4>  
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table>
                            <tr>
                            <th>Question</th>
                            <th>Answer</th>
                            
                            </tr>
                            <?php
                                require_once 'db/dbConnection.php';

                                $sql = "SELECT * FROM question WHERE student_id='" . $userid . "';";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while ($row = $result->fetch_assoc()) { 
                                       echo'<tr>';
                                            echo'<td>' . $row["question"] . '</td>';
                                            echo'<td>' . $row["answer"] . '</td>';
                                            
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
    
  
</body>
</html>
