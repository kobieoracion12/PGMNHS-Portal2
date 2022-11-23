<?php

include_once("database.php");

if(isset($_POST['update'])) {
	$no = $_POST['control_no'];
	$first = $_POST['fname'];
	$middle = $_POST['mname'];
	$last = $_POST['lname'];
	$gender = $_POST['gender'];
	$civil = $_POST['civil_stat'];
	$nationality = $_POST['nationality'];
	$bday = $_POST['bday'];
	$pob = $_POST['bplace'];
	$religion = $_POST['religion'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['emailadd'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$guardian = $_POST['guardian_name'];
	$gnumber = $_POST['guardian_number'];

	$update = mysqli_query($config, "UPDATE account_info SET first_name = '$first', middle_name = '$middle', last_name = '$last', gender = '$gender', civil_status = '$civil', nationality = '$nationality', birth_date = '$bday', birth_place = '$pob', religion = '$religion',my_address = '$address', contact_no = '$contact', email_address = '$email', father_name = '$father', mother_name = '$mother', guardian_name = '$guardian', guardian_number = '$gnumber' WHERE control_no = '$no'");

	if($update) {
		header("Location: ../admin/dist/student-accounts.php?update-success");
		//echo mysqli_error($config);
	}
	else {
		header("Location: ../admin/dist/student-accounts.php?update-failed");
		//echo mysqli_error($config);
	}
}

?>                
