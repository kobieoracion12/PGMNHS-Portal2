<?php
  include_once("../php/fetch-data.php");
  include_once("../php/database.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grades - Pedro Guevarra Memorial National Highschool</title>
  <link rel="icon" href="../assets/img/pgmnhs-logo.ico">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="../css/brands.css">
  <link rel="stylesheet" type="text/css" href="../css/solid.css">
</head>
<body>

<!-- Navigation -->
<header>

  <!-- Top Navigation -->
  <div class="p-3 text-center bg-success border-bottom">
    <div class="row">
      <div class="col">
        <p class="text-white text-start ms-5 mb-0 lh-1"><i class="fa-solid fa-phone me-2"></i>+ (049) 501-1047</p>
      </div>

      <div class="col">
        <a href="https://www.facebook.com/DepEdTayoPGMNHS301257" target="_blank" class="text-decoration-none">
          <i class="fa-brands fa-facebook d-flex justify-content-end text-white me-4 mt-2 fa-xl"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Second Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light m-3">
    <div class="container-fluid">
      <a href="index.php" class="ms-md-5">
        <img src="../assets/img/pgmnhs-logo.png" height="60px" />
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse text-center ms-md-5 ms-sm-0" id="navbarNavAltMarkup">
        <div class="col-md-6 col-sm-12 navbar-nav">
          <a class="nav-link" href="index.php"><i class="fa-solid fa-home fa-sm me-1"></i>Home</a>
          <a class="nav-link" href="student-profile.php"><i class="fa-solid fa-user me-1"></i>Profile</a>
          <a class="nav-link text-success" href="student-grades.php?sy=0&gp=0"><i class="fa-solid fa-award me-1"></i>Grades</a>
          <a class="nav-link" href="student-schedule.php"><i class="fa-solid fa-calendar fa-sm me-1"></i>Schedule</a>
          <a class="nav-link" href="student-download.php"><i class="fa-solid fa-file-arrow-down me-1"></i>Download</a>
        </div>

        <div class="col-md-6 col-sm-12 navbar-nav">
          <!-- Profile -->
          <li class="nav-item dropdown px-4 ms-md-auto ms-sm-0">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
                $no = $_SESSION["control_no"];
                $profile = mysqli_query($config, "SELECT profile_picture from account_info WHERE control_no = $no");

                while($data = mysqli_fetch_array($profile)) {
                  echo '<img class="img-fluid rounded-circle" src="data:image/jpg;charset=utf8;base64,'.base64_encode($data['profile_picture']).'"  width="22px">';
                }
              ?>

            </a>
            <ul class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="student-profile.php">View Profile</a></li>
              <li><a class="dropdown-item" href="../php/change-password.php">Change Password</a></li>
              <li><a class="dropdown-item" href="../php/settings.php">Settings</a></li>
              <li><hr class="text-muted dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="../php/student-logout.php">Logout</a></li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </nav>

  <hr class="text-muted">
</header>

<!-- Main Body -->
<div class="container-fluid">
  <div class="row">
    <div class="col mt-3 p-5 pt-0 pb-0">

      <!-- Sort -->
      <form action="student-grades.php" method="get">
        <div class="row d-flex justify-content-center mt-3">
          <select class="form-select w-25 me-2" name="sy" required>
            <option value="none" selected>Select School Year</option>

            <?php
                $sql_sy =  "SELECT sy_code, sy_desc FROM school_year";
                
                $sy_results = $config -> query($sql_sy);

                if($sy_results -> num_rows > 0) {
                  $sy = mysqli_fetch_all($sy_results, MYSQLI_ASSOC);
                }

                foreach ($sy as $sy) {
            ?>

            <option value=<?php echo $sy['sy_code'] ?>><?php echo $sy['sy_desc'] ?></option>

            <?php } ?>
          </select>

          <select class="form-select w-25 me-2" name="gp" required>
            <option value="none" selected>Select Grading Period</option>

            <?php
                $sql_grading =  "SELECT grading_code, grading_desc FROM grading_period";
                
                $grading_results = $config -> query($sql_grading);

                if($grading_results -> num_rows > 0) {
                  $grading = mysqli_fetch_all($grading_results, MYSQLI_ASSOC);
                }

                foreach ($grading as $grading) {
            ?>

            <option value=<?php echo $grading['grading_code'] ?>><?php echo $grading['grading_desc'] ?></option>

            <?php } ?>
          </select>

          <button type="submit" class="btn btn-primary" style="width:10%">Filter</button>
        </div>  
      </form>

      <!-- Grades -->
      <div class="row">
        <div class="col-12 p-md-5 pt-md-0 pb-md-0 pb-sm-0 p-sm-0 pt-sm-0">
          <div class="card border-0 m-md-1 mb-md-0 m-sm-0 mt-md-0">
            <div class="card-body p-md-5 pt-md-0 pb-md-0 m-md-5 m-sm-0">
              <div class="table-responsive">
                <table class="table align-middle table-striped">
                  <thead>
                    <tr class="text-muted">
                      <th scope="col">Learning Areas</th>
                      <th class="text-center" scope="col">Grade</th>
                      <th class="text-center" scope="col">Remarks</th>
                    </tr>
                  </thead>

                  <?php
                    $no = $_SESSION['control_no'];

                    $fetch_subject = mysqli_query($config, "SELECT * FROM student_grades, subjects WHERE (student_grades.subject_code = subjects.subject_code) AND sy_code = '{$_GET['sy']}' AND grading_code = '{$_GET['gp']}' AND control_no = '$no'");

                    while($subject = mysqli_fetch_array($fetch_subject)) {

                      $selected_subject = $subject['subject_code'];

                      $fetch_grade = mysqli_query($config, "SELECT completion_grade FROM student_grades WHERE subject_code = '$selected_subject' AND sy_code = '{$_GET['sy']}' AND grading_code = '{$_GET['gp']}' AND control_no = '$no'");

                      $fetch_remarks = mysqli_query($config, "SELECT remarks FROM student_grades WHERE subject_code = '$selected_subject' AND sy_code = '{$_GET['sy']}' AND grading_code = '{$_GET['gp']}' AND control_no = '$no'");

                      while($grades = mysqli_fetch_array($fetch_grade) AND $remarks = mysqli_fetch_array($fetch_remarks)) {

                  ?>
                  
                  <tr>
                    <td class="p-3 ms-3 fw-bold">
                      <?php 
                        echo $subject['subject_desc'];
                      ?>
                    </td>

                    <td class="p-3 text-center"><?php echo $grades['completion_grade'] ?></td>

                    <?php 
                      $check = $remarks['remarks'];

                      if($check == 'Passed') {
                        echo '
                          <td class="p-3 text-center fw-bold text-success">PASSED</td>
                        ';
                      }
                      elseif($check == 'Failed') {
                        echo '
                          <td class="p-3 text-center fw-bold text-danger">FAILED</td>
                        ';
                      }
                      elseif($check == 'Drop') {
                        echo '
                          <td class="p-3 text-center fw-bold text-secondary">DROP</td>
                        ';
                      }

                    ?>
                  </tr>

                  <?php } } ?>

                    <!--<tr>
                      <td class="p-3 ms-3 fw-bold">
                        <div class="row">
                          <p>MAPEH 10</p>
                          <p class="ms-3">Music 10</p>
                          <p class="ms-3">Arts 10</p>
                          <p class="ms-3">Physical Education 10</p>
                          <p class="ms-3">Health 10</p>
                        </div>
                      </td>

                      <td class="p-3 text-center">
                        <div class="row">
                          <p>75</p>
                          <p>75</p>
                          <p>75</p>
                          <p>75</p>
                          <p>75</p>
                        </div>
                      </td>

                      <td class="p-3 text-center fw-bold text-success">
                        <div class="row">
                          <p>Passed</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                        </div>
                      </td>
                    </tr>-->
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="d-flex flex-wrap justify-content-md-between align-items-center py-3 my-4 border-top p-5">
    <div class="col-4 mt-3">
      <p class="fw-normal text-muted" style="font-size: 10px;">
        Pedro Guevarra Memorial National Highschool Portal <br>
        All Rights Reserved 2022 ©
      </p>
    </div>

    <div class="col-4 mt-3 mb-0 text-center">
      <a href="index.php" class="ms-md-2">
        <img src="../assets/img/pgmnhs-logo.png" height="60px" />
      </a>
    </div>

    <div class="col-4 mt-3 text-end">
      <p class="fw-normal text-muted" style="font-size: 10px;">
        Visit us @ P. Guevara St. 4009
        <br> Santa Cruz, Laguna Philippines
      </p>
    </div>
  </footer>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>

