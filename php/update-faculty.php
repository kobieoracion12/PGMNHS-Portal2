<?php

include_once("database.php");

if(isset($_POST['update'])) {
	$id = $_POST['employee_id'];
	$first = $_POST['edit_first'];
	$middle = $_POST['edit_middle'];
	$last = $_POST['edit_last'];
	$gender = $_POST['edit_gender'];
	$civil = $_POST['edit_civil'];
	$nationality = $_POST['edit_nationality'];
	$bday = $_POST['edit_bday'];
	$pob = $_POST['edit_pob'];
	$religion = $_POST['edit_religion'];
	$address = $_POST['edit_address'];
	$contact = $_POST['edit_contact'];
	$email = $_POST['edit_email'];

	$update = mysqli_query($config, "UPDATE faculty_info SET first_name = '$first', middle_name = '$middle', last_name = '$last', gender = '$gender', civil_status = '$civil', nationality = '$nationality', birth_date = '$bday', birth_place = '$pob', religion = '$religion', address = '$address', contact_no = '$contact', email_address = '$email' WHERE employee_no = '$id'");

	if($update) {
		header("Location: ../admin/admin-records.php?update-success");
		//echo mysqli_error($config);
	}
	else {
		header("Location: ../student/student-profile.php?update-failed");
		//echo mysqli_error($config);
	}
}

?>                
