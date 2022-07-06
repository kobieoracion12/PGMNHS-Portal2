<?php
include_once "session.php";
include_once "database.php";

$lrn = $_SESSION["student_lrn"];

$sql = mysqli_query($config, "SELECT * FROM account_info WHERE student_lrn = '$lrn'");

while($rows = mysqli_fetch_array($sql)) {
	$_SESSION['first'] = $rows['first_name'];
	$_SESSION['middle'] = $rows['middle_name'];
	$_SESSION['last'] = $rows['last_name'];
	$_SESSION['gender'] = $rows['student_gender'];
	$_SESSION['civil'] = $rows['civil_status'];
	$_SESSION['nationality'] = $rows['student_nationality'];
	$_SESSION['bday'] = $rows['student_bday'];
	$_SESSION['pob'] = $rows['student_pob'];
	$_SESSION['religion'] = $rows['student_religion'];
	$_SESSION['address'] = $rows['student_address'];
	$_SESSION['contact'] = $rows['student_contact'];
	$_SESSION['email'] = $rows['student_email'];
	$_SESSION['father'] = $rows['student_father'];
	$_SESSION['mother'] = $rows['student_mother'];
	$_SESSION['guardian'] = $rows['student_guardian'];
	$_SESSION['relation'] = $rows['student_relation'];
	$_SESSION['gnumber'] = $rows['student_gnumber'];
	$_SESSION['profile'] = $rows['student_picture'];

	#
}
?>
