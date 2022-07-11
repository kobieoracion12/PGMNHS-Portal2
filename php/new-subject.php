<?php

require_once("database.php");

if(isset($_POST['add_subject'])) {
	$subject_code = $_POST['subject_code'];
	$subject_name = $_POST['subject_name'];

	$insert = mysqli_query($config, "INSERT INTO subjects (subject_code, subject_desc) VALUES ('$subject_code', '$subject_name')");

	if($insert) {
		header("Location: ../faculty/faculty-subjects.php?subject-added");
		//echo $config -> error;
	}
	else {
		header("Location: ../faculty/faculty-subjects.php?insert-failed");
		//echo $config -> error;
	}
}

?>