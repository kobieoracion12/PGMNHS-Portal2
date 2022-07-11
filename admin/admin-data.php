<?php
session_start();

include_once "../php/database.php";

$employee = $_SESSION["employee_no"];

$sql = mysqli_query($config, "SELECT * FROM faculty_info WHERE employee_no = '$employee'");

while($rows = mysqli_fetch_array($sql)) {
	$_SESSION['first'] = $rows['first_name'];
	$_SESSION['middle'] = $rows['middle_name'];
	$_SESSION['last'] = $rows['last_name'];
	$_SESSION['gender'] = $rows['student_gender'];
	$_SESSION['civil'] = $rows['civil_status'];
	$_SESSION['nationality'] = $rows['nationality'];
	$_SESSION['bday'] = $rows['birth_date'];
	$_SESSION['pob'] = $rows['birth_place'];
	$_SESSION['religion'] = $rows['religion'];
	$_SESSION['address'] = $rows['address'];
	$_SESSION['contact'] = $rows['contact_no'];
	$_SESSION['email'] = $rows['email_address'];
}
?>
