<?php

require_once("database.php");

if(isset($_POST['delete'])) {

  $subject_code = $_POST['code'];
  $delete = mysqli_query($config, "DELETE FROM subjects WHERE subject_code = '$code'");

  if($delete) {
    header("Location: ../faculty/faculty-subjects.php?delete-success");
    //echo $config -> error;
  }
  else {
    header("Location: ../faculty/faculty-subjects.php?delete-failed");
    //echo $config -> error;
  }

}

?>