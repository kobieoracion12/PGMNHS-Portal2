<?php

include_once("database.php");

if(isset($_POST['submit-subject'])) {
    $code = $_POST['subject_code'];
    $name = $_POST['subject_name'];

    $get = strtoupper(substr($name, 0, 4));
    $new = "PGMNHS-" . $get . "-01";

    $sql = mysqli_query($config, "INSERT INTO subjects (subject_code, subject_desc) VALUES ('$new', '$name')");
    if($sql) {
        header("Location: ../admin/dist/manage-subjects.php?subject-added");
    }
    else {
        header("Location: ../admin/dist/manage-subjects.php?insert-failed");
        ///echo mysqli_error($config);
    }

}

?>