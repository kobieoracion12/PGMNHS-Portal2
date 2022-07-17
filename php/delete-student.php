<?php

require_once("database.php");

if(isset($_POST['delete'])) {

  $lrn = $_POST['lrn'];
  
  $archive_account = mysqli_query($config, "UPDATE student_accounts SET account_status = 'Archive' WHERE student_lrn = '$lrn'");

  if($archive_account) {
    header("Location: ../faculty/faculty-students.php?student-archieved");
    //echo mysqli_error($config);
  }
  else {
    header("Location: ../faculty/faculty-students.php?archive-failed");
    //echo mysqli_error($config);
  }

}

?>