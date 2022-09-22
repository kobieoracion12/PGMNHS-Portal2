<?php 
  $sql_docu = "SELECT document_no, document_name FROM school_documents";
  $docu_results = $config -> query($sql_docu);

  if($docu_results -> num_rows > 0) {
    $document = mysqli_fetch_all($docu_results, MYSQLI_ASSOC);
  }

?>