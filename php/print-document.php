<?php
	
if(isset($_POST['print'])) {

	$no = $_POST['print-no'];
	$docu = $_POST['document'];
	
	switch($docu) {
		case "Good Moral":
			header("Location: ../forms/good-moral.php?no=$no");
			break;

		case "Walk-in Good Moral":
			header("Location: ../forms/walkin-good-moral.php?no=$no");
			break;
	}
	
}

?>