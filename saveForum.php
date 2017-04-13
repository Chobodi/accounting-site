<?php

require_once 'db/dbConnection.php';

$id = $_POST['forumid'];
$answer = $_POST['answer'];




$sql = "UPDATE forum SET answer1='" . $answer . "' WHERE forum_id='" . $id . "';";

if (mysqli_query($conn, $sql)) {
    echo '<script>
					window.location = "forumAnswer.php";
				</script>';
} else {
    echo '<script>
        
					alert("Answer Submition failed");
					window.location = "forumAnswer.php";
				</script>';
    
}



mysqli_close($conn);
?>
