<?php

require_once("database.php");

if(isset($_POST['register'])) {
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
	$email = $_POST['emaiadd'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$guardian = $_POST['guardian'];
	$gnumber = $_POST['emergency'];

	$year = $_POST['grade_level'];
	$section = $_POST['section'];

	// Insert Standard Information 
	$insert = mysqli_query($config, "INSERT INTO account_info (first_name, middle_name, last_name, gender, civil_status, nationality, birth_date, birth_place, religion, my_address, contact_no, email_address, father_name, mother_name, guardian_name, guardian_number) VALUES ('$first', '$middle', '$last', '$gender', '$civil', '$nationality', '$bday', '$pob', '$religion', '$address', '$contact', '$email', '$father', '$mother', '$guardian', '$gnumber')");
	
	if($insert) {

		$sql = mysqli_query($config, "SELECT MAX(control_no) FROM account_info");
                                                                        
		while($last = mysqli_fetch_array($sql)) {
			$account = mysqli_insert_id($config);
			$last_code = $last[0];

			$control = $last_code + 1;
			$password = password_hash($control, PASSWORD_DEFAULT);
			$status = "Active";
			$privilege = "Student";

			// Generate Account
			$fk = mysqli_query($config, "SET FOREIGN_KEY_CHECKS = 0");
			if($fk) {

				$sql2 = mysqli_query($config, "SELECT MAX(control_no) FROM account_info");

				while($last2 = mysqli_fetch_array($sql2)) {
					$new_control = $last2[0] + 1;

					$generate = mysqli_query($config, "UPDATE account_info SET control_no = '$new_control', acc_password = '$new_control', acc_priv = '$privilege', acc_status = '$status' WHERE control_no = '$account'");
			
					if($generate) {

						$section = mysqli_query($config, "UPDATE account_info SET year_code = '$year', section_code = '$section' WHERE control_no = '$account'");

						if($section) {
							header("Location: ../admin/dist/student-accounts.php?student-added");
						}
						else {
							header("Location: ../admin/dist/student-accounts.php?section-failed");
						}
					}
					else {
						header("Location: ../admin/dist/student-accounts.php?generate-failed");
					}
				}
			}
		}
	}
	else {
		header("Location: ../admin/dist/student-accounts.php?insert-failed");
	}
		
}

?>