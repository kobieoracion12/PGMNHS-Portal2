<?php

include_once("database.php");

if(isset($_POST['update-subject'])) {
    $code = $_POST['subject_code'];
    $name = $_POST['subject_desc'];

    $sql = mysqli_query($config, "UPDATE subjects SET subject_desc = '$name' WHERE subject_code = '$code'");

    if($sql) {
        header("Location: ../admin/dist/manage-subjects.php?subject-updated");
    }
    else {
        //header("Location: ../admin/dist/manage-subjects.php?update-failed");
        echo mysqli_error($config);
    }

}

?>