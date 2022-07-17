<?php

require_once("database.php");

if(isset($_POST['delete'])) {

  $id = $_POST['delete_id'];
  
  $archive_account = mysqli_query($config, "UPDATE faculty_accounts SET account_status = 'Archive' WHERE employee_no = '$id'");

  if($archive_account) {
    header("Location: ../admin/admin-records.php?student-archieved");
    //echo mysqli_error($config);
  }
  else {
    header("Location: ../admin/admin-records.php.php?archive-failed");
    //echo mysqli_error($config);
  }

}

?>