<?php

require_once("database.php");

if(isset($_POST['register'])) {
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

	$insert = mysqli_query($config, "INSERT INTO faculty_info (first_name, middle_name, last_name, gender, civil_status, nationality, birth_date, birth_place, religion, address, contact_no, email_address) VALUES ('$first', '$middle', '$last', '$gender', '$civil', '$nationality', '$bday', '$pob', '$religion', '$address', '$contact', '$email')");

	if($insert) {

		$employee_no = mysqli_insert_id($config);
		$encrypt = password_hash($employee_no, PASSWORD_DEFAULT);
		$status = "Active";
		$privilege = "Faculty";

		$generate_account = mysqli_query($config, "INSERT INTO faculty_accounts (employee_no, employee_password, account_status, account_priv) VALUES ('$employee_no', '$encrypt', '$status', '$privilege')");

		if($generate_account) {
			header("Location: ../admin/admin-records.php?success");
			//echo "Caught an error: " . $config -> error;
		}
		else {
			header("Location: ../admin/admin-records.php?account-error");
			//echo "Caught an error: " . $config -> error;
		}
		
	}
	else {
		header("Location: ../admin/admin-records.php?info-error");
		//echo "Caught an error: " . $config -> error;
	}
}

else {
	header("Location: ../admin/admin-records.php?failed");
	exit();
}

exit();

?>