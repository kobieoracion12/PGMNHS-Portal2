<?php

require_once("database.php");

if(isset($_POST['delete'])) {

  $code = $_POST['sub_code'];
  $delete = mysqli_query($config, "DELETE FROM subjects WHERE subject_code = '$code'");

  if($delete) {
    header("Location: ../admin/dist/manage-subjects.php?subject-deleted");
    //echo $config -> error;
  }
  else {
    header("Location: ../admin/dist/manage-subjects.php?delete-failed");
    //echo $config -> error;
  }

}

?>