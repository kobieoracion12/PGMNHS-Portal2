<?php
include_once("database.php");

if(isset($_POST['upload-file'])) {
	$folder_path = '../uploads/';

	$filename = basename($_FILES['myfile']['name']);
	$size = $_FILES['myfile']['size'];
	$newname = $folder_path . $filename;

	$filetype = pathinfo($newname, PATHINFO_EXTENSION);

	if($filetype == "pdf") {
		if(move_uploaded_file($_FILES['myfile']['tmp_name'], $newname)) {
			$filesql = "INSERT INTO school_documents (document_name, document_size) VALUES ('$filename', '$size')";
			$fileresult = mysqli_query($config, $filesql);

			if(isset($fileresult)) {
				header("Location: ../admin/admin-forms.php?upload-success");
			}
			else {
				header("Location: ../admin/admin-forms.php?upload-failed");
				//echo "MYSQLI ERROR: " .$config -> error;
			}
		}
		else {
			header("Location: ../admin/admin-forms.php?file-failed");
		}
	}
	else {
		header("Location: ../admin/admin-forms.php?unsupported-format");
	}
}

?>