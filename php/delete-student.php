<?php

require_once("database.php");

if(isset($_POST['delete'])) {

  $id = $_POST['delete_number'];
  
  $archive_account = mysqli_query($config, "UPDATE account_info SET acc_status = 'Disabled' WHERE control_no = '$id'");

  if($archive_account) {
    header("Location: ../admin/dist/student-accounts.php?student-Disables");
    //echo mysqli_error($config);
  }
  else {
    header("Location: ../admin/dist/student-accounts.php?archive-failed");
    //echo mysqli_error($config);
  }

}

?>