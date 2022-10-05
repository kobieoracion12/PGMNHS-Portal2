<?php

require_once("database.php");

if(isset($_POST['delete-faculty'])) {

  $no = $_POST['control'];
  
  $archive_account = mysqli_query($config, "UPDATE account_info SET acc_status = 'Disabled' WHERE control_no = '$no'");

  if($archive_account) {
    header("Location: ../admin/dist/faculty-accounts.php?success");
    //echo mysqli_error($config);
  }
  else {
    header("Location: ../admin/dist/faculty-accounts.php?failed");
    //echo mysqli_error($config);
  }
}

?>