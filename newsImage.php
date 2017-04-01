<?php
$imageid = $_GET['image_id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gallery</title>

        <link rel="stylesheet" type="text/css" href="CS/slide.css">
        <link rel="stylesheet" type="text/css" href="profcss/style_theme.css">
        <link rel="stylesheet" type="text/css" href="profcss/style.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

        <style>
            html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
        </style>

    </head>

    <body class="theme-15">

        <!--Navbar-->
        <div class="top">
            <ul class="navbar theme-d2 left-align large">

                <li><a href="index.php#portfolio" class="padding-large theme-d4"><i class="fa fa-home margin-right"></i>News</a></li>

            </ul>
        </div>

        <br><br><br><br>
        <div style="margin-left: 100px;"><h3>
                <?php
                require_once 'db/dbConnection.php';
                $sql = "SELECT * FROM news WHERE id=" . $imageid . ";";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                    }
                }
                ?>
            </h3>

        </div>
        <br><br>
        <div style="margin-left: 100px;">
            <div class="slideshow-container">

                <?php
                require_once 'db/dbConnection.php';

                $sql = "SELECT * FROM news WHERE image_id=" . $imageid . ";";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '
                    
                            
                    <img src="uploads/' . $row["url"] . '" style="width:50%; height:50vh">
                        
                </div>';
                    }
                }
                ?>
            </div>
            <br>

         <?php
            mysqli_close($conn);
            ?> 
        </div>
    </body>
</html>