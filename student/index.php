<?php
  include_once("../php/data.php");
  include_once("../php/database.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student - Pedro Guevarra Memorial National Highschool</title>
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
  <div class="p-3 text-center bg-white border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-3 mb-md-0">
          <a href="index.php" class="ms-md-2">
            <img src="../assets/img/pgmnhs-logo.png" height="60px" />
          </a>
        </div>

        <!-- Search Bar -->
        <div class="col-md-4">
          <form class="d-flex input-group w-auto my-auto mb-3 mb-md-0 mt-2">
            <input autocomplete="off" type="search" class="form-control rounded" placeholder="Search" />
            <span class="input-group-text border-0 d-none d-lg-flex"><i class="fa-solid fa-magnifying-glass"></i></span>
          </form>
        </div>

        <div class="col-md-4 d-flex justify-content-center justify-content-md-end align-items-center">
          <div class="d-flex">

            <!-- Right Side -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">

                    <!-- Notification -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bell"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>

                    <!-- Profile -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php
                          $lrn = $_SESSION["student_lrn"];
                          $profile = mysqli_query($config, "SELECT student_picture from student_info WHERE student_lrn = $lrn");

                          while($data = mysqli_fetch_array($profile)) {
                            echo '<img class="img-fluid rounded-circle" src="data:image/jpg;charset=utf8;base64,'.base64_encode($data['student_picture']).'"  width="22px">';
                          }
                        ?>

                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="student-profile.php">View Profile</a></li>
                        <li><a class="dropdown-item" href="../php/change-password.php">Change Password</a></li>
                        <li><a class="dropdown-item text-danger" href="../php/logout.php">Logout</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Third Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container justify-content-center justify-content-md-between">
      <!-- Left links -->
      <ul class="navbar-nav flex-row">
        <li class="nav-item me-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link text-success" href="index.php"><i class="fa-solid fa-home fa-sm me-1"></i>Home</a>
        </li>

        <li class="nav-item me-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link" href="student-profile.php"><i class="fa-solid fa-user fa-sm me-1"></i>Profile</a>
        </li>
        <li class="nav-item me-2 ms-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link" href="student-grades.php"><i class="fa-solid fa-award me-1"></i>Grades</a>
        </li>
        <li class="nav-item me-2 ms-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link" href="student-schedule.php"><i class="fa-solid fa-calendar fa-sm me-1"></i>Schedule</a>
        </li>
        <li class="nav-item me-2 ms-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link" href="../php/download.php"><i class="fa-solid fa-file-arrow-down me-1"></i>Download</a>
        </li>
        <li class="nav-item me-2 ms-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link" href="student-request.php"><i class="fa-solid fa-clock-rotate-left me-1"></i>Requests</a>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
</header>

<!-- Carousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/img/1.jpg" class="d-block w-100" data-bs-interval="500">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/2.jpg" class="d-block w-100" data-bs-interval="500">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/3.jpg" class="d-block w-100" data-bs-interval="500">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>