<?php

require_once 'db/dbConnection.php';


$name = $_POST['papername'];
$description = $_POST['description'];

$sql = "SELECT MAX(paper_id) FROM papers;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $paperid = $row["MAX(paper_id)"];
    }
}
// Output "no suggestion" if no hint was found or output correct values 
$paperid += 1;


$target_dir = "uploads/papers/";
$target_file = $target_dir . basename($_FILES["paper"]["name"]);
$uploadOk = 1;
$FileType = pathinfo($target_file, PATHINFO_EXTENSION);
$target_file = $target_dir .'paper'.  $paperid . '.' . $FileType;

if ($uploadOk == 0) {
    echo '<script>
					alert("Paper uploading failed");
					window.location = "admin.php";
				</script>';
} else {
    if (move_uploaded_file($_FILES["paper"]["tmp_name"], $target_file)) {
        $newfilename = "paper" .$paperid . '.' . $FileType;

        $sql = "INSERT INTO papers(paper_id,name,description,url) VALUES('" . $paperid . "','" . $name . "','" . $description . "', '" . $newfilename . "');";

        if (mysqli_query($conn, $sql)) {
            echo '<script>
					alert("Sucessfully uploaded the paper");
					window.location = "admin.php";
				</script>';
        } else {
            echo '<script>
					alert("Paper uploading failed");
					window.location = "admin.php";
				</script>';
        }
    } else {
        echo '<script>
					alert("Paper uploading failed");
					window.location = "admin.php";
				</script>';
    }
}


mysqli_close($conn);
?>
