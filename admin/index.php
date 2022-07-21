<?php
  include_once("../php/fetch-data.php");
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
  <link rel="stylesheet" type="text/css" href="../css/regular.css">
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
          <a class="nav-link text-success" href="index.php"><i class="fa-solid fa-home fa-sm me-1"></i>Home</a>

          <a class="nav-link" href="admin-records.php"><i class="fa-solid fa-book fa-sm me-1"></i></i>Records</a>

          <a class="nav-link" href="admin-forms.php"><i class="fa-solid fa-file-lines fa-sm me-1"></i></i>Form Management</a>

          <a class="nav-link" href="school-calendar.php"><i class="fa-solid fa-calendar fa-sm me-1"></i>School Calendar</a>
          <a class="nav-link" href="portal-settings.php"><i class="fa-solid fa-gear fa-sm me-1"></i>Portal Settings</a>
        </div>

        <div class="col-md-6 col-sm-12 navbar-nav">
          <!-- Profile -->
          <li class="nav-item dropdown px-4 ms-md-auto ms-sm-0">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-fluid rounded-circle" src="../assets/img/profile.jpg"  width="22px">
            </a>
            
            <ul class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="student-profile.php">View Profile</a></li>
              <li><a class="dropdown-item" href="../php/change-password.php">Change Password</a></li>
              <li><a class="dropdown-item" href="../php/settings.php">Settings</a></li>
              <li><hr class="text-muted dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="admin-logout.php">Logout</a></li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </nav>

  <hr class="text-muted">
</header>

<body>

<div class="container">
  <div class="row">

    <!-- Student -->
    <div class="col-md-4 col-sm-6 mb-2">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="row d-flex justify-content-center align-items-center p-4">

            <div class="col-md-6 col-sm-6 text-center text-success">
              <i class="fa-solid fa-users fa-2xl"></i>
              <p class="mt-2 my-0">Students</p>
            </div>

            <div class="col-md-6 col-sm-6 text-center text-muted">
              <h2 class="my-0">50,000</h2>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Teachers -->
    <div class="col-md-4 col-sm-6 mb-2">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="row d-flex justify-content-center align-items-center p-4">

            <div class="col-md-6 col-sm-6 text-center text-success">
              <i class="fa-solid fa-chalkboard-user fa-2xl"></i>
              <p class="mt-2 my-0">Teachers</p>
            </div>

            <div class="col-md-6 col-sm-6 text-center text-muted">
              <h2 class="my-0">10,000</h2>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Staff -->
    <div class="col-md-4 col-sm-12 mb-2">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="row d-flex justify-content-center align-items-center p-4">

            <div class="col-md-6 col-sm-6 text-center text-success">
              <i class="fa-solid fa-user-group fa-2xl"></i>
              <p class="mt-2 my-0">Staffs</p>
            </div>

            <div class="col-md-6 col-sm-6 text-center text-muted">
              <h2 class="my-0">10,000</h2>
            </div>
            
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Upcoming Classes -->
  <div class="row">
    <div class="col-md-6 col-sm-12">
      
    </div>

    <div class="col-md-6 col-sm-12">

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