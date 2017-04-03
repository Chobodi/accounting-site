<?php

require_once 'db/dbConnection.php';

$id = $_POST['questionid'];
$answer = $_POST['answer'];




$sql = "UPDATE question SET answer='" . $answer . "' WHERE question_id='" . $id . "';";

if (mysqli_query($conn, $sql)) {
    echo '<script>
					window.location = "answer.php";
				</script>';
} else {
    echo '<script>
        
					alert("Answer Submition failed");
					window.location = "answer.php";
				</script>';
    
}



mysqli_close($conn);
?>
