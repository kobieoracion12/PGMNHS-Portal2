<?php
  include_once("../php/data.php");
  include_once("../php/database.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Classes - Pedro Guevarra Memorial National Highschool</title>
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
          <a class="nav-link" href="faculty-students.php"><i class="fa-solid fa-users fa-sm me-1"></i>Students</a>
          <a class="nav-link text-success" href="faculty-class.php"><i class="fa-solid fa-chalkboard fa-sm me-1"></i></i>Classes</a>
          <a class="nav-link" href="faculty-schedule.php"><i class="fa-solid fa-calendar fa-sm me-1"></i>Schedule</a>
          <a class="nav-link" href="faculty-subjects.php"><i class="fa-solid fa-book fa-sm me-1"></i>Subjects</a>
        </div>

        <div class="col-md-6 col-sm-12 navbar-nav">
          <!-- Profile -->
          <li class="nav-item dropdown px-4 ms-md-auto ms-sm-0">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
                $lrn = $_SESSION["student_lrn"];
                $profile = mysqli_query($config, "SELECT student_picture FROM student_info WHERE student_lrn = $lrn");

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
              <li><a class="dropdown-item text-danger" href="../php/logout.php">Logout</a></li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </nav>

  <hr class="text-muted">
</header>

<body>

<div class="container-fluid">
  <div class="row">
    <nav>
      <!-- Tab Header -->
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link fw-bold text-success active" id="nav-upcoming-tab" data-bs-toggle="tab" data-bs-target="#nav-upcoming" type="button" role="tab" aria-controls="nav-upcoming" aria-selected="true">Upcoming Class</button>

        <button class="nav-link text-decoration-none text-muted" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="false">All Classes</button>
      </div>
    </nav>

    <!-- Tab Body -->
    <div class="tab-content" id="nav-tabContent">

      <!-- Upcoming Class -->
      <div class="tab-pane fade show active m-md-4 p-md-3 pt-md-0 mt-md-3" id="nav-upcoming" role="tabpanel" aria-labelledby="nav-upcoming-tab">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Scheduled Time</th>
              <th scope="col">Subject</th>
              <th scope="col" class="text-center">Section</th>
              <th scope="col" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="p-4 text-start" scope="row">
                <div class="row lh-1">
                  <p class="fs-5 mb-2 fw-bold">Today 8:00 AM</p>
                  <small class="text-muted fw-light">PCT July 6 08:00 AM</small>
                </div>
              </th>

              <td class="p-4 ps-2 text-start">
                <div class="row mt-1 lh-1">
                  <p class="fs-6 mb-2 fw-bold">PGMNHS-FILIPINO-101</p>
                  <small class="text-muted fw-light">Current Topic Here</small>
                </div>
              </td>

              <td class="p-4 text-center">
                <p class="m-2 mt-3 ms-0 me-0">Grade 10 Kamatoy</p>
              </td>

              <td class="text-center">
                <div class="col-12">
                  <button class="btn btn-primary m-4 ms-0 me-0"><i class="fa-solid fa-eye"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- All Class -->
      <div class="tab-pane fade m-md-4 p-md-3 pt-md-0 mt-md-3" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Scheduled Time</th>
              <th scope="col">Subject</th>
              <th scope="col" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = mysqli_query($config, "SELECT * FROM subjects");

              while($all_class = mysqli_fetch_array($sql)) {
            ?>
            <tr>
              <th class="p-4 text-start" scope="row">
                <div class="row lh-1">
                  <p class="fs-5 mb-2 fw-bold">Monday - Friday</p>
                  <small class="text-muted fw-light">PCT MTWThF</small>
                </div>
              </th>

              <td class="p-4 ps-2 text-start">
                <div class="row mt-1 lh-1">
                  <p class="fs-6 mb-2 fw-bold"><?php echo $all_class['subject_code'] ?></p>
                  <small class="text-muted fw-light"><?php echo $all_class['subject_desc'] ?></small>
                </div>
              </td>

              <td class="text-center">
                <div class="col-12">
                  <button class="btn btn-primary m-4 ms-0 me-0"><i class="fa-solid fa-eye"></i></button>
                </div>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
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

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>