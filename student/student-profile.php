<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Profile - Pedro Guevarra Memorial National Highschool</title>
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
        <p class="text-white text-start ms-5 mb-0 lh-1"><i class="fa-solid fa-phone me-2"></i>+ 632 8735 6386</p>
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
                        <img src="../assets/img/kobie.jpg" class="img-fluid rounded-circle" width="22px">
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">View Profile</a></li>
                        <li><a class="dropdown-item" href="#">Change Password</a></li>
                        <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
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
          <a class="nav-link" href="index.php"><i class="fa-solid fa-home fa-sm me-1"></i>Home</a>
        </li>

        <li class="nav-item me-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link text-success" href="student-profile.php"><i class="fa-solid fa-user fa-sm me-1"></i>Profile</a>
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

<!-- Main Body -->
<div class="container-fluid">
  <div class="row">
    <div class="col mt-4 p-5 pt-0">
      <div class="row">
        <div class="col-md-2 col-sm-12">
          <img src="../assets/img/kobie.jpg" class="img-thumbnail me-5">

          <div class="row">
            <button class="btn btn-success mt-3 mb-5"><i class="fa-solid fa-pen fa-sm me-2"></i>Edit Information</button>
          </div>
        </div>

        <div class="col-md-10 col-sm-12">
          <ul class="list-group ms-3 me-3"> 
            <h5 class="text-success fw-bold ms-1 mb-3">Personal Details</h5>
            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Full Name:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  Kobie Oracion
                </div>
              </div>
            </li>
            
            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Student No.:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  0119-0233
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Gender:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  Male
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Civil Status:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  Married
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Nationality:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  Pilipino
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Date of Birth:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  July 12, 2000
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Place of Birth:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  Luisiana, Laguna
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Religion:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  Aglipayan
                </div>
              </div>
            </li>

            <!-- Contact Details -->
            <h5 class="text-success fw-bold ms-1 mb-3 mt-5">Contact Details</h5>
            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Address:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  Barangay Zone IV Luisiana, Laguna
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Contact No.:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  09760435424
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Email Address:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  kobie.oracion12@gmail.com
                </div>
              </div>
            </li>

            <!-- Family Details -->
            <h5 class="text-success fw-bold ms-1 mb-3 mt-5">Family Details</h5>
            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Father's Name:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold fst-italic">
                  N/A
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Mother's Name:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  Ma. Teresa R. Oracion
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Guardian's Name:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  Olivia O. Rapsing
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Guardian's Relation:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  Aunt
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Guardian's Contact No.:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  09658033142
                </div>
              </div>
            </li>
          </ul>
        </div>    
      </div>
    </div>
  </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>