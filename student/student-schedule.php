<?php
  include_once("../php/fetch-data.php");
  include_once("../php/database.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Schedule - Pedro Guevarra Memorial National Highschool</title>
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
          <a class="nav-link" href="student-subjects.php"><i class="fa-solid fa-book me-1"></i>Subjects</a>
          <a class="nav-link" href="student-grades.php?sy=0&gp=0"><i class="fa-solid fa-square-poll-vertical me-1"></i>Grades</a>
          <a class="nav-link text-success" href="student-schedule.php"><i class="fa-solid fa-calendar fa-sm me-1"></i>Schedule</a>
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
    <div class="col mt-3 p-5 pt-0">

      <!-- Calendar -->
      <div class="row">
        <div class="col-12 p-md-5 pt-md-3 pb-md-0 p-sm-0 pt-sm-0">
          <div class="table-responsive">
            <table class="table table-bordered align-middle">
              <thead>
                <tr class="text-muted">
                  <th class=" text-center col-2" scope="col">Time/Day</th>
                  <th class=" text-center col-2" scope="col">Monday</th>
                  <th class=" text-center col-2" scope="col">Tuesday</th>
                  <th class=" text-center col-2" scope="col">Wednesday</th>
                  <th class=" text-center col-2" scope="col">Thursday</th>
                  <th class=" text-center col-2" scope="col">Friday</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="p-4 text-center">7:00 - 8:00</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                </tr>

                <tr>
                  <td class="p-4 text-center">8:00 - 9:00</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                </tr>

                <tr>
                  <td class="p-4 text-center">9:00 - 10:00</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                </tr>

                <tr>
                  <td class="p-4 text-center">10:00 - 11:00</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                </tr>

                <tr>
                  <td class="p-4 text-center">11:00 - 12:00</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                </tr>

                <tr>
                  <td class="p-4 text-center">12:00 - 1:00</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                </tr>

                <tr>
                  <td class="p-4 text-center">1:00 - 2:00</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                </tr>

                <tr>
                  <td class="p-4 text-center">2:00 - 3:00</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                </tr>

                <tr>
                  <td class="p-4 text-center">3:00 - 4:00</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                </tr>

                <tr>
                  <td class="p-4 text-center">4:00 - 5:00</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                  <td class="p-4 text-center">--</td>
                </tr>
              </tbody>
            </table>
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