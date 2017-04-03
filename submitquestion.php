<?php

require_once 'db/dbConnection.php';

$id = $_POST['userid'];
$question = $_POST['question'];


$sql = "SELECT MAX(question_id) FROM question;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $questionid = $row["MAX(question_id)"];
    }
}
// Output "no suggestion" if no hint was found or output correct values 
$questionid += 1;


$sql = "INSERT INTO question(question_id,student_id,question) VALUES('" . $questionid . "','" . $id . "','" . $question . "');";

if (mysqli_query($conn, $sql)) {
    echo '<script>
					window.location = "question.php?id=' . $id . '";
				</script>';
} else {
    echo '<script>
        
					alert("Submition failed");
					window.location = "question.php?id=' . $id . '";
				</script>';
    
}



mysqli_close($conn);
?>
