<?php

include_once("database.php");

if(isset($_POST['update-file'])) {
	$id = $_POST['file_number'];
	$name = $_POST['file_name'];

	$update = mysqli_query($config, "UPDATE school_documents SET document_name = '$name' WHERE document_no = '$id'");

	if($update) {
		header("Location: ../admin/dist/form-management.php?update-success");
	}
	else {
		header("Location: ../admin/dist/form-management.php?update-failed");
	}
}

?>