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
          <a href="../student/index.php" class="ms-md-2">
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
          <a class="nav-link" href="../student/index.php"><i class="fa-solid fa-home fa-sm me-1"></i>Home</a>
        </li>

        <li class="nav-item me-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link" href="../student/student-profile.php"><i class="fa-solid fa-user fa-sm me-1"></i>Profile</a>
        </li>
        <li class="nav-item me-2 ms-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link" href="../student/student-grades.php"><i class="fa-solid fa-award me-1"></i>Grades</a>
        </li>
        <li class="nav-item me-2 ms-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link text-success" href="../student/student-schedule.php"><i class="fa-solid fa-calendar fa-sm me-1"></i>Schedule</a>
        </li>
        <li class="nav-item me-2 ms-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link" href="../php/download.php"><i class="fa-solid fa-file-arrow-down me-1"></i>Download</a>
        </li>
        <li class="nav-item me-2 ms-2 me-lg-0 d-2 d-md-inline-block">
          <a class="nav-link" href="../student/student-request.php"><i class="fa-solid fa-clock-rotate-left me-1"></i>Requests</a>
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
</header>

<!-- Main Body -->
<div class="container-fluid">
  <div class="row">
    <div class="col mt-3 p-5 pt-0">

      <!-- Calendar -->
      <div class="row">
        <div class="col-12 p-md-5 pt-md-3 p-sm-0 pt-sm-0">
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
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>