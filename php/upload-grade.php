<?php 

include_once("database.php");

if(isset($_POST['upload-grade'])) {
    $no = $_POST['control_no'];
    $sc = $_POST['sc'];
    $gp = $_POST['gp'];
    $subj = $_POST['subj'];
    $grade = $_POST['grade'];

    $sql = mysqli_query($config, "INSERT INTO student_grades SET completion_grade = '$grade' WHERE control_no = '$no' AND gc = '$gc' AND subject_code = '$subj'");

    if($sql) {
        header("Location: ../faculty2/dist/faculty-grading.php?success");
    }
    else {
        header("Location: ../faculty2/dist/faculty-grading.php?failed");
    }
}

?>