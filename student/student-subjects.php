<?php
  include_once("../php/fetch-data.php");
  include_once("../php/database.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Subjects - Pedro Guevarra Memorial National Highschool</title>
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
          <a class="nav-link" href="../student/index.php"><i class="fa-solid fa-home fa-sm me-1"></i>Home</a>
          <a class="nav-link" href="student-profile.php"><i class="fa-solid fa-user me-1"></i>Profile</a>
          <a class="nav-link text-success" href="student-subjects.php"><i class="fa-solid fa-book me-1"></i>Subjects</a>
          <a class="nav-link" href="student-grades.php?sy=0&gp=0"><i class="fa-solid fa-square-poll-vertical me-1"></i>Grades</a>
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
    
    <form action="#" method="post">
      <div class="col m-5 mt-3 p-5 pt-0 pb-md-0">
        
        <!-- Sort -->
        <div class="row">

          <div class="row mx-1 justify-content-end">
            <input type="hidden" id="grade_id">

            <!-- Sort -->
            <form action="faculty-student.php" method="get">
              <div class="row d-flex justify-content-end mt-3">
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
          </div>
        </div>

        <!-- Subject Table -->
        <div class="row mt-4">
          <div class="table-responsive">
            <table class="table table-striped" id="subject_table">
              <thead class="text-muted">
                <tr>
                  <th scope="col">Subject Code</th>
                  <th scope="col">Subject Name</th>
                  <th class="text-center" scope="col">Status</th>
                </tr>
              </thead>

              <tbody>
                <?php
                  $no = $_SESSION['control_no'];
                  $grade = $_SESSION['grade'];

                  $sql_subject = mysqli_query($config, "SELECT * FROM enrolled_subjects, subjects WHERE (enrolled_subjects.subject_code = subjects.subject_code) AND control_no = '$no' AND grading_code = '$grade'");

                  while($subject = mysqli_fetch_array($sql_subject)) {
                    
                ?>
                <tr>
                  <td class="p-3"><?php echo $subject['subject_code']; ?></td>

                  <td class="p-3 ps-2"><?php echo $subject['subject_desc']; ?></td>

                    <?php

                      $no = $_SESSION['control_no'];
                      $grade = $_SESSION['grade'];

                      $check_enroll = mysqli_query($config, "SELECT * FROM enrolled_subjects WHERE control_no = '$no' AND grading_code = '$grade'");

                      if(mysqli_num_rows($check_enroll) > 0) {
                        echo '
                          <td class="p-3 ps-2 fw-bold text-success text-center">
                            Enrolled
                          </td>
                        ';
                      }
                      else {
                        echo '
                          <td class="p-3 ps-2 fw-bold text-primary text-center">
                            Currently not Enrolled
                          </td>
                        ';
                      }
                    ?>

                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

        <?php

        ?>

        <div class="row mt-3">
          <div class="col-md-6 col-sm-12">
          </div>

          <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-end">
            <button class="btn btn-success w-50">Enroll Subjects</button>
          </div>
        </div>
      </div>
    </form>

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