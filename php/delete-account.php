<?php

require_once("database.php");

if(isset($_POST['delete-ffs'])) {

  $id = $_POST['delete_ffs'];
  
  $archive_account = mysqli_query($config, "UPDATE account_info SET acc_status = 'Disabled' WHERE control_no = '$id'");

  if($archive_account) {
    header("Location: ../faculty2/dist/faculty-students.php?account-deleted");
    //echo mysqli_error($config);
  }
  else {
    header("Location: ../faculty2/dist/faculty-students.php?delete-failed");
    //echo mysqli_error($config);
  }

}

?>