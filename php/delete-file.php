<?php

require_once("database.php");

if(isset($_POST['delete'])) {

  $no = $_POST['delete_number'];
  
  $sql = mysqli_query($config, "DELETE FROM school_documents WHERE document_no = '$no'");

  if($sql) {
    header("Location: ../admin/dist/form-management.php?delete-success");
    //echo mysqli_error($config);
  }
  else {
    header("Location: ../admin/dist/form-management.php?delete-failed");
    //echo mysqli_error($config);
  }

}

?>