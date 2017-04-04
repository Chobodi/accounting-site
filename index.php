<?php
require_once 'db/dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Site</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/slidefolio.css" rel="stylesheet">
	<!-- Font Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
  </head>
  <body>
    <!-- Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
	  
        <h2><em>Accounting with Charaka</em></h2>
		 <ul class="list-inline">
              <li><i class="fa fa-facebook fa-3x"></i></li>
              <li><i class="fa fa-twitter fa-3x"></i></li>
              <li><i class="fa fa-google-plus fa-3x"></i></li>
			  <li><i class="fa fa-linkedin fa-3x"></i></li>
			   <li><i class="fa fa-pinterest fa-3x"></i></li>
            </ul>	
			<br>
			<a href="#about" class="btn btn-top">Learn More</a>
      </div>
    </div>
    <!-- /Header Area -->
	  <div id="nav">
    <!-- Navigation -->
    <nav class="navbar navbar-new" role="navigation">
   <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
	<a href="#" class="navbar-brand">Accounting with Charaka</a>
  </div>
  <div class="collapse navbar-collapse" id="mobilemenu">

	  <ul class="nav navbar-nav navbar-right text-center">
	    <li><a href="#top"><i class="service-icon fa fa-home"></i>&nbsp;Home</a></li>
        <li><a href="#about"><i class="service-icon fa fa-info"></i>&nbsp;About</a></li>
        <li><a href="#services"><i class="service-icon fa fa-laptop"></i>&nbsp;Services</a></li>
        <li><a href="#portfolio"><i class="service-icon fa fa-camera"></i>&nbsp;News</a></li>
        <li><a href="#login"><i class="service-icon fa fa-envelope"></i>&nbsp;Login</a></li>
        
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
    <!-- /Navigation -->
</div>	
    <!-- About -->
    <div id="about" class="about_us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2>About Us</h2>
            <p class="lead">About the teacher</p>
          </div>
        </div>
	  </div>
    </div>
    <!-- /About -->
    <!-- Services -->
    <div id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Our Services</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-paperclip fa-3x"></i>
              <h3>Past Papers</h3>
              <p>Past papers for the A/l accounting students can get from here freely.Answers also provided</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="service-item">
			<i class="service-icon fa fa-question fa-3x"></i>
              <h3>You can Ask Questions</h3>
              <p>Clarify all your doubts in accounting subject</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-globe fa-3x"></i>
              <h3>Latest News</h3>
              <p>I will upload latest news regard to the accounting all over the world</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Services -->

    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
    <div class="container">
    <div class="row push50">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Our Work</h2>
			<h3>
			<span class="filter label label-default" data-filter="all">News</span>
	<span class="filter label label-default" data-filter="latest">Latest</span>
	<span class="filter label label-default" data-filter="past">Past</span>
	
	</h3>
            <hr>
          </div>
        </div>
		
		<div class="row">
		
		<div class="gallery">
		
    		  <ul id="Grid" class="gcontainer">
                      <?php
                      $sql="SELECT MAX(image_id) FROM news";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
    
                        while ($row = $result->fetch_assoc()) {

                            $imageid = $row["MAX(image_id)"];
                        }
                    }
                    $imageid1=$imageid;
                    $imageid2=$imageid-1;
                    $imageid3=$imageid-2;
                    
                $sql = "SELECT * FROM news WHERE image_id=$imageid1 OR image_id=$imageid2 OR image_id=$imageid3";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo'<li class="col-md-4 col-sm-4 col-xs-12 mix all latest" data-cat="graphics">';
                        echo'<a data-toggle="modal" data-target="#" class="mix-cover">';
                        echo'<a href="newsImage.php?image_id=' . $row["image_id"] . '" target="_blank"><img class="horizontal" src="uploads/' . $row["url"] . '" alt="placeholder" width="300" height="300" ></a>';
                        
                        echo'</a>';
                        echo '</li>';
                    }
                }
                ?>                      
      		  <?php
                  $sql="SELECT MAX(image_id) FROM news";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
    
                        while ($row = $result->fetch_assoc()) {

                            $imgid = $row["MAX(image_id)"];
                        }
                    }
                    $imgid1=$imgid-3;
                    $imgid2=$imageid-4;
                    $imgid3=$imageid-5;
                  
                $sql = "SELECT * FROM news WHERE image_id=$imgid1 OR image_id=$imgid2 OR image_id=$imgid3 ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo'<li class="col-md-4 col-sm-4 col-xs-12 mix all pastt" data-cat="graphics">';
                        echo'<a data-toggle="modal" data-target="#" class="mix-cover">';
                        echo'<a href="newsImage.php?image_id=' . $row["image_id"] . '" target="_blank"><img class="horizontal" src="uploads/' . $row["url"] . '" alt="placeholder" width="300" height="300" ></a>';
                        
                        echo'</a>';
                        echo '</li>';
                    }
                }
                ?> 
    		    
    		  </ul>   
			  
	
		</div>	
      </div>
		</div>
      </div>
    <!-- /Portfolio -->
    
    <!-- Login -->
    <div id="login">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Login</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- login form starts -->
            <form action="loginaction.php" class="form-horizontal" method="post">
			<fieldset>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="name">User Name</label>
						      <div class="col-sm-8">
						        <input type="text"  placeholder="User Name" class="form-control" name="username" id="username">
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="email">Password</label>
						      <div class="col-sm-8">
                                                          <input type="password" placeholder="Password" class="form-control" name="password" id="username">
						      </div>
						    </div>
						    
						    
	              <div class="col-sm-offset-4 col-sm-8">
                          <button type="submit" name="login" class="btn btn-success">Login</button>
	    			      <button type="reset" class="btn btn-primary">Cancel</button>
	        			</div>
						</fieldset>
						</form>
				
				<!-- login form ends -->		
          </div>
        </div>
      </div>
    </div>
    
    <!-- /Login -->
    
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
           <h2>Thank You</h2>
           <em>Copyright &copy; Charaka 2017</em>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-scrolltofixed-min.js"></script>
	<script src="js/jquery.vegas.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/bootstrap.js"></script>
	
<!-- Slideshow Background  -->
	<script>
$.vegas('slideshow', {
  delay:5000,
  backgrounds:[
     { src:'./img/nature1.jpg', fade:2000 },
	 { src:'./img/bw1.jpg', fade:2000 },
    { src:'./img/portrait1.jpg', fade:2000 },
	 { src:'./img/portrait5.jpg', fade:2000 },
    { src:'./img/portrait2.jpg', fade:2000 },
    { src:'./img/portrait3.jpg', fade:2000 },
	 { src:'./img/portrait4.jpg', fade:2000 },
	   { src:'./img/forest.jpg', fade:2000 }
	   
  ]
})('overlay', {
src:'./img/overlay.png'
});

	</script>
<!-- /Slideshow Background -->

<!-- Mixitup : Grid -->
    <script>
		$(function(){
    $('#Grid').mixitup();
      });
    </script>
<!-- /Mixitup : Grid -->	

    <!-- Custom JavaScript for Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
<!-- Navbar -->
<script type="text/javascript">
$(document).ready(function() {
        $('#nav').scrollToFixed();
  });
    </script>
<!-- /Navbar-->
	
  </body>

</html>