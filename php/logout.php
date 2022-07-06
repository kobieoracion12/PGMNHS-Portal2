<?php
session_start();
unset($_SESSION["student_lrn"]);
header("Location: ../index.php");
?>