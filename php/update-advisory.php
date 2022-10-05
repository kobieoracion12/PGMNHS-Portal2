<?php

include_once("database.php");

if(isset($_POST['update'])) {
    $no = $_POST['control'];
    $section = $_POST['section'];

    $sql = mysqli_query($config, "UPDATE section SET section_adviser = '$no' WHERE section_name = '$section'");

    if($sql) {
        header("Location: ../admin/dist/faculty-accounts.php?success");
    }
    else {
        header("Location: ../admin/dist/faculty-accounts.php?failed");
    }
}

?>