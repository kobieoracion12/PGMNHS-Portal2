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

if(isset($_POST['update-faculty'])) {
	$no = $_POST['control_no2'];
	$first = $_POST['fname2'];
	$middle = $_POST['mname2'];
	$last = $_POST['lname2'];
	$gender = $_POST['gender2'];
	$civil = $_POST['civil_stat2'];
	$nationality = $_POST['nationality2'];
	$bday = $_POST['bday2'];
	$pob = $_POST['bplace2'];
	$address = $_POST['address2'];
	$contact = $_POST['contact2'];
	$email = $_POST['emaiadd2'];
	$father = $_POST['father2'];
	$mother = $_POST['mother2'];
	$guardian = $_POST['guardian2'];
	$gnumber = $_POST['emergency2'];

	$update = mysqli_query($config, "UPDATE account_info SET first_name = '$first', middle_name = '$middle', last_name = '$last', gender = '$gender', civil_status = '$civil', nationality = '$nationality', birth_date = '$bday', birth_place = '$pob', my_address = '$address', contact_no = '$contact', email_address = '$email', father_name = '$father', mother_name = '$mother', guardian_name = '$guardian', guardian_number = '$gnumber' WHERE control_no = '$no'");

	if($update) {
		header("Location: ../admin/dist/faculty-accounts.php?update-success");
		//echo mysqli_error($config);
	}
	else {
		header("Location: ../admin/dist/faculty-accounts.php?update-failed");
		//echo mysqli_error($config);
	}
}

?>                
