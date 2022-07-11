<?php
session_start();
unset($_SESSION["employee_no"]);
header("Location: index.php");
?>