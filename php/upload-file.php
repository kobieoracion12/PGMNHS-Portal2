<?php

include_once("database.php");
include_once("fetch-admin.php");

$target_dir = "../uploads/";
$filename = $_FILES['fileToUpload']['name'];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$size = $_FILES['fileToUpload']['size'];
$uploadOk = 1;

$file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file = substr($filename, 0, strrpos($filename, '.'));



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  header("Location: ../admin/dist/form-management.php?upload-failed");
  //echo mysqli_error($config);

// if everything is ok, try to upload file
} 

else {
	// Allow certain file formats
	if($file_type != "docx" && $file_type != "pdf" && $file_type != "xlsx"
	&& $file_type != "pptx" ) {
	  header("Location: ../admin/dist/form-management.php?unsupported-file");
	  //echo mysqli_error($config);
	  $uploadOk = 0;
	}

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

  	$dept = $_SESSION['department'];

  	$sql = "INSERT INTO school_documents (document_name, dept_origin, document_size) VALUES ('$filename', '$dept', '$size')";
	
		if(mysqli_query($config, $sql)) {
			header("Location: ../admin/dist/form-management.php?upload-success");
			//echo "MYSQLI ERROR: " . $config -> error;
		}
		else {
			//header("Location: ../admin/dist/form-management.php?upload-failed");
			echo "MYSQLI ERROR: " . $config -> error;
		}
	}
}
?>