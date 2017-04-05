<?php

require_once 'db/dbConnection.php';
$id = $_GET['id'];

$sql = "SELECT * FROM question INNER JOIN users ON question.student_id=users.id WHERE question_id=" . $id . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $questionid = $row["question_id"];
        $name = $row["name"];
        $school = $row["school"];
        $examination = $row["examination"];
        $district = $row["district"];
        $question = $row["question"];
        
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
                        <a href="addNewStudent.php" class="active-menu"><i class="fa fa-sign-in"></i>Add Student</a>
                        <a href="settings.php" class="active-menu"><i class="fa fa-circle-o"></i>Settings</a>
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
                        <form action="#" class="form-horizontal" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="student name">Student Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="studentname" id="studentname" value="<?php echo $name ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="school">School</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="school" id="school"  value="<?php echo $school ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="district">District</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="district" id="district" value="<?php echo $district ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="examination">Examination</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="examination" id="examination" value="<?php echo $examination ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="question">Question</label>
                                    <div class="col-sm-8">
                                        <textArea type="text" class="form-control" name="qusetion" id="question" rows="2" disabled><?php echo $question ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="answer">Answer</label>
                                    <div class="col-sm-8">
                                        <textArea type="text" class="form-control" name="answer" id="answer" rows="3" ></textarea>
                                    </div>
                                </div>
                                
                            </fieldset>
                        </form> 
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" name="signup" class="btn btn-success"onclick="submitAnswer()">Save</button>
                        </div>
                        <script>
                                    function submitAnswer() {


                                        var form = document.createElement("form");
                                        form.setAttribute("method", "post");
                                        form.setAttribute("hidden", "true");
                                        form.setAttribute("action", "saveAnswer.php");




                                        var cid = document.createElement("input");
                                        cid.setAttribute("type", "hidden");
                                        cid.setAttribute("name", "questionid");
                                        cid.setAttribute("value", <?php echo $questionid ?>);


                                        form.appendChild(cid);
                                        
                                        form.appendChild(document.getElementById("answer"));
                                        document.body.appendChild(form);
                                        form.submit();
                                    }


                                </script>
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
