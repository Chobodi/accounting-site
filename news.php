<?php
require_once 'db/dbConnection.php';

$sql = "SELECT MAX(image_id) FROM news;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $newpostid = $row["MAX(image_id)"];
    }
}
$newpostid += 1;

if(isset($_POST['btn-upload']))
{
    $folder="uploads/";
    $pic = rand(1,10)."-".$_FILES['pic']['name'];
    $pic_loc = $_FILES['pic']['tmp_name'];
     
    if(move_uploaded_file($pic_loc,$folder.$pic))
     {
        $newfilename = $pic;
        $sql = "INSERT INTO news(image_id,url,title) VALUES('" . $newpostid . "','" . $newfilename . "','News');";
        
        if (mysqli_query($conn, $sql)){
            ?><script>alert('successfully uploaded');</script><?php
        }
        else
        {
            ?><script>alert('error while uploading file');</script><?php
        }
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
                            Updates<small>Customize Gallery Items</small>
                        </h1>
                    </div>
                </div> 
                <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            News Feed 
                        </div>
                        
                        <div class="panel-footer">
                            <div class="form-group">
                                <form action=" " method="post" enctype="multipart/form-data">
                                    <label>Upload image</label>
                                    <input type="file" name="pic" id="UploadFileField"/>
                                    <button type="submit" name="btn-upload">Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-8 col-sm-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Uploaded Images 
                        </div>
                        <div class="panel-body">
                            <?php
                                $sql = "SELECT * FROM news;";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                            
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<a><img src="uploads/' . $row["url"] . '"  width="100" height="100"></a>';
                                    }
                                }
                            ?>
                                  
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
