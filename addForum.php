<?php

require_once 'db/dbConnection.php';


$name = $_POST['name'];
$question = $_POST['question'];

$sql = "SELECT MAX(forum_id) FROM forum;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $forumid = $row["MAX(forum_id)"];
    }
}
// Output "no suggestion" if no hint was found or output correct values 
$forumid += 1;

$sql = "INSERT INTO forum(forum_id,student_name,question) VALUES('" . $forumid . "','" . $name . "','" . $question .  "');";

if (mysqli_query($conn, $sql)) {
    echo '<script>
					window.location = "index.php#forum";
				</script>';
} else {
    echo '<script>
        
					alert("Froum post failed");
					window.location = "index.php#forum";
				</script>';
    
}


mysqli_close($conn);
?>
