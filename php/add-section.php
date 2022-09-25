<?php

include_once("database.php");

if(isset($_POST['add-section'])) {
    $grade = $_POST['grade_level'];
    $name = $_POST['section_name'];
    $number = $_POST['enrolled_students'];
    $adviser = $_POST['section_adviser'];

    $sql = mysqli_query($config, "INSERT INTO section (year_code, section_name, enrolled_students, section_adviser) VALUES ('$grade', '$name', '$number', '$adviser')");
    if($sql) {
        header("Location: ../admin/dist/manage-sections.php?section-added");
    }
    else {
        header("Location: ../admin/dist/manage-sections.php?insert-failed");
        ///echo mysqli_error($config);
    }

}

?>