<?php
session_start();
unset($_SESSION["control_no"]);
header("Location: ../index.php");
?>