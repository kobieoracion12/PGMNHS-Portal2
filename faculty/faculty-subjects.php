<?php
  include_once("../php/data.php");
  include_once("../php/database.php");
  include("../php/fetch-section.php");
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
  <link rel="stylesheet" type="text/css" href="../css/regular.css">
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
          <a class="nav-link" href="faculty-class.php"><i class="fa-solid fa-chalkboard fa-sm me-1"></i></i>Classes</a>
          <a class="nav-link" href="faculty-schedule.php"><i class="fa-solid fa-calendar fa-sm me-1"></i>Schedule</a>
          <a class="nav-link text-success" href="faculty-subjects.php"><i class="fa-solid fa-book fa-sm me-1"></i>Subjects</a>
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

<div class="col mt-3 p-5 pt-0">

  <!-- Main -->
  <div class="row p-md-4 p-sm-0">

    <!-- Create Subject -->
    <div class="col-md-4 col-sm-12 mb-3">
      <div class="card shadow-sm">
        <div class="card-header bg-white m-2">
          <h5>Create a New Subject</h5>
        </div>

        <div class="card-body m-2 mt-0">
          <form action="../php/new-subject.php" method="post">
            <div class="row p-3 pt-0">

              <script type="text/javascript">
                $("#subject_text").keypress(function(ev){
                  var value = "PGMHS-";
                  var tval = this.value;
                  var c = ev.charCode || ev.keyCode;
                  this.selectionStart = this.selectionEnd = this.value.length;
                  if (tval.length == value.length && c == 8){
                      ev.preventDefault();
                  }
                  this.value = value + tval.substring(value.length);
                });
              </script>

              <label>Subject Code</label>
              <input class="form-control mb-3" id="subject_text" type="text" name="subject-code" value="PGMHS-">

              <label>Subject Name</label>
              <input class="form-control mb-4" type="text" name="subject-name">

              <button class="btn btn-success" type="submit" name="add-subject">Add Subject</button>

            </div>

            <div class="row">
              
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- All Subject -->
    <div class="col-md-8 col-sm-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="row">
            <div class="col-12 p-md-5 pt-md-3 pb-md-0 p-sm-0 pt-sm-0">
              
              <!-- Table Header -->
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <h4 class="ms-2">All Subjects</h4>
                </div>

                <div class="col-md-8 col-sm-12 d-flex justify-content-end align-items-end">
                  <input class="form-control me-2" type="text" name="search" placeholder="Search...">

                  <button class="btn btn-primary me-2">Search</button>
                </div>
              </div>

              <!-- Main Table -->
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-striped mt-4">
                    <thead class="text-muted">
                      <tr>
                        <th scope="col">Subject Code</th>
                        <th scope="col">Subject Name</th>
                        <th class="text-center" scope="col">Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                        $sql_subject = mysqli_query($config, "SELECT * FROM subjects");

                        while($subject = mysqli_fetch_array($sql_subject)) {
                          
                      ?>
                      <tr>
                        <td class="p-3"><?php echo $subject['subject_code']; ?></td>

                        <td class="p-3 ps-2"><?php echo $subject['subject_desc']; ?></td>

                        <td class="text-center p-3">
                          <div class="col-12">
                            <a class="text-decoration-none text-secondary me-2" href="#">
                              <i class="fa-solid fa-eye"></i>
                            </a>

                            <a class="text-decoration-none text-success me-2" href="#">
                              <i class="fa-solid fa-pen"></i>
                            </a>

                            <a class="text-decoration-none text-danger" href="#">
                              <i class="fa-solid fa-trash"></i>
                            </a>
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

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>