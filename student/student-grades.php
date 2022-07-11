<?php
  include_once("student-data.php");
  include_once("../php/database.php");

  if(isset($_SESSION['student_lrn'])) {
  }
  else {
    header("location: ../index.php?Login");
  }
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
          <a class="nav-link text-success" href="student-grades.php"><i class="fa-solid fa-award me-1"></i>Grades</a>
          <a class="nav-link" href="student-schedule.php"><i class="fa-solid fa-calendar fa-sm me-1"></i>Schedule</a>
          <a class="nav-link" href="student-download.php"><i class="fa-solid fa-file-arrow-down me-1"></i>Download</a>
          <a class="nav-link" href="student-request.php"><i class="fa-solid fa-clock-rotate-left me-1"></i>Requests</a>
        </div>

        <div class="col-md-6 col-sm-12 navbar-nav">
          <!-- Profile -->
          <li class="nav-item dropdown px-4 ms-md-auto ms-sm-0">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
                $lrn = $_SESSION["student_lrn"];
                $profile = mysqli_query($config, "SELECT student_picture from student_info WHERE student_lrn = $lrn");

                while($data = mysqli_fetch_array($profile)) {
                  echo '<img class="img-fluid rounded-circle" src="data:image/jpg;charset=utf8;base64,'.base64_encode($data['student_picture']).'"  width="22px">';
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
      <div class="row mt-3">
        <div class="col-12 ps-3 pe-3 d-flex justify-content-center">
          <select class="form-select w-75" aria-label="Default select example">
            <option selected>Select Grading Period</option>
            <option value="1">2022-2023: 1st Semester</option>
            <option value="2">2022-2023: 2nd Semester</option>
          </select>
        </div>
      </div>

      <!-- Grades -->
      <div class="row">
        <div class="col-12 p-md-5 pt-md-3 pb-md-0 pb-sm-0 p-sm-0 pt-sm-0">
          <div class="card border-0 m-md-5 mb-md-0 m-sm-0 mt-md-0">
            <div class="card-body p-md-5 pt-md-0 pb-md-0 m-md-5 m-sm-0">
              <div class="table-responsive">
                <table class="table align-middle">
                  <thead>
                    <tr class="text-muted">
                      <th scope="col">Subject</th>
                      <th class="text-center" scope="col">Equivalent</th>
                      <th class="text-center" scope="col">Completion</th>
                      <th class="text-center" scope="col">Remarks</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $sql = mysqli_query($config, "SELECT * FROM student_grades, subjects WHERE (student_grades.subject_id = subjects.subject_id)");

                      while($grades = mysqli_fetch_array($sql)) {

                    ?>
                    <tr>
                      <td class="p-4">
                        <h5><?php echo $grades["subject_code"]; ?></h5>
                        <p class="text-muted fw-light lh-1"><?php echo $grades["subject_desc"]; ?></p>
                      </td>
                      <td class="p-4 text-center"><?php echo $grades["completion_grade"]; ?></td>
                      <td class="p-4 text-center">--</td>
                      
                      <?php
                        if($grades["remarks"] == "Passed") {
                          echo '<td class="p-4 text-center text-success">Passed</td>';
                        }
                        else if ($grades["remarks"] == "Failed") {
                          echo '<td class="p-4 text-center text-danger">Failed</td>';
                        }
                        else if ($grades["remarks"] == "INC") {
                          echo '<td class="p-4 text-center text-warning">INC</td>';
                        }
                        else if ($grades["remarks"] == "DRP") {
                          echo '<td class="p-4 text-center text-dark">DRP</td>';
                        }
                        else {
                          echo '<td class="p-4 text-center">--</td>';
                        }

                      ?>
                    </tr>
                    <?php
                      }
                    ?>
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

