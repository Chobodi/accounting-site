<?php

require_once 'db/dbConnection.php';


$username = $_POST['username'];
$password=$_POST['npassword'];


$sql = "UPDATE admin SET username='" . $username . "', password='" . $password . "' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo '<script>
					window.location = "index.php#login";
				</script>';
} else {
    echo '<script>
        
					alert("Settings failed");
					window.location = "index.php#login";
				</script>';
    
}


mysqli_close($conn);
?>
