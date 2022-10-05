<?php

require_once("database.php");

if(isset($_POST['delete'])) {

  $code = $_POST['sec_code'];
  
  $fk = mysqli_query($config, "SET FOREIGN_KEY_CHECKS = 0");

  if($fk) {
    
    $delete = mysqli_query($config, "DELETE FROM section WHERE section_code = '$code'");
    if($delete) {
        $fk2 = mysqli_query($config, "SET FOREIGN_KEY_CHECKS = 0");

        header("Location: ../admin/dist/manage-sections.php?section-deleted");
        //echo mysqli_error($config);
    }
    
  }
  else {
    //header("Location: ../admin/dist/manage-sections.php?delete-failed");
    echo mysqli_error($config);
  }

}

?>