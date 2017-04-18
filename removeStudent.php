<?php

require_once 'db/dbConnection.php';
$id=$_GET['id'];
//echo $id;
$sql = "DELETE FROM users WHERE id='" . $id . "';";
$result = $conn->query($sql);

if (mysqli_query($conn, $sql)) {
    echo '<script>
					window.location = "index.php#login";
				</script>';
} else {
    echo '<script>
        
					
					window.location = "index.php#login";
				</script>';
    
}


mysqli_close($conn);
?>
