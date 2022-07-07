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
	$father = $_POST['father_name'];
	$mother = $_POST['mother_name'];
	$guardian = $_POST['guardian_name'];
	$relation = $_POST['guardian_relation'];
	$gnumber = $_POST['eme_contact'];

	$year = $_POST['year'];
	$section = $_POST['sections'];

	$insert = mysqli_query($config, "INSERT INTO student_info (first_name, middle_name, last_name, student_gender, civil_status, student_nationality, student_bday, student_pob, student_religion, student_address, student_contact, student_email, student_father, student_mother, student_guardian, student_relation, student_gnumber) VALUES ('$first', '$middle', '$last', '$gender', '$civil', '$nationality', '$bday', '$pob', '$religion', '$address', '$contact', '$email', '$father', '$mother', '$guardian', '$relation', '$gnumber')");

	if($insert) {

		$student_lrn = mysqli_insert_id($config);
		$encrypt = password_hash($student_lrn, PASSWORD_DEFAULT);
		$status = "Active";
		$privilege = "Student";

		$generate_account = mysqli_query($config, "INSERT INTO accounts (user_number, account_password, account_status, account_priv) VALUES ('$student_lrn', '$encrypt', '$status', '$privilege')");

		if($generate_account) {

			$generate_section = mysqli_query($config, "INSERT INTO student_sections (student_lrn, year_code, section_code) VALUES ('$student_lrn', '$year', '$section')");

			if($generate_section) {
				header("Location: ../faculty/faculty-students.php?success");
			}

			else {
				header("Location: ../faculty/faculty-students.php?section-error");
			}

		}
		else {
			header("Location: ../faculty/faculty-students.php?account-error");
			//echo "Caught an error: " . $config -> error;
		}
		
	}
	else {
		header("Location: ../faculty/faculty-students.php?info-error");
		//echo "Caught an error: " . $config -> error;
	}
}

else {
	header("Location: ../faculty/faculty-students.php?failed");
	exit();
}

exit();

?>