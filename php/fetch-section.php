<?php 
  $sql_section = "SELECT section_code, section_name FROM sections";
  $section_results = $config -> query($sql_section);

  if($section_results -> num_rows > 0) {
    $sections = mysqli_fetch_all($section_results, MYSQLI_ASSOC);
  }

  $sql_year = "SELECT year_code, year_name FROM year_level";
  $year_results = $config -> query($sql_year);

  if($year_results -> num_rows > 0) {
    $years = mysqli_fetch_all($year_results, MYSQLI_ASSOC);
  }

?>