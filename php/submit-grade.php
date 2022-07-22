<?php

include_once("database.php");

if(isset($_POST['submit_grade'])) {

	$id = $_POST['subject_id'];

	$grade = $_POST['subject_grade'];
	$remarks = $_POST['subject_remarks'];

	$cn = $_POST['current_cn'];
	$sy = $_POST['current_sy'];
	$gp = $_POST['current_gp'];

	$encode_grade = mysqli_query($config, "UPDATE student_grades SET completion_grade = '$grade', remarks = '$remarks' WHERE encode_id = '$id'");

	if($encode_grade) {
		header("Location: ../faculty/faculty-grading.php?cn=".$cn."&select_sy=".$sy."&select_gp=".$gp."");
	}
	else {
		echo mysqli_error($config);
	}

}

?>