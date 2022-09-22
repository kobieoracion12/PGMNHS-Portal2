<?php

include_once("database.php");
include_once("fetch-admin.php");

if(isset($_POST['upload'])) {
	$filename = $_FILES['fileToUpload']['name'];

	$destination = '../uploads/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['fileToUpload']['tmp_name'];
	$size = $_FILES['fileToUpload']['size'];

	if(!in_array($extension, ['pdf', 'docx', 'xlsx', 'pptx'])) {
		header("Location: ../admin/dist/form-management.php?unsupported-file");
	}
	elseif ($_FILES['fileToUpload']['size'] > 1000000) {
		header("Location: ../admin/dist/form-management.php?unsupported-size");
	}
	else {
		if(move_uploaded_file($file, $destination)) {
			$dept = $_SESSION['department'];

		  	$sql = "INSERT INTO school_documents (document_name, dept_origin, document_size) VALUES ('$filename', '$dept', '$size')";
			
			if(mysqli_query($config, $sql)) {
				header("Location: ../admin/dist/form-management.php?upload-success");
				//echo "MYSQLI ERROR: " . $config -> error;
			}
			else {
				header("Location: ../admin/dist/form-management.php?upload-failed");
				//echo "MYSQLI ERROR: " . $config -> error;
			}
		}
		else {
			echo "MYSQLI ERROR: " . $config -> error;
		}
	}
}


?>