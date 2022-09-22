<?php

include_once("database.php");

$fetch_files = "SELECT * FROM school_documents";
$result = mysqli_query($config, $fetch_files);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>