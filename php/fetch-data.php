<?php
session_start();

include_once "database.php";

if(isset($_SESSION['control_no'])) {
}
else {
header("location: ../index.php?Login");
}

$no = $_SESSION["control_no"];

$sql = mysqli_query($config, "SELECT * FROM account_info WHERE control_no = '$no'");

while($rows = mysqli_fetch_array($sql)) {
	$_SESSION['first'] = $rows['first_name'];
	$_SESSION['middle'] = $rows['middle_name'];
	$_SESSION['last'] = $rows['last_name'];
	$_SESSION['gender'] = $rows['gender'];
	$_SESSION['civil'] = $rows['civil_status'];
	$_SESSION['nationality'] = $rows['nationality'];
	$_SESSION['bday'] = $rows['birth_date'];
	$_SESSION['pob'] = $rows['birth_place'];
	$_SESSION['religion'] = $rows['religion'];
	$_SESSION['address'] = $rows['address'];
	$_SESSION['contact'] = $rows['contact_no'];
	$_SESSION['email'] = $rows['email_address'];
	$_SESSION['father'] = $rows['father_name'];
	$_SESSION['mother'] = $rows['mother_name'];
	$_SESSION['guardian'] = $rows['guardian_name'];
	$_SESSION['relation'] = $rows['guardian_relation'];
	$_SESSION['gnumber'] = $rows['guardian_number'];
	$_SESSION['profile'] = $rows['profile_picture'];

}
?>
