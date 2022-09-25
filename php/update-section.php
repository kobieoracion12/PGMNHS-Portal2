<?php

include_once("database.php");

if(isset($_POST['update'])) {
    $code = $_POST['code1'];
    $name = $_POST['name'];
    $adviser = $_POST['adviser'];

    $update = mysqli_query($config, "UPDATE section SET section_name = '$name', section_adviser = '$adviser' WHERE section_code = '$code'");

    if($update) {
        header("Location: ../admin/dist/manage-sections.php?update-success");
    }
    else {
        header("Location: ../admin/dist/manage-sections.php?update-failed");
    }
};

?>
