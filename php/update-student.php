<?php

session_start();
include_once("database.php");

$lrn = $_SESSION['student_lrn'];

if(isset($_POST['update'])) {
	$first = $_POST['first_name'];
	$middle = $_POST['middle_name'];
	$last = $_POST['last_name'];
	$gender = $_POST['gender'];
	$civil = $_POST['civil_status'];
	$nationality = $_POST['nationality'];
	$bday = $_POST['birth_date'];
	$pob = $_POST['birth_place'];
	$religion = $_POST['religion'];
	$address = $_POST['address'];
	$contact = $_POST['contact_no'];
	$email = $_POST['email_add'];
	$father = $_POST['father_name'];
	$mother = $_POST['mother_name'];
	$guardian = $_POST['guardian_name'];
	$relation = $_POST['guardian_relation'];
	$gnumber = $_POST['eme_contact'];

	$update = mysqli_query($config, "UPDATE student_info SET first_name = '$first', middle_name = '$middle', last_name = '$last', student_gender = '$gender', civil_status = '$civil', student_nationality = '$nationality', student_bday = '$bday', student_pob = '$pob', student_religion = '$religion', student_address = '$address', student_contact = '$contact', student_email = '$email', student_father = '$father', student_mother = '$mother', student_guardian = '$guardian', student_relation = '$relation', student_gnumber = '$gnumber' WHERE student_lrn = '$lrn'");

	if($update) {
		header("Location: ../student/student-profile.php?update-success");
		//echo mysqli_error($config);
	}
	else {
		header("Location: ../student/student-profile.php?update-failed");
		//echo mysqli_error($config);
	}
}

?>                
