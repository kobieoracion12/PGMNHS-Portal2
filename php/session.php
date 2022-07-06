<?php
session_start();

if(isset($_SESSION['student_lrn'])) {
	

}else {
	header("location: ../index.php?Login");
}
?>