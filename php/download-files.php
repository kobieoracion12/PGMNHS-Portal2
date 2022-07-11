<?php

if(isset($_GET['file_id'])) {
	$id = $_GET['file_id'];

	$sql = "SELECT * FROM school_documents WHERE document_id = '$id'";
	$result = mysqli_query($config, $sql);

	$file = mysqli_fetch_array($result);
	$filepath = '../uploads/' . $file['name'];

	if(file_exists($filepath)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octent-stream');
		header('Content-Disposition: attachment; filename=' . basename($filepath));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . $filesize('../uploads/' . $file['name']));
		readfile('../uploads/' . $file['name']);

		$newCount = $file['download_count'] + 1;
		$updateQuery = "UPDATE school_documents SET download_count = '$newCount' WHERE document_id = '$document_id'";
		$update = mysqli_query($config, $updateQuery);

		if($update) {
			header("Location: ../admin/admin-forms.php?download-success");
		}
		else {
			header("Location: ../admin/admin-forms.php?download-failed");
		}
		exit;

	}
} 

?>