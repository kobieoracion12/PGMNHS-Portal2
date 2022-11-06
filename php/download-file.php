<?php

include_once("database.php");

if(isset($_GET['document_no'])) {
	$id = mysqli_real_escape_string($config, $_GET['document_no']);

	$sql = "SELECT * FROM school_documents WHERE document_no = $id";
	$result = mysqli_query($config, $sql);

	$file = mysqli_fetch_assoc($result);
	$filepath = '../uploads/' . $file['document_name'];

	if(file_exists($filepath)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . basename($filepath));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize('../uploads/' . $file['document_name']));
		readfile('../uploads/' . $file['document_name']);

		// Update Download Count
		$current = $sql['download_count'];
		$count = $current + 1;

		$updateQuery = mysqli_query($config, "UPDATE school_documents SET download_count = '$count' WHERE document_no = '$id'");

		mysqli_close($config);
	}
}

?>