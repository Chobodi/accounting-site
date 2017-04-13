<?php

require_once 'db/dbConnection.php';


$name = $_POST['name'];
$school=$_POST['school'];
$district = $_POST['district'];
$examination = $_POST['examination'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT MAX(id) FROM users;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $userid = $row["MAX(id)"];
    }
}
// Output "no suggestion" if no hint was found or output correct values 
$userid += 1;

$sql = "INSERT INTO users(id,name,district,school,examination,username,password) VALUES('" . $userid . "','" . $name . "','" . $district . "', '" . $school . "', '" . $examination . "', '" . $username . "', '" . $password . "');";

if (mysqli_query($conn, $sql)) {
    echo '<script>
					window.location = "index.php#login";
				</script>';
} else {
    echo '<script>
        
					alert("Sign Up failed");
					window.location = "index.php#login";
				</script>';
    
}


mysqli_close($conn);
?>
