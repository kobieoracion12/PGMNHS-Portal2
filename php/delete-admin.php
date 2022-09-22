<?php

require_once("database.php");

if(isset($_POST['delete'])) {

  $id = $_POST['control_no'];
  
  $archive_account = mysqli_query($config, "UPDATE account_info SET acc_status = 'Disabled' WHERE control_no = '$id'");

  if($archive_account) {
    header("Location: ../admin/dist/admin-accounts.php?account-deleted");
    //echo mysqli_error($config);
  }
  else {
    header("Location: ../admin/dist/admin-accounts.php?delete-failed");
    //echo mysqli_error($config);
  }

}

?>