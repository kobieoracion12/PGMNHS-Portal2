<?php
  include_once("../php/data.php");
  include_once("../php/database.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Pedro Guevarra Memorial National Highschool</title>
  <link rel="icon" href="../assets/img/pgmnhs-logo.ico">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="../css/brands.css">
  <link rel="stylesheet" type="text/css" href="../css/solid.css">
  <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
</head>
<body>

<!-- Navigation -->
<header>
<!-- Top Navigation -->
<div class="p-2 text-center bg-success border-bottom"></div>

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

</header>



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
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</html>