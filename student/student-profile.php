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
          <a class="nav-link text-success" href="student-profile.php"><i class="fa-solid fa-user me-1"></i>Profile</a>
          <a class="nav-link" href="student-grades.php"><i class="fa-solid fa-award me-1"></i>Grades</a>
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
              <li><hr class="dropdown-divider"></li>
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

  <?php
    if(isset($_GET['update-success'])) {
      echo '
        <div class="alert alert-success alert-dismissible fade show mx-5  " role="alert">
          <p class="text-center mb-0">Information Updated!</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      ';
    }
    else if(isset($_GET['update-failed'])) {
      echo '
        <div class="alert alert-danger alert-dismissible fade show mx-5" role="alert">
          <p class="text-center mb-0">Update Failed!</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      ';
    }
  ?>

  <div class="row">
    <div class="col mt-4 p-5 pt-0">
      <div class="row">
        <div class="col-md-2 col-sm-12">
          <?php
            $lrn = $_SESSION["student_lrn"];
            $profile = mysqli_query($config, "SELECT student_picture from student_info WHERE student_lrn = $lrn");

            while($data = mysqli_fetch_array($profile)) {
              echo '<img class="img-thumbnail me-5" src="data:image/jpg;charset=utf8;base64,'.base64_encode($data['student_picture']).'">';
            }
          ?>

          <div class="row">
            <button type="button" class="btn btn-success mt-3 mb-5" data-bs-toggle="modal" data-bs-target="#editProfile"><i class="fa-solid fa-pen fa-sm me-2"></i>Edit Information</button>
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
                  <?php
                    echo $_SESSION['first'];
                    echo " ";
                    echo $_SESSION['middle'];
                    echo " ";
                    echo $_SESSION['last'];
                  ?>
                </div>
              </div>
            </li>
            
            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  LRN:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php echo $_SESSION['student_lrn']; ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Gender:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php echo $_SESSION['gender']; ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Civil Status:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php echo $_SESSION['civil']; ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Nationality:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php echo $_SESSION['nationality']; ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Date of Birth:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php echo $_SESSION['bday'] = date("F j, Y"); ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Place of Birth:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php echo $_SESSION['pob']; ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Religion:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php echo $_SESSION['religion']; ?>
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
                  <?php echo $_SESSION['address']; ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Contact No.:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php echo $_SESSION['contact']; ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Email Address:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php echo $_SESSION['email']; ?>
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

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php 
                    if($_SESSION['father'] == null) {
                      echo "<div class='fst-italic'>N/A</div>";
                    }
                    else {
                      echo $_SESSION['father']; 
                    }
                  ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Mother's Name:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php 
                    if($_SESSION['mother'] == null) {
                      echo "<div class='fst-italic'>N/A</div>";
                    }
                    else {
                      echo $_SESSION['mother']; 
                    }
                  ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Guardian's Name:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php 
                    if($_SESSION['guardian'] == null) {
                      echo "<div class='fst-italic'>N/A</div>";
                    }
                    else {
                      echo $_SESSION['guardian']; 
                    }
                  ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Guardian's Relation:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php 
                    if($_SESSION['relation'] == null) {
                      echo "<div class='fst-italic'>N/A</div>";
                    }
                    else {
                      echo $_SESSION['relation']; 
                    }
                  ?>
                </div>
              </div>
            </li>

            <li class="list-group-item border-start-0 border-end-0 border-top-0 p-4">
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  Guardian's Contact No.:
                </div>

                <div class="col-md-8 col-sm-12 fw-bold">
                  <?php 
                    if($_SESSION['gnumber'] == null) {
                      echo "<div class='fst-italic'>N/A</div>";
                    }
                    else {
                      echo $_SESSION['gnumber']; 
                    }
                  ?>
                </div>
              </div>
            </li>
          </ul>
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


<!-- Edit Modal -->
<form action="../php/update-student.php" method="post">
  <div class="modal fade" id="editProfile" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addUserModal">Edit Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-body p-md-4 p-sm-0">
          <div class="container-fluid">
            <div class="row">
              <h5 class="mb-4 text-success fw-bold">Student Information</h5>
            </div>

            <div class="row">
              <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
                <label class="ms-2 mb-1">First Name</label>
                <input class="form-control mb-3" type="text" name="first_name" value="<?php echo $_SESSION['first']?>" required>

                <label class="ms-2 mb-1">Gender</label>
                <select class="form-select mb-3" name="gender">
                  <option value="<?php echo $_SESSION['gender']?>" selected><?php echo $_SESSION['gender'] ?></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>

                <label class="ms-2 mb-1">Religion</label>
                <select class="form-select mb-3" name="religion">
                  <option value="<?php echo $_SESSION['religion']?>" selected><?php echo $_SESSION['religion'] ?></option>

                  <option value="Catholic">Catholic</option>
                  <option value="Other Christians">Other Christians (Aglipayan, Born Again, etc.)</option>
                  <option value="Protestant">Protestant</option>
                  <option value="Islam">Islam</option>
                  <option value="Tribal Religion">Tribal Religion</option>
                  <option value="None">None</option>
                </select>

                <label class="ms-2 mb-1">Address</label>
                <input class="form-control mb-3" type="text" name="address" value="<?php echo $_SESSION['address']?>" required>

                <label class="ms-2 mb-1">Student Photo (2x2)</label>
                <input class="form-control" type="file" id="student_photo">
              </div>

              <div class="col-md-4">
                <label class="ms-2 mb-1">Middle Name</label>
                <input class="form-control mb-3" type="text" name="middle_name" value="<?php echo $_SESSION['middle']?>">

                <label class="ms-2 mb-1">Date of Birth</label>
                <input class="form-control mb-3" type="date" name="birth_date" value="<?php echo strftime('%Y-%m-%d', strtotime($_SESSION['bday']));?>">

                <label class="ms-2 mb-1">Civil Status</label>
                <select class="form-select mb-3" name="civil_status">
                  <option value="<?php echo $_SESSION['civil']?>" selected><?php echo $_SESSION['civil'] ?></option>

                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                </select>

                <label class="ms-2 mb-1">Contact Number</label>
                <input class="form-control mb-3" type="text" name="contact_no"  value="<?php echo $_SESSION['contact']?>" required>
              </div>

              <div class="col-md-4">
                <label class="ms-2 mb-1">Last Name</label>
                <input class="form-control mb-3" type="text" name="last_name" value="<?php echo $_SESSION['last']?>" required>

                <label class="ms-2 mb-1">Place of Birth</label>
                <input class="form-control mb-3" type="text" name="birth_place" value="<?php echo $_SESSION['pob']?>" required>

                <label class="ms-2 mb-1">Nationality</label>
                <input class="form-control mb-3" type="text" name="nationality"  value="<?php echo $_SESSION['nationality']?>" required>

                <label class="ms-2 mb-1">Email Address</label>
                <input class="form-control mb-3" type="text" name="email_add" value="<?php echo $_SESSION['email']?>" required>
              </div>
            </div>

            <div class="row">
              <h5 class="my-4 mt-5 text-success fw-bold">Parent's Information</h5>
            </div>

            <div class="row">
              <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
                <label class="ms-2 mb-1">Father's Name</label>
                <input class="form-control mb-3" type="text" name="father_name" value="<?php echo $_SESSION['father']?>">

                <label class="ms-2 mb-1">Emergency Contact No.</label>
                <input class="form-control mb-3" type="text" name="eme_contact" value="<?php echo $_SESSION['gnumber']?>">
              </div>

              <div class="col-md-4">
                <label class="ms-2 mb-1">Mothers's Name</label>
                <input class="form-control mb-3" type="text" name="mother_name" value="<?php echo $_SESSION['mother']?>">

                <label class="ms-2 mb-1">Guardian's Relation</label>
                <input class="form-control mb-3" type="text" name="guardian_relation" value="<?php echo $_SESSION['relation']?>">
              </div>

              <div class="col-md-4">
                <label class="ms-2 mb-1">Guardian's Name</label>
                <input class="form-control mb-3" type="text" name="guardian_name" value="<?php echo $_SESSION['guardian']?>">
              </div>
            </div>              
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success" name="update">Update Information</button>
        </div>
      </div>
    </div>
  </div>
</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>

